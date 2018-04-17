<?php
  require_once('logger.php');
  require_once('../configurations.php');

  class DBAdapter {
    private $logger;
    private static $instance;

    private function __construct(){
      $this -> logger = Logger::getInstance('logs.txt');
    }

    public static function getInstance(){
      if (self::$instance == null) {
        self::$instance = new self();
      }
      return self::$instance;
    }

    public function createDatabase(){
      $db_name = DB_NAME;
      $connect = new mysqli(HOST, USER_NAME, USER_PASSWORD);
      $query = "CREATE DATABASE IF NOT EXISTS `$db_name`;";
      $message = $connect -> query($query) ? "База $db_name создана!" : "База $db_name не создана!";
      $this -> logger -> log($message);
    }

    public function dropDatabase(){
      $db_name = DB_NAME;
      $connect = new mysqli(HOST, USER_NAME, USER_PASSWORD);
      $query = "DROP DATABASE IF EXISTS `$db_name`;";
      $message = $connect -> query($query) ? "База $db_name удалена!" : "База $db_name не удалена!";
      $this -> logger -> log($message);
    }

    public function createTable($table_name, $fields_arr){
      $db_name = DB_NAME;
      $connect = new mysqli(HOST, USER_NAME, USER_PASSWORD, $db_name);
      $query = "CREATE TABLE IF NOT EXISTS `$table_name` (";
      foreach($fields_arr as $field_name => $field_info){
        $field_query = $field_name . ' ' . $field_info['type'] .
          $this -> checkUnsigned($field_info['unsigned']) .
          $this -> checkAI($field_info['AI']) .
          $this -> checkNotNull($field_info['not_null']) .
          $this -> checkDefault($field_info['default']) .
          $this -> checkPrimary($field_info['PK']);
        $query .= $field_query. ', ';
      }
      $query = rtrim($query, ', ') . ');';
      $message = $connect -> query($query) ? "создана" : 'не создана';
      $this -> logger -> log("Таблица $table_name в базе $db_name " . $message);
    }

    public function dropTable($table_name){
      $db_name = DB_NAME;
      $connect = new mysqli(HOST, USER_NAME, USER_PASSWORD, $db_name);
      $query = "DROP TABLE IF EXISTS `$table_name`;";
      $message = $connect -> query($query) ? "удалена" : 'не удалена';
      $this -> logger -> log("Таблица $table_name в базе $db_name " . $message);
    }

    private function checkAI($ai){
      return $ai ? ' AUTO_INCREMENT' : '';
    }

    private function checkDefault($default_value) {
      return $default_value ? " DEFAULT $default_value" : '';
    }

    private function checkNotNull($not_null) {
      return $not_null ? ' NOT NULL' : '';
    }

    private function checkUnsigned($unsigned) {
      return $unsigned ? ' UNSIGNED' : '';
    }

    private function checkPrimary($pk) {
      return $pk ? ' PRIMARY KEY' : '';
    }
  }
?>
