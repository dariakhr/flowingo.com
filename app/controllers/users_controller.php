<?php
  require_once(UTILS_PATH . 'controller.php');

  class UsersController extends Controller {
    public function index() {
      // $user_id = $_POST['id'];
      // $user = $this -> model -> find($user_id);
      $this -> view -> render('/users/index.php');
    }
    public function show() {
      $this -> view -> render('users/show.php');
    }
  }

?>
