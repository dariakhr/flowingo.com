<main class="ml-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-2">
            <?php foreach ($data['categorys'] as $categorys):?>
            <ul class="list-unstyled pd-20 roll">
                <li>
                  <span>
                    <a href="#"><?=$categorys['title']?></a>
                  </span>
                </li>
            </ul>
          <?php endforeach; ?>
          </div>
          <div class="col-lg-10">
            <div class="row">
              <div class="col-ld-12 mt-10">
                <p class="pull-right sort">
                  <span>Упорядочить:</span>
                  <a href="#">по цене</a>
                  <a href="#">по возрастанию</a>
                </p>
              </div>
              <div class="row products mt-40">
                <?php foreach ($data['goods'] as $good):?>
                  <div class="col-lg-4 goods">
                    <div class="row">
                      <div class="col-lg-12 text-center">
                        <p>
                          <img class="flowing-about-first" src="<?=$good['photo']?>" alt="goods_1">
                        </p>
                      </div>
                    </div>
                    <div class="row mt-20">
                      <div class="col-lg-7 mt-15">
                        <p><?=$good['title']?></p>
                        <p><?=$good['price']?></p>
                      </div>
                      <div class="col-lg-5">
                        <button type="button" name="button" class="buy">
                          <i class="fa fa-shopping-cart"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- <main class="ml-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-2">
            <ul class="list-unstyled pd-20 roll">
              <?php foreach ($data['categorys'] as $category):?>
                <li>
                  <span>
                    <a href="#"><?=$category['title']?></a>
                  </span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="col-lg-10">
            <div class="row">
              <div class="col-ld-12 mt-10">
                <p class="pull-right sort">
                  <span>Упорядочить:</span>
                  <a href="#">по цене</a>
                  <a href="#">по возрастанию</a>
                </p>
              </div>
              <div class="row products mt-40">
                <div class="col-lg-4 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p>
                        <img class="flowing-about-first" src="http://flowingo.com/app/assets/src/goods/1.png" alt="goods_1">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-20">
                    <div class="col-lg-7 mt-15">
                      <p>Сияние</p>
                      <p>50грн.</p>
                    </div>
                    <div class="col-lg-5">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p>
                        <img class="wd-150" src="http://flowingo.com/app/assets/src/goods/2.png" alt="goods_2">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-10">
                    <div class="col-lg-7 mt-15">
                      <p>Лето</p>
                      <p>70грн.</p>
                    </div>
                    <div class="col-lg-5">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p>
                        <img class="wd-150" src="http://flowingo.com/app/assets/src/goods/3.png" alt="goods_3">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-10">
                    <div class="col-lg-7 mt-15">
                      <p>Гранд при</p>
                      <p>170грн.</p>
                    </div>
                    <div class="col-lg-5">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row products mt-40">
                <div class="col-lg-4 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p>
                        <img class="wd-150" src="http://flowingo.com/app/assets/src/goods/4.png" alt="goods_4">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-10">
                    <div class="col-lg-7 mt-15">
                      <p>Бабочка</p>
                      <p>30грн.</p>
                    </div>
                    <div class="col-lg-5">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p>
                        <img class="flowing-about-first" src="http://flowingo.com/app/assets/src/goods/1.png" alt="goods_1">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-20">
                    <div class="col-lg-7 mt-15">
                      <p>Сияние</p>
                      <p>50грн.</p>
                    </div>
                    <div class="col-lg-5">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p>
                        <img class="wd-150" src="http://flowingo.com/app/assets/src/goods/2.png" alt="goods_2">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-10">
                    <div class="col-lg-7 mt-15">
                      <p>Лето</p>
                      <p>70грн.</p>
                    </div>
                    <div class="col-lg-5">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row products mt-40">
                <div class="col-lg-4 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p>
                        <img class="wd-150" src="http://flowingo.com/app/assets/src/goods/3.png" alt="goods_3">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-10">
                    <div class="col-lg-7 mt-15">
                      <p>Гранд при</p>
                      <p>170грн.</p>
                    </div>
                    <div class="col-lg-5">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 goods">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <p>
                        <img class="wd-150" src="http://flowingo.com/app/assets/src/goods/4.png" alt="goods_4">
                      </p>
                    </div>
                  </div>
                  <div class="row mt-10">
                    <div class="col-lg-7 mt-15">
                      <p>Бабочка</p>
                      <p>30грн.</p>
                    </div>
                    <div class="col-lg-5">
                      <button type="button" name="button" class="buy">
                        <i class="fa fa-shopping-cart"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main> -->
