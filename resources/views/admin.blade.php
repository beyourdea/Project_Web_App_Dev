<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide Bar</title>
    <style>
        /* Style the sidebar */
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

        /* Style sidebar links */
        .sidebar a {
            padding: 10px 20px;
            text-decoration: none;
            font-size: 20px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        /* Change the color of sidebar links on hover */
        .sidebar a:hover {
            color: #f1f1f1;
        }

        /* Style the main content */
        .main-content {
            margin-left: 250px; /* Same as the width of the sidebar */
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

    <div class="main-content">
        <!-- Content for different tabs -->
        <div id="orders" style="display:none;">
            <h2>Order Table</h2>
            <!-- Add your order table content here -->
        </div>

        <div id="products" style="display:none;">
            <h2>Product Table</h2>
            <!-- Add your product table content here -->
        </div>
    </div>

    <script>
        // Function to open a tab
        function openTab(tabName) {
            var i, tabcontent;
            tabcontent = document.getElementsByTagName("div");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            document.getElementById(tabName).style.display = "block";
        }
    </script>

</body>

</html>
