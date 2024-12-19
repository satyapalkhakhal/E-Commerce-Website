<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing Page</title>
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
        }
        header {
            background: #35424a;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        .product {
            background: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 5px;
            overflow: hidden;
            transition: box-shadow 0.3s ease;
        }
        .product:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .product img {
            width: 100%;
            height: auto;
        }
        .product-info {
            padding: 15px;
        }
        .product-title {
            font-size: 1.2em;
            margin: 0 0 10px;
        }
        .product-price {
            color: #35424a;
            font-size: 1.1em;
            margin-bottom: 10px;
        }
        .product button {
            background: #35424a;
            color: #ffffff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .product button:hover {
            background: #1e2e38;
        }
    </style>
</head>
<body>
    <header>
        <h1>Product Listings</h1>
    </header>

    <div class="container">
        <div class="products">
            <div class="product">
                <img src="https://via.placeholder.com/250" alt="Product 1">
                <div class="product-info">
                    <h2 class="product-title">Product 1</h2>
                    <p class="product-price">$19.99</p>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="product">
                <img src="https://via.placeholder.com/250" alt="Product 2">
                <div class="product-info">
                    <h2 class="product-title">Product 2</h2>
                    <p class="product-price">$29.99</p>
                    <button>Add to Cart</button>
                </div>
            </div>

            <div class="product">
                <img src="https://via.placeholder.com/250" alt="Product 3">
                <div class="product-info">
                    <h2 class="product-title">Product 3</h2>
                    <p class="product-price">$39.99</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
