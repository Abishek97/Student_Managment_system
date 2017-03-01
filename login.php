
<!-- USE $_SESSION GLOBAL VARIABLE AFTER USING session_start() every session start-->

<html>
<head>
<title>login page</title>
</head>

<body>
	<div style="text-align: center;">
	<div style="box-sizing: border-box; display: inline-block; width: auto; max-width: 480px; background-color: #F0FFFF; border: 2px solid #0361A8; border-radius: 5px; box-shadow: 0px 0px 8px #0361A8; margin: 50px auto auto;">
	<div style="background: #AA0000; padding: 15px; "><span style="font-family: verdana,arial; color: #00AAAA;font-weight:bold;">Enter your login ID and password</span></div>
	<div style="background: ; padding: 15px" id="ap_style">

<form method="post" action="" name="aform" target="_top">
<input type="hidden" name="action" value="login">
<input type="hidden" name="hide" value="">





<table class='center'>
<tr><td><input type="text" placeholder="Name" name="username"></td></tr>
<tr><td><input type="password"  placeholder="Enter Password" name="password"></td></tr>
<tr><td><input type="text" placeholder="Enter user Id" name="id"></td></tr>
<tr><td><input type='checkbox' name='remember' value='1'> Remember me</td></tr>
<tr><td><input type="submit" name="submit" value="LOGIN"></td></tr>
<tr><td colspan=2>&nbsp;</td></tr>
<tr><td colspan=2><a href="rechange.php">forgot password?</a></td></tr>
<tr><td colspan=2><a href="register.php>">create account</a></td></tr>
</table>
</form>
</div></div></div>
</body>

</html>


















<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("av");
if(isset($_POST['submit'])){
$id=$_POST['id'];
$name=$_POST['username'];
$pass=$_POST['password'];

$q=mysql_query("Select * from student WHERE id=$id");

if($q){

	$row=mysql_fetch_array($q);
	
	$dbid=$row['id'];
	$dbpass=$row['password'];
	if($id=="$dbid" && $pass=="$dbpass"){
		$_SESSION['username']=$name;
		$_SESSION['id']=$id;

		header('Location: welcome.php');
	}
    else if($pass!=$dbpass){
    	echo "<script>alert('Sorry Incorrect password')</script>";
    }

	else{

		echo("Sorry incorrect info".mysql_errno());
	}



    
      


}


}
?>