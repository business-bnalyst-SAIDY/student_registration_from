
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Student Registration</h2>
<form action="insert_student.php" method="post">
    Name*: <input type="text" name="name" required><br>
    Email*: <input type="email" name="email" required><br>
    Student ID: <input type="text" name="student_id"><br>
    Department: 
    <select name="department">
        <option value="">Select</option>
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
    </select><br>
    Major: 
    <select name="major">
        <option value="">Select</option>
        <option value="Software">Software</option>
        <option value="Hardware">Hardware</option>
    </select><br>
    Date of Birth: <input type="date" name="dob"><br>
    Address: <textarea name="address"></textarea><br>
    <input type="submit" value="Submit">
</form>
<nav>
    <a href="add_student.php">Add Student</a> |
    <a href="student_list.php">Student List</a> |
    <a href="enroll_course.php">Enroll in Course</a> |
    <a href="enrollment_history.php">Enrollment History</a>
</nav>
</body>
</html>
