<?php
session_start();
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if(isset($_SESSION['mail']))
{
  echo "$_SESSION[mail]";
$name=$_POST['name'];
$description=$_POST['description'];
$price=$_POST['price'];
$img=$_POST['img'];
// $email=$_post['email'];
$connection=new mysqli("localhost","root","","student");
if(!$connection)
{
    die("connection lost".$connection->error());
}
$dbname="student";
mysqli_select_db($connection,$dbname);
$sql = "INSERT INTO cart (name,description,price,img) VALUES ('$name','$description','$price','$img')";
if ($connection->query($sql)) 
{
  echo "<script>window.location.href = 'cart.php';</script>";
} 
else 
{
  echo "Error saving item into table ". $name. " : " . $connection->error;
}
}
else
{
  header("Location:login.php");
}
?>