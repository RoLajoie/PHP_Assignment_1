<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<table>
    <tr>   
        <ul>
            <th>
                <li><a href="../../../public/index.php">Landing page</a></li>
                <li><a href="../../../app/Views/Main/about_us.php">About Us</a></li>
                <li><a href="../../../app/Views/Contact/Contact_us.php">Contact Us</a></li>
                <li><a href="../../../app/Views/Contact/Messages.php">See the messages we get</a></li>
            </th>
            <th>
                <h1>Contact us</h1>
                <p>Wanna reach us? Write your email information and message in the following form and then submit</p>
            </th>
        </ul>
    </tr>
</table>

<!-- Links to the form MessageController.php -->
<form action="/app/Controller/MessageController.php" method="post" class="form-inline" >
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

<?php
if (isset($_GET['success']) && $_GET['success'] == 1) {
    //Creates a div that triggers the happy success message
    echo '<div class="alert alert-success" role="alert">Message submitted successfully!</div>';
}
?>

</body>

</html>
