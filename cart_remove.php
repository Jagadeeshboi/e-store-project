<?php
$name=$_POST['name'];
$description=$_POST['description'];
$price=$_POST['price'];
$img=$_POST['img'];
$connection=new mysqli("localhost","root","","student");
if(!$connection)
{
    die("connection lost".$connection->error());
}
$dbname="student";
mysqli_select_db($connection,$dbname);
$sql="SELECT * FROM cart";
if ($connection->query($sql)) 
{
  $sql = "DELETE FROM cart where name = '$name' ";
 if( $result = $connection->query($sql))
    {
  echo "<script>window.location.href = 'cart.php';</script>";
    }
} 
else 
{
  echo "Error saving item into table ". $bill_name. " : " . $connection->error;
}
?>