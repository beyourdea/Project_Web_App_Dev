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
            font-size: 16px;
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
    </style>
</head>

<body>
    <div class="container">
        <h1>คำสั่งซื้อจากร้านลูกชิ้น</h1>
        <table>
            <thead>
                <tr>
                    <th>คำสั่งซื้อ</th>
                    <th>ชื่อสินค้า</th>
                    <th>จำนวน</th>
                    <th>ราคาต่อหน่วย</th>
                    <th>peyment</th>
                    <th>สถานะ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ส้ม</td>
                    <td>ลูกชิ้นหมู</td>
                    <td>2</td>
                    <td class="price">30 บาท</td>
                    <td>ชำระเงินแล้ว</td>
                    <td>เสร็จแล้ว</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="price"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="price"></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div class="total">
            รวมทั้งหมด: <span>30 บาท</span>
        </div>
    </div>
</body>

</html>
