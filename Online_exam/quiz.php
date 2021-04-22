<?php
session_start();
$_SESSION['trueans'] = 0;
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);
/*$rs= $cn->query("select * from mst_question where test_id=$tid") or die(mysql_error());
if($_SESSION['qn']>mysql_num_rows($rs))
{
unset($_SESSION['qn']);
exit;
}*/
if(isset($subid) && isset($testid))
{
$_SESSION['sid']=$subid;
$_SESSION['tid']=$testid;
header("location:quiz.php");
}
if(!isset($_SESSION['sid']) || !isset($_SESSION['tid']))
{
	header("location: index.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");


$query="select * from mst_question";

$rs= $cn->query("select * from mst_question where test_id=$tid") or die(mysql_error());
if(!isset($_SESSION['qn']))
{
	$_SESSION['qn']=0;
	 $cn->query("delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
	$_SESSION['trueans']=0;
	
}
else
{	
		if(isset($submit) && $submit=='Next Question' && isset($ans))
		{
				$rs->data_seek($_SESSION['qn']);
				$row= $rs->fetch_assoc();
				$que_desc = $row['que_desc'];
				$ans1 = 	$row['ans1'];
				$ans2 = 	$row['ans2'];
				$ans3 = 	$row['ans3'];
				$ans4 = 	$row['ans4'];
				$true_ans = $row['true_ans'];
				 $cn->query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$ans1','$ans2','$ans3','$ans4','$true_ans','$ans')");
				if($ans==$true_ans)
				{
							$_SESSION['trueans'] =$_SESSION['trueans']+1;
				}
				$_SESSION['qn']=$_SESSION['qn']+1;
		}
		else if(isset($submit) && $submit=='Get Result' && isset($ans))
		{
				$rs->data_seek($_SESSION['qn']);
				$row= $rs->fetch_assoc();	
				$que_desc = $row['que_desc'];
				$ans1 = 	$row['ans1'];
				$ans2 = 	$row['ans2'];
				$ans3 = 	$row['ans3'];
				$ans4 = 	$row['ans4'];
				$true_ans = $row['true_ans'];
				 $cn->query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$que_desc','$ans1','$ans2','$ans3', '$ans4','$true_ans','$ans')") or die(mysql_error());
				if($ans==$true_ans)
				{
							$_SESSION['trueans']=$_SESSION['trueans']+1;
				}
				echo "<h1 class=head1> Result</h1>";
				$_SESSION['qn']=$_SESSION['qn']+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td>".$_SESSION['qn'];
				echo "<tr class=tans><td>True Answer<td>".$_SESSION['trueans'];
				$w=$_SESSION['qn']-$_SESSION['trueans'];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
				 $cn->query("insert into mst_result(login,test_id,test_date,score) values('$login',$tid,'".date("d/m/Y")."',".$_SESSION['trueans']).")";
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION['qn']);
				unset($_SESSION['sid']);
				unset($_SESSION['tid']);
				unset($_SESSION['trueans']);
				exit;
		}
}
$rs= $cn->query("select * from mst_question where test_id=$tid") or die(mysql_error());
if($_SESSION['qn'] > $rs->num_rows -1)
{
unset($_SESSION['qn']);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";

exit;
}
$rs->data_seek($_SESSION['qn']);
$row= $rs->fetch_assoc();
echo "<form name=myfm method=post action=quiz.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION['qn']+1;
echo "<tR><td><span class=style2>Que ".  $n .": ".$row['que_desc']."</style>";
echo "<tr><td class=style8><input type=radio name=ans value=1>".$row['ans1'];
echo "<tr><td class=style8> <input type=radio name=ans value=2>".$row['ans2'];
echo "<tr><td class=style8><input type=radio name=ans value=3>".$row['ans3'];
echo "<tr><td class=style8><input type=radio name=ans value=4>".$row['ans4'];

if($_SESSION['qn']< $rs->num_rows -1)
echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
else
echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
echo "</table></table>";
?>
</body>
</html>