<?php

// ========================================
// Validate contractor.
// ========================================
function validateContractor($contractor)
{

  $errNum = array();

  // Delare error names
  $nipError = "";
  $regonError = "";
  $nameError = "";
  $vatError = "";
  $streetError = "";
  $num1Error = "";
  $num2Error = "";

  // NIP validation
  if (empty($contractor["nip"])) {
    $nipError = "NIP jest wymagany";
    array_push($errNum, 1);
  } else {
    $nip = test_input($contractor["nip"]);
    if (!preg_match("/^([0-9]*)$/", $nip)) {
      $nipError = "NIP musi składać się wyłącznie z cyfr (0-9)";
      array_push($errNum, 1);
    } else if (strlen($nip) !== 10) {
      $nipError = "NIP musi składać się z 10 cyfr (0-9)";
      array_push($errNum, 1);
    }
  }

  // REGON validation
  if (empty($contractor["regon"])) {
    $regonError = "REGON jest wymagany";
    array_push($errNum, 1);
  } else {
    $regon = test_input($contractor["regon"]);
    if (!preg_match("/^([0-9]*)$/", $regon)) {
      $regonError = "REGON musi składać się wyłącznie z cyfr (0-9)";
      array_push($errNum, 1);
    } else if (strlen($regon) !== 9) {
      $regonError = "REGON musi składać się z 9 cyfr (0-9)";
      array_push($errNum, 1);
    }
  }

  // Name validation
  if (empty($contractor["name"])) {
    $nameError = "Nazwa firmy jest wymagana";
    array_push($errNum, 1);
  } else {
    $name = test_input($contractor["name"]);
    if (strlen($name) < 3) {
      $nameError = "Nazwa firmy musi składać się z minimum 3 znaków";
      array_push($errNum, 1);
    }
  }

  // Street validation
  if (empty($contractor["street"])) {
    $streetError = "Nazwa ulicy jest wymagana";
    array_push($errNum, 1);
  } else {
    $street = test_input($contractor["street"]);
    if (strlen($street) < 3) {
      $streetError = "Nazwa ulicy musi składać się z minimum 3 znaków";
      array_push($errNum, 1);
    }
  }

  // Num1 validation
  if (empty($contractor["num1"])) {
    $num1Error = "Numer domu jest wymagany";
    array_push($errNum, 1);
  } else {
    $num1 = test_input($contractor["num1"]);
    if (strlen($num1) > 6) {
      $num1Error = "Numer domu może składać się z maksymalnie 6 znaków";
      array_push($errNum, 1);
    }
  }

  // Num2 validation
  if (empty($contractor["num2"])) {
    // $num2Error = "Numer mieszkania jest wymagany";
    // array_push($errNum, 1);
  } else {
    $num2 = test_input($contractor["num2"]);
    if (strlen($num2) > 6) {
      $num2Error = "Numer mieszkania może składać się z maksymalnie 6 znaków";
      array_push($errNum, 1);
    }
  }

  $result = ['errNum' => $errNum, 'nipError' => $nipError, 'regonError' => $regonError, 'nameError' => $nameError, 'vatError' => $vatError, 'streetError' => $streetError, 'num1Error' => $num1Error, 'num2Error' => $num2Error];

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
