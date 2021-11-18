<?php 
session_start(); 
// стратуем сессию, чтобы использовать 
//проерку авторизации пользователя
include "connect_db.php";
?>
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
                    <li>
                        <a href="trin.php">Тренажер</a>
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

        <section class="content">
            <div class="content__sidebar">
                <h2>Разделы</h2>
            </div>
            <div class="content__block">
                <div class="content__block-title">
                   <h2>Статьи</h2> 
                </div>
								<?php
                $stmt = $pdo->query('SELECT adate,atitle,atext FROM article');
								  while ($row = $stmt->fetch())
                   {
								?>
                <div class="content__block-item">
                    <div class="content__block-img">

                    </div>
                    <h3 class="content__block-txt-top"><?php echo $row['atitle'];?></h3>
                    <p>Дата публикации: <?php echo $row['adate'];?></p>
                    <p class="content__block-txt">
										<?php echo $row['atext'];?>
                    </p> 
                   
                </div>
								<?php
									 }
								?>
            </div>
        </section><!-- class="content" -->
        <footer class="foot">

        </footer><!-- class="foot" -->
    </div>
<script src="js/myscript.js"></script>    
</body>
</html>