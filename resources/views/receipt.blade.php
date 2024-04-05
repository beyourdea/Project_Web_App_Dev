<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
</head>
<body>
    <div class="container">
        <h1>Receipt</h1>
        <h2>Selected Items:</h2>
        something is cuming
        <ul>
            @foreach($selectedItems as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
        <div>
            <a href="#" class="confirm-button">Confirm Order</a>
        </div>
    </div>
</body>
</html>
