<?php

if (empty($_COOKIE['user'])) {
    echo "<body>
            <script>
                alert('Akun tidak terdaftar !')
                window.location.replace('./login.php');
            </script>
        </body>";
} else {
    $data_decode = json_decode($_COOKIE['user'], true);
}

function set_login() {
    global $getEmail, $getPassword;
    session_start();
    $_SESSION['auth_email'] = $getEmail;
    setcookie('user', json_encode($data_decode));
}

$getEmail = $_POST['email'];
$getPassword = $_POST['password'];

?>

