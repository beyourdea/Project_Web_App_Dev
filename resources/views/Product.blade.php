<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Shop</title>
    </head>
    <body>
      @foreach($models as $model)
       {{$model->name}}
       <img src="{{$model->image}}" alt="">
      @endforeach
    </body>
</html>
