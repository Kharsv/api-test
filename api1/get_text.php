<?php

//include('db.php'); // Подключение к базе данных

$text = $_GET['text'];



if (strlen($test) > 256 || strlen($text) == NULL) {
    echo "Ошибка текст привышает 256 символов или не набран";
    header('Location: index.php');
    
    
} else {  
    $str = strtolower($text);
    echo $str;
    
}
