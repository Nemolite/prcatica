<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mystyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <title>Информационный портал</title>
</head>
<body>
<div class="main">        

<header class="head">
    <div class="head__logo">
        <h1>Информационный портал</h1>
    </div>
    <div class="head__nav">
        <ul>
            <li>
                <a href="index.php">Главная страница</a>
            </li>
        </ul>
    </div>     
    <div class="head__login">

    <ul>

        <?php if (!empty($_SESSION['id'])) // здесь происходит следующее
            // если пользователь авторизован направляем его в личный кабинет
            {?>
                <li><a  href="lk.php">Личный кабинет</a> </li>
            <?php }
            // если же не автоизован направляем его на 
            // страницу входа в систему
                else
            {?>
            
                <li><a  href="chek.php">Личный кабинет</a> </li>
        <?php }?>

    </ul>

    </div>   
</header><!--class="head" -->

<section class="login">
    <div class="login-content">
        <h3>Вход в личный кабинет</h3>
            <form class="registr" role="form" action="chek_control.php" method="post">
                <div class="form-group">
                    <label for="inputLogin" class="control-label">Логин</label>                   
                    <input type="text" class="login_form-control login_fix" id="inputLogin" name = "login" placeholder="Логин">                 
                </div>
                <div class="form-group">
                    <label for="inputPass" class="control-label">Пароль</label>                    
                    <input type="password" class="login_form-control" name = "pass" id="inputPass" placeholder="Password">                    
                </div>
                <div class="form-group">                 
                    <div class="checkbox">
                        <label>
                        <input type="checkbox" name="box">
                            <span>
                                Запомнить меня
                            </span>      
                        </label>
                    </div>                    
                </div>
                <div class="form-group">                    
                    <button type="submit" class="login-btn">Войти</button>                    
                </div>
            </form>
    </div><!-- class="login-content" --> 

</section><!-- class="login" -->
<footer class="foot">

</footer><!-- class="foot" -->
</div>
<script src="js/myscript.js"></script> 
</body>
</html>