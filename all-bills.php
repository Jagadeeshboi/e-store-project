<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calanjiyam Web Biller</title>
	<link rel="icon" type="image/png" href="http://crisscrosstamizh.tech/GST-Dev/assets/img/light_cct.png">
	<link href="style.css" rel="stylesheet" >
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		function display_sidebar()
		{
			var x = document.getElementById("sidebar");
			if (x.style.display == "none") 
			{
				x.style.display = "block";
			} 
			else 
			{
				x.style.display = "none";
			}
		}
	</script>
	<style type="text/css">
		.search
		{
			margin-left: 83%;
			margin-top: 15px;
			border:none;
			padding:10px;
			border-radius: 5px;
			border:1px solid grey;
			width: 200px;
		}
		/*.search:hover
		{
			background-color: #0352BD;
			color: white;
		}*/
	</style>
</head>
<body>
	<div>
		<input type="text" id="myInput" class="search"  placeholder="search here">
	</div>
	<!--<span class="left-corner-heading">
		<h1 style="font-weight: 400;">
			<img src="http://crisscrosstamizh.tech/GST-Dev/assets/img/dark_cct.png" class="left-corner-heading-img">Calanjiyam - Web Biller</h1>
	</span>-->
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
			      <img src="CCT_White_BG_logo.png" style="border-radius: 50px;  width: 100px; "><br><br>Calanjiyam<br><br></h1>
                <li>
                    <a href="home.php" >
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="new-bill.php">
                        <span class="icon"><i class="bi bi-file-earmark-plus"></i></span>
                        <span class="item">New Bill</span>
                    </a>
                </li>
                <li>
                    <a href="all-bills.php" class="active">
                        <span class="icon"><i class="bi bi-folder-plus"></i></span>
                        <span class="item">All Bills</span>
                    </a>
                </li>
                <li>
                    <a href="bill-lables.php">
                        <span class="icon"><i class="bi bi-receipt-cutoff"></i></span>
                        <span class="item">Bill Label</span>
                    </a>
                </li>
                <li>
                    <a href="profile.php">
                        <span class="icon"><i class="bi bi-person-circle"></i></span>
                        <span class="item">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="new-user.php">
                        <span class="icon"><i class="bi bi-person-plus"></i></span>
                        <span class="item">New User</span>
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
	
		<!--<div id="top-menu" class="top-menu">
			<a href="new-bill.php" style="text-decoration: none;" class="side-menu-button">
				<i class="bi bi-file-earmark-plus" style="padding: 8px; margin-right: 10px; font-size: 15px;"></i>New Bill
			</a>
			<a href="all-bills.php" style="text-decoration: none;" class="side-menu-button-active">
				<i class="bi bi-folder" style="padding: 8px; margin-right: 10px; font-size: 15px;"></i>All Bills
			</a>
			<a href="bill-lables.php" style="text-decoration: none;" class="side-menu-button">
				<i class="bi bi-receipt-cutoff" style="padding: 8px; margin-right: 10px; font-size: 15px;"></i>Bill Lables
			</a>
			<a href="profile.php" style="text-decoration: none;" class="side-menu-button">
				<i class="bi bi-person" style="padding: 8px; margin-right: 10px; font-size: 15px;"></i>Profile
			</a>
			<a href="new-user.php" style="text-decoration: none;" class="side-menu-button">
				<i class="bi bi-person-plus" style="padding: 8px; margin-right: 10px; font-size: 15px;"></i>New User
			</a>
			<a href="logout.php" style="text-decoration: none;" class="side-menu-button-logout">
				<i class="bi bi-power" style="padding: 8px; margin-right: 10px; font-size: 15px;"></i>Logout
			</a>
		</div> -->
		<div class="display-table-bg" style="margin-left: 250px;width:90%; margin-right:30px; margin-top: 0px;">
			<table class="display-table" id="my_table" >
				<thead style="margin-bottom:10px; ">
					<tr style=" margin-bottom:10px;" >
						<th style="padding-bottom: 8px; padding-top: 15px;padding-left: 30px;border-top-left-radius:10px; border-bottom-left-radius: 10px;background-color: #0352BD; color: white; text-align:left;width: 80px; ">Bill no</th>
						<th style="padding-bottom: 10px; padding-top: 20px;background-color: #0352BD; color: white;text-align: left; ">Billed To</th>
						<th style="padding-bottom: 10px; padding-top: 20px;background-color: #0352BD; color: white;text-align: left; width: 15px; ">Billed To Contact</th>
						<th style="padding-bottom: 10px; padding-top: 20px;background-color: #0352BD; color: white;text-align: left; ">Billed on</th>
						<th style="padding-bottom: 8px; padding-top: 15px;background-color: #0352BD; color: white; text-align: left;">Billed By</th>
						<th style="padding-bottom: 8px; padding-top: 15px;background-color: #0352BD; color: white; text-align: left;">Paid on</th>
						<th style="padding-bottom: 8px; padding-top: 15px;background-color: #0352BD; color: white;width:8%; ">No.of Items</th>
						<th style="padding-bottom: 8px; padding-top: 15px;background-color: #0352BD; color: white;width:8%; ">Total</th>
						<th style="padding-bottom: 8px; padding-top: 15px;background-color: #0352BD; color: white;width:10%; ">Status</th>
						<th style="padding-bottom: 8px; padding-top: 15px;background-color: #0352BD; color: white; width:10%;">Paid via</th>
						<th style="padding-bottom: 8px; padding-top: 15px;background-color: #0352BD; color: white;padding-left:0px;text-align: center;width:5%; ">Update</th>
						<th style="padding-bottom: 8px; padding-top: 15px;border-top-right-radius:10px; border-bottom-right-radius: 10px;padding-right:0px;background-color: #0352BD; color: white;text-align: center;width:5%;">Print</th>
					</tr>
				</thead>
				<tbody id="all-bills-table">
			    <?php
			//    session_start();
				$servername="sql544.main-hosting.eu";
			    $username="u745359346_GST";
			    $password="GST_dev@CCT2022";
			    $conn=mysqli_connect($servername,$username,$password);
			    if(!$conn)
			    {
			      die("Connection failed:".mysqli_connect_error());
			    }
			    //   echo "connected successfully";
			    //   echo "<br>";
			    $dbname="u745359346_GST";
				mysqli_select_db($conn,$dbname);
				$sql = "SELECT * FROM WebBiller ORDER BY bill_no";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) 
				{
					$bill_name = 'bill'.$row['bill_no'];
					$label_id = $row['label_id'];
					$contact=$row['billed_to_contact'];
					$billed_on = $row['billed_on'];
					$status = "";
					$update = "";
					$paid_via = "";
					if ($row['status'] == "P") 
					{
						echo "<tr class='table-row'>";
						$status = "Paid";
						$to_set = "N";
						$update = "As Not Paid";
					}
					else
					{
						echo "<tr class='table-row'  style=' color:red;'>";
						$status = "Not Paid";
						$to_set = "P";
						$update = "As Paid";
					}
					if($row['paid_via'] == "O")
					{
						$paid_via = "Online";
					}
					else if($row['paid_via'] == "C")
					{
						$paid_via = "Cash";
					}
					else if($row['paid_via'] == "H")
					{
						$paid_via = "Cheque";
					}
					else if($row['paid_via'] == "B")
					{
						$paid_via = "Bank Transfer";
					}
					else
					{
						$paid_via = "NIL";
					}
					echo "<td style='padding-left : 30px;text-align:center;'>".$row['bill_no']."</td>"."<td>".$row['billed_to']."</td>"."<td>".$row['billed_to_contact']."<td>".$row['billed_on']."</td>"."<td>".$row['billed_by']."<td>".$row['paid_on']."</td>"."<td>".$row['no_of_items']."</td>"."<td>".$row['total']."</td>"."<td>".$status."</td>"."<td>".$paid_via."</td>";
					// echo"<td><form action = 'update.php' method='post'> <input type='hidden' name = 'bill-no' value = ' ".$row['bill_no']." '><input type='hidden' name = 'status' value = '".$to_set."'> ". "<input  class='submit-button' type='submit' value=' ".$update."'></td></form> ";
					echo "<td><form action='edit-bill.php' method='POST' target='_blank'><input type='hidden' name = 'bill-no' value = ' ".$row['bill_no']." '><input type='hidden' name = 'bill-name' value = ' ".$bill_name." '><input type='hidden' name = 'label_id' value = ' ".$label_id." '><button class='submit-button' type='submit'><i class='bi bi-pencil-square'></i></button></form></td>";
					echo "<td><form action='printbill-dup.php' method='POST' target='_blank'><input type='hidden' name = 'bill-no' value = ' ".$row['bill_no']." '><input type='hidden' name = 'bill-name' value = ' ".$bill_name." '><button class='submit-button' type='submit'><i class='bi bi-printer'></i></button></form></td>";
				}
				?>
				</tr>
			</tbody>
			</table>
		</div>
	</div>
	<script>
		$(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#all-bills-table tr").filter(function() {
                        $(this).toggle($(this).text()
                        .toLowerCase().indexOf(value) > -1)
                    });
                });
            });
	</script>
</body>
</html>
