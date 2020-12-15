

<!--Строка-->
<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color:rgba(0,0,0,0.5)">
	<div class="container">
		<a href="index.php" class="navbar-brand"><img src="images/logo.png" 
   height="25"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
			<span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav">
				<li class="nav-item"><a href="products.php#crisps" class="nav-link">Чипсы</a></li>
				<li class="nav-item"><a href="products.php#soda" class="nav-link">Газировка</a></li>
				<li class="nav-item"><a href="products.php#beer" class="nav-link">Пиво</a></li>
				<li class="nav-item"><a href="products.php#beer's" class="nav-link">К пиву</a></li>
				<?php
				if (isset($_SESSION['email'])) {
					?>
					<li class="nav-item"><a href="cart.php" class="nav-link">Корзина</a></li>
					<?php
					} 
				?>
            </ul>
            <?php
            if (isset($_SESSION['email'])) {
            ?>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a href="logout_script.php" class="nav-link"><i class="fa fa-sign-out"></i>Выйти</a></li>
                <li class="nav-item"><a  class="nav-link " data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>"><i class="fa fa-user-circle "></i></a></li>
            </ul>
            <?php
            } 
			else{
				?>
				<ul class="nav navbar-nav ml-auto">
                    <li class="nav-item "><a href="#signup" class="nav-link"data-toggle="modal" ><i class="fa fa-user"></i>Зарегистрироваться</a></li>
                    <li class="nav-item "><a href="#login" class="nav-link" data-toggle="modal"><i class="fa fa-sign-in"></i>Войти</a></li>
                </ul>
                <?php 
            }
            ?>
        </div>
    </div>
</nav>

<!--Авторизация-->
<div class="modal fade" id="login" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content"style="background-color:rgba(255,255,255,0.95)">
			<div class="modal-header">
				<h5 class="modal-title">Войти</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
            </div>
            <div class="modal-body">
				<form action="login_script.php" method="post">
					<div class="form-group">
						<label for="email">Почта:</label>
						<input type="email" class="form-control"  name="lemail" placeholder="Почта" required>
					</div>
					<div class="form-group">
						<label for="pwd">Пароль:</label>
						<input type="password" class="form-control" id="pwd"  name="lpassword" placeholder="Пароль" required>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input">
						<label for="checkbox" class="form-check-label">Запомнить меня</label>
					</div>
					<button type="submit" class="btn btn-secondary btn-block" name="Submit">Логин</button>
				</form>
				<a href="http://">Забыли пароль?</a>
            </div>
            <div class="modal-footer">
				<p class="mr-auto">Впервые здесь?<a href="#signup" data-toggle="modal" data-dismiss="modal" >Зарегистрироваться</a></p>
				<button type="button" class="btn btn-secondary" data-dismiss="modal" >Назад</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="signup">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">
			<div class="modal-header">
				<h5 class="modal-title">Регистрация</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
            </div>
			<div class="modal-body">
				<form action="signup_script.php" method="post">
					<div class="form-group">
						<label for="email">Почта:</label>
						<input type="email" class="form-control"  name="eMail" placeholder="Почта" required>
						<?php 
						if(isset($_GET['error'])){ echo "<span class='text-danger'>".$_GET['error']."</span>" ;}
						?>
					</div>
					<div class="form-group">
						<label for="pwd">Пароль:</label>
						<input type="password" class="form-control" id="pwd" name="password" placeholder="Пароль" required>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="validation1">Имя</label>
							<input type="text" class="form-control" id="validation1" name="firstName" placeholder="Имя" required>
						</div>
						<div class="form-group col-md -6">
							<label for="validation2">Фамилия</label>
							<input type="text" class="form-control" id="validation2" name="lastName" placeholder="Фамилия">
						</div>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" required>
						<label for="checkbox" class="form-check-label">Я принимаю условия соглашения</label>
					</div>
					<button type="submit" class="btn btn-primary btn-block" name="Submit">Зарегистрироваться</button>
				</form>
            </div>
            <div class="modal-footer">
				<p class="mr-auto">Уже зарегистрированы?<a href="#login"  data-toggle="modal" data-dismiss="modal">Войти</a></p>
				<button type="button" class="btn btn-secondary" data-dismiss="modal" >Назад</button>
            </div>
        </div>
    </div>
</div>
      <!--Signup trigger model ends-->