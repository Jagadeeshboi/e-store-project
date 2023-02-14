<?php
  session_start();
  $db_name="student";
  $conn=new mysqli("localhost","root","","student");
  mysqli_select_db($conn,$db_name);
  if(isset($_POST['name']))
  {
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql="SELECT * FROM register WHERE mail='".$name."' AND password='".$password."' limit 1";
    $result=mysqli_query($conn,$sql);
    $_SESSION['mail']=$name;
      echo "<h1 style='text-align:center;color: #035203;'>Welcome</h1>";
    if(mysqli_num_rows($result)==1)
    {
      echo "<script>window.location.href='home.php'</script>;";
      exit();
    }
    else
    {
      echo "something went wrong please check once";
      exit();
    }
  }

?>
 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title> E-store </title>
</head>
<body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        <form class="login-form" method="POST" action="#">
          <input type="mail" name="name" placeholder="username"/>
          <input type="password" name="password"  placeholder="password"/>
          <input type="submit" name="submit" value="Login" class="button" />
          <p class="message">Not registered? <a href="rigister.php">Register in</a></p>
        </form>
      </div>
    </div>
</body>
</body>
</html>
