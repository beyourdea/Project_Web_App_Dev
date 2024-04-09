<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Options</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .payment-options {
            margin-top: 50px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 20px;
            justify-items: center;
        }
        .payment-option {
            padding: 20px;
            border: 2px solid #007bff;
            border-radius: 5px;
            background-color: transparent;
            color: #007bff;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .payment-option:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <h2>Choose Payment Method</h2>
    <div class="payment-options">
        <a href="class=payment-option">Card Payment</a>
        <a href="class=payment-option">PromptPay Scan</a>
    </div>
</body>
</html>
