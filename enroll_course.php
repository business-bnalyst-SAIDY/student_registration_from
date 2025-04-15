
<!DOCTYPE html>
<html>
<head><title>Course Enrollment</title></head>
<body>
<h2>Course Enrollment</h2>
<form action="insert_enrollment.php" method="post">
    Student ID*: <input type="text" name="student_id" required><br>
    Course Code*: <input type="text" name="course_code" required><br>
    Course Title: <input type="text" name="course_title"><br>
    Semester: <select name="semester">
        <option value="Fall">Fall</option>
        <option value="Spring">Spring</option>
    </select><br>
    <input type="submit" value="Enroll">
</form>
<nav>
    <a href="add_student.php">Add Student</a> |
    <a href="student_list.php">Student List</a> |
    <a href="enroll_course.php">Enroll in Course</a> |
    <a href="enrollment_history.php">Enrollment History</a>
</nav>
</body>
</html>
