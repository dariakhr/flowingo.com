<?php
  final class View {
    const DEFAULT_LAYOUT = 'main';
    const LAYOUT_PATH = VIEW_PATH . 'layouts/';
    private $layout;

    public function render($template_path, $data=[], $layout = self::DEFAULT_LAYOUT) {
        $main_content = VIEW_PATH . $template_path;
      include_once(self::LAYOUT_PATH . $layout . '.php');//sites/flowingo/app/views/layouts/main.php
  }
}
 ?>
