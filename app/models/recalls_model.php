<?php
require_once( UTILS_PATH . 'model.php');

class RecallsModel extends Model {
  private $phone_number;
  public function validate($phone_number) {
    $this -> phone_number = $phone_number;
    if ($this -> validateEmpty() && $this -> validateType()){
      if ($this -> validatePlus()) {
        if ($this -> validateLength()) {
          return true;
        }
      }
    }
  }
      private function validateEmpty() {
        return !empty($this -> phone_number);
      }
      private function validateLength() {
        if (strlen($this -> phone_number) >= 10 && strlen($this -> phone_number) <= 14) {
          return true;
        } else {
          return false;
        }
      }

      private function validateType() {
        $num = strlen($this -> phone_number);
        if (is_numeric($num)) {
          return true;
      }else{
        return false;
       }
     }

      private function validatePlus() {
        $number_arr = str_split($this -> phone_number);
        $arr_part = $number_arr[0];
        if ($arr_part == '+') {
          return true;
        } else {
          return false;
        }
      }

    }
?>
