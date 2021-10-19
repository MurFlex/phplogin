<?php 
require_once 'database.php';

$name = filter_var(trim($_POST['name']));
$pass = filter_var(trim($_POST['pass']));

echo $name . " " . $pass . "</br>";

$query = "SELECT * FROM people WHERE name = '$name' AND pass = '$pass'";
$check_user = mysqli_query($link, $query);
$categories = mysqli_fetch_all($check_user);

print_r($categories);

echo mysqli_num_rows($check_user) . "</br>";

if(mysqli_num_rows($check_user) > 0) {
    echo "Успешная авторизация";
    //header('Location: profile.php');
}
else { 
    echo "Ошибка при авторизации";
}
?>

<html>
    <form action = 'index.php'>
        <input type = "submit" value ="На главную">
    </form>
</html>