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
			font-size: 20px;
		}
		.phpp{
			background: white;
		}
		table,th,td{
			border: 1px solid pink;
			min-width: 270px;
			background-color: black;
            color: white;
			text-align: center;
		}
        div{
            height: 800px;
        }
	</style>
<!---top links--->
<p><a href="index.php">Home</a>
<a href="Products.php">Products</a>
<a href="about.php">About</a>
<a href="webpage.php">Question 1</a>
<a href="enquiries.php">Enquiries</a></p>
	<div>
		<h1>Your Enquiry</h1>
	

	<section class="phpp">
		<center>
<table>
     	<tr>
     		<th> NAME</th>
     		<th> PHONE</th>
     		<th> EMAIL</th>
     		<th> MEMO</th>
     		<th> RESPONSE</th>
     	</tr>
   
     </table>

        <?php
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $memo = $_POST['memo'];



$connection = mysqli_connect("sql7.freemysqlhosting.net", "sql7539470", "7cFyHihYHx");
$db = mysqli_select_db($connection, 'sql7539470');

if (isset($_POST["search"])) {

	$sql = "SELECT * FROM enquiry where memo = '$memo'";

	$result = mysqli_query($connection,$sql);

	while ($row = mysqli_fetch_array($result)) {
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
</div>
<br>
</center>
</body>
</html>