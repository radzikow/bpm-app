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
          <a href="create.php" id="addNewContractor" class="action-btn">Dodaj kontrahenta</a>
        </div>

        <table>

          <thead>
            <tr>
              <th>Lp.</th>
              <th>NIP</th>
              <th>REGON</th>
              <th>Nazwa</th>
              <th>Płatnik VAT</th>
              <th>Ulica</th>
              <th>Nr domu</th>
              <th>Nr mieszkania</th>
            </tr>
          </thead>

          <tbody>
            <?php if (!empty($contractors)) : ?>
              <?php foreach ($contractors as $index => $contractor) : ?>
                <?php if ($contractor['status']) : ?>
                  <tr>
                    <td><?= $index + 1 . '.'; ?></td>
                    <td><?= $contractor['nip']; ?></td>
                    <td><?= $contractor['regon']; ?></td>
                    <td><?= $contractor['name']; ?></td>
                    <?php if ($contractor['vat'] === 0) : ?>
                      <td><?= 'Nie'; ?></td>
                    <?php else : ?>
                      <td><?= 'Tak'; ?></td>
                    <?php endif; ?>
                    <td><?= $contractor['street']; ?></td>
                    <td><?= $contractor['num1']; ?></td>
                    <td><?= $contractor['num2']; ?></td>
                    <td class="contractor-action-btn">
                      <i class="fas fa-ellipsis-v"></i>
                      <span id="contractorActionDiv<?= $contractor['id']; ?>" class="contractor-action-div">
                        <ul>
                          <a href="edit.php?id=<?= $contractor['id']; ?>">
                            <li><i class="far fa-edit"></i><span>Edytuj</span></li>
                          </a>
                          <a href="edit.php?del_id=<?= $contractor['id']; ?>">
                            <li><i class="far fa-trash-alt"></i><span>Usuń</span></li>
                          </a>
                        </ul>
                      </span>
                    </td>
                  </tr>
                <?php endif; ?>
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