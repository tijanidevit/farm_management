<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
echo "<h2 class=head1> Select Subject to Give Quiz </h2>";
$rs=$cn->query("select * from mst_subject");
echo "<table align=center>";
while($row = $rs->fetch_assoc())
{
	echo "<tr><td align=center ><a href=showtest.php?subid=".$row['sub_id']."><font size=4>".$row['sub_name']."</font></a>";
}
echo "</table>";
?>
</body>
</html>
