<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="Loading.css">
    <title>SideDish</title>

    <style>
        body {
            padding: 0;
            text-align: center;
            background: white;

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

        .button {
            position: center;
            border: 1px solid #202020;
            color: black;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-flexbox;
            font-size: 18px;
            margin: 4px 2px;
            cursor: pointer;
            transition-duration: 0.5s;
        }

        .button.selected {
            background-color: #202020;
            color: white;
        }


        .confirm-button {
            position: fixed;
            bottom: 20px;
            right: 30px;
            background-color: black;
            border: 2px solid black;
            padding: 13px 30px;
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
            padding: 13px 30px;
            border-radius: 60px;
            font-size: 16px;
            color: white;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: gray;
            border-color: gray;
        }

        .item {
            position: center;
            overflow: hidden;
        }

        .item img {
            width: 7cm;
            height: auto;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-auto-rows: minmax(10px);
            gap: 1px;
            padding: 5px;


        }

        .container {
            display: grid;
            padding-top: 135px;
            grid-template-rows: 1.6cm minmax(auto, auto);
            gap: 20px;

        }

        .category {
            padding-top: 0;
            padding-left: 15px;
            background-color: #1B1B1B;
            text-align: left;
            font-family: 'Courier New', Courier, monospace;
            font-size: 20px;
        }

        h3 {
            color: whitesmoke;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <img class="logo" src="https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihYjiJ8CvcZ-SOIfcamS9fL0ZYugcsvV6reTzqA4eKnjFoRgomZC4nLgDh8y__5itRAmLgKmZ5QKMcjy1qP1aPH9R69sb85aKEA=w1866-h994-v0">
    <div class="container">
        <div class="category">
            <h3>Sauce</h3>
        </div>

        <div class="grid-container">
            @foreach($models1 as $models1)
            <div class="item">
                @if ($models1->image != null)
                <img src="/image/{{ $models1->image }}" />
                @else
                <img src="/image/placeholder.webp" />
                @endif
                <div>
                    <button class="button sauce" onclick="selectItem(this)" id="{{ $models1->sauce_id }}" name="sauce">{{ $models1->name }}</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="category">

            <h3>Vegetable</h3>
        </div>
        <div class="grid-container">
            @foreach($models2 as $models2)
            <div class="item">
                @if ($models2->image != null)
                <img src="/image/{{ $models2->image }}" />
                @else
                <img src="/image/placeholder.webp" />
                @endif
                <div>
                    <button class="button vegetable" onclick="selectItem(this)" id="{{ $models2->side_dishes_id }}" name="side_dishes">{{ $models2->name }}</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div>
        <button class="confirm-button" type="submit" onclick="getModel()">CONFIRM</button>
        <a href="{{route('product')}}">
            <button class="back-button" type="submit">BACK</button>
        </a>
    </div>

    <script>
        $(document).ready(function() {
            getModel();
        });

        var selectedItems = [];
        var data = {
            sauce: null,
            side_dishes: null,
            detail: "",
        };

        function selectItem(button) {
            let index = selectedItems.indexOf(button.textContent);
            let cls = Array.from(button.classList);
            if (Array.isArray(cls)) {
                if (cls.includes("sauce")) {
                    let list = document.querySelectorAll(".sauce");
                    list.forEach(element => {
                        element.classList.remove("selected");
                    });
                }
                if (cls.includes("vegetable")) {
                    let list = document.querySelectorAll(".vegetable");
                    list.forEach(element => {
                        element.classList.remove("selected");
                    });
                }
            }
            if (button.classList)
            if (index !== -1) {
                selectedItems.splice(index, 1);
                button.classList.remove('selected');
                delete data[button.name]
            } else {
                selectedItems.push(button.textContent);
                button.classList.add('selected');
                data[button.name] = button.id;
            }
        }

        function getModel() {
            $.ajax({
                type: "GET",
                url: "{{ route('get_model') }}",
                success: function(response) {
                    console.log(response);
                },
            });
        }
    </script>
</body>

</html>