<main class="mt-25">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://flowingo.com/app/assets/src/basic-pic/slid.jpg" alt="slid_1" style="width:100%;">
            </div>
            <div class="item">
              <img src="http://flowingo.com/app/assets/src/basic-pic/slid.jpg" alt="slid_2" style="width:100%;">
            </div>
            <div class="item">
              <img src="http://flowingo.com/app/assets/src/basic-pic/slid.jpg" alt="slid_3" style="width:100%;">
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center offers">Лучшие предложения</p>
      </div>
    </div>
    <div class="row products">
      <div class="col-lg-12">
        <div class="row">
          <?php foreach ($data['goods'] as $good):?>
          <div class="col-lg-2 goods">
            <div class="row">
              <div class="col-lg-12 text-center">
                <p>
                  <img class="flowing-about-first" http://flowingo.com/app/assets/src="<?= $good['photo']; ?>" alt="goods_1">
                </p>
              </div>
            </div>
            <div class="row mt-20">
              <div class="col-lg-7 mt-15">
                <p><?= $good['title']; ?></p>
                <p><?= $good['price']; ?></p>
              </div>
              <div class="col-lg-5">
                <button type="button" name="button" class="buy">
                  <i class="fa fa-shopping-cart"></i>
                </button>
              </div>
            </div>
          </div>
        <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center offers">Новости</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-9">
  <?php foreach ($data['news'] as $news):?>
        <div class="row align-news">
          <div class="col-lg-1">
            <span>
              <img class="news" src="<?= $news['photo']; ?>" alt="avatar">
            </span>
          </div>
          <div class="col-lg-8">
            <ul class="list-unstyled news-inf">
              <li class="news-h1"><strong><?= $news['title']; ?></strong></li>
              <li class="news-data"><?= $news['date']; ?></li>
              <li class=""><?= $news['text']; ?></li>
            </ul>
          </div>
        </div>
      <?php endforeach ?>
      </div>
      <div class="col-lg-3">
        <img class="pull-right mt-10" src="http://flowingo.com/app/assets/src/social-net/vk.png" alt="VK_share">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="text-center offers">О нас</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p>Lorem ipsum operator/dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur  adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</main>
