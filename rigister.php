<?php
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
    $phone=$_POST['phone'];
    $mail=$_POST['mail'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $pincode=$_POST['pincode'];
    $sql="INSERT INTO register (name,phone,mail,address,pincode,password) VALUES('$name','$phone','$mail','$address','$pincode','$password')";
    if($conn->query($sql))
    {

        echo "<script>window.location.href='login.php'</script>;
                 successfully register";
    }
    else
    {
        echo"something went wrong";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container
        {
            width: 50%;
            position: relative;
            margin-left:26%;
            margin-top: 100px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .rigister
        {
            color: white;
            cursor: pointer;
            background-color: #0352BD;
            border: none;
            border-radius: 5px;
        }
        .rigister:hover
        {
            
            color: #0352BD;
            cursor: pointer;
            background-color: white;
            border:1px solid #0352BD;
        }
        .input{
            border: none;
            background-color: grey;
            padding: 8px;
            color: black;
            background-color:  #f2f2f2;
        }
        .input:hover
        {
            border:1px solid #0352BD;
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <div class="container">
      
        <form action="rigister.php" method="POST">
            <table style="position: relative; margin:auto; border-spacing:60px;text-align:center">
                    <th colspan="2">
                        Registration Form
                    </th>
                <tr>
                    <td>
                        <label>Name:</label>
                        <input type="text" name="name" class="input"required>
                    </td>
                    <td>
                        <label>Email:</label>
                        <input type="mail" name="mail" class="input" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label style="margin-top: -10px;">Address:</label>
                        <textarea name="address"class="input"  ></textarea>
                    </td>
                    <td>
                        <label>Phone:</label>
                        <input type="number" name="phone" class="input" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Pincode:</label>
                        <input type="number" name="pincode" class="input" required>
                    </td>
                    <td>
                        <!-- <label>Gender:</label>
                         <select name="gender" class="input" style="width: 170px; padding:3px;">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="Others">Others</option>
                        </select> --> 
                        <label>Password:</label>
                        <input type="password" name="password" class="input">
                    </td>
                </tr>
            </table>
            <input type="submit" name="create" value="Register" style="width: 70%;margin-left:18%; margin-bottom:50px;padding:8px" class="rigister">
        </form>
    </div>
</body>
</html>