<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title>User <?php echo $name?></title>
	<link rel="shortcut icon" href="images/personal.png">
    <link rel="stylesheet" href="buttons.css">
	
	
	<style>
		body {
			font-family: "Lato", sans-serif;
			margin: 0px;
			text-align:center;
			}

		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			}
		th{
			color:black;
			font-size:24px;
			padding:16px;
			text-shadow: 1.5px 1.5px  black;
		}
		
		td{
			font-size:22px;
			text-shadow: 2px 2px  black;
			color: #ffffff;
			padding: 11px 16px 11px 18px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		body{
			background-image:url("images/mask.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size:cover;
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
		<h2 style=" font-family:Compacta; font-size: 50px;color:#f7f5f5;text-shadow: 2px 2px  black; text-align: left;">
		&nbsp &nbsp &nbsp &nbsp &nbsp Personal Details <box>of </box>&nbspthe user </h2>
       
	<br><br><br>
    <div class="view">
       <table class="flat-table-1" >
			<tr>
				<th>Name :</th>
				<td><?php echo $name?></td>
			</tr>
			
			<tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th>Email :</th>
				<td><?php echo $mail?></td>
			</tr>
           
           <tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th> Credits :</th>
				<td><?php echo $amount?></td>
			</tr>


        </table>

        </div>
		<br>
        <br>
     <div class="primary_btn">
	<a href="transfer.php">
		<button class="primary_btn"><box2> Transfer To</box2></button>
	</a>
	</div>
	<br>
	<br>

               
    <div class="primary_btn">
		<a href="ministatement.php">
		<button class="primary_btn"><box2>Mini Statement</box2></button>
		</a>
	</div>

	<br>
	<br>

               
    <div class="primary_btn">
		<a href="userinformation.php">
		<button class="primary_btn"><box2>Go Back</box2></button>
		</a>
	</div>
    
	  


    </body>
</html>