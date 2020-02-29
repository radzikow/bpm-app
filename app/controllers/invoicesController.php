<?php

include('../../db/db.php');
include(ROOT_PATH . '/app/helpers/validateInvoice.php');

// Main table on which we work
$table = 'invoices';


// ========================================
// Get all invoices.
// ========================================
$invoices = selectAll($table);


// ========================================
// Get all vat rates.
// ========================================
$vat_rates = selectAll('vat');


// ========================================
// Update the invoice (when the button with name 'updateInvoice' is clicked).
// ========================================
if (isset($_POST['updateInvoice'])) {

  $errors = validateInvoice($_POST);

  if (count($errors['errNum']) === 0) {

    $id = $_POST['id'];

    unset($_POST['updateInvoice']);
    unset($_POST['id']);

    $_POST['net'] = trim($_POST['net']);
    $_POST['net'] = stripslashes($_POST['net']);
    $_POST['net'] = htmlspecialchars($_POST['net']);    
    $_POST['net'] = floatval(str_replace(',', '.', $_POST['net']));
    $_POST['net'] = (float) $_POST['net'];

    $count = update($table, $id, $_POST);

    header("Location: " . BASE_URL . "/app/views/invoices/invoices.php");
    exit();

    // If errors occur, then..
  } else {
    // code..
  }
}
