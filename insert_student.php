
<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];

if (empty($name) || empty($email)) {
    die("Name and Email are required.");
}

$student_id = $_POST['student_id'];
$dept = $_POST['department'];
$major = $_POST['major'];
$dob = $_POST['dob'];
$address = $_POST['address'];

$sql = "INSERT INTO students (name, email, student_id, department, major, dob, address)
VALUES ('$name', '$email', '$student_id', '$dept', '$major', '$dob', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Student registered successfully.";
} else {
    echo "Error: " . $conn->error;
}
?>
