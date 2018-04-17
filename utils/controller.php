<?php
require_once(UTILS_PATH . 'view.php');
class Controller {
  protected $model;
  protected $view;

  public function __construct($id = NULL) {
    $entity_name = explode('Controller', get_class($this))[0]; //Books
    $model_file_name = strtolower($entity_name) . '_model.php'; //books
    require_once(MODEL_PATH . $model_file_name);
    $model_name = $entity_name . 'Model';
    $this -> model = new  $model_name;
    // if ($id) {
    //   $entity_name = strtolower(substr($entity_name, 0, -1));
    //   $this -> $entity_name = $this ->model -> find($id);
    // }
    $this -> view = new View;
  }

} ?>
