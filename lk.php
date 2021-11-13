<?php 
session_start();

if (!empty($_SESSION['id'])) { //id достаем из сессии
  // если он не пустой, отобразим весь html код ниже, 
  // если же id пустое, то отравим на страницу авторизации
       
// unset($_POST['submit']);
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
<section class="lk_cabinet">
    <h2>Личный кабинет</h2>
         <div class="lk_cabinet_data">
         <form class="registr" role="form" action="lk.php" method="post">
            <div class="form-group">
                <label for="lktitle" class="lk-label">Заголовок статьи</label>                   
                <input type="text" class="lk-form-control" id="lktitle" name = "lktitle" placeholder="Заголовок статьи">                 
            </div> 
            <div class="form-group">   
                <label for="lktext" class="lk-label">Текст статьи</label>                                                                          
                <textarea rows="15" cols="45" name="lktext" id="lktext" placeholder="Текст статьи"></textarea>   
            </div>   
            <div class="form-group btn-form-group">                
                <button type="submit" class="lk-btn">Отправить</button>
            </div>                            
              
            </form>
            <?php
                print_r($_POST);
                include "connect_db.php";

                $atitle = $_POST['lktitle'];
                $atxt = $_POST['lktext'];    
                $adate = date('Y-m-d H:i:s');   
                
                $sql = "INSERT INTO article (adate, atitle, atxt) VALUES ( :adate, :atitle, :atxt)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':adate', $adate, PDO::PARAM_STR);
                $stmt->bindParam(':atitle', $atitle, PDO::PARAM_STR);
                $stmt->bindParam(':atxt', $atxt, PDO::PARAM_STR);       
                $chek = $stmt->execute();

                if($chek){
                    echo "Данные успешно сохранены";
                };
            ?>
         </div>       
</section>
<section class="lk-art-info">
    <h3>Мои статьи</h3>
</section>   
  

    <footer class="foot">
    </footer><!-- class="foot" -->
</div>
<script src="js/myscript.js"></script>    
</body>
</html>
<?php
}
else {
echo "Вам необходимо пройти авторизацию";
?>
<p>Через 5 секунд будет произведено перенаправление на страницу авторизации</p>
  <script> window.setTimeout(function() { window.location = 'chek.php'; }, 5000) </script> 
<?php
//header('Location: chek.php'); exit();
}
?>