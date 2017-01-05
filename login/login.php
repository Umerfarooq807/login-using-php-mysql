<?php

include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql="SELECT * FROM user12 WHERE username='$uid' AND Password='$pwd'";
$result=mysqli_query($conn,$sql);

if(!mysqli_fetch_assoc($result))
{echo "incorrect information<br>";
echo"please give valid ID and password<br>";

}
else {echo "you are logged in<br><br>";
echo "Yor are logged in as User ID<br>";
echo $uid."<br>";
header("Location: http://localhost/old/DB/book1.php"); 
echo '<a href="http://localhost/old/DB/book1.php">continue to site</a>';
}

?>