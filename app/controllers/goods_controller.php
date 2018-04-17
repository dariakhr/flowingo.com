<?php
  require_once(UTILS_PATH . 'controller.php');

  class GoodsController extends Controller {
    public function all() {
      $this -> view -> render('goods/all.php');
    }
    public function index() {
      echo "hey";
    }
     }

?>






















<!-- $all_goods = $this -> model -> selectAll();
$this ->view -> render('goods/all.php', ['all_goods' => $all_goods]); -->
