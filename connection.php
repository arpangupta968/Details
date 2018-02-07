<?php
mysql_connect("localhost","root","");
mysql_select_db("student");
$name=$_REQUEST['name'];
$gender=$_REQUEST['gender'];
$age=$_REQUEST['age'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$qualification=$_REQUEST['qualification'];
$percentage=$_REQUEST['percentage'];
$category=$_REQUEST['category'];
$sql = mysql_query("INSERT into registration(Name,Gender,Age,Email,Mobile,Qualification,Percentage,Category)values('".$name."','".$gender."','".$age."','".$email."','".$mobile."','".$qualification."','".$percentage."','".$category."')");
echo"welcome";
?>