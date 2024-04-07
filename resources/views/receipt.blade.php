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
    <div>
        @foreach($models1 as $models1)
        @if($model->order_id != null)
            <p>{{ $models1-> order_id}}</p>
            <p>{{ $models1-> sauce_id}}</p>
            <p>{{ $models1-> side_dishes_id}}</p>
            <p>{{ $models1-> total_price}}</p>
        @endforeach
    </div>
    <div>
        @foreach($models1 as $models1)
        @if($model->order_id != null)
            <p>{{$models1-> meatball_id}}</p>
            <p>{{$models1-> amount}}</p>
         @endforeach
    </div>
</body>

</html>