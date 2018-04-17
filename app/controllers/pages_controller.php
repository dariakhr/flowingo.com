<?php
  require_once(UTILS_PATH . '/controller.php');

  final class PagesController extends Controller {
    public function landing() {
      require_once(MODEL_PATH . 'goods_model.php');
      $goods_model = new GoodsModel;
      $goods = $goods_model -> selectAll();

      require_once(MODEL_PATH . 'news_model.php');
      $news_model = new NewsModel;
      $news = $news_model -> selectAll();
      $this -> view -> render('/pages/landing.php', ['goods' => $goods, 'news' => $news]);

    }
      public function delivery() {
        $this -> view -> render('/pages/delivery.php');
      }

      public function catalog() {
        require_once(MODEL_PATH . 'categorys_model.php');
        $categorys_model = new CategorysModel;

        require_once(MODEL_PATH . 'goods_model.php');
        $goods_model = new GoodsModel;
         $goods = $goods_model -> selectAll(['price' => 'ASC']);

         $this -> view -> render('/pages/catalog.php', ['categorys' => $categorys_model -> selectCatalog(), 'goods' => $goods]);




       }
      public function about_us() {
        $this -> view -> render('/pages/about_us.php');
      }
  }

 ?>
