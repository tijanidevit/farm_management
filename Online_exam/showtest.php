<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
extract($_GET);
$rs1= $cn->query("select * from mst_subject where sub_id=$subid");
$row1= $rs1->fetch_assoc();
echo "<h1 align=center><font color=blue>".$row1['sub_name']."</font></h1>";
$rs= $cn->query("select * from mst_test where sub_id=$subid");
if($rs->num_rows <1 )
{
	echo "<br><br><h2 class=head1> No Quiz for this Subject </h2>";
	exit;
}
echo "<h2 class=head1> Select Quiz Name to Give Quiz </h2>";
echo "<table align=center>";

while($row= $rs->fetch_assoc())
{
	echo "<tr><td align=center ><a href=quiz.php?testid=".$row['test_id']."&subid=$subid><font size=4>".$row['test_name']."</font></a>";
}
echo "</table>";
?>
</body>
</html>
