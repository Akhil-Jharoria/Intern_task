<!-- Donate Page  -->


<!DOCTYPE html>
<html>

<head>
    <title>DONATE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"/> -->
    <link rel="stylesheet" href="/payment_gateway/style/style1.css" type="text/css">
    <!-- <link rel="stylesheet" href="style.css" type="text/css"/> -->

    <style>
        body {
            background-image: url("/payment_gateway/images/donate.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">SPARK NGO</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
                        <li><a href="aboutus.php"><span class="glyphicon glyphicon-book"></span>ABOUT US</a></li>
                        <li><a href="contactform.php"><span class="glyphicon glyphicon-phone"></span>CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="sign-up-form">
        <img src="/payment_gateway/images/personicon.png">
        <h1 style="color: red;"> " Think of giving not as a duty but as a privilege."</h1>
        <form>
            <script src="https://checkout.razorpay.com/v1/payment-button.js" 
                    data-payment_button_id="pl_KQcVJHftfqaeDf" async> 
            </script> 
        </form>
    </div>
</body>

<footer>
    <div class="container">
        <center>
            <p>Copyright &copy; Spark NGO. All Rights Reserved | Contact Us: +91 111111 111111</p>
        </center>
    </div>
</footer>

</html>
