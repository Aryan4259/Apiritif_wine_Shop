<?php
   $con=mysqli_connect('localhost','root','',"wine");

$id =$_GET['deleteid'];
// echo $id;
$sql="DELETE FROM `cart` WHERE id=$id";
$result=mysqli_query($con,$sql);
if($result)
{
    header("location:cart.php");
}
?>