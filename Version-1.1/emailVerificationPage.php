<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email verification</title>

    <!-- Font Icon -->
    <!--link rel="stylesheet" href="/projectApprovalSystem/fonts/material-icon/css/material-design-iconic-font.min.css"-->
    <link href="/projectApprovalSystem/assets/css/icon.css" rel="stylesheet">
    <link href="/projectApprovalSystem/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main css -->
    <link rel="stylesheet" href="/projectApprovalSystem/assets/registration_css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
<video  playsinline autoplay muted loop style="  position: fixed;right: 0;bottom: 0;min-width: 100%;min-height: 100%;">
        <source src="1.mp4" type="video/mp4">
  </video>
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="login-container">
                <div class="signup-content">
                    <form method="POST" action="emailVerification.php" id="signup-form" class="signup-form">
                        <div class="form-title">
                        <h1 style='text-align: center;'>Email Verification</h1>
                        <h6 style="color: #942222;text-align: center;">Verification code is send to your registered email ID</h6>
                        <h5 style="text-align: center;color: red;">
                            <?php
                            if(isset($_SESSION["invalidToken"]))
                            {
                                echo $_SESSION["invalidToken"];
                            }
                            ?>
                        </h5>
                    </div>
                        <div class="form-group">
                            <input type="text" class="form-input col-md-11" name="emailVerificationCode" id="emailVerificationCode" placeholder="Enter Verification code"/>
                            &nbsp;
                            <a href="/projectApprovalSystem/resendEmailPage.php">
                            <i class="material-icons">restore</i>
                        </a>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Verify"/>
                        </div>
                  
                      </form>
                    <p style='text-align: center;color: black;'>
                        Don't have account ? <a href="/projectApprovalSystem/studentRegistrationPage.html" class="loginhere-link">Register here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="/projectApprovalSystem/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/projectApprovalSystem/assets/js/main.js"></script>
</body>
</html>


