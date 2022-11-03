&nbsp<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>gamer.io</title>
	<!---<script defer src="log.js" ></script>--->
	</head>

<body>	

<script>
		function validateForm()
		{
			var name=document.forms["form"]["name"].value;
			var password=document.forms["form"]["password"].value;

			if(name==null||name==""||name!="admin")
			{
				alert("admin name cannot be blank");
				return false;
			}
			else if(password==null||password==""||password !="admin")
			{
			alert("please enter correct password");
			return false;	
			}
			
		}		
	</script>


	<span>ADMIN LOG IN </span>

<p id="links"><a href="index.php">Home</a>
<a href="Products.php">Products</a>
<a href="about.php">About</a>
<a href="webpage.php">Question 1</a>
<a href="enquiries.php"><b>Enquiries</a></p>

<form name="form" action="retrieve.php" id="form" method="POST" onsubmit="validateForm">
			<label for="name" id="name">Admin User Name: &nbsp </label>
			<div class="input_ctrl">
	<input placeholder="Admin" id="name" type="text" name="name"><br>
	<div class="error"></div>
</div>

<br>

	<label for="password" id="pw">Password: &nbsp</label>
	<div class="input_ctrl">
	<input placeholder="passcode" id="password" type="n" name="password"><br>
	<div class="error"></div>
</div>

	
 </div>
  <br> <br>

<!---if admin login details are correct, open link to database with enquiries.---->
<!---   if (name == "admin" && password == "password")--->

<!--<p><a href="retrieve.php"><input name ="search">Access datastore</a></p>-->
<button type="submit" formaction="retrieve.php" id="submit" > SUBMIT </button>&nbsp
<button type="reset"  id="submit" > CLEAR </button>&nbsp
<?php include 'configuration.php';?>

<!--<a href=""><input type="submit" name="search" class="submit" value="Submit"></a>-->
    
</form>

</body>

<!-------
1.to enquiries page.***********
2.create log in form************
3.validate login form.
4.link to database.***********
5.create check button*************
6.check for duplication using a button.************
7.check should require name number and email.*************
8.return/display saved enquiry.*************
-------->


</html>


