<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="images/Icon_Logo.ico" type="image/x-icon">
    <title>Login to Super Inventory</title>

    <!-- Stylesheets -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cmxform.css">
    <link rel="stylesheet" href="js/lib/validationEngine.jquery.css">

    <!-- Scripts -->
    <script src="js/lib/jquery.min.js" type="text/javascript"></script>
    <script src="js/lib/jquery.validate.min.js" type="text/javascript"></script>

    <script>
        $(document).ready(function() {

            // validate signup form on keyup and submit
            $("#login-form").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 3
                    },
                    password: {
                        required: true,
                        minlength: 3
                    }
                },
                messages: {
                    username: {
                        required: "Please enter a username",
                        minlength: "Your username must consist of at least 3 characters"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 3 characters long"
                    }
                }
            });

        });
    </script>

    <!-- Optimize for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        section {
            background: url('images/Main_bg.jpg') no-repeat;
            background-position: center;
            background-size: cover;
            display: flex;
            min-height: 100vh;
            width: 100%;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 30px;
            width: auto;
            height: 50px; 
            z-index: 1;
        }

        .form-box {
            position: relative;
            width: 400px;
            height: auto;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(25px);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
			margin-top: 125px;
        }

        h2 {
            font-size: 2em;
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
        }

        .inputbox {
            position: relative;
            margin-bottom: 15px;
            width: 310px;
            border-bottom: 2px solid #fff;
        }

        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #fff;
            font-size: 1em;
            pointer-events: none;
            transition: 0.5s;
        }

        input:focus ~ label,
        input:valid ~ label {
            top: 1px;
        }

        .inputbox input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none !important;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: #fff;
			
        }

		.inputbox input:hover,
        .inputbox input:focus {
        border-bottom: 2px solid transparent;
    }

        .inputbox ion-icon {
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.2em;
            top: 20px;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            width: 100%;
        }

        .form-options div {
            flex: 1;
        }

        .forget {
            margin: 15px 0;
            font-size: 0.9em;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .forget label input {
            margin-right: 3px;
        }

        .forget label a {
            color: #fff;
            text-decoration: none;
            transition: transform 0.2s, font-weight 0.2s, color 0.2s;
            font-weight: 400;
        }

        .forget label a:hover {
            text-decoration: none;
            transform: translateY(-3px);
            font-weight: 600;
            color: red;
        }

        button {
            width: 100%;
            height: 40px;
            border-radius: 40px;
            background: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
        }

        .register {
            font-size: 0.9em;
            color: #fff;
            text-align: center;
            margin: 25px 0 10px;
        }

        .register p a {
            text-decoration: none;
            color: #fff;
            font-weight: 600;
        }

        .register p a:hover {
            text-decoration: none;
            transform: translateY(-3px);
            font-weight: 600;
            color: red;
        }

        .login {
            font-size: 0.9em;
            color: #fff;
            text-align: center;
            margin: 25px 0 10px;
        }

        .login p a {
            text-decoration: none;
            color: #fff;
            font-weight: 600;
        }

        .login p a:hover {
            text-decoration: none;
            transform: translateY(-3px);
            font-weight: 600;
            color: red;
        }

        .success {
            color: green;
            font-size: 1em;
            margin: 10px 0;
        }

        .form-box-create-company {
            display: none;
            margin-top: 20px;
        }

        .show-form-box-create-company {
            display: block !important;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 20px;
        }

        .form-box-create-company h2 {
            margin-bottom: 20px;
        }

        .form-box-create-company .inputbox {
            margin-bottom: 15px;
            width: 100%;
        }

        .form-box-create-company button {
            margin-top: 10px;
        }

        #footer {
            margin-top: auto;
            text-align: center;
            color: black;
            font-weight: bold;
            padding: 10px;
        }
		input[type="checkbox"] {
        color: white;
         }
    </style>
</head>
<body>

<!--    Only Index Page for Analytics   -->
<?php include_once("analyticstracking.php") ?>
<!-- TOP BAR -->
<div id="top-bar">

    <div class="page-full-width">

        <!--<a href="#" class="round button dark ic-left-arrow image-left ">See shortcuts</a>-->

    </div> <!-- end full-width -->

</div>
<!-- end top-bar -->

<section>

    <a href="https://sarthakvadhel.engineer" id="company-branding" class="fr"  target="blank">
        <img src="<?php if(isset($_SESSION['logo'])) { echo "upload/".$_SESSION['logo'];}else{ echo "upload/default.png"; } ?>" alt="Point of Sale" class="logo"/>
    </a>

    <div class="form-box">
        <div class="form-value">
            <form action="checklogin.php" method="POST">
                <p>
                    <?php
                    if(isset($_REQUEST['msg']) && isset($_REQUEST['type']) ) {

                        if($_REQUEST['type'] == "error")
                            $msg = "<div class='error-box round'>".$_REQUEST['msg']."</div>";
                        else if($_REQUEST['type'] == "warning")
                            $msg = "<div class='warning-box round'>".$_REQUEST['msg']."</div>";
                        else if($_REQUEST['type'] == "confirmation")
                            $msg = "<div class='confirmation-box round'>".$_REQUEST['msg']."</div>";
                        else if($_REQUEST['type'] == "information")
                            $msg = "<div class='information-box round'>".$_REQUEST['msg']."</div>";

                        echo $msg;
                    }
                    ?>
                </p><br><br>
                <h2>Login</h2><br><br>
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="username" required>
                    <label for="">Username</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <div class="forget">
                    <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="forget_pass.php">Forget Password</a></label>
                </div>
                <button type="submit">Log in</button>
            </form>
        </div>
    </div>
    <div id="footer">
        <p style="color:black;font-weight:bold;"> &copy;Copyright hold by Sarthak Vadhel</p>
    </div>
</section>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
