<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://flowingo.com/node_modules/bootstrap3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://flowingo.com/node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://flowingo.com/app/assets/stylesheets/css/landing.css">
    <!-- <link rel="stylesheet" href="http://flowingo.com/app/assets/stylesheets/css/update.css"> -->
    <script src="http://flowingo.com/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="http://flowingo.com/node_modules/bootstrap3/dist/js/bootstrap.min.js"></script>
    <script src="http://flowingo.com/app/assets/scripts/auth.js"></script>
    <!-- <script src="http://flowingo.com/app/assets/scripts/update.js"></script> -->

    <title>flowingo.com</title>
  </head>
  <body class="color-page">
    <div class="container-fluid">
      <?php
      include_once(VIEW_PATH . "partials/_header.php");
      include_once($main_content);
      include_once(VIEW_PATH . "partials/_footer.php");
      ?>
    </div>
  </body>
</html>
