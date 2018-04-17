 <?php
  final class Router {
    private $controler_name; //errors
    private $action_name; //error404
    private $controller_full_path; //D://....flowingo.com/app/controller/errors_controller.php
    private $request_arr;
    private static $instance;
    const ROUT_ARR = ['edit', 'destroy', 'update', 'show'];
    public $entity_id = NULL;
    public static function getInstance(){
      if (self::$instance == null) {
        self::$instance = new self();
      }
      return self::$instance;
    }

    private function setBase(){
      $request = $_SERVER['REQUEST_URI'];
      $this -> request_arr = explode('/', $request);
      $this -> controller_name = $this -> request_arr[1];
      $this -> action_name = isset($this -> request_arr[2]) ? $this -> request_arr[2] : 'index';
      if (in_array($this -> request_arr[2], self::ROUT_ARR)) {
        if (isset($this -> request_arr[3]) && is_numeric($this -> request_arr[3])) {
          $this -> entity_id = $this -> request_arr[3];
        } else {
          header('Location:http://flowingo.com/errors/error404');
        }
      }
    }

    private function controllerExists($is_admin = false) {
      if (!$is_admin) {
        $base_path = CONTROLLER_PATH; // /var/www/flowingo.com/app/controllers
      }else {
        $base_path = CONTROLLER_PATH . 'admin/';
      }

      $controller_file_name = $this -> controller_name . '_controller.php'; //errors_controller.php
      $this -> controller_full_path = $base_path . $controller_file_name;
      return file_exists($this -> controller_full_path);
    }

    private function isMainPage() {
      return $_SERVER['REQUEST_URI'] == '/';
    }

    public function init(){
      if ($this -> isMainPage()) {
        header('Location:http://flowingo.com/pages/landing');
        return;
      }

      if($this -> isAdminPage()){
        $this -> showAdminPage();
        return;
      }

      $this -> setBase();
      if (isset($this -> request_arr[2]) && $this -> request_arr[2] == 'index') {
        header('Location:http://flowingo.com/' . $this -> controller_name);
        return;
      }


      if ($this -> controllerExists()) {
        $controller = $this -> createControllerInstance();
        if (method_exists($controller, $this -> action_name)){
          $action = $this -> action_name;
          $controller -> $action($this -> entity_id);
        }else{
          header('Location:http://flowingo.com/errors/error404');
        }
      }else{
        header('Location:http://flowingo.com/errors/error404');
      }
    }

    private function isAdminPage() {
      // /admin/categorys/new
      $request = $_SERVER['REQUEST_URI'];
      $this -> request_arr = explode('/', $request);
      return $this -> request_arr[1] == 'admin';
    }

    private function showAdminPage() {
      // /admin/categorys/new
      $request = $_SERVER['REQUEST_URI'];
      $this -> request_arr = explode('/', $request);
      $this -> controller_name = $this -> request_arr[2]; //categorys
      $this -> action_name = isset($this -> request_arr[3]) ? $this -> request_arr[3] : 'index';
      if (in_array($this -> action_name, self::ROUT_ARR)) {
        if (isset($this -> request_arr[4]) && is_numeric($this -> request_arr[4])) {
          $this -> entity_id = $this -> request_arr[4];
        } else {
          header('Location:http://flowingo.com/errors/error404');
        }
      }
      if (isset($this -> request_arr[3]) && $this -> request_arr[3] == 'index') {
        header('Location:http://flowingo.com/admin/' . $this -> controller_name);
        return;
      }
      if ($this -> controllerExists(true)){
        $controller = $this -> createControllerInstance();
        if (method_exists($controller, $this -> action_name)){
          $action = $this -> action_name;
          $controller -> $action();
        }else {
        }
      }
    }

    private function createControllerInstance() {
      include_once($this -> controller_full_path);
      $controller_instance_name = ucfirst($this -> controller_name) . 'Controller'; //ErrorsController
      return new $controller_instance_name($this -> entity_id); //new ErrorsController
    }
  }
?> 
