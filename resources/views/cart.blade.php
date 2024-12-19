<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dddddd;
        }
        table th {
            background-color: #35424a;
            color: #ffffff;
        }
        .product-img {
            width: 50px;
            height: auto;
            border-radius: 5px;
        }
        .total {
            text-align: right;
            margin-top: 20px;
            font-size: 1.2em;
        }
        .actions {
            text-align: right;
            margin-top: 20px;
        }
        .actions button {
            background: #35424a;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .actions button:hover {
            background: #1e2e38;
        }
    </style>
</head>
<body>
    <header>
        <h1>Your Shopping Cart</h1>
    </header>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="https://via.placeholder.com/50" alt="Product 1" class="product-img"> Product 1</td>
                    <td>2</td>
                    <td>$19.99</td>
                    <td>$39.98</td>
                    <td><button>Remove</button></td>
                </tr>
                <tr>
                    <td><img src="https://via.placeholder.com/50" alt="Product 2" class="product-img"> Product 2</td>
                    <td>1</td>
                    <td>$29.99</td>
                    <td>$29.99</td>
                    <td><button>Remove</button></td>
                </tr>
            </tbody>
        </table>

        <div class="total">
            <p>Total: $69.97</p>
        </div>

        <div class="actions">
            <button>Continue Shopping</button>
            <button>Checkout</button>
        </div>
    </div>
</body>
</html>
