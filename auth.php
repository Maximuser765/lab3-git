<?php
// Файл автентифікації від Developer-1
function authenticate($email, $password) {
    return $email === "admin@test.com" && $password === "123456";
}
?>
