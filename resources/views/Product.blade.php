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
        background-color: #ffff;
        font-family: 'Poppins', sans-serif;
        padding: 25px;
        margin: 30px 25px 40px 25px;
    }

    .logo {
        margin-top: 30px;
        position:absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 5cm;
        height: auto;
    }

    .btn {
        background-color: orange;
        border: none;
        color: white;
        font-size: 12px;
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

    .details {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .details-left {
        flex-grow: 1;
        text-align: left;
    }

    .details-right {
        flex-grow: 1;
        text-align: right;
    }

    .card {
        min-width: 200px;
    }
</style>

<body>
    <img class="logo" src="https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihaCgt3DwpXR8AMCps3gs6BGjbY0iqZ1ITwjEOlP3uBtBk7PecL9NrE31PCwUZAuwXxGTsKV1Qph_URP9bJPG9roSiod=w1866-h994-v0">
    <div class="card flex flex-row justify-end items-center mb-2 ">
        <p class="">EN</p>
    </div>

    <div class="p-40">
        <div class="grid grid-cols-4 gap-3 w-full bg-#fcfbf4">
            @foreach($models as $model)
            <div class="card shadow p-5 w-full rounded-lg">
                @if ($model->image != null)
                <img src="/image/{{ $model->image }}" class="w-full rounded aspect-square object-fill" />
                @else
                <img src="/image/placeholder.webp" class="w-full rounded aspect-square object-fill" />
                @endif
                <div class="p-2">
                    <div class="details">
                        <div class="details-left">
                            <p class="card-title">{{ $model->name }}</p>
                        </div>
                        <div class="details-right">
                            <p class="card-text">{{ $model->price }} Bath</p>
                        </div>
                    </div>
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