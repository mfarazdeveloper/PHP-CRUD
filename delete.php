<?php include 'header.php';

if(isset($_POST['deletebtn'])){

	$Conn = mysqli_connect("localhost","root","","crud1") or die("Connection Failed");

	$stu_id= $_POST['sid'];

	$sql ="DELETE FROM student WHERE sid ={$stu_id}";

    $result = mysqli_query($Conn,$sql) or die("Query Unsuccessfull");

header("Location:http://localhost/crud1/index.php");

mysqli_close($Conn);

}

?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
