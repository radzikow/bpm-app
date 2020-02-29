<?php

include(ROOT_PATH . '/app/db/db.php');
include(ROOT_PATH . '/app/helpers/validateUser.php');

// Main table on which we work
$table = 'users';

// Declare variables
$errors = array();
$errors['emailError'] = '';
$errors['passwordError'] = '';

$id = '';
$firstname = '';
$lastname = '';
$email = '';


// ========================================
// Login user function.
// ========================================
function loginUser($user)
{
  $_SESSION['id'] = $user['id'];
  $_SESSION['firstname'] = $user['first_name'];
  $_SESSION['lastname'] = $user['last_name'];
  $_SESSION['email'] = $user['email'];

  header("Location: " . BASE_URL . "/index.php");
  exit();
}


// ========================================
// Login form.
// ========================================
if (isset($_POST['loginBtn'])) {

  $errors = validateUser($_POST);

  if (count($errors['errNum']) === 0) {

    $user = selectOne($table, ['email' => $_POST['email']]);

    // print_r($_POST);
    // print_r($user);

    print_r($_POST['password']);
    print_r($user['password']);

    if ($_POST['password'] == $user['password']) {
      print('yay');
    }

    if (password_verify($_POST['password'], $user['password'])) {
      print('YAY');
    }


    // if ($user && password_verify($_POST['password'], $user['password'])) {
    //   loginUser($user);
    // } else {
    //   $errors['emailError'] = 'Wrong email or password';
    // }
  }
  $email = $_POST['email'];
}
