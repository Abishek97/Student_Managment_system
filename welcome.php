
<?php
session_start();
if(isset($_SESSION['id'])){
	$id=$_SESSION['id'];
	$nm=$_SESSION['username'];
}

?>










<!DOCTYPE html>
<html>
<head>
	<title>success</title>
</head>
<body>
<style>
body {
    background-color: lightblue;
}
table, th, td {
    border: 1px solid black;
    text-align: center;
    padding:3px;
    background-color: #f1f1f1;
    }
</style>
<h1><center><b>Congrats <?php echo $nm ?> you are logged in</b></center></h1>



</br> <br />
<div style="hight:300; width:300; margin:0 auto;"> 
Already entered details then:<a href="marks.php">Click here</a> to see details of scgpa <br /> <br /><br /><br/>
PLEASE ENTER /UPDATE DETAILS("YOU MIGHT HAVE TO RE_ENTER DETAILS PLEASE ENTER DETAILS RIGHTLY")</br>
<form method="post"  action="" name="mfo" id="mfoman">
<br><table>
 <tr>
    <th>SEMESTER</th>
    <th>POINTER</th>
  </tr>
  <tr>
    <td>1</td>
    <td><input type="text" name="s1" id="s1" class="s1" /></td>
  </tr>
  <tr>
    <td>2</td>
    <td><input type="text" name="s2" id="s1" class="s1" /></td>
  </tr>
  <tr>
    <td>3</td>
    <td><input type="text" name="s3" id="s1" class="s1" /></td>
  </tr>
  <tr>
    <td>4</td>
    <td><input type="text" name="s4" id="s1" class="s1" /></td>
  </tr>
<tr>
    <td>5</td>
    <td><input type="text" name="s5" id="s1" class="s1" /></td>
  </tr>
  <tr>
    <td>6</td>
    <td><input type="text" name="s6" id="s1" class="s1" /></td>
  </tr>
<tr>
    <td>7</td>
    <td><input type="text" name="s7" id="s1" class="s1" /></td>
  </tr>
  <tr>
    <td>8</td>
    <td><input type="text" name="s8" id="s1" class="s1" /></td>
  </tr>
</table>
</br>
<br><b>Projects Undertaken:</b><input type="text" name="pjt" id="s1" class="s1" /> <br/>
<br><b>CERTIFICATE:</B><input type="text" name="cert" id="s1" class="s1" /> <br/>
<br><input type="submit" name="submit" id="submit" value="submit" /></br>


</form>




</div>

</body>
</html>













<?php

mysql_connect('localhost','root','');
mysql_select_db("av");



if(isset($_POST['submit'])){
	$sem1=$_POST['s1'];
	$sem2=$_POST['s2'];
	$sem3=$_POST['s3'];
	$sem4=$_POST['s4'];
	$sem5=$_POST['s5'];
	$sem6=$_POST['s6'];
	$sem7=$_POST['s7'];
	$sem8=$_POST['s8'];
	$pjt=$_POST['pjt'];
	$cert=$_POST['cert'];


	$_SESSION['sem1']=$sem1;
	$_SESSION['sem2']=$sem2;
	$_SESSION['sem3']=$sem3;
	$_SESSION['sem4']=$sem4;
	$_SESSION['sem5']=$sem5;
	$_SESSION['sem6']=$sem6;
	$_SESSION['sem7']=$sem7;
	$_SESSION['sem8']=$sem8;
	$_SESSION['pjt']=$pjt;
	$_SESSION['cert']=$cert;


	$q="UPDATE student 
	     SET sem_1='$sem1',sem_2='$sem2',sem_3='$sem3',sem_4='$sem4',sem_5='$sem5',sem_6='$sem6',sem_7='$sem7',sem_8='$sem8',ongoin_proj='$pjt',cert='$cert'
	    WHERE name='$nm' AND id='$id'";

    mysql_query($q);
    echo "Congrats your info is UPDATED!!!!!!!!!!!!!!!!!!";
     header('Location: marks.php');

    }
    ?>
