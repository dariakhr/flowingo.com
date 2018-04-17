<?php
require_once(UTILS_PATH . '/controller.php');

final class CategorysController extends Controller {
  public function new() {
    $this -> view -> render('admin/categorys/new.php');
  }
  
  public function create() {
     $title = $_POST['title'];
     if ($this -> model -> validate($title)) {
       $visible = (isset($_POST['visible']) && $_POST['visible'] == 'visible') ? 1 : 0;
       $this -> model -> createBy(['title' => $title, 'position' => $this -> model -> selectPosition(), 'visible' => $visible]);
     }
     header("Location: /admin/categorys/new");
   }

  public function index() {
    require_once(MODEL_PATH . 'categorys_model.php');
    $categorys_model = new CategorysModel;
    $categorys = $categorys_model -> selectAll();
    $this -> view -> render('admin/categorys/index.php', ['categorys' => $categorys]);
    $this -> model -> selectAll();
  }
  public function show() {
    $category = $this -> category;
    echo($category['title']);
  }

  public function destroy() {
    $category_id = $_POST['category_id'];
    $this -> model -> deleteBy(['id' => $category_id]);
    header("Location: /admin/categorys/index");

  }
  public function update() {
    $category_id = $_POST['category_id'];
    $position = $_POST['position'];
    $title = $_POST['title'];
    if ($this -> model -> validate($title)) {
      $visible = (isset($_POST['visible']) && $_POST['visible'] == 'visible') ? 1 : 0;
      $this -> model -> updateBy(['title' => $title, 'position' => $position, 'visible' => $visible], ['id' => $category_id]);
    }
    header("Location: /admin/categorys/index");
  }
}
?>
