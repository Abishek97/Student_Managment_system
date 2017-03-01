
<!DOCTYPE html>
<html>

<head>



<link rel="stylesheet" type="text/css" href="aumstyle.css">
	<title>
		registration
	</title>





</head>
<body>
<style>
       body{
             background-color: orange;
       } 
</style>
        <div style="text-align: center;">
	<div style="box-sizing: border-box; display: inline-block; width: auto; max-width: 480px; background-color: #F0FF0F; border: 2px solid #0361A8; border-radius: 5px; margin: 50px auto auto;">
        <div style="background: ; padding: 15px" id="ap_style">
<form name="myform" id="forma" action=""  method="POST">
	 
   USER ID: <input type="text" class="login card" name="id" id="uid" placeholder="University No"/>
   </br> <br />

  USER NAME :<input type="text" name="username"  class="login card" id="name" placeholder="name"/>

   <br /><br />

   PASSWORD:<input type="password" id="pass" name="password" placeholder="Password" />
   <br/></br>

   RE-ENTER PASSWORD:<input type="password" id="repass" name="repassword"  placeholder="Re Password"/>

        <br/><br/>


   <input type="submit" name="submit" value="register" class="login login-card"/>     





</form>


</div>
</div>
</div>
</body>



</html>












<?php
$connect=mysql_connect("localhost","root","");

mysql_select_db("av");
if (isset($_POST['submit'])) {
	$un=$_POST['username'];
	$pass=$_POST['password'];
	$repass=$_POST['repassword'];
	 $id=$_POST['id'];
	 $ch=mysql_query("Select * from 'student' Where id='$id'");
	   
	if ($ch){
		echo"<script> alert('id should be unique')</script>";
	}
		

else
{

if ($pass!=$repass) {
	echo"<script> alert('password not matching')</script>";


}
else if($un==""||$un=="NULL"||$id=="NULL"||$id==""){

echo"<script> alert('username/id/both   empty ')</script>";


}
else{
	$q="Insert into student (id,name,password) VALUES ('$id','$un','$pass')";
	mysql_query($q);
	echo "Your data has been entered congo";
	header('Location: login.php');
}
	
}
}
?>