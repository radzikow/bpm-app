<?php


// ========================================
// Validate user.
// ========================================
function validateUser($user)
{
  $errNum = array();

  // Declare error names
  $emailError = "";
  $passwordError = "";

  // Email validation
  if (empty($_POST["email"])) {
    $emailError = "E-mail is required";
    array_push($errNum, 1);
  }

  // Password validation
  if (empty($_POST["password"])) {
    $passwordError = "Password is required";
    array_push($errNum, 1);
  }

  $result = ['errNum' => $errNum, 'emailError' => $emailError, 'passwordError' => $passwordError];

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
