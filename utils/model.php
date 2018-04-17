
<?php
require_once('logger.php');
require_once(CONFIG_PATH . 'configurations.php');

abstract class Model {
  private $logger;
  protected $connect;
  protected $table_name;

  public function __construct() {
    $this -> logger = Logger::getInstance('logs.txt');
    $this -> connect = new mysqli(HOST, USER_NAME, USER_PASSWORD, DB_NAME);
    $this -> table_name = strtolower(explode('Model', get_class($this))[0]);
  }

  public function find($id){
    $table_name = $this -> table_name;
    $query = "SELECT * FROM $table_name WHERE id=$id LIMIT 1;";
    $sql_result = $this -> connect -> query($query);
    return mysqli_fetch_assoc($sql_result);
  }

  public function selectAll($order = null) {
    $table_name = $this -> table_name;
    $query = "SELECT * FROM `$table_name`" . $this -> checkOrder($order) . ';';
    $sql_result = $this -> connect -> query($query);
    return $this -> fetchArray($sql_result);
  }

  protected function selectMax($field) {
    $table_name = $this -> table_name;
    $query = "SELECT MAX($field) AS $field FROM $table_name;";
    $sql_result = $this -> connect -> query($query);
    $int = $this -> fetchArray($sql_result);
    return intval($int[0][$field]);
  }

  public function deleteAll() {
    $table_name = $this -> table_name;
    $query = "DELETE FROM $table_name;";
    $sql_result = $this -> connect -> query($query);
    if ($sql_result) {
      $this -> logger -> log("All records deleted from $table_name");
    }else {
      $this -> logger -> log("Something went wrong while deleting all records from $table_name");
    }
    return $sql_result;
  }

  public function findBy($fields_arr, $order = null, $limit = null) {
    $table_name = $this -> table_name;
    $query = "SELECT * FROM $table_name
    WHERE " . $this -> joinConditions($fields_arr) .
    $this -> checkOrder($order) .
    $this -> checkLimit($limit) . ';';
    $sql_result = $this -> connect -> query($query);

    return $this -> fetchArray($sql_result);
  }

  public function updateBy($set_array, $where_array) {
    $table_name = $this -> table_name;
    $query = "UPDATE $table_name SET " .
    $this -> joinConditions($set_array, ', ') .
    ' WHERE ' . $this -> joinConditions($where_array);
    $sql_result = $this -> connect -> query($query);
    if ($sql_result) {
      $this -> logger -> log("Records updated in table - $table_name");
    }else {
      $this -> logger -> log("Records weren't updated in table - $table_name");
    }
    return $sql_result;
  }

  public function deleteBy($fields_arr) {
    $table_name = $this -> table_name;
    $query = "DELETE FROM $table_name WHERE " . $this -> joinConditions($fields_arr) . ';';
    $sql_result = $this -> connect -> query($query);
    if ($sql_result) {
      $this -> logger -> log("Some records were deleted from $table_name");
    }else {
      $this -> logger -> log("Something went wrong while deleting some records from $table_name");
    }

    return $sql_result;
  }

  public function createBy($fields_arr) {
    $table_name = $this -> table_name;
    $query = "INSERT INTO $table_name(";
    $field_names = implode(', ', array_keys($fields_arr));
    $field_values = "'" . implode("', '", array_values($fields_arr)) . "'";
    $query .= $field_names . ') VALUES(' . $field_values . ');';
    $sql_result = $this -> connect -> query($query);
    if ($sql_result) {
      $this -> logger -> log("New record was created in $table_name");
    }else {
      $this -> logger -> log("New record wasn't created in $table_name");
    }
    return $sql_result;
  }

  private function checkOrder($order) {
    if ($order) {
      $result = ' ORDER BY ';
      $strings = [];
      foreach ($order as $order_name => $order_value) {
        array_push($strings, "$order_name $order_value");
      }
      return $result . implode(', ', $strings);
    }else {
      return '';
    }
  }

  private function checkLimit($limit) {
    return $limit ? " LIMIT $limit" : '';
  }

private function joinConditions($fields_arr, $delimeter = ' AND ') {
    $result_arr = [];
    foreach ($fields_arr as $field_name => $field_value) {
      array_push($result_arr, "$field_name='$field_value'");
    }

    return implode($delimeter, $result_arr);
  }

  protected function fetchArray($sql_result){

    $final_result = [];
    if (!$sql_result) {
      return $final_result;
    }else {

      while($row = mysqli_fetch_assoc($sql_result)){
        array_push($final_result, $row);
      }
      return $final_result;
    }
    }
}
?>
