<?php
require 'upload.php';
$_SESSION['id']=1;
$sessionid=$_SESSION['id'];
$user=mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM register where id=$sessionid"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="coll/e design.jpg">
    <link rel="stylesheet" href="style.css">
    <title>E-store</title>
    <style>
       body{
            background-color: #e4e7ed;
        }
        .container1
        {
            width:60%;
            position: relative;
            margin-left:28%;
            padding:55px;
            background-color: #0352BD;
            border-radius: 12px;
        }
        .container2
        {
           width:60%;
           position: relative;
           margin-left:28%;
           background-color: white;
           border-radius: 12px;
           margin-top: 50px; 
        }
        td
        {
           border-bottom: 1px solid #0352BD;
            padding:8px
        }
    </style>
</head>
<body>
<div style="display: flex; justify-content: space-between;">
		<div style="justify-content: left;" >
		  <aside>
			<div class="wrapper">
				<div class="sidebar_trigger" id="sidebar_trigger">
					<button class="button" onclick="display_sidebar()"><i class="bi bi-list"></i></button>
				</div>
		       <div class="sidebar" style="background-color: #0352BD;" id="sidebar">
		       <ul>
		          <h1 style="font-weight: 400; font-size:20px;color: white; text-align: center;">
			      <img src="coll/e design.jpg" style="border-radius: 50px;  width: 100px; "><br><br>E-store<br><br></h1>
                <li>
                    <a href="home.php" >
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="Electronic-iteams.php">
                        <span class="icon"><i class="bi bi-display"></i></span>
                        <span class="item">Electronic Iteams</span>
                    </a>
                </li>
                <li>
                    <a href="Electronic-components.php" >
                        <span class="icon"><i class="bi bi-cpu"></i></span>
                        <span class="item">Electronic Components</span>
                    </a>
                </li>
                <li>
                    <a href="cart.php">
                        <span class="icon"><i class="bi bi-bag-heart"></i></span>
                        <span class="item">Cart</span>
                    </a>
                </li>
                <li>
                    <a href="your-orders.php">
                        <span class="icon"><i class="bi bi-cart4"></i></span>
                        <span class="item">Your Orders</span>
                    </a>
                </li>
                <li>
                    <a href="profile.php" class="active">
                        <span class="icon"><i class="bi bi-person-circle"></i></span>
                        <span class="item">Profile</span>
                    </a>
                </li>
                <li>
                    <a  class="new_logout"  href="logout.php">
                        <span><i class="bi bi-power" ></i></span>
                        <span>Logout</span>
                    </a>
                </li>
             </ul>
           </div>
          </aside>
        </div>
</div>
<div class="container1">
        <img src="coll/e design.jpg" width="100px" height="100px" style="border-radius: 50px; position:absolute"/>
        <p style="margin-left:100px;color:aliceblue;margin-top:20px;position:absolute;">Hello E-store Customer</p>
</div>
<br>
<br>
<div class="container2">
    <?php
    session_start();
    $connection=new mysqli("localhost","root","","student");
    $sql="SELECT * FROM register";
    $reult=$connect->query($sql);
    if(isset($_SESSION['mail']))
    {
        while($row=$reult->fetch_assoc())
        {
    ?>
        <table style="border-spacing: 30px;">
            <tr>
               <span> <td style="background-color:#0352BD ;color:aliceblue;border-radius:50px"><i class="bi bi-person-circle"></i></td>
                <td><?php echo $row['name'];?></td></span>
                <td style="background-color:#0352BD ;color:aliceblue;border-radius:50px "><i class="bi bi-person"></i></td>
                <td style="text-align:left;">Boina</td>
            </tr>
            <tr>
               <span> <td style="background-color:#0352BD ;color:aliceblue;border-radius:50px"><i class="bi bi-shop"></i></td>
                <td><?php echo $row['address'];?></td></span>
                <td style="background-color:#0352BD ;color:aliceblue;border-radius:50px "><i class="bi bi-telephone"></i></td>
                <td style="text-align: right;"><?php echo '+91'.' '.$row['phone'];?></td>
            </tr>
            <tr>
            <span> <td style="background-color:#0352BD ;color:aliceblue; border-radius:50px"><i class="bi bi-envelope-paper-heart"></i></td>
                <td colspan="3"><?php echo $_SESSION['mail'];?></td></span>
            </tr>
            <tr>
                <td style="background-color:#0352BD; color:aliceblue;border-radius:50px"><i class="bi bi-gender-male"></i></td>
                <td>Male</td>
            </tr>
        </table>
        <p style="color:#0352BD;text-align:center;">Deactivate your account</p>
        <?php
        break;
     }
    }
    else
    {
        echo
        "
        <div class='conatainer2' style='padding:50px'>
        <p> please login to see your credentials</p>
        </div>
        ";
    }
        ?>
</div>
</body>
</html>