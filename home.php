<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="coll/e design.jpg">
    <link rel="stylesheet" href="style.css">
    <title>E-store</title>
    <style>
       * {box-sizing: border-box;}
        body {font-family:'Josefin Sans', sans-serif;}
        .mySlides {display: none;}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
        }

        /* Caption text */
        .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
        }


        .active {
        background-color: #717171;
        }

        /* Fading animation */
        .fade {
        animation-name: fade;
        animation-duration: 1.5s;
        }

        @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
        .text {font-size: 11px}
        }
        .container{
            padding:15px;
            display: flex;
            justify-content: space-between;
        } 
        .container1
        {
            box-shadow: 0px 1px 2px 1px #dcd3d2;
            padding: 20px; 
        }
        #submit-button
        {
            border:none;
            background-color:white;
            color:#0352BD;
            padding:9px;
            border-radius: 50px;
        }
        #submit-button:hover
        {
            background-color: #0352BD;
            color:white;
            cursor: pointer;
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
                    <a href="home.php" class="active">
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
                    <a href="Electronic-components.php">
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
    </head>
    <body>
        <div style="text-align: center; margin-left:20%;margin-top:15px;">
            <h2>Welcome To The Electronic World</h2>
            <p>Find Your Needs</p>
        </div>
    <div class="slideshow-container" style="margin-left:22%; margin-top:15px;">
    <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="coll/tech.jpg" style="width:115%" height="400px">
    </div>

    <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="coll/12643040_5034833.jpg" style="width:115%" height="400px">
    </div>

    <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="coll/wepik-photo-mode-2022104-182135.jpeg" style="width:115%" height="400px">
    </div>

    </div>
    <br>

    <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    </div>
        <div class="container" style="margin-left:17%; text-align:center;">
            <div class="container1">
                <h4>coupons</h4><br>
                <p><i class="bi bi-card"></i> Login to see your coupons</p>
            </div>
            <div class="container1">
                <h4>Offers</h4><br>
                <p><i class="bi bi-percent"></i> Every week saturday you get lowest deals</p>
            </div>
            <div class="container1">
                <h4>Rewards</h4><br>
                <p><i class=bi-card></i> Login to see your Rewards</p>
            </div>
        </div>
        <div>
            <table style="margin-left:48%; position:relative; margin-top:40px;border-bottom:1px solid grey;text-align:center">
                <tr style="width:fit-content; ">
                    <td style="width:fit-content;text-align:left;">Login to continue</td>
                    <td style="width:60%;text-align:right;">
                        <form action="login.php" method="POST">
                            <button type="submit" id="submit-button"><i class="bi bi-arrow-right"></i></button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
</body>
</html>