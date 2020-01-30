<?php

include('../db.php'); // Подключение к базе данных

$findbylogin = $_POST['findbylogin'];
$newlogin = $_POST['newlogin'];
$findbyid;
$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);

$users = [];
while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
}

var_dump($users);

foreach ($users as $user) {
    if ($user['login'] == $findbylogin) {
            $findbyid = $user['id'];
        echo 
        "<div>
            <h2>{$user['id']}</h2>
            <i>{$user['login']}</i>
        </div>";
        }
    }   

$query = "UPDATE `users` 
SET `login` = ('$newlogin')
WHERE `users`.`id` = 4;";

$result = mysqli_query($link, $query);

