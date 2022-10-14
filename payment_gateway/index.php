<!--
The Spark Foundation-Task Web Development-Payment Gateway Integration
-->
<!DOCTYPE html>
<html>

<head>
    <title>Spark Foundation NGO</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
   -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"/> -->
    <link rel="stylesheet" href="style/style1.css" type="text/css">
    <!-- <link rel="stylesheet" href="style.css" type="text/css"/> -->


    <style>
          #header_line:hover
          {
              font-size: 40px;
             text-shadow: 5px 5px 10px;
          }
         #upper_text:hover
           {
             font-size: 30px;
             text-shadow: 5px 5px 10px;
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
                    <a class="navbar-brand fs-2" href="index.php">Spark NGO</a>
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

    <div id="content">
        <div id="banner_image">
            <div class="container">
                <center>
                    <div id="banner_content">

                        <h1 id="header_line">"Peace begins with a smile"</h1>
                        <br>
                        <h3 class="upper_text" id="upper_text">"The Best Way to find yourself is to, lose yourself in the service of
                            others”</h3>
                        <a href="donate.php" class="button" class="btn  btn-danger  btn-lg active">
                            DONATE NOW
                        </a>
                    </div>
                </center>
            </div>
        </div>

        <footer>
            <div class="container">
                <center>
                    <p>Copyright &copy; Spark NGO. All Rights Reserved | Contact Us: +91 111111 111111</p>
                </center>
            </div>
        </footer>

</body>

</html>
