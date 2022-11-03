&nbsp<!DOCTYPE html>
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
<body>	

	<span>ENQUIRY FORM </span>
<!---top links--->
<p><a href="index.php">Home</a>
<a href="Products.php">Products</a>
<a href="about.php">About</a>
<a href="webpage.php">Question 1</a>
<a href="enquiries.php">Enquiries</a></p>

<!---inserting into form--->
	<form action="insert.php" id="form" method="POST">
		
	<label for="name" id="nm">Name: &nbsp </label>
<div class="input_ctrl">
	<input placeholder="Jubal Chabanga" name="name" id="name" type="text"><br>
	<div class="error"></div>
</div>

	<label for="phone" id="ph">Phone: &nbsp</label>
<div class="input_ctrl">
	<input placeholder="0774534567" name="phone" id="phone" type="n"><br>
	<div class="error"></div>
</div>

	<label for="name" id="em">Email: &nbsp</label>
<div class="input_ctrl">
	<input placeholder="jubalchabanga@gmail.com" name="email" id="email"> <br>
	<div class="error"></div>
</div>

	<label for="memo" id="me">Memo: &nbsp</label>
<div class="input_ctrl">
     <textarea id="memo" name="memo" rows="3" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     consequat."></textarea> 
     <div class="error"></div>
</div>

  <br> <br>
<!---buttons--->
     
     <button type="submit" formaction="insert.php" id="submit" > SUBMIT </button>&nbsp
     <button type="reset"  id="submit" > CLEAR </button>&nbsp
     <button type="check on inquiry" formaction="checkr.php"  id="submit" name="search" > Check on inquiry </button>


</body>
</html>
