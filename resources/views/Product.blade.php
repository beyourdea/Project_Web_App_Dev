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

    h1 {
        text-align: center;
    }

    .top-right {
        text-align: right;
        padding-right: 20px;
    }

    body {
        background-color: #ffff;
        font-family: 'Poppins', sans-serif;
        padding: 25px;
        margin: 30px 25px 40px 25px;
        background-color: white;
    }

    .logo {
        margin-top: 30px;
        position: absolute;
        top: 0;
        left: 50%;
        bottom: 20px;
        transform: translateX(-50%);
        width: 10cm;
        height: auto;

    }

    .btn {
        background-color: gold;
        border: none;
        color: white;
        font-size: 12px;
        font-weight: 300;
        border-radius: 5px;
        cursor: pointer;
    }

    .confirm-button {
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

    .confirm-button:hover {
        background-color: #00A36C;
        border-color: #00A36C;
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
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>

<body>
    <img class="logo" src="https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihYjiJ8CvcZ-SOIfcamS9fL0ZYugcsvV6reTzqA4eKnjFoRgomZC4nLgDh8y__5itRAmLgKmZ5QKMcjy1qP1aPH9R69sb85aKEA=w1866-h994-v0">

    <div class="p-20">
        <div class="grid grid-cols-4 gap-3 w-full">
            @foreach($models as $model)
            <div class="card shadow p-5 w-full rounded-lg bg-gray-20 ">
                @if ($model->image != null)
                <img src="/image/{{ $model->image }}" class="w-full rounded aspect-square object-fill" />
                @else
                <img src="/image/placeholder.webp" class="w-full rounded aspect-square object-fill" />
                @endif
                <div class="p-2">
                    <div class="details">
                        <div class="details-left">
                            <p class="card-title truncate text-ellipsis">{{ $model->name }}</p>
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

    <button class="confirm-button" type="submit" onclick="saveModel()">CONFIRM</button>


    <a href="http://127.0.0.1:8000">
        <button class="back-button" type="submit">BACK</button>
    </a>

    </div>
</body>

<script>
    var data = {};

    function increase(id) {
        let val = $("#number_" + id).val();
        $("#number_" + id).val(+val + 1);
        data[id] = {
            id: id,
            value: +val + 1,
        }
    }

    function decrease(id) {
        let val = $("#number_" + id).val();
        if (val == 0) {
            delete data[id];
            return;
        }
        $("#number_" + id).val(+val - 1);
        data[id] = {
            id: id,
            value: +val - 1,
        }
    }

    function saveModel() {
        if (Object.keys(data).length <= 0) return;
        $.ajax({
            type: "POST",
            url: "{{ route('save_model') }}",
            data: data,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            success: function(response) {
                window.location.href = "{{ route('side') }}"
            },
        });
    }
</script>

</html>