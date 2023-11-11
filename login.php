<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Connect to your database.
    $db = new mysqli('localhost', 'root', '', 'manpro13');

    if ($db->connect_error) {
        die('Connection failed: ' . $db->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT username, password, type FROM user WHERE username = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($dbUsername, $dbPassword, $userType);
        $stmt->fetch();

        // Verify the entered password with the stored password hash.
        if (password_verify($password, $dbPassword)) {
            $_SESSION['username'] = $dbUsername;
            $_SESSION['user_type'] = $userType;

            if ($userType === 'admin') {
                header("Location: homeAdmin.php");
                exit();
            } elseif ($userType === 'ketua') {
                header("Location: homeKetuaPenguji.php");
                exit();
            } elseif ($userType === 'dosen') {
                header("Location: homeDosen.php");
                exit();
            }
        } else {
            $loginError = "Incorrect password. Please try again.";
        }
    } else {
        $loginError = "User not found. Please check your username and password.";
    }

    $stmt->close();
    $db->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 10px;">
            <div class="container-fluid">
                <img src="Asset/image/pcu logo.png" alt="" style="width: 200px; height:50px;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style= "font-weight: 500; font-size: 20px;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" style="color: #0B6977;">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="main">
                    <div class="row content-login"> <!-- Center the row horizontally -->
                        <div class="col-lg-5 side-image">
                            <div class="text-image">
                                <h2 style="font-size: 80px;">login</h2>
                            </div>
                            <img src="Asset/image/pcu logo2.png" alt="" class="img-left">
                            <!-- <img src="Asset/image/pcu_logo2.jpg" alt="" style="height: 50px; width: auto;"> -->
                        </div>
                        <div class="col-lg-7 right">
                            <img src="Asset/image/pcu logo.png" alt="" class="img-right">
                            <div style="margin-top: 30px;">
                                <h2 class="text-uppercase" style="font-weight:600; margin-bottom:10px; color: #0B6977; text-align: center;">welcome</h2>
                                <form method="post">
                                    <div class="form-group" style="width: 360px;">
                                        <label for="username"><p style="font-weight: 500; font-size: 20px; margin-bottom: 3px; color: #0B6977;">Username</p></label>
                                        <div class="class input-group mb-3">
                                            <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter email" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="inputPassword"><p style="font-weight: 500; font-size: 20px; margin-bottom: 3px; color: #0B6977;">Password</p></label>
                                        <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input type="checkbox" class="form-check-input" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Remember Me</label>
                                    </div>
            
                                    <button type="submit" class="btn btn-outline-ocean">Login</button>
                                        <?php if (isset($loginError)) { ?>
                                            <p style="color: red;"><?php echo $loginError; ?></p>
                                        <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
