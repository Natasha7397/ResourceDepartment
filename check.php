<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
    <title>Заявка принята</title>
    <link href="style.css.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<?php

              if($_SERVER['REQUEST_METHOD'] == 'POST') { 
             $name = $_POST['name']; 
             $mail = $_POST['mail']; 
              $phone = $_POST['phone']; 
             $message = $_POST['message'];  
                $f = fopen("textfile.txt", "a"); 
                fwrite($f,"Справка №". rand(1, 100)."\r\n" .$_POST['name']."\r\n".$_POST['mail']."\r\n".$_POST['phone']."\r\n".$_POST['message']."\r\n"."\r\n"); 
                $f = fopen("textfile.txt", "r"); 
                fclose($f);
                echo "Ваша заявка принята!";
             }else{echo "У тебя проблемы, Наташа";}
require 'button.php';
             ?>

