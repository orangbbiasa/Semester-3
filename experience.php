<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengalaman Kerja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        section {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        .experience-item {
            margin-bottom: 20px;
        }

        .job-title {
            font-weight: bold;
        }

        .company-name {
            color: #666;
        }

        .date {
            color: #888;
        }
    </style>
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

    <section>
        <h1>Experience</h1>
            <ul>
                <?php
                // Include your database connection file (koneksi.php)
                require 'koneksi.php';

                // Assuming you have a 'contacts' table with columns 'name', 'email', 'message'
                $query = "SELECT * FROM experience";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>";
                    echo "<strong>Job Title:</strong> " . $row['job_title'] . "<br>";
                    echo "<strong>Company Name:</strong> " . $row['company_name'] . "<br>";
                    echo "</li>";
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
    </section>

</body>
</html>
