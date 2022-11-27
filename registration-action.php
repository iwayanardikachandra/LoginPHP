<?php
session_start();

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$security_answer = $_POST['security_answer'];

// $_SESSION['email'] = $email;
// $_SESSION['first_name'] = $first_name;
// $_SESSION['last_name'] = $last_name;
// $_SESSION['password'] = $password;
// $_SESSION['confirm_password'] = $confirm_password;
// $_SESSION['phone_number'] = $phone_number;
// $_SESSION['security_answer'] = $security_answer;

function Cookies()
{
    global $first_name, $last_name, $password, $email, $phone_number, $security_answer, $confirm_password;
    $new = [
        'email' => $email,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'phone_number' => $phone_number,
        'password' => $password,
        'security_answer' => $security_answer,
        'confirm_password' => $confirm_password
    ];
    setcookie('user', json_encode($new));
}

if (
    empty($_POST['email']) && empty($_POST['first_name'])
    && empty($_POST['last_name']) && empty($_POST['password'])
    && empty($_POST['phone_number']) && empty($_POST['security_answer']) && empty($_POST['security_answer']) && empty($_POST['confirm_password'])
) {
    echo "<body>
            <script>
                alert('Fill All The Field!')
                window.location.replace('registration.php')
            </script>
            </body>";
}

if (isset($_POST['submit'])) {
    if ($password != $confirm_password) {
        echo "<body>
        <script>
        alert('Password Is Not Match')
        window.location.replace('registration.php')
        </script>
        </body>";
    } else if (
        !empty($_POST['email']) && !empty($_POST['first_name'])
        && !empty($_POST['last_name']) && !empty($_POST['password'])
        && !empty($_POST['phone_number']) && !empty($_POST['security_answer']) && !empty($_POST['security_answer']) && !empty($_POST['confirm_password'])
    ) {
        Cookies();
        echo "<body>
        <script>
        alert('Success')
        window.location.replace('index.php')
        </script>
        </body>";
    } else {
        echo "<body>
        <script>
        alert('Field Is Not Fully Fill!')
        window.location.replace('registration.php')
        </script>
        </body>";
    }
}