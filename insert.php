<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/g5_classrec/resource/php/class/core/init.php';
$config = new config();
$con = $config->con();
// Get input values
$postArea = $_POST["postArea"];
$bastaid = $_POST["bastaid"];

// Insert data
$sql = "INSERT INTO tbl_post (`post` , `posted_by`) VALUES ('$postArea' , '$bastaid')";
$data = $con->prepare($sql);

if ($data->execute()) {
    header("Location: template.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>