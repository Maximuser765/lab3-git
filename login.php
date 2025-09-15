<?php
session_start();

if ($_POST['username'] && $_POST['password']) {
    echo "Успішний вхід: " . $_POST['username'];
} else {
    echo "Помилка авторизації";
}
?>
