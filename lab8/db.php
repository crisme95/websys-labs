<?php
session_start();

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "websyslab8";

$conn = new PDO("mysql:host=localhost;dbname=websyslab8", $dbusername, $dbpassword);
if (!$conn) {
    echo "Connection failed!";
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: login.php?error=Username is required");
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
        $result = $conn->query($sql);
        if ($result->rowCount() === 1) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            print_r($row);
            if ($row['username'] === $uname && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['RCSID'] = $row['RCSID'];
                $_SESSION['id'] = $row['id'];
                header("Location: index.php");
            }
            print_r($row);
            exit();
        } else {
            header("Location: login.php?error=Incorrect credentials");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}

