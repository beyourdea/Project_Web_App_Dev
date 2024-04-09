<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            position: relative;
            left:8%;
        }


        .container {
            max-width: 900px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 50px;
            border-radius: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 50px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            border-bottom: 2px solid #ddd;
            padding-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 40px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
            font-size: 18px;
        }

        th {
            background-color: #f2f2f2;
            color: #555;
            font-weight: bold;
            font-size: 18px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e9e9e9;
        }

        td:first-child {
            font-weight: bold;
            color: #333;
        }

        .price {
            color: #28a745;
            font-weight: bold;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            text-align: right;
            margin-top: 30px;
        }

        .total span {
            color: #28a745;
            font-size: 20px;
        }

        .confirm-button {
            background-color: red;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 16px;
            color: white;
            cursor: pointer;
        }

        .confirm-button.clicked {
            background-color: #00A36C;
        }

        .serve-button {
            background-color: black;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 16px;
            color: white;
            cursor: pointer;
        }

        .serve-button.clicked {
            background-color: #00A36C;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 10px 20px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #f1f1f1;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <!-- Sidebar links -->
        <a href="#" onclick="openTab('orders')">Orders</a>
        <a href="#" onclick="openTab('products')">Products</a>
    </div>
    <div class="container">
        <h1>Order table</h1>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Meatball Name</th>
                    <th>Price</th>
                    <th>Sauce Name</th>
                    <th>Side Dish Name</th>
                    <th>Total Price</th>
                    <th>Payment</th>
                    <th>Serve</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($combinedData->groupBy('order_id') as $orderGroup)
                @php
                $first = true;
                $totalPrice = 0;
                @endphp
                @foreach ($orderGroup as $model)
                <tr>
                    @if ($first)
                    <td rowspan="{{ count($orderGroup) }}">{{ $model->order_id }}</td>
                    @php $first = false @endphp
                    @endif
                    <td>{{ $model->meatball_name }}</td>
                    <td>{{ $model->meatball_price}}</td>
                    <td>{{ $model->sauce_name }}</td>
                    <td>{{ $model->side_dishes_name }}</td>
                    @php
                    $totalPrice += $model->meatball_price;
                    @endphp
                        
                    <td>{{ $totalPrice }}</td>
                    <td>
                        <button class="confirm-button" onclick="confirmOrder(this)">Confirm</button>
                    </td>
                    <td>
                        <button class="serve-button" onclick="serveOrder(this)">Serve</button>
                    </td>
                </tr>
                @endforeach
                
                @endforeach
            </tbody>
        </table>
</body>
<script>
    function confirmOrder(button) {
        button.innerHTML = 'Confirmed';
        button.classList.add('confirmed');
        button.classList.add('clicked');
        button.setAttribute('disabled', 'true');
        var serveButton = button.parentNode.nextElementSibling.querySelector('.serve-button');
        serveButton.removeAttribute('disabled');
    }

    function serveOrder(button) {
        button.innerHTML = 'Served';
        button.classList.add('served');
        button.classList.add('clicked');
        button.setAttribute('disabled', 'true');
    }

    document.addEventListener('DOMContentLoaded', function() {
        var serveButtons = document.querySelectorAll('.serve-button');
        serveButtons.forEach(function(button) {
            button.setAttribute('disabled', 'true');
        });
    });
</script>


</html>