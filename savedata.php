<?php
 $stu_name = $_POST['sname'];
 $stu_saddress = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];

 $Conn = mysqli_connect("localhost","root","","crud1") or die("Connection Failed");
  $sql = "INSERT INTO student(sname,saddress,sclass,sphone)VALUES('{$stu_name}','{$stu_saddress}','{$stu_class}','{$stu_phone}')";
  $result = mysqli_query($Conn,$sql) or die("Query UnsucessFull");
  header("Location:http://localhost/crud1/index.php");
  mysqli_close($Conn);

?>