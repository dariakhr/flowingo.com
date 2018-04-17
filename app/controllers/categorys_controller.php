<?php
require_once(UTILS_PATH . '/controller.php');

final class CategorysController extends Controller {

  public function show() {
    $category = $this -> category;
    echo($category['title']);
  }

}
?>
