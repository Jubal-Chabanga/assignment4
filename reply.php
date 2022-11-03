<?php
  include("configuration.php");
   session_start();
$memo = $_REQUEST['memo'];
$response = $_REQUEST['response'];
// Performing insert query execution
$sql = "SELECT * FROM enquiry where memo = '$memo'";
$sql = "UPDATE enquiry SET response = '$response' WHERE memo = '$memo'";

if ($conn->query($sql) == TRUE) {
  header("location: retrieve.php");
  echo ("Your enquiry has been sent."); 

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



UPDATE `enquiry` SET `name`='[value-1]',`phone`='[value-2]',`email`='[value-3]',`memo`='[value-4]',`response`='[value-5]' WHERE 1