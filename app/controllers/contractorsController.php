<?php

include('../../db/db.php');
include(ROOT_PATH . '/app/helpers/validateContractor.php');

// Main table on which we work
$table = 'contractors';

// Declare variables
$errors = array();
$errors['nipError'] = '';
$errors['regonError'] = '';
$errors['nameError'] = '';
$errors['vatError'] = '';
$errors['streetError'] = '';
$errors['num1Error'] = '';
$errors['num2Error'] = '';

$id = '';
$nip = '';
$regon = '';
$name = '';
$vat = '';
$street = '';
$num1 = '';
$num2 = '';
$status = '';


// ========================================
// Get all contractors.
// ========================================
$contractors = selectAll($table);


// ========================================
// Get contractor by id.
// ========================================
if (isset($_GET['id'])) {
  $contractor = selectOne($table, ['id' => $_GET['id']]);

  $id = $contractor['id'];
  $nip = $contractor['nip'];
  $regon = $contractor['regon'];
  $name = $contractor['name'];
  $vat = $contractor['vat'];
  $street = $contractor['street'];
  $num1 = $contractor['num1'];
  $num2 = $contractor['num2'];
  $status = $contractor['status'];
}


// ========================================
// Add a new contractor (when the button with name "addContractor" is clicked).
// ========================================
if (isset($_POST['addContractor'])) {

  $errors = validateContractor($_POST);

  if (count($errors['errNum']) === 0) {

    unset($_POST['addContractor']);

    $_POST['vat'] = isset($_POST['vat']) ? 1 : 0;

    $_POST['status'] = isset($_POST['status']) ? 1 : 0;

    // $_POST['user_id'] = $_SESSION['id'];
    // $_POST['published'] = isset($_POST['published']) ? 1 : 0;

    $contractor_id = create($table, $_POST);

    // $_SESSION['message'] = 'Post created successfully.';
    // $_SESSION['type'] = 'page-msg-success';
    header("Location: " . BASE_URL . "/app/views/contractors/contractors.php");
    exit();

    // If errors occur, then..
  } else {
    // Leave the inputs values, so that the user can correct them
    $nip = $_POST['nip'];
    $regon = $_POST['regon'];
    $name = $_POST['name'];
    $street = $_POST['street'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $vat = isset($_POST['vat']) ? 'on' : '';
  }
}


// ========================================
// Update the contractor (when the button with name "updateContractor" is clicked).
// ========================================
if (isset($_POST['updateContractor'])) {

  $errors = validateContractor($_POST);

  if (count($errors['errNum']) === 0) {

    $id = $_POST['id'];

    unset($_POST['updateContractor']);
    unset($_POST['id']);

    $_POST['vat'] = isset($_POST['vat']) ? 1 : 0;

    $_POST['status'] = isset($_POST['status']) ? 1 : 0;

    // $_POST['user_id'] = $_SESSION['id'];
    // $_POST['published'] = isset($_POST['published']) ? 1 : 0;

    $count = update($table, $id, $_POST);

    // $_SESSION['message'] = 'Post updated successfully.';
    // $_SESSION['type'] = 'page-msg-success';
    header("Location: " . BASE_URL . "/app/views/contractors/contractors.php");
    exit();

    // If errors occur, then..
  } else {
    // Leave the inputs values, so that the user can correct them
    $nip = $_POST['nip'];
    $regon = $_POST['regon'];
    $name = $_POST['name'];
    $street = $_POST['street'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $vat = ($_POST['vat'] === 1) ? 'on' : '';
  }
}


// ========================================
// Delete the post (when the button 'delete' is clicked).
// ========================================
if (isset($_GET['del_id'])) {

  $id = $_GET['del_id'];

  // Change contractor status from 1 to 0
  $status = ['status' => 0];

  $count = update($table, $id, $status);

  // $_SESSION['message'] = 'Post deleted successfully.';
  // $_SESSION['type'] = 'page-msg-success';

  header("Location: " . BASE_URL . "/app/views/contractors/contractors.php");
  exit();
}
