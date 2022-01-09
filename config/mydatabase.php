<?php
         $conn = mysqli_connect('127.0.0.1','root','','upscale_db') or die ("can`t connect mysql");
         if($conn){
            mysqli_set_charset($conn,'utf8');
         }
 
?>