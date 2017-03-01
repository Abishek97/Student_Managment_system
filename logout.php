<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("av");
if(session_destroy())
{
header("Location: login.php");
}
?>