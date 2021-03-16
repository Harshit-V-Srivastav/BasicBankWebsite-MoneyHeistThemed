<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
?>


<html>
<head>
   <title>Transfer Details</title>
   <link rel="shortcut icon" href="images/personal.png">
    <link rel="stylesheet" href="buttons.css">
	
  
	<style>
		body{
			background-color: rgb(47,137,158);
			background-image:url("images/bank-vault.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.form{
			text-align:center;
			
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
		table{
			background-color: gray ;
			padding:50px;
			border:4px solid #940000;
		}
		
	</style>
</head>
<body>
	<center>
		<div class="buttons">
	<a href="index.php">
    <button class="primary_btn" style="float: left;" >HOME</button>
	</a>
</div>
		<h2 style=" font-family:Compacta; font-size: 50px;color:#f7f5f5;text-shadow: 2px 2px  black;text-align: left;">
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		Transfer <box>Details</box> </h2>
		<div class="view">
			<form action="checkcredit.php" method="post" >
				<div class="border">
				<table>	
					<tr>
						<td style="font-size:15pt;color:#010114;text-shadow: 1px 1px  black;">
							<label for="sender" align="left">From :</label>
						<label style="font-size:15pt;color:#010114;text-shadow: 1px 1px  black;text-align: left;"><?php echo $name1?></label>
			</td>
		</tr><br>	
					<tr>
					
						<td style="font-size:15pt;color:#010114;text-shadow: 1px 1px  black;">
							<label for="sender" align="left">Send to:</label>
							&nbsp; <select name="receiver" style="font-size: 15pt; height: 28px; width:290px;text-shadow: 1px 1px  black;">
           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
			</td>
		</tr><br><br>
		<tr>
			<td style="font-size:15pt;color:#010114;text-shadow: 1px 1px  black;">
			<br><label for="transfer">Amount to be transferred:</label> 
			 <input type="number" min='1' name="transfer" style="font-size: 12pt; height: 28px; width:290px;" required></td>
		</tr>
       <tr>
			<td>
				<div class="button" style="float: center;">
				<br>
				<button type="submit" class="primary_btn" onMouseOver="this.style.color='white'"onMouseOut="this.style.color='black'" value="Credit" style="float: center;color:black;font-size:18px;">Transfer</button>
				</div>
				<br>
					
		   </td>
        </tr>
       </table>
	   </div>
      </form>
    </div><br>
	<form action="user.php" method="post">
					<div class="button"  >
					<button class="primary_btn" type="submit" name="name" value="<?php echo $name1 ?>"
					onMouseOver="this.style.color='white'"onMouseOut="this.style.color='black'"style="color:black;font-size:18px;float: center;">
					GO BACK</button>
					</div>
					</form>
	
</center>
</body>
</html>