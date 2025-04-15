
<?php
include 'db.php';

$student_id = $_POST['student_id'];
$course_code = $_POST['course_code'];

if (empty($student_id) || empty($course_code)) {
    die("Student ID and Course Code are required.");
}

$title = $_POST['course_title'];
$semester = $_POST['semester'];

$sql = "INSERT INTO enrollments (student_id, course_code, course_title, semester)
VALUES ('$student_id', '$course_code', '$title', '$semester')";

if ($conn->query($sql) === TRUE) {
    echo "Enrolled successfully.";
} else {
    echo "Error: " . $conn->error;
}
?>
