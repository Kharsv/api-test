<?php

include('../db.php'); // Подключение к базе данных

$showbyid = $_POST['showbyid'];
$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);

$users = [];
while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
}

// echo '<pre>';
// var_dump($users);
// echo '</pre>';

foreach ($users as $user) {
    if ($user['id'] == $showbyid) {
    echo 
    "<div>
        <h2>{$user['id']}</h2>
        <i>{$user['login']}</i>
    </div>";
    }
    else {
        
    }
}