<?php
    include 'config.php';

    if(isset($_SESSION['login'])){
        if(isset($_SESSION['usertype']) && $_SESSION['usertype'] === 'admin'){
            header("Location: homeAdmin.php");
            exit();
        }
        elseif (isset($_SESSION['usertype']) && $_SESSION['usertype'] === 'dosen'){
            header("Location: homeDosen.php");
            exit();
        }
        elseif (isset($_SESSION['usertype']) && $_SESSION['usertype'] === 'ketua'){
            header("Location: homeKetuaPenguji.php");
            exit();
        }
    }

    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['inputPassword'];

        $sql = "SELECT * FROM user WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row['password'])){
                $_SESSION['login'] = true;
                $_SESSION['username'] = $row['username'];
                $_SESSION['usertype'] = $row['type'];

                if ($_SESSION['usertype'] === 'admin') {
                    header("Location: homeAdmin.php");
                    exit();
                } 
                elseif ($_SESSION['usertype'] === 'ketua') {
                    header("Location: homeKetuaPenguji.php");
                    exit();
                } 
                elseif ($_SESSION['usertype'] === 'dosen') {
                    header("Location: homeDosen.php");
                    exit();
                }
            }
            else {
                $loginError = "Incorrect password. Please try again.";
            }
        }
        else {
            $loginError = "User not found. Please check your username and password.";
        }

        $stmt->close();
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styleLogin.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <title>Login</title>

    <style>
    .container-satu{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 990px;
        height: 620px;
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        /* box-shadow: 5px 5px 10px 1px rgba(0, 0, 0, 0.2); */
        border-radius: 0px 10px 0px 10px;
    }

    .row-main {
        flex: 1;
        display: flex;
    }

    .col-lg-5 {
        background-image: linear-gradient(45deg, #3e32a8, #e310c7);
        height: 100%;
        border-radius: 10px 0px 0px 10px;
        position: relative;
    }

    .col-lg-7 {
        background-color: #fff;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        position: relative;
        border-radius: 0px 10px 10px 0px;
    }

    .img-right{
        position: absolute;
        top: 20px;
        left: 20px;
    }

    .img-left{
        position: absolute;
        top: 250px;
        right: 0;
        margin-right: 20px;
        width: 300px;
        height: 110px;
    }

    .content-login {
        width: 400px;
        height: 300px;
        margin-top: 30px;
    }

    .text-image{
        color: whitesmoke;
        text-transform: uppercase;
        display: flex;
        justify-content: end;
        padding: 20px;
        margin-top: 30px;
    }

    .btn-outline-ocean {
        color: #fff; 
        background-color: #0B6977; 
        border: 3px solid #0B6977; 
        padding: 8px 16px; 
        font-weight: 500;
        border-radius: 5px; 
        text-decoration: none; 
        display: inline-block;
        font-size: 16px; 
        text-align: center; 
        cursor: pointer; 
        transition: background-color 0.3s, color 0.3s, border-color 0.3s; 
    }

    .btn-outline-ocean:hover {
        color: #0B6977; 
        background-color: #fff; 
        border-color: #0B6977; 
    }
    </style>
</head>
<body style="background-color: #0B6977;">
    <div class="container container-satu">
        <div class="row row-main">
            <div class="col-lg-5">
                <div class="text-image">
                    <h2 style="font-size: 80px;">login</h2>
                </div>
                <img src="Asset/image/pcu logo2.png" alt="" class="img-left">
            </div>

            <div class="col-lg-7">
                <img src="Asset/image/pcu logo.png" alt="" class="img-right">
                
                <div class="content-login">
                    <h1 style="text-align: center; color:#0B6977;">Welcome</h1>

                    <form method="POST">
                        <div class="form-group mb-2">
                            <label for="username"><p style="font-weight: 500; font-size: 20px; margin-bottom: 3px; color: #0B6977;">Username</p></label>
                            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Username">
                        </div>
                        <div class="form-group mb-2">
                            <label for="inputPassword"><p style="font-weight: 500; font-size: 20px; margin-bottom: 3px; color: #0B6977;">Password</p></label>
                            <input type="password" class="form-control" id="inputPassword" name="inputPassword"placeholder="Password">
                        </div>
                        <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <button type="submit" class="btn-outline-ocean" name="login" style="width: 100%; margin-bottom:10px;">Login</button>
                        <?php if (isset($loginError)) { ?>
                            <p style="color: red;"><?php echo $loginError; ?></p>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <footer style="color: whitesmoke; margin-top: 25px;">
                <div style="text-align: center; line-height: 0.5px;">
                    <p>&copy; Universitas Kristen Petra 2023</p>
                    <p>Penilaian Sidang Skripsi dan Berita Acara</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>