<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/font-awesome/css/all.css" rel="stylesheet" />
    <link href="/font-awesome/css/sharp-solid.css" rel="stylesheet" />
    <link href="/font-awesome/css/sharp-regular.css" rel="stylesheet" />
    <link href="/font-awesome/css/sharp-light.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>Product</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-color: white;
        font-family: 'Poppins', sans-serif;
        padding: 25px;
        margin: 30px 25px 40px 25px;
    }

    .menu {
        padding: 0 10px 30px 10px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(calc(350px - 14px), 1fr));
        grid-gap: 30px 40px;
    }


    .heading {
        background: white;
        margin-bottom: 30px;
        padding: 30px 0;
        grid-column: 1/-1;
        display: flex;
        justify-content: space-between;
    }

    .heading>h1 {
        font-weight: 700;
        font-size: 20px;
        color: orange;
        letter-spacing: 10px;
        text-transform: uppercase;

    }

    .heading a {
        text-decoration: none;
        color: orange;
        font-weight: bold;
        font-size: 50px;
        margin-left: 20px;
    }

    .heading>h3 {
        color: orange;
        font-weight: 600;
        font-size: 30px;
        letter-spacing: 5px;
        text-transform: uppercase;
        margin-top: 15px;
        margin-right: 20px;
    }

    .details {
        padding: 20px 10px;
        display: grid;
        grid-template-rows: auto 1fr 50px;
        grid-row-gap: 15px;
        color: black;
    }

    .details-sub {
        display: grid;
        grid-template-columns: auto auto;
    }

    .details-sub>h5 {
        font-weight: 600;
        font-size: 18px;
    }

    .details-sub>button {
        font-weight: 600;
        font-size: 18px;
    }

    .price {
        text-align: right;
    }

    .details>p {
        font-size: 15px;
        line-height: 28px;
        font-weight: 400;
        align-self: stretch;
    }

    .btn {
        background-color: orange;
        border: none;
        color: white;
        font-size: 14px;
        font-weight: 300;
        border-radius: 5px;
        cursor: pointer;
    }

    .next-button {
        position: fixed;
        bottom: 20px;
        right: 30px;
        background-color: black;
        border: 2px solid black;
        padding: 10px 30px;
        border-radius: 60px;
        font-size: 16px;
        color: white;
        cursor: pointer;
    }

    .next-button:hover {
        background-color: gray;
        border-color: gray;
    }

    .back-button {
        position: fixed;
        bottom: 20px;
        left: 30px;
        background-color: black;
        border: 2px solid black;
        padding: 10px 30px;
        border-radius: 60px;
        font-size: 16px;
        color: white;
        cursor: pointer;
    }

    .back-button:hover {
        background-color: gray;
        border-color: gray;
    }
</style>

<body>
    <div class="flex flex-row justify-end items-center mb-2">
        <p class="">EN</p>
    </div>

    <div class="p-40">
        <div class="grid grid-cols-4 gap-2 w-full">
            @foreach($models as $model)
            <div class="card shadow p-2 w-full rounded-lg">
                @if ($model->image != null)
                <img src="/image/{{ $model->image }}" class="w-full rounded aspect-square object-fill" />
                @else
                <img src="/image/placeholder.webp" class="w-full rounded aspect-square object-fill" />
                @endif
                <div class="p-2">
                    <p class="card-title text-lg">{{ $model->name }}</p>
                    <p class="card-text"></p>
                    <div class="flex flex-row justify-between items-center">
                        <button class="btn" onclick="decrease('{{$model->meatball_id}}')"><i class="fa-solid fa-minus"></i></button>
                        <input type="number" id="number_{{$model->meatball_id}}" value="0" class="input input-bordered w-[60px]" min="0" />
                        <button class="btn" onclick="increase('{{$model->meatball_id}}')"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <div>
        <a href="{{route('side')}}">
            <button class="next-button" type="submit">Next</button>
        </a>


        <a href="http://127.0.0.1:8000">
            <button class="back-button" type="submit">Back</button>
        </a>

    </div>
</body>

<script>
    function increase(id) {
        let val = $("#number_" + id).val();
        $("#number_" + id).val(+val + 1);
    }

    function decrease(id) {
        let val = $("#number_" + id).val();
        if (val == 0) return;
        $("#number_" + id).val(+val - 1);
    }
</script>

</html>