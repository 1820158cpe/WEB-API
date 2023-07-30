<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Phonebook</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("contact_background.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}

.hs-text {
  color: white;
}

.bgimg .hs-text {
  position: absolute;
  top: 20%;
  left: 50%;
  transform: translateX(-50%);
  text-align: center;
}

</style>
</head>
<body class="loggedin">

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s2">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s2">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s2">
      <a href="#where" class="w3-button w3-block w3-black">CONTACT DETAILS</a>
    </div>
    <div class="w3-col s2">
      <a href="phonebook.php" class="w3-button w3-block w3-black">PHONEBOOK</a>
    </div>
    <div class="w3-col s2"><br><br></div>
    <div class="w3-col s2">
      <a href="logout.php" class="w3-button w3-block w3-black">LOGOUT</a>
    </div>
  </div>
</div>
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="hs-text">
    <span class="w3-text-white" style="font-size:90px">Phonebook</span>
    <h2>Welcome to <span>my Phonebook!</span></h2>
    <p>This simple website is created with html, css, and php.<br> The phonebook can create, red, update, and delete contact details.  <br>
     View the contact details of addedd members for you to chat with! <br>For you to use the phonebook, you must register or login <br></p>
    <a href="games.php" class="site-btn">To use it, <span>sign up / login </span> here!</a>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT ME</span></h5>
    <p>Hi! I am Jerou Jeuell U. Espelita, an incoming 4th year college student from the University of Batangas Lipa Campus. I love watching movies and TV series on my free time. I also love playing chess and computer games together with my friends.</p>
    <p>Come join and register to my phonebook so we can keep contact with each other! </p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"The only way to do great work is to love what you do."</i></p>
      <p>-Steve Jobs</p>
    </div>
    <img src="about_bg.jpg" style="width:100%;max-width:500px" class="w3-margin-top">
    <!-- <p><strong>Available</strong> everyday from 6am to 5pm.</p>
    <p><strong>Address:</strong> 15 Adr street, 5015, NY</p> -->
  </div>
</div>



<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND ME</span></h5>
    <p>Don't ingnore this cat if you want to contact me!</p>
    <img src="catmeme.jpg" class="w3-image" style="width:100%;max-width:250px">
    <p><strong>Look at MEow!</strong> When you're desperately looking for friends, but all the hoomans ignore u</p>
    <p><span class="w3-tag">Attention!</span> If you like this work or have any inquiries, you can contact me through the form below</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <!-- <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required name="People"></p> -->
      <!-- <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p> -->
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special inquiries" required name="Message"></p>
      <p><button class="w3-button w3-black" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>


</body>
</html>
