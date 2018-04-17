<?php
  require_once(UTILS_PATH . 'controller.php');

  class GoodsController extends Controller {

    public function index() {
      require_once(MODEL_PATH . 'goods_model.php');
      $goods_model = new GoodsModel;
      $goods = $goods_model -> selectAll();

      require_once(MODEL_PATH . 'pages_model.php');
      $pages_model = new PagesModel;
      $goods = $goods_model -> selectAll();
      $this -> view -> render('admin/goods/index.php', ['goods' => $goods]);
      echo "string";
    }
    public function destroy() {
      $goods_id = $_POST['goods_id'];
      $this -> model -> deleteBy(['id' => $goods_id]);
      header("Location: /admin/goods/index");

    }
    public function new()  {
      $this -> view -> render('admin/goods/new.php');
    }
    public function create() {
      require_once(MODEL_PATH . 'categorys_model.php');

       $title = $_POST['title'];
       $description= $_POST['description'];
       $price = $_POST['price'];
       $photo = $_POST['photo'];
       $category_id= $_POST['category_id'];

       if ($this -> model -> validate($title)) {
        $this -> model -> createBy(['title' => $title, 'description' => $description,
          'price' => $price, 'photo' => $photo, 'category_id' => $category_id]);
       }
       header("Location: /admin/goods/new");
     }

     }

?>
