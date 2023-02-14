<?php
  session_start();
  // $cookie_name = "mail";
  // $cookie_value = $_POST['name'];
  // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
  $server="localhost";
  $server_name="root";
  $password="";
  $db_name="student";
  $conn=new mysqli("$server","$server_name","$password","$db_name");
  if(!$conn)
  {
    echo "error";
  }

  if(isset($_POST['create']))
  {
    $name=$_POST['name'];
    $descripton=$_POST['description'];
    $img=$_POST['img'];
    $price=$_POST['price'];
    $sql="INSERT INTO buy(name,description,img,price) VALUES('$name','$description','$img','$price')";
    if($conn->query($sql))
    {
        echo "<script> window.location.href='buy_now.php'</script>";
    }
    else
    {
        echo"something went wrong";
    }
  }
  if(isset($_SESSION['mail']))
  {
  $sql="SELECT * FROM buy";
  $result=$conn->query($sql);
  while($row=$result->fetch_assoc())
  {
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
      .container
      {
        display: flex;
        justify-content: space-between;
      }
      .in-con{
          background-color: white;
          width: 60%;
          padding: 00px;
          margin-left:10%;
      }
      .in-con1
      {
        width:25%;
        background-color: white;
        margin-left:72%;
        margin-top: -25%;
        height: 100px;
        position: absolute;

      }
    </style>
  </head>
  <body style="background-color: #e4e7ed;">
    <div class="container">
      <div class="in-con">
        <table style="border-bottom: 1px solid grey;">
          <tr>
            <td style="border-bottom: 5px solid white;">
            <img src="coll/<?php echo $row['img'];?> " width="150px" height="100px">
            <form>
                <button><i class="bi bi-dash-circle"></i></button>
                <input type="number" name='number' style="width: 40px;margin-left:8px;">
                <button><i class="bi bi-plus-circle"></i></button>
              </form>
          </td>
            <td colspan="3" style="text-align:left;margin-left:20px;">
                <h4 style="margin-top: -45px;"><?php echo $row['name'];?></h4>
                <h5 > <?php echo $row['price'];?></h5>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </body>
  </html>
      <?php
  }
  echo" <div class='in-con1'>
      <p></>
  </div>";
}
else
{

  header("Location:login.php");
}
  ?>
</body>
</html>