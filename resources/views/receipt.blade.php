<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .totle-price {
        text-align: center;
    }

    .confirm-button {
        background-color: black;
        border: 2px solid black;
        padding: 15px 50px;
        border-radius: 60px;
        font-size: 16px;
        color: white;
        cursor: pointer;
    }

    .confirm-button:hover {
        background-color: #00A36C;
        border-color: #00A36C;
    }
</style>

<body class="p-3">
    <div id="google_translate_element"></div>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"> </script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en'
                },
                'google_translate_element'
            );
        }
    </script>

    <?php
    $totalPrice = 0;
    ?>
    <div>
        <pre><?php
                ?></pre>
        <h1>Queue: {{ $models1[0]->order_id }}</h1>
    </div>
    <div class="d-flex flex-column gap-3">
        @foreach($models2 as $model)
        <div class="card shadow rounded p-3 d-flex flex-row justify-content-between">
            <div>
                <p>Name: {{ $model->name }}</p>
                <p>Amount: {{ $model->amount }}</p>
            </div>
            <div>
                <p>Price: {{ $model->price }}</p>
            </div>
            <?php
            $subtotal = $model->amount * $model->price;
            $totalPrice += $subtotal;
            ?>

        </div>
        @endforeach
        <div>
            <p>Sauce: {{ $models1[0]->sauce_name }}</p>
            <p>Side Dish: {{ $models1[0]->side_dishes_name }}</p>
        </div>
    </div>
    <div class="totle-price mt-2">
        <p>Total Price: {{ $totalPrice }} Bath</p>
    </div>
    <div class="d-flex justify-content-center">
        <a href="http://127.0.0.1:8000/Payment">
            <button class="confirm-button" type="submit">Pay</button>
        </a>
    </div>
</body>

</html>