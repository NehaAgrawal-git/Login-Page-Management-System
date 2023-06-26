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
        
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 20px;
        }
        
        .product {
            display: flex;
            flex-direction: column;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .product img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
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
        
        .product-description {
            flex-grow: 1;
            margin-bottom: 10px;
        }
        
        .product-button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            font-size: 14px;
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
        <div class="product-grid">
            <div class="product">
                <img src="https://dummyimage.com/300x300" alt="Product Image">
                <h2 class="product-title">Product 1</h2>
                <p class="product-price">$19.99</p>
                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in tortor id arcu tincidunt consectetur.</p>
                <button class="product-button">Add to Cart</button>
            </div>

            <div class="product">
                <img src="https://dummyimage.com/300x300" alt="Product Image">
                <h2 class="product-title">Product 2</h2>
                <p class="product-price">$29.99</p>
                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in tortor id arcu tincidunt consectetur.</p>
                <button class="product-button">Add to Cart</button>
            </div>

            <div class="product">
                <img src="https://dummyimage.com/300x300" alt="Product Image">
                <h2 class="product-title">Product 3</h2>
                <p class="product-price">$14.99</p>
                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in tortor id arcu tincidunt consectetur.</p>
                <button class="product-button">Add to Cart</button>
            </div>

            <!-- Add more product items as needed -->
        </div>
    </div>
</body>
</html>

