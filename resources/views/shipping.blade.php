<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Address Details</title>
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
        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        form .form-group {
            margin-bottom: 15px;
        }
        form label {
            display: block;
            font-size: 1em;
            margin-bottom: 5px;
        }
        form input {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #dddddd;
            border-radius: 5px;
        }
        form button {
            background: #35424a;
            color: #ffffff;
            border: none;
            padding: 15px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background 0.3s ease;
            margin-top: 10px;
        }
        form button:hover {
            background: #1e2e38;
        }
    </style>
</head>
<body>
    <header>
        <h1>Checkout - Address Details</h1>
    </header>

    <div class="container">
        <form>
            <div class="form-group">
                <label for="full-name">Full Name</label>
                <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter your street address" required>
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="Enter your city" required>
            </div>

            <div class="form-group">
                <label for="state">State/Province</label>
                <input type="text" id="state" name="state" placeholder="Enter your state/province" required>
            </div>

            <div class="form-group">
                <label for="zip">ZIP/Postal Code</label>
                <input type="text" id="zip" name="zip" placeholder="Enter your ZIP/postal code" required>
            </div>

            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" id="country" name="country" placeholder="Enter your country" required>
            </div>

            <button type="submit">Proceed to Payment</button>
        </form>
    </div>
</body>
</html>