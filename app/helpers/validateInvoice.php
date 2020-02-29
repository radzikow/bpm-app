<?php

// ========================================
// Validate invoice.
// ========================================
function validateInvoice($invoice)
{
  $errNum = array();

  // Declare error names
  $netError = "";
  $quantityError = "";

  // Net validation
  if (empty($invoice['net'])) {
    $netError = "Podaj kwotę netto";
    array_push($errNum, 1);
  } else {
    $net = test_input($invoice["net"]);
    if (preg_match("/^[a-zA-Z\s]+$/", $net) || preg_match("/^[\'^£$%&*()}{@#~?><>,.|=_+¬-]/", $net)) {
      $netError = "Kwota netto musi być liczbą";
      array_push($errNum, 1);
    }
  }

  // Quantity validation
  if (empty($invoice['quantity'])) {
    $quantityError = "Podaj ilość";
    array_push($errNum, 1);
  } else {
    $quantity = test_input($invoice["quantity"]);
    if (!preg_match("/^([0-9]*)$/", $quantity)) {
      $quantityError = "Ilość musi być liczbą";
      array_push($errNum, 1);
    }
  }

  $result = ['errNum' => $errNum, 'netError' => $netError, 'quantityError' => $quantityError];

  return $result;
}


// ========================================
// Helper function used for validation.
// ========================================
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
