<?php
/**
 * Implementation of the public VirusTotal API.
 *
 * @author Andreas Breitschopp (http://www.ab-weblog.com)
 * @copyright Andreas Breitschopp (http://www.ab-weblog.com)
 * @version 2.0
 */
class VirusTotalAPIV2 {
  const URL_API_BASIS = 'https://www.virustotal.com/vtapi/v2/';
  const URL_SCAN_FILE = 'file/scan';
  const URL_FILE_REPORT = 'file/report';
  const URL_SCAN_URL = 'url/scan';
  const URL_URL_REPORT = 'url/report';
  const URL_MAKE_COMMENT = 'comments/put';

  private $_key;

  public function __construct($key) {
    $this->_key = $key;
  }
  
  /**
   * Send and scan a file.
   *
   * @param string $filePath A relative path to the file.
   * @return object An object containing the scan ID for getting the report later on or a response code:
   * -4: file not found.
   * -3: public API request rate exceeded.
   * -2: resource is currently being analyzed.
   * -1: you do not have the required privileges (wrong API key?).
   */
  public function scanFile($filePath) {
    if (!file_exists($filePath)) {
      return array(
          'response_code' => -4
        );
    }
    
    $realPath = realpath($filePath);

    if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
      $pathInfo = pathinfo($realPath);
      $fileName = $pathInfo['basename'];
    
      $parameters = array(
          'file' => new CurlFile($realPath, mime_content_type($realPath), $fileName)
        );
    } else {
      // Due to a bug in some older curl versions
      // we only send the file without mime type or file name.
      $parameters = array(
          'file' => '@' . $realPath
        );
    }
    
