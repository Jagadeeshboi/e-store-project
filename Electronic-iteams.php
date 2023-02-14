<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="coll/e design.jpg">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>E-store</title>
    <style>
        .container
        {
            display:flex;
            justify-content: space-between;
            box-shadow:1px 0px 1px 1px #dcd3d2;
            width: 80%;
            height:180px;
            margin-left: 18%;
            margin-top: 25px;
        }
        button
        {
            background-color:#0352BD;
            color:white;
            padding:10px;
            border-radius: 5px;
        }
        button:hover
        {
            background-color: white;
            color:#0352BD;
            cursor: pointer;
        }
        #submit-button
        {
            background-color:#0352BD;
            color:white;
            padding:10px;
            border-radius: 5px;
        }
        #submit-button:hover
        {
            background-color: white;
            color:#0352BD;
            cursor: pointer;
        }
        .search-bar
        {
            width: 450px; 
            margin-left:-20px;
            padding:8px;
            font-size:large;
            border-radius: 5px;
        }
        .search-btn
        {
            padding:8px;
            color: white;
            background-color: #0352BD;
            border:none;
            cursor: pointer;
            border-radius: 5px;
            font-size: large;
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
                    <a href="Electronic-iteams.php" class="active">
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
</div>
<div style="display: flex;justify-content:space-around;">
<div style="margin-left: 220px;">
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_ZLL9BMHuN9.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop  autoplay></lottie-player></div>
<div style="text-align:center;">
    <form  action="result-ec.php" method="GET" style="margin-top: 30px;">
    <input type="text" name="text" placeholder="search here" class="search-bar">
    <input type="submit" value="search" name="submit" class="search-btn">
   </form>
</div>
<div>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_ZLL9BMHuN9.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop  autoplay></lottie-player>
</div>
</div>
        <?php
        $connection=new mysqli("localhost","root","","student");
        if(!$connection)
        {
            die("connection error".$connection->error());
        }
        mysqli_select_db($connection,"student");
        $sql="SELECT * FROM electronic_item";
        $result=$connection->query($sql);
        while($row=$result->fetch_assoc())
        {
            ?>
            <div class="container">
                <div>
                    <img src="coll/<?php echo $row['img'];?>" alt=""  width="300px" height="180px">
                </div>
                <div >
                    <h3 style="margin-left:10px;margin-top:10px;" ><?php echo $row['name'];?></h3>
                    <p style="margin-left:10px;margin-top:30px; width:90%;text-align:justify;"><?php echo $row['description'];?>'</p>
                    <h2 style="margin-left:10px;margin-top:30px;"><?php echo "₹".$row['price'];?></h2>
                </div>
                <div style="width: 30%; text-align:center;margin-top:70px">
                   <form action="buy_now.php" method="POST">
                        <input type="hidden" name="name" value="<?php echo $row['name'];?>"/>
                        <input type="hidden" name="description" value="<?php echo $row['description'];?>"/>
                        <input type="hidden" name="price" value="<?php echo $row['price'];?>"/>
                        <input type="hidden" name="img" value="<?php echo $row['img'];?>"/>
                        <input type="submit" id="submit-button" name="create" value="Buy now">
                   </form>
                </div>
                <div style="width:10%;text-align:center;margin-top:70px;">
                <form action="cart_add.php" method="POST" >
                    <input type="hidden" name="name" value="<?php echo $row['name'];?>"/>
                    <input type="hidden" name="description" value="<?php echo $row['description'];?>"/>
                    <input type="hidden" name="price" value="<?php echo $row['price'];?>"/>
                    <input type="hidden" name="img" value="<?php echo $row['img'];?>"/>
                    <button type="submit" id="submit-button" ><i class="bi bi-plus-circle-fill"></i></button>
                </form>
                </div>
            </div>
        <?php
        }
?> 
<!-- <script>
    const search = () => {
        const searchbox=document.getElementById("search-item").value.toupperCase();
        const storeiteams=document.getElementById("product-list")
        const product=document.getElementById("product")
        const panme=storeiteams.getElementsByTagName("h3")
        for(var i=0;i<pname.length;i++)
        {
            let match=product[i].getElementsByTagName('h2')[0];
            if (match)
            {
                let textvalue=match.textContent || match.innerHTML
                if(textvalue.toupperCase().indexof(searchbox) > -1)
                {
                    product[i].style.display="";
                }
                else
                {
                    product[i].style.display="none;"
                }
            }
        }
    }
</script> -->

</body>
</html>