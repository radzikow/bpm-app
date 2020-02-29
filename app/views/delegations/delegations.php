<?php
include("../../../path.php");
include('../../controllers/delegationsController.php');

$currentPage = 'delegations';
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

      <h1>Tabela delegacji</h1>

      <div class="content-row">

        <table>

          <thead>
            <tr>
              <th>Lp.</th>
              <th>Imię i nazwisko</th>
              <th>Data od</th>
              <th>Data do</th>
              <th>Miejsce wyjazdu</th>
              <th>Miejsce przyjazdu</th>
            </tr>
          </thead>

          <tbody>
            <?php if (!empty($delegations)) : ?>
              <?php foreach ($delegations as $index => $delegation) : ?>
                <tr>
                  <td><?= $index + 1 . '.'; ?></td>
                  <td><?= $delegation['name']; ?></td>
                  <td><?= $delegation['date_from']; ?></td>
                  <td><?= $delegation['date_to']; ?></td>
                  <td><?= $delegation['city_from']; ?></td>
                  <td><?= $delegation['city_to']; ?></td>
                </tr>
              <?php endforeach; ?>
            <?php else : ?>
              <p>Brak rekordów w bazie danych</p>
            <?php endif; ?>

          </tbody>

        </table>
      </div>

    </div>
  </div>

  <!-- JavaScript -->
  <script src="<?= BASE_URL; ?>/assets/js/script.js"></script>

  <!-- Check sidebarStatus -->
  <script src="<?= BASE_URL; ?>/assets/js/sidebarStatus.js"></script>

</body>

</html>