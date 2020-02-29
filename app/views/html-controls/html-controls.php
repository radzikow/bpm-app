<?php
include("../../../path.php");

$currentPage = 'html-controls';
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

      <h1>Różne kontrolki HTML</h1>

      <!-- Dane kontrahenta -->
      <div class="content-row">
        <h2>Dane kontrahenta</h2>
        <table>
          <thead>
            <tr>
              <th>Data</th>
              <th>Kontrahent</th>
              <th>Uwagi</th>
            </tr>
          </thead>
          <tbody>
            <tr class="contractor-details">
              <td>2019-12-05</td>
              <td>
                <div>
                  <p>E-msi company</p>
                  <p>ul. Poznańska 14/2</p>
                  <p>NIP: 123456789</p>
                  <p>REGON: 987654321</p>
                </div>
              </td>
              <td style="max-width: 300px">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit, ullam!</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Listy wyboru -->
      <div class="content-row">
        <h2>Listy wyboru</h2>

        <div class="select-wrapper">
          <p class="select-label">Wybierz kolor:</p>
          <select name="colors" style="margin-bottom: 2em;">
            <option value="Wybierz..">Wybierz..</option>
            <option value="zielony">zielony</option>
            <option value="niebieski">niebieski</option>
            <option value="szary">szary</option>
            <option value="turkusowy">turkusowy</option>
            <option value="granatowy">granatowy</option>
            <option value="czerwony">czerwony</option>
            <option value="biały">biały</option>
          </select>

          <p class="select-label">Wybierz stawkę VAT:</p>
          <select name="vat">
            <option value="Wybierz..">Wybierz..</option>
            <option value="ZW">ZW</option>
            <option value="NP.">NP.</option>
            <option value="0%">0%</option>
            <option value="3%">3%</option>
            <option value="8%">8%</option>
            <option value="23%">23%</option>
          </select>
        </div>

      </div>

      <!-- Lista HTML uporządkowana numerycznie -->
      <div class="content-row">
        <h2>Lista HTML uporządkowana numerycznie</h2>

        <div class="list-wrapper">
          <ul>
            <li>Element pierwszy</li>
            <li>Element drugi</li>
            <li>Element trzeci</li>
            <li>Element czwarty</li>
            <li>Element piąty</li>
          </ul>
        </div>

      </div>

    </div>
  </div>

  <!-- JavaScript -->
  <script src="<?= BASE_URL; ?>/assets/js/script.js"></script>

  <!-- Check sidebarStatus -->
  <script src="<?= BASE_URL; ?>/assets/js/sidebarStatus.js"></script>

</body>

</html>