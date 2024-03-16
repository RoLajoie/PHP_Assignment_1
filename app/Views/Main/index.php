<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu</title>
    <link href="/public/css/style.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

<div class="navbar">
    <ul>
        <li><a href="/Main/index">Landing page</a></li>
        <li><a href="/Main/about_us">About Us</a></li>
        <li><a href="/Contact/index">Contact Us</a></li>
        <li><a href="/Contact/read">See the messages we get</a></li>
    </ul>
</div>

<h1>Landing page</h1>
<p>Welcome to this Web application</p>
<p>We aim to please.</p>

<!-- Making sure the image isn't massive --> 

<style>
    .index-img {
        width: 25%; 
        height: auto; 
        display: block; 
    }
</style>

<p>This is what we do when we say aim</p>
<img src="/public/images/aim.png" class="index-img"> <!-- Adjusted image path -->
<p>Just a casual day at the office</p>
<img src="/public/images/office.jpg" class="index-img"> <!-- Adjusted image path -->

</body>
</html>