    return $this->_doCall(VirusTotalAPIV2::URL_SCAN_FILE, $parameters);
  }
  
  /**
   * Retrieve a file scan report.
   *
   * @param string $resource A md5/sha1/sha256 hash (e. g. a scan ID) will retrieve the most recent report on a given sample. You may also specify a permalink identifier (sha256-timestamp as returned by the file upload API) to access a specific report.
   * @return object An object containing the scan report or a response code:
   * -3: public API request rate exceeded.
   * -2: resource is currently being analyzed.
   * -1: you do not have the required privileges (wrong API key?).
   *  0: no results for searched item.
   */
  public function getFileReport($resource) {
    $parameters = array(
        'resource' => $resource
      );

    return $this->_doCall(VirusTotalAPIV2::URL_FILE_REPORT, $parameters);
  }
  
  /**
   * Submit and scan an URL.
   *
   * @param string $URL The URL that should be scanned.
   * @return object An object containing the scan ID for getting the report later on or a response code:
   * -3: public API request rate exceeded.
   * -2: resource is currently being analyzed.
   * -1: you do not have the required privileges (wrong API key?).
   */
  public function scanURL($URL) {
    $parameters = array(
        'url' => $URL
      );

    return $this->_doCall(VirusTotalAPIV2::URL_SCAN_URL, $parameters);
  }

  /**
   * Retrieve a URL scan report.
   *
   * @param string $resource A URL will retrieve the most recent report on the given URL. You may also specify a permalink identifier (md5-timestamp as returned by the URL submission API) to access a specific report.
   * @param bool[optional] $scan Parameter that when set to true will automatically submit the URL for analysis if no report is found for it in VirusTotal's database.
   * @return object An object containing the scan report or the scan ID (in case a new scan was necessary) or a response code:
   * -3: public API request rate exceeded.
   * -2: resource is currently being analyzed.
   * -1: you do not have the required privileges (wrong API key?).
   *  0: no results for searched item.
   */
  public function getURLReport($resource, $scan = FALSE) {
    $parameters = array(
        'resource' => $resource,
        'scan' => (int)$scan
      );

    return $this->_doCall(VirusTotalAPIV2::URL_URL_REPORT, $parameters);
  }

  /**
   * Make comments on files.
   *
   * @param string $resource Either a md5/sha1/sha256 hash of the file you want to review or the URL itself that you want to comment on..
   * @param string $comment The actual review, you can tag it using the "#" twitter-like syntax (e.g. #disinfection #zbot) and reference users using the "@" syntax (e.g. @VirusTotalTeam).
   * @return object An object containing a response code:
   * -3: public API request rate exceeded.
   * -2: resource is currently being analyzed.
   * -1: you do not have the required privileges (wrong API key?).
   *  0: Other error.
   *  1: comment successfully posted.
   */
  public function makeComment($resource, $comment) {
    $parameters = array(
        'resource' => $resource,
        'comment' => $comment
      );

    return $this->_doCall(VirusTotalAPIV2::URL_MAKE_COMMENT, $parameters);
  }
  
  /**
   * Get the scan ID of a submission result.
   *
   * @param object $result The submission result containing the scan ID.
   * @return string The scan ID or a response code:
   * -1: not a valid scan result.
   */
  public function getScanID($result) {
    if (!isset($result->response_code)) return -1;
    if ($result->response_code != 1) return -1;
    if (!isset($result->scan_id)) return -1;
    
    return $result->scan_id;
  }
    
  /**
   * Display a scan or submission result.
   *
   * @param object $result The result that should be displayed.
   * @return int A response code:
   * -1: not a valid result.
   *  1: result successfully displayed.
   */
  public function displayResult($result) {
    if (!isset($result->response_code)) return -1;
    if ($result->response_code != 1) return -1;

    print('<pre>');
    print_r($result);
    print('</pre>');
    
    return 1;
  }
  
  /**
   * Get the submission date of a scan report.
   *
   * @param object $report The report thats submission date should be returned.
   * @return string The submission date of the report or a response code:
   * -1: not a valid scan report.
   *   */
  public function getSubmissionDate($report) {
    if (!isset($report->response_code)) return -1;
    if ($report->response_code != 1) return -1;
    if (!isset($report->scan_date)) return -1;
    
    return $report->scan_date;
  }
  
  /**
   * Get the total number of anti-virus checks performed.
   *
   * @param object $report The report thats total number of anti-virus checks should be returned.
   * @return int The total number of anti-virus checks of the report or a response code:
   * -1: not a valid scan report.
   */
  public function getTotalNumberOfChecks($report) {
    if (!isset($report->response_code)) return -1;
    if ($report->response_code != 1) return -1;
    if (!isset($report->total)) return -1;
    
    return $report->total;
  }
  
  /**
   * Get the number of anti-virus hits.
   *
   * @param object $report The report thats number of anti-virus hits should be returned.
   * @return int The number of anti-virus hits of the report or a response code:
   * -1: not a valid scan report.
   */
  public function getNumberHits($report) {
    if (!isset($report->response_code)) return -1;
    if ($report->response_code != 1) return -1;
    if (!isset($report->positives)) return -1;

    return $report->positives;
  }
  
  /**
   * Get the permalink of the report.
   *
   * @param object $report The report thats permalink should be returned.
   * @param bool[optional] $withDate If true (default) permalink returns exactly the current scan report, otherwise it returns always the most recent scan report.
   * @return string The permalink of the report or a response code:
   * -1: not a valid scan report.
   */
  public function getReportPermalink($report, $withDate = TRUE) {
    if (!isset($report->response_code)) return -1;
    if ($report->response_code != 1) return -1;
    if (!isset($report->permalink)) return -1;
    
    $permalink = $report->permalink;
    if ($withDate)
      return $permalink;
    else
      return substr($permalink, 0, strrpos($permalink, '/analysis/') + 10);
  }
  
  /**
  * Getter for the key.
  *
  * @return string The key.
  */
  public function getKey() {
      return $this->_key;
  }
  
  /**
  * Setter for the key.
  *
  * @param string $key The new key.
  */
  public function setKey($key) {
      $this->_key = $key;
  }
  
  private function _doCall($apiTarget, $parameters) {
    $postFields = array(
        'apikey' => $this->_key
      );
    $postFields = array_merge($parameters, $postFields);
    var_dump($postFields);
    $ch = curl_init(VirusTotalAPIV2::URL_API_BASIS . $apiTarget);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
    curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.15','Content-Type: multipart/form-data'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
    curl_close($ch);
    var_dump($response);
    if ($httpCode == '429') {
      return array(
          'response_code' => -3
        );
    } elseif ($httpCode == '403') {
      return array(
          'response_code' => -1
        );
    } else
      return json_decode($response);
  }
}
?>