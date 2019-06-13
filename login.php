<?php

 //include("condata.php");
 $conn = mysqli_connect("localhost", "root","", "database1");
   
   $db = "database1";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  $firstname = $_POST['fname'];
       $lastname=$_POST['lname'];
      $email = $_POST['email']; 
	  $phone = $_POST['phone'];
      $message = $_POST['message']; 
      
      $sql = "INSERT INTO table1 VALUES('$firstname','$lastname','$email', '$phone', '$message')";
      $result = mysqli_query($conn,$sql);
      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      
   }
?>


<!DOCTYPE html>
<html>
   <head>
   <title>contact form</title>
   <!-- Latest compiled and minified CSS -->
     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href=css/bootstrap.min.css


<!-- Optional theme -->
<link rel="stylesheet" href=css/bootstrap-theme.min.css
  <link href='custom.css' rel='stylesheet' type='text/css'>

    </head>
	<body>
	<div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

	
	  <h1>Contact form <h1>
	     <form id="contact-form" method="post" action="login.php" role="form" >

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="col-sm-2">Firstname *</label>
                                        <input id="col-sm-10" type="text" name="fname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="lname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                          
                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<script src="js/jquery.min.js"></script>
   
   
   <!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script> 
   
   </body>
  </html>