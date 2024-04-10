<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Options</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 150px;
            padding-left: 30%;
            padding-right: 30%;
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

        .container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            justify-content: center;
        }

        .button {
            background-color: whitesmoke;
            border-color: whitesmoke;
            padding: 45px 50px;
            border-radius: 10px;
            font-size: 16px;
            color: black;
            cursor: pointer;
        }

        .selected {
            background-color: #00A36C;
            color: #fff;
        }

        h4 {
            text-align: center;
        }

        .paymentonline {
            display: none;
            /* Initially hide the image */
            margin-top: 20px;
            width: 5cm;
            /* Adjusted image width */
            height: auto;
        }
        .yellow-border-button {
        position: fixed;
        bottom: 60px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #FFD700;
        border: 2px solid #FFD700;
        padding: 10px 50px;
        border-radius: 60px;
        font-weight: 500;
        font: size 30px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: black;
        cursor: pointer;
        font-style: normal;

    }

    .yellow-border-button:hover {
        background-color: gray;
        border-color: gray;
        color: white;
    }
    </style>
</head>

<body>
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
    <img class="logo" src="https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihYjiJ8CvcZ-SOIfcamS9fL0ZYugcsvV6reTzqA4eKnjFoRgomZC4nLgDh8y__5itRAmLgKmZ5QKMcjy1qP1aPH9R69sb85aKEA=w1866-h994-v0">
    <h4>Select your payment</h4>
    <div class="container">
        <button class="button" onclick="selectPayment(this, 'cash')">Cash</button>
        <button class="button" onclick="selectPayment(this, 'online')">Online</button>
    </div>
    <img class="paymentonline" src="https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihbnjXqGZ9aIcaWCU80a5MkRvIb2hPKCrsoyIynsguugY3uhdc1b6-iHHMJc1mVHqU10R6sgrOfERYUcTvbXdZv4sbiPAemdBxI=w1866-h994-v0" id="paymentonline">
    <div>
        <a href="/">
            <button class="yellow-border-button" type="submit">Submit your Order</button>
        </a>
    </div>
    <script>
        function selectPayment(button, paymentType) {
            var buttons = document.querySelectorAll('.button');
            buttons.forEach(function(btn) {
                btn.classList.remove('selected');
            });
            button.classList.add('selected');

            if (paymentType === 'online') {
                document.getElementById('paymentonline').style.display = 'inline';
            } else {
                document.getElementById('paymentonline').style.display = 'none';
            }
        }
    </script>
</body>

</html>