<?php
/**
 * Тренажер
 */
// phpinfo();
 class Users {
     public $name;
     public $fam;

     public function outdata(){
         echo $this->name;
         echo "<br>";
         echo $this->fam;
         echo "<br>";
     }

     public function query($parm){
        echo $parm;
        echo "<br>";        
    }

 }

 $user = new Users();
 $user->name = "Name";
 $user->fam = "Familia";

 $user->outdata();

 $user->query("Тест");

?>