<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select *from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Bank Transactions</title>
		<link rel="shortcut icon" href="images/Bank logo.png">
   		<link rel="stylesheet" href="button.css">
   		<link rel="stylesheet" href="buttons.css">
	<style>
		body{
			background-image:url("images/transfer.jpg");
			
			background-repeat: no-repeat;
			background-size:cover;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			 background: #336ca6;
			}
		th{
			color: #c7c2b5;
			font-size:26px;
			padding:16px;
			text-shadow: 2px 2px black;
		}
		
		td{
			font-size:23px;
			color:#22c962;
			padding: 10px 20px 10px 22px;
			text-shadow: 2px 2px black;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		.flat-table-1 {
			background: #940000;
		}
		.flat-table-1 tr:hover {
			background: rgba(0,0,0,0.19);
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
	</style>
	</head>
	<body>
			<div class="buttons">
	<a href="index.php">
    <button class="primary_btn" style="float: left;" >HOME</button>
	</a>
</div>	
<h1 style="color:#f5f0f0;text-shadow: 2px 2px black; text-align:left">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp
	Bank <box>Transactions</box></h1>
		<br><br>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>