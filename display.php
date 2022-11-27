<?php
session_start();
$wayan_decode_json = json_decode($_COOKIE['user'], true);
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="./assets/images/icon.jfif">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <form method="post" action="logout-action.php">
        <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
            <div class="container">
                <div class="card login-card">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="assets/images/turbin11.jpg" alt="login" class="login-card-img float-left">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <div class="brand-wrapper">
                                    <img src="assets/images/logo.png" alt="logo" class="logo">
                                </div>
                                <p class="login-card-description">Account Info</p>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" readonly class="form-control" value="First Name: <?php echo $wayan_decode_json['first_name']; ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" readonly class="form-control" value="Last name: <?php echo $wayan_decode_json['last_name']; ?> " />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="email" name="email" id="email" readonly class="form-control" value="Email address: <?php echo $wayan_decode_json['email']; ?>">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="text" class="sr-only">Phone Number</label>
                                        <input type="text" name="phone_number" id="phone_number" readonly class="form-control" value="Phone Number: <?php echo $wayan_decode_json['phone_number']; ?>">
                                    </div>

                                    <input name="logout" id="logout" class="btn btn-block login-btn mb-4" type="submit" value="Log Out">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>