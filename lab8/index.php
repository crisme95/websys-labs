<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>HOME</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css" />
    <script src="assets/script.js" defer></script>
  </head>

  <body>
    <h1 class="banner">Welcome to Web Systems Development Fall 2021</h1>

    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="greeting">Hello, <?php echo $_SESSION['RCSID']; ?></h1>
        </div>
        <div class="col">
          <a class="btn btn-primary" id="logoutbtn" href="logout.php">Logout</a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <nav class="navbar bg-light">
            <h2 class="navHeader">Lectures</h2>
            <div class="container-fluid">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    All Lectures for Fall 2021
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="lecturesNav">
                  </ul>
                </li>
              </ul>
            </div>
            <h2 class="navHeader">Labs</h2>
            <div class="container-fluid">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    All Labs for Fall 2021
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="labsNav">
                  </ul>
                </li>
              </ul>
            </div>
            <div class="container-fluid">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="btn pull-right" onclick="loadJSON()">Click to Refresh</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <!-- output box for the selected JSON data -->
        <div class="col" id="displayContent">
        </div>
      </div>
    </div>

    <!-- form to archive information into database -->
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 id="formHeader">Want to archive a post?</h2>
          <form action="index.php" method="POST">
            <input class="form-control" type="text" name="title">
            <div id="formText" class="form-text">Copy title here</div><br>
            <input class="form-control" type="text" name="description">
            <div id="formText" class="form-text">Copy description here</div><br>
            <input class="form-control" type="text" name="link">
            <div id="formText" class="form-text">Right click on link and copy here</div><br>
            <button class="btn" id="arcSubmit" name="arcSubmit" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>

  </body>

  </html>

<?php
  $dbhost = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "websyslab8";

  $conn = new PDO("mysql:host=localhost;dbname=websyslab8", $dbusername, $dbpassword);
  if (!$conn) {
    echo "Connection failed!";
  }

  // insert the data in the archive form into the table
  if (isset($_POST['arcSubmit'])) {
    $RCSID = $_SESSION['RCSID'];
    // echo $RCSID;
    $title = $_REQUEST['title'];
    // echo $title;
    $description = $_REQUEST['description'];
    // echo $description;
    $link = $_REQUEST['link'];
    // echo $link;

    $sqlArc = "INSERT INTO websyslab8.archive (RCSID, title, descrip, link) VALUES ('$RCSID', '$title', '$description', '$link')";
    $stmtArc = $conn->query($sqlArc);
  }
} else {
  header("Location: login.php");
  exit();
}



?>