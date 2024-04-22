<?php
$stu_id= $_GET['id'];

$Conn = mysqli_connect("localhost","root","","crud1") or die("Connection Failed");

$sql ="DELETE FROM student WHERE sid ={$stu_id}";

$result = mysqli_query($Conn,$sql) or die("Query Unsuccessfull");

header("Location:http://localhost/crud1/index.php");

mysqli_close($Conn);


?>