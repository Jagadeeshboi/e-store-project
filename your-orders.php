<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="coll/e design.jpg" style="border-radius: 15px;">
    <link rel="stylesheet" href="style.css">
    <title>E-store</title>
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
                    <a href="your-orders.php" class="active">
                        <span class="icon"><i class="bi bi-cart4"></i></span>
                        <span class="item">Your Orders</span>
                    </a>
                </li>
                <li>
                    <a href="profile.php">
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


</body>
</html>