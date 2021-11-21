<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Lab 8</title>
  <link rel="stylesheet" href="assets/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="assets/script.js" defer></script>

</head>

<body>
  <h1>Welcome to Web Systems Development Fall 2021</h1>

  <div class="container">
    <div class="row">
      <div class="col">
        <nav class="navbar bg-light">
          <h2>Lectures</h2>
          <div class="container-fluid">
            <ul class="navbar-nav" id="lecturesNav">
            </ul>
          </div>
          <h2>Labs</h2>
          <div class="container-fluid">
            <ul class="navbar-nav" id="labsNav">
              <li class="nav-item">
              </li>
            </ul>
          </div>
        </nav>

      </div>
      <div class="col" id="displayContent">
      </div>
    </div>
  </div>


  <!-- <div id="testing"></div> -->
</body>

</html>