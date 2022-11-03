<?php
/*
  include("configuration.php");
   session_start();
$name =  $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email =  $_REQUEST['email'];
$memo = $_REQUEST['memo'];
$response = $_REQUEST['response'];
// Performing insert query execution

$sql = "INSERT INTO enquiry VALUES ('$name','$phone','$email','$memo','$response')";
if ($conn->query($sql) == TRUE) {
  header("location: enquiries.php");
  echo ("Your enquiry has been sent."); 

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();*/
?>

---------------------------------------------------------------------------------------------------------------------

<link rel="stylesheet" type="text/css" href="style.css"><style type="text/css">
    body{
      background-size: cover;
      font-size: 50px;
      font-family: 'Edwardian Script ITC';
      text-align: center;
      color: gray; 
    }
    .phpp{
      background: white;
    }
  </style>


<?php
  include("configuration.php");
   session_start();

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$memo = $_POST['memo'];

if (!empty($name) || !empty($phone) || !empty($email) || !empty($memo)) {
  $host = "sql7.freemysqlhosting.net";
  $dbUsername = "sql7539470";
  $dbPassword = "7cFyHihYHx";
  $dbname = "sql7539470";
  $portno = 3306;


  //connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname, $portno);
  if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
  } else{
    $SELECT = "SELECT email, memo From enquiry Where email= ? AND memo=? Limit 1";
    $INSERT = "INSERT Into enquiry (name, phone, email, memo) values(?,?,?,?)";

    //prepare statement
$stmt = $conn->prepare($SELECT);
$stmt->bind_param("ss", $email, $memo);
$stmt->execute();
$stmt->bind_result($email,$memo);
$stmt->store_result();
$rnum = $stmt->num_rows;

if ($rnum==0) {
  $stmt->close();

  $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("siss", $name, $phone, $email, $memo);
    $stmt->execute();
    echo "Enquiry sent successfully! Thank you for communicating with us <3";
} else{
  echo "Dear user, this enquiry has been sent and already and is being processed!";
  }
  $stmt->close();
  $conn->close();
}
}
 else
echo "Please fill in missing fields!";
die()

?>
