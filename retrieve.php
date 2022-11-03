<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
	<title>gamer.io</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script defer src="scriptr.js" ></script>
	<title>gamer enquiry</title>
</head>

<body >
		<style type="text/css">
		body{
		
			background-size: cover;
			font-size: 15px;
		}

		table,th,td{
			border: 1px solid pink;
			min-width: 295px;
			height: 50px;
			background-color: black;
			color: white;
			text-align: center;
			flex: 1;
		}
        
		input{
			width: 290px;
			height: 45px;
			font-size: 15px;
		}

        form
		{ 
			margin-top: 60px;
			position: relative;
			align-content: center;
			left: 0%;
			height: 100%;
			font-size: 20px;
			width: 80%;
			border: 3px solid black;
			border-style: inset;
			padding: 12px 15px;
		}

        form:hover
		{
			transform: scale(1.05);
			transition: 1.5s;
		}

	

	</style>
	<center>
<!---top links--->
<p><a href="index.php">Home</a>
<a href="Products.php">Products</a>
<a href="about.php">About</a>
<a href="webpage.php">Question 1</a>
<a href="enquiries.php">Enquiries</a></p>

	<div>
		<h1>All Enquiries</h1>
	</div>

<!---inserting into form--->
<form action="reply.php" id="form" method="POST">
		
	
		<label for="memo" id="me">Memo: &nbsp</label>
	<div class="input_ctrl">
		 <textarea id="memo" name="memo" rows="3" placeholder="Paste the memo you want to reply to here"></textarea> 
		 <div class="error"></div>
	</div>

	<label for="response" id="re">Response: &nbsp</label>
	<div class="input_ctrl">
		 <textarea id="re" name="response" rows="3" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		 consequat."></textarea> 
		 <div class="error"></div>
	</div>
	
	  <br> <br>
	<!---buttons--->
		 
		 <button type="submit" formaction="reply.php" id="submit" > SUBMIT </button>&nbsp
		 <button type="reset"  id="submit" > CLEAR </button>	
	
	 	<br> 

	</form>

	<br> <br>
<table>
     	<tr>
     		<th> name</th>
     		<th> phone</th>
     		<th> email</th>
     		<th> memo</th>
     		<th> response</th>
     	</tr>
   
</table>

<?php

$connection = mysqli_connect("sql7.freemysqlhosting.net", "sql7539470", "7cFyHihYHx");
$db = mysqli_select_db($connection, 'sql7539470');

$_POST["search"] = !NULL;
if (isset($_POST["search"])) {

	$sql = 'SELECT * FROM enquiry';

	$result = mysqli_query($connection,$sql);

	while ($row = mysqli_fetch_array($result)) {

        include("configuration.php");
?>

		<table>
			<tr>
			<td> <?php echo $row["name"] ?> </td>
			<td> <?php echo $row["phone"] ?> </td>
			<td> <?php echo $row["email"] ?> </td>
			<td> <?php echo $row["memo"] ?> </td>
			<td> <?php echo $row["response"] ?> </td>
			
		</tr>
	</table>

<?php

	}
 }
 

?>
<br>
</center>
</body>
</html>