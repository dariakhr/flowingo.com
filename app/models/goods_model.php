<?php
require_once(UTILS_PATH . 'model.php');

class GoodsModel extends Model {
  public function validate($title) {
    if ($this -> validateEmpty($title)){
      if ($this -> validateLength($title)) {
        if ($this -> validateUnique($title)) {
          return true;
        }
      }
    }
  }
  private function validateEmpty($title) {
    return !empty($title);
  }

  private function validateLength($title) {
    if (strlen($title) >= 5 && strlen($title) <= 50) {
      return true;
    } else {
      return false;
    }
  }

  private function validateUnique($title) {
    return (!($this -> findBy(['title' => $title])));
  }


}

?>
