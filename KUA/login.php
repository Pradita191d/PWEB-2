<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SILAPER-MASUK</title>

    <!-- icon -->
    <link href="assets/img/kua.png" rel="icon" />
    <link href="assets/img/kua.png" rel="apple-touch-icon" />


    <!-- Font Icon -->
    <link rel="stylesheet" href="colorlib-regform-7/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="colorlib-regform-7/css/style.css">

    <style>
        body {
            font-family: 'Poppins', 'Courier New', Courier, monospace, sans-serif;
            background-color: #f8f9fa; /* Set a light background color */
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .main {
            position: relative;
            width: 100vw;
            height: 100vh;
            overflow: auto;
        }
        .btn-back {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            cursor: pointer;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="main">

       <!-- Sing in  Form -->
       <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="assets/img/kua.png" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">SILAPER</h2>
                        <form method="POST" action="cek_login.php" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username"/ required>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/ required>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="MASUK"/> 
                            </div>
                            <div class="form-group form-button">
                                <a href="regist.php">Belum punya akun</a>
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="colorlib-regform-7/vendor/jquery/jquery.min.js"></script>
    <script src="colorlib-regform-7/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
      echo '<script>alert("Username atau Password tidak sesuai!")</script>';
		}
	}
	?>