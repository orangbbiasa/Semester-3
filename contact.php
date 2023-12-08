<?php 

require 'koneksi.php';

if (isset($_POST["submit"])) {
    if (create($_POST) > 0) {
        echo "<script>alert('Data Added'); document.location.href = 'contact.php';</script>";
    } else {
        echo "<script>alert('Failed To add data'); document.location.href = 'contact.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style Rifal.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class="header">
        <a href="Rifal.php" class="logo">Rifal</a>
        <nav class="navbar">
            <a href="real.php">Home</a>
            <a href="about.php">About</a>
            <a href="service.php">Service</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="contact.php">Contact</a>
            <a href="experience.php">experience</a>
        </nav>
    </header>

    <div id="contact" class="contact">
        <div class="container">
            <h1>Contact Me</h1>
        <form action="contact.php" method="post">
          <div class="form-group">
            <label for="nama">Name:</label>
            <input type="text" id="nama" name="nama" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
          </div>
          <input type="submit" name="submit" value="Submit">
        </form>
        </div>
    </div>
    
</body>
</html>