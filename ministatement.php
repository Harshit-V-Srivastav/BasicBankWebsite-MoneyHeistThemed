<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select sender,amount from mini_statement where receiver='$name1'";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mini Statement of the user</title>
		 <link rel="shortcut icon" href="images/personal.png">
    	 <link rel="stylesheet" href="buttons.css">
	<style>
		
		body{
			background-image:url("images/mini.jpg");
			
			background-repeat: no-repeat;
			background-size:cover;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			 background: #940000;
			}
		th{
			color:solid gray;
			font-size:26px;
			padding:16px;
		}
		
		td{
			font-size:23px;
			color: ;
			padding: 10px 20px 10px 22px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		box {
  background-color: #940000;
  width: 200px;
  padding: 10px;
  
}
box2{
  background-color: black;
  width: 200px;
  padding: 10px;
  
}
.flat-table-1 {
			background: #940000;
		}
		.flat-table-1 tr:hover {
			background: rgba(0,0,0,0.19);
		}
	</style>
	</head>
	<body>
	<div class="buttons">
	<a href="index.php">
    <button class="primary_btn" style="float: left;" >HOME</button>
	</a>
</div>
<h1 style="color:#f5f0f0;text-shadow: 2px 2px black; text-align:left">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	Mini Statement <box>of</box>&nbsp <?php echo $name1?></h1>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Credits</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<div>
		<form action="user.php" method="post">
			<div class="buttons" style="float: center;">
			<br><button class="primary_btn" type="submit" name="name" value="<?php echo $name1 ?>" >GO BACK</button>
			
			</div>
		</form>
		
	</body>
</html>