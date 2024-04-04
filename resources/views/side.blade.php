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
            padding-top: 20px;
            text-align: center;

        }

        .button {
            position: center;
            border: 1px solid #202020;
            color: black;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-flexbox;
            font-size: 16px;
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
            padding: 10px 20px;
            border-radius: 60px;
            font-size: 16px;
            color: white;
            cursor: pointer;
        }

        .confirm-button:hover {
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
</head>

<body>
    <h2>Make your selection</h2>

    <div>
        Sauce<br>
        <div>
            @foreach($models1 as $model)
            <button class="button" onclick="selectItem(this)">{{ $model->name }}</button>
            @endforeach
        </div>
    </div>
    <div>
        Vegetable<br>
        <div>
            @foreach($models2 as $model)
            <button class="button" onclick="selectItem(this)">{{ $model->name }}</button>
            @endforeach
        </div>
    </div>

    <script>
        var selectedItems = [];

        function selectItem(button) {
            // ถ้าปุ่มถูกเลือกอยู่แล้วให้ลบออกจาก selectedItems
            var index = selectedItems.indexOf(button.textContent);
            if (index !== -1) {
                selectedItems.splice(index, 1);
                button.classList.remove('selected');
            } else {
                // ถ้ายังไม่ถูกเลือกให้เพิ่มลงใน selectedItems และเพิ่มคลาส selected ให้ปุ่มที่ถูกคลิก
                selectedItems.push(button.textContent);
                button.classList.add('selected');
            }
            console.log("Selected items:", selectedItems);
        }
    </script>

    <div>
        <button class="confirm-button" type="submit">Confirm</button>
        <button class="back-button" type="submit">Back</button>
    </div>
</body>

</html>
