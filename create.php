<?php 
print_r($_POST);

require_once 'database.php';

$name = filter_var(trim($_POST['name']));
$email = filter_var(trim($_POST['email']));
$pass = filter_var(trim($_POST['pass']));

echo "</br></br>[" .$name . "] [" . $email . "] [" . $pass . "]"; 

$query = "INSERT INTO people (name, email, pass) VALUES ('$name', '$email', '$pass')";
mysqli_query($link, $query);
?>

<html>
    <h1> Успешная регистрация </h1>

    <form action = 'index.php'>
        <input type = "submit" value ="На главную">
    </form>
</html>