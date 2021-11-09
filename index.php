<?php
include "connect_db.php";
//print_r($pdo);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mystyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <title>Мой блок</title>
</head>
<body>
    <div class="main">        

        <header class="head">
            <div class="head__logo">
                <h1>Мои блок</h1>
            </div>
            <div class="head__nav">

            </div>     
            <div class="head__login">

            </div>   
        </header><!--class="head" -->

        <section class="content">
            <div class="content__sidebar">
                
            </div>
            <div class="content__block">
                <div class="content__block-title">
                   <h2>Мои статьи</h2> 
                </div>
								<?php
                $stmt = $pdo->query('SELECT atitle,atxt FROM article');
								  while ($row = $stmt->fetch())
                   {
								?>
                <div class="content__block-item">
                    <div class="content__block-img">

                    </div>
                    <h3 class="content__block-txt-top"><?php echo $row['atitle'];?></h3>
                    <p class="content__block-txt">
										<?php echo $row['atxt'];?>
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