<?php

$user = 'root';
$pass = '';

// Create connection
$dbconn = new PDO("mysql:host=localhost;dbname=websyslab7", $user, $pass);

$sql1 = 'SELECT * from students ORDER BY RIN, lastname, RCSID, firstname';
$sql2 = 'SELECT students.RIN, students.firstname, students.lastname, students.address, grades.grade FROM students INNER JOIN grades ON students.RIN = grades.RIN WHERE grade > 90';
$sql3 = 'SELECT courses.*, COUNT(grades.crn) as students_enrolled FROM courses LEFT JOIN grades ON courses.crn = grades.crn GROUP BY courses.crn';
$stmt1 = $dbconn->query($sql1);
$stmt2 = $dbconn->query($sql2);
$stmt3 = $dbconn->query($sql3);
$rowsRIN = $stmt1->fetchALL();
$rowsGrades = $stmt2->fetchAll();
$rowsEnrolled = $stmt3->fetchAll();

if (isset($_POST['returnStudent'])) {
  foreach ($rowsRIN as $student) {
    printf("RIN: %s, Lastname: %s, RCSID: %s, Firstname: %s <br>", $student['RIN'], $student['lastname'], $student['RCSID'], $student['firstname']);
  }
}

if (isset($_POST['returnGrade'])) {
  foreach ($rowsGrades as $grade) {
    printf("RIN: %s, Name: %s %s, Address: %s <br>", $grade['RIN'], $grade['firstname'], $grade['lastname'], $grade['address']);
  }
}

if (isset($_POST['returnEnrolled'])) {
  foreach ($rowsEnrolled as $enrolled) {
    printf("Course: %s, Enrolled: %s <br>",  $enrolled['title'], $enrolled['students_enrolled']);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Web Systems Lab 7: Gradebook</title>
  <meta charset="utf-8">
</head>

<body>
  <form method="post" action="index.php">
    <input type="submit" name="returnStudent" value="See Students">
    <input type="submit" name="returnGrade" value="See Grades above 90">
    <input type="submit" name="returnEnrolled" value="See students enrolled in each course">
  </form>
</body>

</html>