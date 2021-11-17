<?php

$user = 'root';
$pass = '';

// Create connection
$dbconn = new PDO("mysql:host=localhost;dbname=websyslab7", $user, $pass);

// Code for part 2
$sql1 = 'SELECT * from students ORDER BY RIN, lastname, RCSID, firstname';
$sql2 = 'SELECT students.RIN, students.firstname, students.lastname, students.address, grades.grade FROM students INNER JOIN grades ON students.RIN = grades.RIN WHERE grade > 90';
$sql3 = 'SELECT courses.*, COUNT(grades.crn) as students_enrolled FROM courses LEFT JOIN grades ON courses.crn = grades.crn GROUP BY courses.crn';
$sql4 = 'SELECT courses.*, AVG(grades.grade) as avg_grades FROM courses LEFT JOIN grades ON courses.crn = grades.crn GROUP BY courses.crn';
$stmt1 = $dbconn->query($sql1);
$stmt2 = $dbconn->query($sql2);
$stmt3 = $dbconn->query($sql3);
$stmt4 = $dbconn->query($sql4);
$rowsRIN = $stmt1->fetchALL();
$rowsGrades = $stmt2->fetchAll();
$rowsEnrolled = $stmt3->fetchAll();
$rowsAvgGrade = $stmt4->fetchAll();

// Students insert
if (isset($_POST['studentSubmit'])) {
  $RIN = $_REQUEST['RIN'];
  $RCSID = $_REQUEST['RCSID'];
  $firstname = $_REQUEST['firstname'];
  $lastname = $_REQUEST['lastname'];
  $alias = $_REQUEST['alias'];
  $phone = $_REQUEST['phone'];
  $address = $_REQUEST['address'];

  $sqlStu = "INSERT INTO websyslab7.students (RIN, RCSID, firstname, lastname, alias, phone, address) VALUES ('$RIN','$RCSID','$firstname','$lastname','$alias','$phone','$address')";
  $stmtStu = $dbconn->query($sqlStu);
}

// Courses insert
if (isset($_POST['coursesSubmit'])) {
  $CRN = $_REQUEST['CRN'];
  $prefix = $_REQUEST['prefix'];
  $number = $_REQUEST['number'];
  $title = $_REQUEST['title'];
  $section = $_REQUEST['section'];
  $schoolyear = $_REQUEST['schoolyear'];

  $sqlStu = "INSERT INTO websyslab7.courses (crn, prefix, number, title, section, schoolyear) VALUES ('$CRN','$prefix','$number','$title','$section','$schoolyear')";
  $stmtStu = $dbconn->query($sqlStu);
}

