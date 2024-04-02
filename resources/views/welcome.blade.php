<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>welcome</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <style>
        /*name shop*/
        .name-shop{
        display: inline-block;
        transform: rotate(60deg); 
    }
        /*background*/
         body {
            margin-top: 30px;
            background-image: url('https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihYe9XD6CaVa7TOu9pDXK1tMVPJu6CU4SWPbt1xPc-MSnWmjhwmWD04-j4wV_3wIQHwnlhL3G-j9oS7iwre8PMeiGFaPrw=w1866-h994-v0');
            background-size: 25% 50%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            image-resolution: auto;
            
        }
        /* order-botton*/
        .yellow-border-button {
            position: fixed;
            bottom :20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: yellow;
            border: 2px solid yellow;
            padding: 10px 20px;
            border-radius: 60px;
            font-size: 16px;
            color: black;
            cursor: pointer;
        }
        /* CSS style for hover effect */
        .yellow-border-button:hover {
            background-color: #ffff99;
            border-color: #ffff99;
        }

    </style>
    <body >
    <div>
        <form  method="post" action="Products">
            <button class="yellow-border-button" type="Order">Order Here</button>
        </form>
    </div>
    <?php
    $text = "Wong Lu"; // ข้อความที่ต้องการแสดง
    echo "<span class='curved-text'>$text</span>";
    ?>
    </body>
</html>
