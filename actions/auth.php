<?php
  require_once('../models/user_model.php');

  $email = $_POST['email'];
  $password = $_POST['password'];
  $errors = [];
  $status = 'error';

  if (checkEmail($email, $password)) {
    $status = 'success';
    session_start();
    $_SESSION['is_authenticated'] = '1';
  }else {
    array_push($errors, 'Пользователь с такими данными не зарегистрирован');
  }

  echo json_encode(['status' => $status, 'errors' => $errors]);

  function checkEmail($email, $password) {
    $data = ['email' => $email, 'password' => $password];
    $find_user = new UserModel();
    return $find_user -> findBy($data) != NULL;
  }

?>
