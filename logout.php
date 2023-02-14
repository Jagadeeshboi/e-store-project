<?php
session_start();
if(!empty($_SESSION['mail']))
{
    $_SESSION['mail'];
    echo "SUCCESSFULY LOGEDOUT!";
    session_destroy();
    echo "
    <script>
    alert('success fully logged out!');
    document.location.href='login.php';
    </script>
    ";
}
else
{
    echo "<h1 style='text-align:center;margin-top:80px;color:red;'>PLEASE LOGIN</h1>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="margin-left:33%;">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_pk7nnxpm.json"  background="transparent"  speed="1"  style="width: 500px; height: 500px;"  loop  autoplay></lottie-player>
</div>
</body>
</html>
