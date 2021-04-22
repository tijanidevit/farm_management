<? include("config.php");
require_once "faucart.lib.php";
include("funzioni.php");


$obj=new sast1com();
$obj->connessione();
$dati=mysql_query("select * from configurazione where id='1'");
while($array=mysql_fetch_array($dati)){
     $tpl=$array[template];
          $tpl=str_replace("../","",$tpl);
}
?>
<?php
include("$tpl/index.php");
?>