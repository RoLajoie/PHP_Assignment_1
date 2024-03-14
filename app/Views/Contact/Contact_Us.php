<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Link to the CSS file using the correct relative path -->
    <link href="../public/css/style.css" rel="stylesheet"> 
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<div class="navbar">
    <ul>
        <li><a href="/Main/index">Landing page</a></li>
        <li><a href="/Main/about_us">About Us</a></li>
        <li><a href="/Contact/Contact_Us">Contact Us</a></li>
        <li><a href="/Contact/Messages">See the messages we get</a></li>
    </ul>
</div>

<!-- Links to the form MessageController.php -->
<form action="/app/controllers/MessageController.php" method="post" class="form-inline">
  <div class="form-group">
    <label>Email:</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
  </div>

  <div class="form-group">
    <label>Message:</label>
    <br>
    <textarea name="message" class="form-control" rows="3" placeholder="Write To Us"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Send</button>
</form>

<!-- Showing that the message was sent successfully --> 
<?php
if (isset($_GET['success']) && $_GET['success'] == 1) {
    //Creates a div that triggers the happy success message
    echo '<div class="alert alert-success" role="alert">Message submitted successfully!</div>';
}
?>

</body>

</html>