// Grades insert
if (isset($_POST['gradesSubmit'])) {
  $CRNgrade = $_REQUEST['CRNgrade'];
  $RIN = $_REQUEST['RIN'];
  $grade = $_REQUEST['grade'];

  $sqlStu = "INSERT INTO websyslab7.grades (crn, RIN, grade) VALUES ('$CRNgrade','$RIN','$grade')";
  $stmtStu = $dbconn->query($sqlStu);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Web Systems Lab 7: Gradebook</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/style.css">
  <script src="assets/script.js"></script>
</head>

<body>
  <h1>Lab 7: Gradebook</h1>

  <table class="tabs">
    <tr>
      <td>
        <button class=" tabsButton button" onclick="openSelection('Students')">Students</button>
      </td>
      <td>
        <button class="tabsButton button" onclick="openSelection('Grades')">Grades</button>
      </td>
      <td>
        <button class="tabsButton button" onclick="openSelection('Courses')">Courses</button>
      </td>
    </tr>
  </table>

  <form method="post" action="index.php">
    <div id="Students" class="choice" style="display: none">
      <fieldset>
        <legend>Add Students</legend>
        <p>
          <label for="RIN">RIN:</label>
          <input type="text" name="RIN" id="RIN" maxlength="9" value="">
        </p>
        <p>
          <label for="RCSID">RCSID:</label>
          <input type="text" name="RCSID" id="RCSID" value="">
        </p>
        <p>
          <label for="first_name">First name:</label>
          <input type="text" name="firstname" id="first_name" value="">
        </p>
        <p>
          <label for="last_name">Last name:</label>
          <input type="text" name="lastname" id="last_name" value="">
        </p>
        <p>
          <label for="alias">Alias:</label>
          <input type="text" name="alias" id="alias" value="">
        </p>
        <p>
          <label for="phone">Phone:</label>
          <input type="text" name="phone" id="phone" maxlength="10" value="">
        </p>
        <p>
          <label for="address">Address:</label>
          <input type="text" name="address" id="address" value="">
        </p>
        <p>
          <input class="button" type="submit" name="studentSubmit" value="Submit">
          <input class="button" type="submit" name="returnStudent" value="View Students">
        </p>
      </fieldset>
    </div>

  </form>

  <form method="post" action="index.php">
    <div id="Courses" class="choice" style="display:none">
      <fieldset>
        <legend>Add Courses</legend>
        <p>
          <label for="CRN">CRN:</label>
          <input type="text" name="CRN" id="CRN" maxlength="5" value="">
        </p>
        <p>
          <label for="prefix">Prefix:</label>
          <input type="text" name="prefix" id="prefix" maxlength="4" value="">
        </p>
        <p>
          <label for="number">Number:</label>
          <input type="text" name="number" id="number" maxlength="4" value="">
        </p>
        <p>
          <label for="title">Title:</label>
          <input type="text" name="title" id="title" value="">
        </p>
        <p>
          <label for="section">Section:</label>
          <input type="text" name="section" id="section" maxlength="2" value="">
        </p>
        <p>
          <label for="schoolyear">Year:</label>
          <input type="text" name="schoolyear" id="schoolyear" maxlength="4" value="">
        </p>
        <p>
          <input class="button" type="submit" name="coursesSubmit" value="Submit">
          <input class="button" type="submit" name="returnEnrolled" value="View Enrollment">
        </p>
      </fieldset>
    </div>
  </form>

  <form method="post" action="index.php">
    <div id="Grades" class="choice" style="display:none">
      <fieldset>
        <legend>Add Grades</legend>
        <p>
          <label for="CRN2">CRN:</label>
          <input type="text" name="CRNgrade" id="CRN2" maxlength="5" value="">
        </p>
        <p>
          <label for="RIN">RIN:</label>
          <input type="text" name="RIN" id="RIN" maxlength="9" value="">
        </p>
        <p>
          <label for="grade">Grade:</label>
          <input type="text" name="grade" id="grade" maxlength="3" value="">
        </p>
        <p>
          <input class="button" type="submit" name="gradesSubmit" value="Submit">
          <input class="button" type="submit" name="returnGrade" value="View Grades > 90">
          <input class="button" type="submit" name="returnAvg" value="View Average Grades">
        </p>
      </fieldset>
    </div>
  </form>

  <!-- Output of the Students, Enrolled, and Grades buttons -->
  <?php
  if (isset($_POST['returnStudent'])) {
    printf("<table style='border-spacing: 10px'>
    <tr><td>RIN:</td><td>&emsp;Lastname:</td><td>&emsp;Firstname:</td><td>&emsp;RCSID:</tr>");

    foreach ($rowsRIN as $student) {
      printf("<tr><td>%s</td><td>&emsp;%s</td><td>&emsp;%s</td><td>&emsp;%s</td></tr>", $student['RIN'], $student['lastname'], $student['firstname'], $student['RCSID']);
    }
    printf("</table>");

  }

  if (isset($_POST['returnGrade'])) {
    printf("<table style='border-spacing: 10px'>
            <tr><td>RIN:</td><td>&emsp;Name:</td><td>&emsp;Address:</td></tr>");
    foreach ($rowsGrades as $grade) {
      printf("<tr><td>%s</td><td>&emsp;%s %s</td><td>&emsp;%s</td></tr>", $grade['RIN'], $grade['firstname'], $grade['lastname'], $grade['address']);
    }
    printf("</table>");
  }

  if (isset($_POST['returnEnrolled'])) {
    printf("<table style='border-spacing: 10px'>
    <tr><td>Title:</td><td>&emsp;# of Students:</td></tr>");

    foreach ($rowsEnrolled as $enrolled) {
      printf("<tr><td>%s</td><td>&emsp;%s</td></tr>",  $enrolled['title'], $enrolled['students_enrolled']);
    }
  }
  if (isset($_POST['returnAvg'])) {
    printf("<table style='border-spacing: 10px'>
    <tr><td>CRN:</td><td>&emsp;Average Grade:</td></tr>");

    foreach ($rowsAvgGrade as $avggrade) {
      printf("<tr><td>%s</td><td>&emsp;%s</td></tr>", $avggrade['crn'], $avggrade['avg_grades']);
    }
    printf("</table>");

  }
  // end of code for part 2
  ?>

</body>

</html>