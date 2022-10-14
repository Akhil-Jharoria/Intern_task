<!--
Contact Page
-->
<!DOCTYPE html>
<html>

<head>
    <title>CONTACT US</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
 


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
        body {
            background-image: url("/payment_gateway/images/17.jpg");
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
 
     <script>
        function validation() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var subject = document.getElementById("subject").value;
            var message = document.getElementById("message").value;

            if (name == "") {
                alert("Please Enter Name");
                return 0;
            }
            else if (email == "") {
                alert("Please Enter Email Id");
                return 0;
            }
            else if (subject == "") {
                alert("Please Enter subject");
                return 0;
            }
            else if (message == "") {
                alert("Please Write Message");
                return 0;
            }
        }
    </script>  

<?php
     $servername="localhost";
     $username="root";
     $password="";
     $database="payment_gateway";

     $conn= mysqli_connect($servername,$username,$password,$database);
       if(!$conn)
            {
                 echo '<div class="alert alert-danger role="alert">
                       <strong>Connection Not Establised!</strong> We are facing some techonical issue. Please try after some time.
                       </div>';
            }
       else 
          {
            // echo  '<div class="alert alert-success" role="alert">
            //                <strong>Connection Established!</strong> Connection established successfully.
            //       </div>';
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $name= $_POST['name'];
                $email=$_POST['email'];
                $sub=$_POST['subject'];
                $meg=$_POST['message'];
                
                $sql="INSERT INTO `contact` (`name`, `email`, `description`, `sub`) 
                      VALUES ('$name', '$email', '$meg', '$sub');";
                   $result= mysqli_query($conn,$sql);
                    if($result)
                      {
                         echo "<br>";
                         echo "<br>";
                         echo "<br>";
                         echo '<div class="alert alert-success" role="alert">
                                <strong>Send Successfully!</strong> Thank You for contact Us.
                               </div>';
                      }
                    else
                     {   
                         echo "<br>";
                         echo "<br>";
                         echo "<br>";
                         echo '<div class="alert alert-danger" role="alert">
                               <strong>Not Send Successfully!</strong> Message not send. Try again.
                              </div>';
                     }
             }
           }
 ?>
    <section class="contact_area section_gap" style="padding:200px 70px 20px 70px;">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                       <div class="info_item">
                          <i class="glyphicon glyphicon-home"></i>
                          <h6 style="color:yellow;">Jabalpur</h6>
                       </div>
                       <br>
                       <div class="info_item">
                           <i class="glyphicon glyphicon-phone"></i>
                           <h6><a href="#" style="color:yellow;">0000 0000 0000</a></h6>
                       </div>
                       <br>
                       <div class="info_item">
                           <i class="glyphicon glyphicon-envelope"></i>
                           <h6><a href="#" style="color:yellow;">sparkngo@gmail.com</a></h6>
                       </div>
                       <br>
                 </div>
             </div>

            <div class="col-lg-9">
                <form class="row contact_form" id="contactForm"  novalidate="novalidate" action="contactform.php" method="POST">
                       <div class="col-md-6">
                             <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" style="border-radius:10px;">
                             </div>
                             <div class="form-group">
                                 <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" style="border-radius:10px;">
                             </div>
                             <div class="form-group">
                                 <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" style="border-radius:10px;">
                             </div>
                       </div>
                      <div class="col-md-6">
                            <div class="form-group">
                               <textarea class="form-control" name="message" id="message" rows="1"
                                placeholder="Enter Message Here............." style="border-radius:10px;"></textarea>
                            </div>
                      </div>

                      <div class="col-md-12 text-right">
                         <button type="submit" value="submit" class="btn primary_btn " onclick="validation()" style="border-radius:10px; margin-right: 500px;">Send Message </button>
                      </div>
                 </form>
             </div>
        </div>
    </section>

    

    <footer style="margin-top: 100px;">
        <div class="container">
            <center>
                <p>Copyright &copy; Spark NGO. All Rights Reserved | Contact Us: +91 111111 111111</p>
            </center>
        </div>
    </footer>
</body>

</html>
