<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SILAPER-BUAT AKUN</title>

    <!-- icon -->
    <link href="assets/img/kua.png" rel="icon" />
    <link href="assets/img/kua.png" rel="apple-touch-icon" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Poppins Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">

    <!-- Font Icon -->
    <link rel="stylesheet" href="colorlib-regform-7/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="colorlib-regform-7/css/style.css">
    <style>
    body {
        font-family: 'Poppins', 'Courier New', Courier, monospace, sans-serif;
        background-color: #f8f9fa; /* Set a light background color */
    }
    </style>

</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">BUAT AKUN</h2>
                        <form method="POST"  action="regist_aksi.php" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" id="nama" placeholder="Nama"/required>
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username"/ required>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/ required>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="BUAT AKUN"/>
                            </div>
                            
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="assets/img/kua.png" alt="sing up image"></figure>
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



