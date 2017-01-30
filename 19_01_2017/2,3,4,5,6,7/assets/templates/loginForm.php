    <h2 style="text-align: center">Войдите в систему</h2>
    <form class="form-horizontal" id="loginForm" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" for="username">Имя:</label>
            <div class="col-sm-10">
                <input type="text" required style="width: 250px" class="form-control" name="username" id="username" placeholder="Введите имя">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Пароль:</label>
            <div class="col-sm-10">
                <input type="password" required style="width: 250px" class="form-control" name="password" id="pwd" placeholder="Введите пароль">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" required style="width: 250px" class="form-control" name="mail" id="email" placeholder="Введите email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="tel">Телефон:</label>
            <div class="col-sm-10">
                <input type="tel" style="width: 250px" class="form-control" name="tel" id="tel"
                <?php if (isset($_COOKIE['tel'])): ?> value="<?= $_COOKIE['tel']; ?>" <?php endif; ?>
                       title="Формат ввода (050) 123-45-67" pattern="\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}"
                       placeholder="(050) 123-45-67"><sup style="margin-left: 11%">(Необязательное поле)</sup>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Запомнить меня</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Отправить</button>
            </div>
        </div>
    </form>
