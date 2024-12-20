<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - HUEMIC</title>

    <link rel="shortcut icon" href="pic/logo1.png">

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style>
    body {
        font-family: Futura, sans-serif;
    }

    #main {
        min-height: 630px;
    }

    #login {
        height: 360px;
        width: 302.4px;
        padding: 20px;
        text-align: center;
    }
</style>

<body>

    <!-- Banner Start -->
    <?php
    include("header.html");
    ?>
    <!-- Banner End -->

    <div class="container position-relative" id="main">
        <div class="position-absolute top-50 start-50 translate-middle" id="login">
            <small class="text-center">

                <h3 class="text-uppercase">Login With OTP</h3>
                <small>Please enter your email address</small>
                <div class="container mb-3">
                    <form action="send_otp.php" method="post" onsubmit="return showOtpField(event)">
                        <label for="exampleFormControlInput1" class="form-label">Enter Email</label>
                        <input type="email" class="form-control m-3 border border-secondary-subtle" name="user_email"
                            id="user_email" placeholder="Enter your email">
                        <!-- <input type="text" name="otp" id="otpInput"
                            class="form-control m-3 border border-secondary-subtle" placeholder="Enter OTP"
                            style="display: none;"> -->
                        <button type="submit" class="btn btn-success">
                            <small>Send OTP</small>
                        </button>
                    </form>
                </div>
                <span><small>A 5 digit OTP will be sent to your email address</small></span>
            </small>
        </div>
    </div>


    <!-- FOOTER Start -->
    <?php
    include("footer.html");
    ?>
    <!-- FOOTER End -->

    <!-- <script>
        function showOtpField(event) {
            event.preventDefault(); // Prevents the form from submitting
            var otpInput = document.getElementById('otpInput');
            otpInput.style.display = 'block'; // Show the OTP input box
        }
    </script> -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>