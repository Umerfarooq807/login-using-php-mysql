
<?php

include 'dbh.php';
$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$loc = $_POST['loc'];

$sql ="INSERT INTO user12 (name,username,email,password,location)
 VALUES('$first','$last','$uid','$pwd','$loc')";
$result=mysqli_query($conn,$sql);
header("Location: index.php");
