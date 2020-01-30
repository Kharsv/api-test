

<form action="api1/get_text.php" method="GET">
Введи любой слово с заглавными буквами и получишь их нижним регистром<br>
    СЛОВО: <input type="text" name="text"><br><br>
    
    <input type="submit">
</form>

<form action="api2/add_user.php" method="POST">
    Добавить пользователя<br>
    Логин: <input type="text" name="login"><br><br>
    <!-- Пароль: <input type="password" name="pass"><br><br> -->
    <input type="submit">
</form>

<form action="api2/all_user.php" method="POST">
    Посмотреть всех пользователей<br>
    <!-- Логин: <input type="text" name="login"><br><br> -->
    <!-- Пароль: <input type="password" name="pass"><br><br> -->
    <input type="submit">
</form>

<form action="api2/show_user.php/" method="POST">
    Показать логин пользователя по id<br>
    Логин: <input type="text" name="showbyid"><br><br>
    <!-- Пароль: <input type="password" name="pass"><br><br> -->
    <input type="submit">
</form>

<form action="api2/update_user.php" method="POST">
    Изменить логин пользователя<br>
    Старый Логин: <input type="text" name="findbylogin"><br><br>
    Новый Логин: <input type="text" name="newlogin"><br><br>
    <!-- Пароль: <input type="password" name="pass"><br><br> -->
    <input type="submit">
</form>