<?php
session_start();
extract($_POST);
extract($_SESSION);
include("database.php");
if(isset($submit) && $submit=='Finish')
{
	$cn->query("delete from mst_useranswer where sess_id='" . session_id() ."'") ;
	unset($_SESSION['qn']);
	header("Location: index.php");
	exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Review Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
echo "<h1 class=head1> Review Test Question</h1>";

if(!isset($_SESSION['qn']))
{
		$_SESSION['qn']=0;
}
else if(isset($submit) && $submit=='Next Question' )
{
	$_SESSION['qn']=$_SESSION['qn']+1;
	
}

$rs=$cn->query("select * from mst_useranswer where sess_id='" . session_id() ."'");
$rs->data_seek($_SESSION['qn']);
$row= $rs->fetch_assoc();
echo "<form name=myfm method=post action=review.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION['qn']+1;
echo "<tR><td><span class=style2>Que ".  $n .": ".$row['que_des']."</style>";
echo "<tr><td class=".$row['ans1'];
echo "<tr><td class=".$row['ans2'];
echo "<tr><td class=".$row['ans3'];
echo "<tr><td class=".$row['ans4'];
if($_SESSION['qn']< $rs->num_rows -1)
echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
else
echo "<tr><td><input type=submit name=submit value='Finish'></form>";

echo "</table></table>";
?>
