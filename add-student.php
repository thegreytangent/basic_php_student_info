<?php 

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];


$conn = new mysqli("localhost", "dev", "devs", "student_db");

$sql = "INSERT INTO students (firstname, lastname) VALUES ('".$firstname."', '".$lastname."')";

$conn->query($sql);

header('location: index.php');



