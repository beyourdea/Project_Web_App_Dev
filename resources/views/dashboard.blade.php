<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>คำสั่งซื้อจากร้านลูกชิ้น</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
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

        .confirmed {
            background-color: green;
            color: white;
        }

        .served {
            background-color: blue;
            color: white;
        }
    </style>
</head>

<body class="container">
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Meatball Name</th>
                <th>Meatball Price</th>
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
            @foreach ($orderGroup as $data)
            <tr>
                @if ($first)
                <td rowspan="{{ count($orderGroup) }}">{{ $data->order_id }}</td>
                @php $first = false @endphp
                @endif
                <td>{{ $data->meatball_name }}</td>
                <td>{{ $data->order_detail.amount }}</td>
                <td>{{ $data->sauce_name }}</td>
                <td>{{ $data->side_dishes_name }}</td>
                @php
                $totalPrice += $data->meatball_price; 
                @endphp
            </tr>
            @endforeach
            <tr>
                <td colspan="5"></td>
                <td>{{ $totalPrice }}</td>
                <td>
                    <button class="confirmed" onclick="confirmOrder(this)">Confirm Order</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
<script>
    function confirmOrder(button) {
        button.innerHTML = 'Confirmed';
        button.classList.add('confirmed');
        button.setAttribute('disabled', 'true');
    }

    function serveOrder(button) {
        button.innerHTML = 'Served';
        button.classList.add('served');
        button.setAttribute('disabled', 'true');
    }
</script>


</html>