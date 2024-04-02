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
    }

    .menu {
        padding: 0 10px 30px 10px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
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
        font-size: 16px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }

    .banner img {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .banner {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url(https://i.pinimg.com/236x/1a/eb/b8/1aebb8f6934a8d4d522e77fafa46614f.jpg);
        z-index: -1;
        background-size: cover;
        background-position: center;
        filter: brightness(50%);
    }

    .banner-info {
        text-align: center;
    }

    .next-button {
        position: fixed;
        bottom: 20px;
        right: 30px;
        background-color: black;
        border: 2px solid black;
        padding: 10px 20px;
        border-radius: 60px;
        font-size: 16px;
        color: white;
        cursor: pointer;
    }

    .next-button:hover {
        background-color: gray;
        border-color: gray;
    }

    .cancel-button {
        position: fixed;
        bottom: 20px;
        left: 30px;
        background-color: black;
        border: 2px solid black;
        padding: 10px 20px;
        border-radius: 60px;
        font-size: 16px;
        color: white;
        cursor: pointer;
    }

    .cancel-button:hover {
        background-color: gray;
        border-color: gray;
    }

</style>

<body>
    <h1 class="heading">Wong Lukchin</h1>
    <div class="p-4">
        <div class="flex flex-row justify-end items-center mb-2">
            <p class="">EN</p>
        </div>
        <div class="grid grid-cols-5 gap-2 w-full">
            @foreach($models as $model)
            <div class="card shadow p-2 w-full rounded-lg">
                @if ($model->image != null)
                <img src="/image/{{ $model->image }}" class="w-full rounded" />
                @else
                <img src="/image/placeholder.webp" class="w-full rounded aspect-square object-fill" />
                @endif
                <div class="p-2">
                    <p class="card-title text-lg">{{ $model->name }}</p>
                    <p class="card-text"></p>
                    <div class="flex flex-row justify-between items-center">
                        <button class="btn"><i class="fa-solid fa-minus"></i></button> 
                        <input type="number" value="0" class="input input-bordered w-[60px]" min ="0"/>
                        <button class="btn"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div>

        <button class="next-button" type="Next">Next</button>
        
        <button class="cancel-button" type="cancel">Cancel</button>

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