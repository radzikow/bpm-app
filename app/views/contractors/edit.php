<?php
include("../../../path.php");
include('../../controllers/contractorsController.php');

$currentPage = 'contractors';
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
  <link rel="stylesheet" href="../../../assets/css/reset.css">
  <!-- Main styles -->
  <link rel="stylesheet" href="../../../assets/css/main.css">

</head>

<body id="body" class="preload">

  <!-- Page wrapper -->
  <div class="page-wrapper">

    <!-- Left section (sidebar) -->
    <?php include(ROOT_PATH . '/app/includes/sidebar.inc.php'); ?>

    <!-- Right section (content) -->
    <div id="right" class="content">

      <!-- Top nav/header -->
      <?php include(ROOT_PATH . '/app/includes/header.inc.php'); ?>

      <h1>Tabela kontrahentów</h1>

      <div class="content-row">

        <div class="action-btn-wrapper">
          <a href="contractors.php" class="action-btn"><i class="fas fa-angle-double-left"></i></a>
        </div>

        <form action="edit.php" method="POST">

          <!-- ID -->
          <input type="hidden" value="<?php echo $_GET['id']; ?>" name="id">

          <!-- NIP -->
          <div>
            <label class="label">NIP</label>
            <input class="input" type="text" name="nip" value="<?= $nip; ?>">
            <?php echo "<p class='error-msg'>$errors[nipError]</p>" ?>
          </div>

          <!-- REGON -->
          <div>
            <label class="label">REGON</label>
            <input class="input" type="text" name="regon" value="<?= $regon; ?>">
            <?php echo "<p class='error-msg'>$errors[regonError]</p>" ?>
          </div>

          <!-- NAME -->
          <div>
            <label class="label">Nazwa</label>
            <input class="input" type="text" name="name" value="<?= $name; ?>">
            <?php echo "<p class='error-msg'>$errors[nameError]</p>" ?>
          </div>

          <!-- STREET -->
          <div>
            <label class="label">Ulica</label>
            <input class="input" type="text" name="street" value="<?= $street; ?>">
            <?php echo "<p class='error-msg'>$errors[streetError]</p>" ?>
          </div>

          <!-- NUM1 -->
          <div>
            <label class="label">Numer domu</label>
            <input class="input" type="text" name="num1" value="<?= $num1; ?>">
            <?php echo "<p class='error-msg'>$errors[num1Error]</p>" ?>
          </div>

          <!-- NUM2 -->
          <div>
            <label class="label">Numer mieszkania</label>
            <input class="input" type="text" name="num2" value="<?= $num2; ?>">
            <?php echo "<p class='error-msg'>$errors[num2Error]</p>" ?>
          </div>

          <!-- VAT -->
          <div>
            <label class="label">Czy kontrahent jest płatnikiem VAT?</label>
            <?php if ($vat === 0) : ?>
              <input style="width: auto;" class="input" type="checkbox" name="vat">
            <?php else : ?>
              <input style="width: auto;" class="input" type="checkbox" name="vat" checked>
            <?php endif; ?>
          </div>

          <!-- Status -->
          <div>
            <input class="input" type="checkbox" name="status" checked style="opacity:0; position:absolute;">
          </div>

          <br>

          <!-- SUBMIT -->
          <div style="float: right;" class="action-btn-wrapper">
            <input type="submit" name="updateContractor" class="action-btn" value="Zapisz zmiany">
          </div>

        </form>

      </div>

    </div>
  </div>

  <!-- JavaScript -->
  <script src="<?= BASE_URL; ?>/assets/js/script.js"></script>

  <!-- Check sidebarStatus -->
  <script src="<?= BASE_URL; ?>/assets/js/sidebarStatus.js"></script>

</body>

</html>