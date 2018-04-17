<?php
  require_once('../models/user_model.php');

  $email = $_POST['email'];
  $password = $_POST['password'];
  $status = 'error';
  $errors = [];

  if (validate($email, $password)) {
    if (saveUser($email, $password)){
      $status = 'success';
    }else{
      array_push($errors, 'Что-то пошло не так, попробуйте позже.');
    }
  }else{
    array_push($errors, 'Некорректно введены данные');
  }

  echo json_encode(['status' => $status, 'errors' => $errors]);

  function validate($email, $password) {
    return validateValueEmale($email) && validateValuePassword($password);
  }

  function validateValueEmale($email) {
    return isset($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email) && reviewEmail($email);
  }

  function validateValuePassword($password) {
    return isset($password) && !empty($password) && strlen($password) >= 6;
  }

  function reviewEmail($email) {
    $find_user = new UserModel();
    return $find_user -> findBy(['email' => $email]) == NULL;
  }

  function saveUser($email, $password) {
    $arr = ['email' => $email, 'password' => $password];
    $save_user = new UserModel();
    return $save_user -> createBy($arr);
  }
?>
