<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);



// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT name, email, amount FROM users";
$result = $con->query($sql);

?>
<html>
<head>
   <title>Users of the Royal Mint Bank of Spain</title>
   <link rel="shortcut icon" href="images/Bank logo.png">
   <link rel="stylesheet" href="buttons.css">
   
	<style>
		body{
			text-align:center;
		}
		.flat-table-1 {
			background: #c7c2b5;
		}
		.flat-table-1 tr:hover {
			background: rgba(0,0,0,0.19);
		}
		h1{
			font-family: Arial, Times, serif;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			}
		th{
			color:#940000;
			font-size:24px;
			padding:16px;
		}
		
		td{
			text-align:center;
			font-size:22px;
			color: #2e1f1f;
			padding: 0px 20px 0px 20px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
			text-shadow: 1px 1px black;
		}
		
		body{
		background-image:url("images/bank locker.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
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
    <button class="primary_btn" style="float: left;" ><box2>HOME</box2></button>
	</a>
</div>
	<h1 style="color:#f5f0f0;text-shadow: 2px 2px black; text-align:left">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	User <box>Information</box></h1>
	<table class="flat-table-1">
		<thead>
			<th>Sr.No.</th>
			<th>Name</th>
			<th>Email</th>
			<th>Credit</th>
			<th>view</th>
		</thead>
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>

            <td>1</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post"  class="view" onclick="openWin()">
					<button class="primary_btn" type="submit" name="name" value="<?php echo  $row["name"]; ?>" >View</button>
				</form>
			</td>
		</tr>
		<tr>		
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn" type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn" type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn" type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
   

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn" type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn"type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td> 7</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn"type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn"type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn"type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="primary_btn"type="submit" name="name" value="<?php echo  $row["name"]; ?>">View</button>
				</form>
			</td>
		</tr>
		</tbody>
	</table><br><br>
	
</body>
</html>
