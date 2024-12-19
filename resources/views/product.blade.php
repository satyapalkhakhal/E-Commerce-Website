<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Description</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 90%;
            margin: auto;
            overflow: hidden;
            padding: 20px 0;
        }
        header {
            background: #35424a;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
        .product {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            background: #ffffff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }
        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            flex: 1 1 300px;
        }
        .product-info {
            flex: 2;
            padding: 20px;
        }
        .product-title {
            font-size: 2em;
            margin-bottom: 10px;
        }
        .product-price {
            font-size: 1.5em;
            color: #35424a;
            margin-bottom: 20px;
        }
        .product-description {
            font-size: 1em;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .product button {
            background: #35424a;
            color: #ffffff;
            border: none;
            padding: 15px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background 0.3s ease;
        }
        .product button:hover {
            background: #1e2e38;
        }
    </style>
</head>
<body>
    <header>
        <h1>Product Description</h1>
    </header>

    <div class="container">
        <div class="product">
            <img src="https://via.placeholder.com/400" alt="Product Image">
            <div class="product-info">
                <h2 class="product-title">Product Name</h2>
                <p class="product-price">$49.99</p>
                <p class="product-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                    nisi ut aliquip ex ea commodo consequat.
                </p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>
</body>
</html>
