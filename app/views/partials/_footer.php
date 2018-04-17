<footer class="mt-40">
  <div class="row footer">
    <div class="col-lg-12">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <span><img class="icon-vk" src="http://flowingo.com/app/assets/src/social-net/vkk.png" alt="VK"></span>
            <span><img class="mt-13" src="http://flowingo.com/app/assets/src/social-net/fcc.png" alt="FB"></span>
            <span class="reserved"><strong>Flowingo 2018 all rights reserved</strong></span>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 hidden-xs about-us-footer">
            <ul class="list-inline text-center">
              <li><a href="/about_us.php">О нас</a></li>
              <li><a href="/catalog.php">Цветы</a></li>
              <li><a href="#">Доставка</a></li>
              <li><a href="#">Оплата</a></li>
              <li><a href="#">Вопросы</a></li>
              <li><a href="#">Контакты</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <p class="footer-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div id="authorizing" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header  mod-head">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="modal-title text-center">Вход</h1>
                  </div>
                  <div class="modl-body mod-body">
                    <p class="errors"></p>
                    <form class="text-center" action="/actions/auth.php" method="post">
                      <input type="email" name="email" value="" placeholder="e-mail">
                      <br>
                      <input class="mt-20" type="password" name="password" value="" placeholder="пароль">
                      <br>
                      <input type="checkbox" name="" value="">
                      <label class="mt-10" for="">Запомнить меня</label>
                      <br>
                      <button class="btn mt-15 mb-15 auth-button-js" type="button" name="button">ВОйТИ</button>
                      <br>
                      <a href="#">Забыли пароль?</a>
                      <p>Войти через</p>
                    </form>
                  </div>
                  <div class="modal-footer mod-foot">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div id="registration" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header mod-head">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="modal-title text-center">Регистрация</h1>
                  </div>
                  <div class="modal-body mod-body">
                    <p class="errors"></p>
                    <form class="text-center" action="/actions/registration.php" method="post">
                      <input type="text" name="email" value="" placeholder="e-mail">
                      <br>
                      <input class="mt-20" type="password" name="password" value="" placeholder="пароль">
                      <br>
                      <input class="mt-20" type="password" name="password_confirm" value="" placeholder="телефон">
                      <br>
                      <p class="mt-10">Я ознакомился с политикой</p>
                      <a href="#">Сервиса покупки и доставки цветов Flowingo</a>
                      <br>
                      <button class="btn mt-15 mb-15 registration-button-js" type="button" name="button">Готово</button>
                    </form>
                  </div>
                  <div class="modal-footer mod-foot"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div id="registrated" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header mod-head">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body mod-body">
                    <h1>Спасибо за регистрацию</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
