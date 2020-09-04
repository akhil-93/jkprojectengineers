<?php
require_once('connect.php');

if(isset($_POST) & !empty($_POST)){
$name = $_POST['name'];
$email = $_POST['email'];
$type = $_POST['type'];
$message = $_POST['message'];

if(isset($name) || empty($name)){


$error[] = "Name is required";

}

if(isset($email) || empty($email)){


$error[] = "Email is required";

}


if(isset($type) || empty($type)){


$error[] = "Type is required";

}


if(isset($message) || empty($message)){


$error[] = "Message is required";

}


if(isset($error) || empty($error)){

$to = "akhil.434@gmail.com";
$headers = "From :" . $email;

if(mail($to, $message, $headers)){

$sql = "INSERT INTO `contact` (name, email, type, message) VALUES ('$name', '$email', '$type', '$message')";
if(mysqli_query($connection, $sql)){

"Message received, we willl get back you soon ";


} else {

echo "Failed to send message, Try again";


}

//  else {

// echo "Failed to send message, Try again";


// }


};


}


print_r($error);


}





?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

<link rel="stylesheet" type="text/css" href="css/slick.css"/>

<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>


<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<!--     <title>Hello, world!</title>
 -->  </head>

 <style>

.navbar {max-width: 100% !important;}


 </style>



  <body>






<form id="contact-form" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">email</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Type select</label>
    <select class="form-control" name="type" id="exampleFormControlSelect1" required="">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">comments</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" required=""></textarea>
  </div>

  <button type="submit" class="btn-primary">Submit</button>

</form>




























<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>   
    
    <!-- <script src="js/script.js"></script>
    
    
     -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    
    
   
    
    
    
    
      </body>
    </html>