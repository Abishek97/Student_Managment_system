<?php
session_start();

mysql_connect("localhost","root","");
mysql_select_db("av");

$uid=$_SESSION['id'];
$uname=$_SESSION['username'];

$q=mysql_query("SELECT * FROM student WHERE name='$uname'");
if($q){

	$row=mysql_fetch_assoc($q);
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>finally!!! marks</title>
</head>
<body>
<center><b>HI <?php echo $uname ?> Your results are:</b></center>
<br/><br/>

<table align="center" style="width:100%; margin:0 auto;">

<tr><th>UNIV_NO</th><th>Name</th><th>SEM 1</th><th>SEM 2</th><th>SEM 3</th><th>SEM 4</th><th>SEM 5</th><th>SEM 6</th><th>SEM 7</th><th>SEM 8</th><th>ONGOING PROJECTS</th><th>certification</th>
</tr>


















<tr>
	<th><?php echo $uid ?></th>
	<th><?php echo $uname ?></th>
	<th><?php echo $row['sem_1'] ?></th>
	<th><?php echo  $row['sem_2']?></th>
	<th><?php echo $row['sem_3'] ?></th>
	<th><?php echo $row['sem_4'] ?></th>
	<th><?php echo $row['sem_5'] ?></th>
	<th><?php echo $row['sem_6'] ?></th>
	<th><?php echo $row['sem_7']  ?></th>
	<th><?php echo $row['sem_8']?></th>
	<th><?php echo $row['ongoin_proj']?></th>
	<th><?php echo  $row['cert'] ?></th>
</tr>





</table>
<br/>
<div style="float:right;">
<a href="logout.php">logout</a>
</div>

</body>
</html>