<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');

}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Phonebook</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  /* Custom CSS */

body, html {

  font-family: "Inconsolata", sans-serif;
}
  .contact-card {
    border: 1px solid #ddd;
    border-radius: 0.25rem;
    padding: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
  }

  .contact-card .card-body {
    padding: 0;
  }

  .contact-card .card-title {
    padding: 10px;
    margin-bottom: 0;
    background-color: #0d4076;
    color: #fff;
  }

  .contact-card p {
    margin: 0;
    padding: 10px;
  }

  .contact-card .btn {
    margin: 10px;
  }

  /* Custom CSS for layout */
  .container {
    text-align: center;
    margin-top: 30px;
    background-color: #262626;
    color: #fff;
    padding: 20px;
    border-radius: 10px;
  }

  .form-group {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
  }

  .form-group label {
    flex: 0 0 30%;
    margin-right: 10px;
    text-align: right;
  }

  .row {
    justify-content: center;
  }

  .col-md-6 {
    max-width: 500px;
  }
  p{
      color: rgb(255, 255, 255)
  }

  h1 {
    margin-bottom: 30px;
  }

  h2 {
    margin-top: 30px;
  }

  #searchInput {
    margin-bottom: 10px;
  }

  #contactList {
    list-style-type: none;
    padding: 0;
    margin-top: 20px;
  }

  #contactList .contact-card:last-child {
    margin-bottom: 0;
  }

  #noContactsFound {
    color: #fff;
  }

  @media (min-width: 768px) {
    .offset-md-2 {
      margin-left: auto;
      margin-right: auto;
    }
  }

  /* Night Mode */
  body {
    background-color: #000;
    color: #fff;
  }

  .container {
    /*background-color: #111;*/
        background : url("phonebookBG.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    	background-attachment: fixed;
    	overflow: hidden;
    	color: rgb(53, 49, 54);
    
  }

  .form-group label {
    color: rgb(53, 49, 54);
  }

  .contact-card {
    background-color: #1c1c1c;
  }

  .contact-card .card-title {
    background-color: #0d4076;
  }
</style>
</head>
<body>
    
<!-- Links (sit on top) -->

<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="indexIN.php" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3" id="target-section">
      <a href="indexIN.php" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3" id="target-section">
      <a href="indexIN.php" class="w3-button w3-block w3-black">CONTACT DETAILS</a>
    </div>
    <div class="w3-col s3">
      <a href="logout.php" class="w3-button w3-block w3-black">LOGOUT</a>
    </div>
  </div>
</div>

  <div class="container">
    <h1>Welcome back, <?=$_SESSION['name']?>!</h1>
    <h2>PHONEBOOK</h2>
    <div class="row">
      <div class="col-md-6">
        <form id="contactForm">
          <input type="hidden" id="contactId">
          <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
          </div>
          <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
          </div>
          <div class="form-group">
            <label for="middleName">Middle Name:</label>
            <input type="text" class="form-control" id="middleName" placeholder="Enter middle name">
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address">
          </div>
          <div class="form-group">
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" class="form-control" id="phoneNumber" placeholder="Enter phone number">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="notes">Notes:</label>
            <textarea class="form-control" id="notes" placeholder="Enter notes"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
    <h2>Contact List</h2>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <input type="text" class="form-control" id="searchInput" placeholder="Search">
        <ul id="contactList"></ul>
        <p id="noContactsFound" style="display: none; color: #fff;">No contacts found.</p>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  <script src="script.js"></script>



</body>
</html>
