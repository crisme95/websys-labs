<?php
$user = 'root';
$pass = '';

// Create connection
$dbconn = new PDO("mysql:host=localhost;dbname=websys_quiz", $user, $pass);

function addDiscount($price, $discount)
{
  return $price * $discount;
}

// prices without discounts
$sql1 = "SELECT * FROM items ORDER BY price";
$stmt1 = $dbconn->query($sql1);
$rowsListWithoutDiscount = $stmt1->fetchAll();

// prices with discounts
$sql2 = "SELECT * FROM discounts";
$stmt2 = $dbconn->query($sql2);
$rowsWithDiscount = $stmt2->fetchAll();

// average price with discounts
$sql3 = "SELECT discounts, items, items.price * discounts.discount as total_discount WHERE items.id = discount.item_id";
// $stmt3 = $dbconn->query($sql3);
// $avgDiscount = $stmt3->fetchAll();

?>

<!DOCTYPE html>
<html>

<head>
  <title>HOME</title>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="assets/style.css" />
  <script src="assets/script.js" defer></script>
</head>

<body>
  <form method="POST" action="index.php">
    <input class="button" type="submit" name="listWithoutDiscount" value="Items straight up">
    <input class="button" type="submit" name="listWithDiscount" value="Items discount">
    <input class="button" type="submit" name="avgDiscount" value="average discount">
  </form>

  <?php
  if (isset($_POST['listWithoutDiscount'])) {
    foreach ($rowsListWithoutDiscount as $price) {
      printf("%s: %s<br>", $price['item_name'], $price['price']);
    }
  }

  if (isset($_POST['listWithDiscount'])) {
    foreach ($rowsListWithoutDiscount as $price) {
      $finalPrice = $price['price'];
      $discountAmt = 0;
      foreach ($rowsWithDiscount as $discount) {
        if ($price['id'] == $discount['item_id']) {
          $finalPrice = addDiscount($price['price'], $discount['discount']);
          $discountAmt = $discount['discount'];
        }
      }
      printf("%s: %s with %s discount<br>", $price['item_name'], $finalPrice, $discountAmt);
    }
  }

  if (isset($_POST['avgDiscount'])) {
    printf($price);
  }

  ?>

</body>

</html>