<?php 
session_start();

if (!empty($_SESSION['id'])) { //id достаем из сессии
  // если он не пустой, отобразим весь html код ниже, 
  // если же id пустое, то отравим на страницу авторизации
       
// unset($_POST['submit']);
?> 
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

Личный кабинет
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
  <!--  <script> window.setTimeout(function() { window.location = '../chek.php'; }, 5000) </script> -->
<?php
header('Location: ../chek.php'); exit();
}
?>