
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Enrollment History</title></head>
<body>
<h2>Enrollment History</h2>
<form method="get">
    Enter Student ID: <input type="text" name="student_id">
    <input type="submit" value="Search">
</form>
<?php
if (!empty($_GET['student_id'])) {
    $id = $_GET['student_id'];
    $sql = "SELECT * FROM enrollments WHERE student_id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>Course Code</th><th>Title</th><th>Semester</th><th>Grade</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['course_code']}</td>
                    <td>{$row['course_title']}</td>
                    <td>{$row['semester']}</td>
                    <td>{$row['grade'] ?? 'N/A'}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No data available</p>";
    }
}
?>
<nav>
    <a href="add_student.php">Add Student</a> |
    <a href="student_list.php">Student List</a> |
    <a href="enroll_course.php">Enroll in Course</a> |
    <a href="enrollment_history.php">Enrollment History</a>
</nav>
</body>
</html>
