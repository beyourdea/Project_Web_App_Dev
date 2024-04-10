<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            position: relative;
            left: 10%;
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
            top: 2cm;
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

        .button {
            bottom: 10px;
            left: 10px;
            background-color: gold;
            border-radius: 60px;
            color: #fff;
            padding: 5px 50px;
            border: none;
            cursor: pointer;
        }

        .add {
            position: right;
            bottom: 10px;
            right: 10px;
            background-color: blue;
            border-radius: 6px;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>


    <div class="sidebar">
        <button id="google_translate_element"></button>
        <a href="{{route('dashboard')}}" onclick="openTab('orders')">Dashboard Orders</a>
        <a href="{{route('stock')}}">Products</a>
        <a href="/">
            <button class="button" type="submit">Log out</button>
        </a>
    </div>

    <div class="container">
        <h1>Meatball's Stock</h1>

        <button type="button" class="add" data-bs-toggle="modal" data-bs-target="#meatball">
            Add
        </button>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Price</th>
                    <th>Tools</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($models1 as $model)
                <tr>
                    <td>{{$model->meatball_id}}</td>
                    <td>{{$model->name}}</td>
                    <td>{{$model->amount}}</td>
                    <td>{{$model->price}}</td>
                    <td>
                        <div class="d-flex gap-3">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#meatball" onclick="getData('{{ $model->meatball_id }}')">Edit</button>
                            <button type="button" class="btn btn-danger" onclick="deleteData('{{ $model->meatball_id }}')">Delete</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($models2 as $model)
                <tr>
                    <td>{{$model->sauce_id}}</td>
                    <td>{{$model->name}}</td>
                </tr>
                @endforeach
            </tbody>

    </div>
    <div>
        <h1>Sauce's Stock</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($models3 as $model)
                <tr>
                    <td>{{$model->side_dishes_id}}</td>
                    <td>{{$model->name}}</td>
                </tr>
                @endforeach
            </tbody>

    </div>
    <div>
        <h1>Side dish's Stock</h1>
    </div>
    <div class="modal" tabindex="-1" id="meatball">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="model_title">Add Meatball</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="meatball_id">
                    <div class="mb-3">
                        <label for="meatball_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="meatball_name">
                    </div>
                    <div class="mb-3">
                        <label for="meatball_amount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="meatball_amount">
                    </div>
                    <div class="mb-3">
                        <label for="meatball_price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="meatball_price">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addData()">Save</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

        function openTab(tabName) {
            var i, tabcontent;
            tabcontent = document.getElementsByTagName("div");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            document.getElementById(tabName).style.display = "block";
        }

        function addData() {
            console.log(meatball_id.value);
            $.ajax({
                type: "POST",
                url: "{{ route('add_product') }}",
                data: {
                    meatball_id: meatball_id.value || null,
                    name: meatball_name.value,
                    amount: meatball_amount.value,
                    price: meatball_price.value,
                },
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    window.location.reload();
                },
            });
        }

        function getData(id) {
            const url = "<?php echo url('/') ?>";
            $.ajax({
                type: "GET",
                url: url + "/Get-Product/" + id,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    const data = JSON.parse(response);
                    model_title.textContent = "Edit Meatball";
                    meatball_id.value = data.meatball_id;
                    meatball_name.value = data.name;
                    meatball_amount.value = data.amount;
                    meatball_price.value = data.price;
                },
            });
        }

        function deleteData(id) {
            const url = "<?php echo url('/') ?>";
            $.ajax({
                type: "POST",
                url: url + "/Delete-Product/" + id,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    window.location.reload();
                },
            });
        }
    </script>

</body>

</html>