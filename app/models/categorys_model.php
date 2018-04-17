<?php
require_once(UTILS_PATH . 'model.php');

class CategorysModel extends Model {
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

  public function updateTitle($title){
    return $this -> validateEmpty($title) && $this -> validateLength($title) && $this -> validateUnique($title);
  }

  public function selectPosition()  {
    $max_position = $this -> selectMax('position');
    return  ++$max_position;
  }
  // селект католога по возрастанию
  public function selectCatalog() {
    $table_name = $this -> table_name;
    $query = "SELECT * FROM `$table_name` WHERE visible = 1 ORDER BY position ASC;";
    $sql_result = $this -> connect -> query($query);
    return $this -> fetchArray($sql_result);
  }

}
?>
