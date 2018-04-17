<?php
  require_once(UTILS_PATH . '/controller.php');

  final class RecallsController extends Controller {
    public function create() {
      $phone_number = $_POST['recalls'];
      if ($this -> model -> validate($phone_number)) {
      $this -> model -> createBy(['phone_number' => $phone_number]);
        header( 'Location: /');
      }else {
        header( 'Location: /');

      }

  }
}
 ?>
