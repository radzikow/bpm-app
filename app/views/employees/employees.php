<?php
include("../../../path.php");

$currentPage = 'employees';
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

      <h1>Tabela pracowników</h1>

      <div class="content-row">

        <table>

          <thead>
            <tr>
              <th>Lp.</th>
              <th>Imię</th>
              <th>Nazwisko</th>
              <th>Stanowisko</th>
              <th>Data zatrudnienia</th>
              <th>Ilość dni urlopowych</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>1.</td>
              <td>Jan</td>
              <td>Kowalski</td>
              <td>Wdrożeniowiec systemów IT</td>
              <td>2019-10-10</td>
              <td>26 dni</td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Jan</td>
              <td>Kowalski</td>
              <td>Wdrożeniowiec systemów IT</td>
              <td>2019-10-10</td>
              <td>26 dni</td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Jan</td>
              <td>Kowalski</td>
              <td>Wdrożeniowiec systemów IT</td>
              <td>2019-10-10</td>
              <td>26 dni</td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Jan</td>
              <td>Kowalski</td>
              <td>Wdrożeniowiec systemów IT</td>
              <td>2019-10-10</td>
              <td>26 dni</td>
            </tr>
            <tr>
              <td>5.</td>
              <td>Jan</td>
              <td>Kowalski</td>
              <td>Wdrożeniowiec systemów IT</td>
              <td>2019-10-10</td>
              <td>26 dni</td>
            </tr>
          </tbody>

        </table>


        <h2>Ustawienia</h2>

        <div class="settings-wrapper">

          <div>
            <p>Wybierz kolor wierszy nieparzystych: </p>
            <input type="color" name="evenColor" id="evenColor" class="colorPickerInput" value="#fefefe">

          </div>

          <div>
            <p>Wybierz kolor wierszy parzystych: </p>
            <input type="color" name="oddColor" id="oddColor" class="colorPickerInput" value="#52bcd8">
            <br>

          </div>

          <button id="setNewColors" class="colorBtn">Ustaw nowe kolory</button>

          <button id="setDefaultColors" class="colorBtn">Resetuj kolory</button>
        </div>

      </div>

    </div>

  </div>
  </div>

  <!-- JavaScript -->
  <script src="<?= BASE_URL; ?>/assets/js/script.js"></script>

  <!-- Check sidebarStatus -->
  <script src="<?= BASE_URL; ?>/assets/js/sidebarStatus.js"></script>

  <script>
    // ========================================
    // Set odd and even rows color (employees table).
    // ========================================
    const rows = document.querySelectorAll('table tbody tr');

    const setNewColors = document.getElementById('setNewColors');

    setNewColors.addEventListener('click', () => {
      const evenColor = document.getElementById('evenColor').value;
      const oddColor = document.getElementById('oddColor').value;
      setRowColor(evenColor, oddColor);
    });

    function setRowColor(evenColor, oddColor) {

      for (let i = 0; i < rows.length; i++) {
        if (i % 2 == 0) {
          rows[i].style.background = evenColor;
        }

        if (i % 2 != 0) {
          rows[i].style.background = oddColor;
        }
      }
    }

    const defaultColorsBtn = document.getElementById('setDefaultColors');

    defaultColorsBtn.addEventListener('click', () => {
      setRowColor('#fefefe', 'transparent');
    });
  </script>

</body>

</html>