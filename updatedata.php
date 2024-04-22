<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_saddress = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

$Conn = mysqli_connect("localhost","root","","crud1") or die("Connection Failed");
$sql = "UPDATE student SET sname ='{$stu_name}',saddress = '{$stu_saddress}',sclass ='{$stu_class}',sphone ='{$stu_phone }'WHERE sid = {$stu_id}";
$result = mysqli_query($Conn,$sql) or die("Query UnsucessFull");
header("Location:http://localhost/crud1/index.php");
mysqli_close($Conn);

 ?>
