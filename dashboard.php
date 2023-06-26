<?php
// Start session
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['username'])) {
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        /* Styles for the dashboard */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 32px;
            margin: 0;
            text-transform: uppercase;
        }

        .dashboard-link {
            display: inline-block;
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            color: #333;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .dashboard-link:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <header>
        <h1>Dashboard</h1>
    </header>

    <div class="container">
        <a class="dashboard-link" href="ecommerce_template1.php">
            MySite Template 1
        </a>
        <a class="dashboard-link" href="ecommerce_template2.php">
            MySite Template 2
        </a>
    </div>
</body>
</html>

