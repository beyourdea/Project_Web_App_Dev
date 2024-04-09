<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Artist.css">
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

        .search-container {
            text-align: right;
            margin-bottom: 20px;
        }

        .search-container input[type=text] {
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 8px;
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>คำสั่งซื้อจากร้านลูกชิ้น</h1>

        <!-- เพิ่มส่วนค้นหา -->
        <div class="search-container">
            <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="ค้นหาชื่อสินค้า..">
        </div>

        <table id="productTable">
            <thead>
                <tr>
                    <th>คำสั่งซื้อ</th>
                    <th>ชื่อสินค้า</th>
                    <th>จำนวน</th>
                    <th>ราคาต่อหน่วย</th>
                    <th>peyment</th>
                    <th>ยืนยันรายการ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>ลูกชิ้นหมู</td>
                    <td>2 ชิ้น</td>
                    <td class="price">30 บาท</td>
                    <td>ชำระเงินแล้ว</td>
                    <td><button class="btn"> Button</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>ลูกชิ้นไก่</td>
                    <td>2 ชิ้น</td>
                    <td class="price">30 บาท</td>
                    <td>รอการชำระเงิน</td>
                    <td><button class="btn"> Button</button></td>
                </tr>
            </tbody>
        </table>
        <div class="total">
            รวมทั้งหมด: <span>60 บาท</span>
        </div>
    </div>

    <script>
        // Function to search for products
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("productTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Index 1 for product name column
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>

</html>
