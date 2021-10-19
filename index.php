<?php
    require_once 'C:\OpenServer\domains\education\database.php';
    //require_once 'C:\OpenServer\domains\education\function.php'; 
   
?>
<pre>
<?php print_r ($categories); ?>
</pre>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h1> Регистрация </h1>
        <form action = "create.php" method="post"> 
            <input type = "text" name = "name" placeholder="Введите логин" > 
            <input type = "email" name = "email" placeholder="Введите почту">
            <input type = "password" name = "pass" placeholder="Введите пароль">
            <input type = "submit" value = "Отправить">
        </form> 

        <h1> Авторизация </h1>
        <form action = "login.php" method="post"> 
            <input type = "text" name = "name" placeholder="Введите логин" > 
            <input type = "password" name = "pass" placeholder="Введите пароль">
            <input type = "submit" value = "Отправить">
    </body>
</html>
