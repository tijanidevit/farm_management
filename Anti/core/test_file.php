<?php

if (isset($_POST['submit'])) {
	$file_name = $_FILES['file']['name'];
	$file_tmp = $_FILES['file']['tmp_name'];
	require_once('virustotal.class.php');

	/* Initialize the VirusTotalApi class. */
	$api = new VirusTotalAPIV2('ab426cc4557321a71835118f49c3a15fe75548d6cbdfb6e3468f8d0ab997f798');
	
	/* Upload and scan a local file. */
	$result = $api->scanFile($file_tmp);
	$scanId = $api->getScanID($result); /* Can be used to check for the report later on. */
	$api->displayResult($result);
}

/* Upload and scan a local file. */
// $result = $api->scanFile('football.png');
#$scanId = $api->getScanID($result); /* Can be used to check for the report later on. */
// $api->displayResult($result);

/* Get a file report. */
// $report = $api->getFileReport('Hash-of-a-file-to-check-for-a-report');
// $api->displayResult($report);
// print($api->getSubmissionDate($report) . '<br>');
// print($api->getReportPermalink($report, TRUE) . '<br>');

// /* Scan an URL. */
// $result = $api->scanURL('https://cocacola.com-free.best');
// $scanId = $api->getScanID($result); /* Can be used to check for the report later on. */
// $api->displayResult($result);


// /* Comment on a file. */
// $report = $api->makeComment('Hash-of-a-file-to-comment-on', 'Your-comment');
// $api->displayResult($report);

// /* Comment on an URL. */
// $report = $api->makeComment('URL-to-comment-on', 'Your-comment');
// $api->displayResult($report);
?>