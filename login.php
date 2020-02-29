<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/usersController.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>e-MSI remote task</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
  <!-- Reset CSS -->
  <link rel="stylesheet" href="assets/css/reset.css">
  <!-- Main styles -->
  <link rel="stylesheet" href="assets/css/main.css">
  <!-- JavaScript -->
  <script src="assets/js/script.js" defer></script>

</head>

<body>

  <!-- Page wrapper -->
  <div class="page-wrapper">

    <div class="login-form-wrapper">
      <!-- Login form -->
      <form action="login.php" method="POST" class="login-form">

        <h2 class="form-title">Zaloguj</h2>

        <div>
          <label>Adres e-mail</label>
          <input type="text" name="email" class="text-input">
          <?php echo "<p class='error-msg'>$errors[emailError]</p>" ?>
        </div>
        <div>
          <label>Hasło</label>
          <input type="password" name="password" class="text-input">
          <?php echo "<p class='error-msg'>$errors[passwordError]</p>" ?>
        </div>
        <div class="login-btn-wrapper">
          <button type="submit" name="loginBtn" class="login-btn">Login</button>
        </div>

      </form>
    </div>

  </div>

</body>

</html>