<?php

    
    $num1 = $_POST['num1'] ? (int)$_POST['num1'] : false;
    $num2 = $_POST['num2'] ? (int)$_POST['num2'] : false;
    $num3 = $_POST['num3'] ? (int)$_POST['num3'] : false;

    try{
        if(!$num1 && !$num2 && !$num3){
            throw new Exception("Введите Значение 1, Значение 2 и Значение 3 !");
        }
        if(!$num1 && !$num2){
            throw new Exception("Введите Значение 1 и Значение 2 !");
        }
        if(!$num1 && !$num3){
            throw new Exception("Введите Значение 1 и Значение 3!");
        }
        if(!$num2 && !$num3){
            throw new Exception("Введите Значение 2 и Значение 3 !");
        }
        if(!$num1){
            throw new Exception("Введите Значение 1!");
        }
        if(!$num2){
            throw new Exception("Введите Значение 2!");
        }
        if(!$num3){
            throw new Exception("Введите Значение 3!");
        }       
        else{
            throw new Exception("Задача : ln(R1 - R2) * R2 - R3 <br> Решение с ответом : <br>ln(".$num1." - ".$num2.") * ".$num2." - ".$num3."  =  ".log($num1 - $num2) * $num2 - $num3);
        }
    }
    catch(Exception $e){
        echo $e->getMessage();
        die();
    }
?>