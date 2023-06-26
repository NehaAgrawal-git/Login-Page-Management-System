<?php
// Start session
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>eCommerce Template</title>
    <style>
        /* Styles for the eCommerce template */
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
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        h1 {
            font-size: 24px;
            margin: 0;
        }
        
        .product {
            display: flex;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .product img {
            width: 150px;
            height: auto;
            margin-right: 20px;
        }
        
        .product-info {
            flex-grow: 1;
        }
        
        .product-title {
            font-size: 18px;
            margin: 0;
            margin-bottom: 10px;
        }
        
        .product-price {
            font-size: 16px;
            color: #888;
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>MySite</h1>
        </div>
    </header>

    <div class="container">
        <div class="product">
            <img src="https://dummyimage.com/150x150" alt="Product Image">
            <div class="product-info">
                <h2 class="product-title">Product 1</h2>
                <p class="product-price">$19.99</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in tortor id arcu tincidunt consectetur.</p>
                <button>Add to Cart</button>
            </div>
        </div>

        <div class="product">
            <img src="https://dummyimage.com/150x150" alt="Product Image">
            <div class="product-info">
                <h2 class="product-title">Product 2</h2>
                <p class="product-price">$29.99</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in tortor id arcu tincidunt consectetur.</p>
                <button>Add to Cart</button>
            </div>
        </div>

        <!-- Add more product items as needed -->
    </div>
</body>
</html>
