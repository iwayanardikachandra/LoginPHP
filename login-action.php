<?php

if (empty($_COOKIE['user'])) {
    echo "<body>
            <script>
                alert('Akun tidak terdaftar !')
                window.location.replace('login.php');
            </script>
        </body>";
}

$data_decode = json_decode($_COOKIE['user'], true);

$getEmail = $_POST['email'];
$getPassword = $_POST['password'];

function LoginAct() {
    global $getEmail, $getPassword, $data_decode;
    session_start();
    $_SESSION['email'] = $getEmail;
    $_SESSION['password'] = $getPassword;
    setcookie('user', json_encode($data_decode));
}

if (isset($_POST['login'])) { //user
    if (in_array($getEmail, $data_decode) && in_array($getPassword, $data_decode)) {
        LoginAct();
        header('Location: display.php');
    } else if (in_array($getEmail, $data_decode)) {
        echo "<body>
        <script>
            alert('Password Invalid!')
            window.location.replace('index.php')
        </script>
    </body>";
    } else if(in_array($getPassword, $data_decode)){
        echo "<body>
        <script>
            alert('Email Invalid!')
            window.location.replace('index.php')
        </script>
    </body>";
    } else {
        echo "<body>
            <script>
                alert('Invalid!')
                window.location.replace('index.php')
            </script>
        </body>";
    }
} 
?>

