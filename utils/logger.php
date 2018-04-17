<?php
  class Logger {
    private $file_name;
    private static $instance;

    const LOG_FOLDER_PATH = __DIR__ . '/logs/';

    private function __construct($file_name) {
      $this -> file_name = $file_name;
    }

    public static function getInstance($file_name){
      if (self::$instance == null) {
        self::$instance = new self($file_name);
      }
      return self::$instance;
    }

    public function log($message){
      $this -> createLogDir();
      $message = date('[Y-m-d H:i:s] - ') . $message . "\n";
      $file = fopen(self::LOG_FOLDER_PATH . $this -> file_name, 'a+');
      fwrite($file, $message);
      fclose($file);
    }

    private function createLogDir(){
      if (!file_exists(self::LOG_FOLDER_PATH)){
        mkdir(self::LOG_FOLDER_PATH);
        chmod(self::LOG_FOLDER_PATH, 0777);
      }
    }
  }
?>
