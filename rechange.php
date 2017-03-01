





<!DOCTYPE html>
<html>
<head>

<style type="text/css">
	html,body {
    background-color:#FFFFFF;
   width:100%;
    height:100%;
}
</style>
	<title>reset password</title>

<script type="text/javascript">
function chkpwd(){
	var x=document.getElementById('name').value;
	var y=document.getElementById('pwd').value;
	if(!x.value){
		x.focus();
		document.getElementById('name').innerHTML="required";
		reurn false;
	}
else if(!y.value){
	y.focus();
	document.getElementById('pwd').innerHTML="required";
	return false
}	
return;	
	
}

</script>




</head>
<body>

  <div style="margin:0px auto; margin-top:10%; text-align:center; border:1px solid black;width:50%">
  	
   <form method="post" class="myfrm" name="myform" action="" onSubmit="return chkpwd()">
   	
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter your id:<input type="text" name="name" id="name"/>
       <br/><br/>
       Enter your new password:<input type="password" name="password" id="pwd" />
       <br/><br/>
       
        &nbsp;&nbsp;&nbsp;<input type="SUBMIT" name="submit" value="reset" /><br/>

   </form>


  

</div>
</body>

</html>


<?php 

mysql_connect("localhost","root","");
mysql_select_db("av");

if(count($_POST)>0){
	$nm=$_POST['name'];
$pass=$_POST['password'];
$q=mysql_query("SELECT * FROM student WHERE id='$nm'");
$a=mysql_fetch_assoc($q);
if($nm==$a['id']){
$query="UPDATE student 
        SET password='$pass'
        WHERE id='$nm'";

mysql_query($query);
header('Location: login.php');

}
else{
	echo"wrong id".mysql_error();
}
}



 ?>