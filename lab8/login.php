<!-- Insecure login form -->

<!DOCTYPE html>

<html>

<head>
  <title>LOGIN</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/style.css" />
  <script src="assets/script.js" defer></script>
</head>

<body>
  <h1 class="banner">Please log in to access Web Systems Development Fall 2021</h1>
  <div class="container">
    <div class="row">
      <div class="col">
        <div id="loginForm">
          <form action="db.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <input class="form-control" type="text" name="username" placeholder="Username"><br />
            <input class="form-control" type="password" name="password" placeholder="Password"><br />
            <button id="loginbtn" type="submit" class="btn">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>