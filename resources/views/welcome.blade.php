<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>welcome</title>


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>
<style>
    body {
        margin-top: 30px;
        background-image: url("https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihaCgt3DwpXR8AMCps3gs6BGjbY0iqZ1ITwjEOlP3uBtBk7PecL9NrE31PCwUZAuwXxGTsKV1Qph_URP9bJPG9roSiod=w1866-h994-v0");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: 40%;
        image-resolution: auto;
        text-align: center;
        font-family: 'Courier New', Courier, monospace;

    }

    .logo {
        display: inline-block;
        text-align: center;
        font-family: baskerville(serif);
        font-size: 50px;
        font-style: 'Poppins', sans-serif;
        text-decoration: dotted;
    }

    .translate {
        padding-top: 0;
        padding-right: 20px;
        text-align: right;
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

    .welcome {
        padding-top: 60px;
    }
</style>

<body>
    <div class="translate">
        TH<br>
    </div>
    <div class="welcome">
        Welcome<br>
    </div>

    <div>
        <a href="{{route('product')}}">
            <button class="yellow-border-button" type="submit">Tab to Order</button>
        </a>
    </div>
</body>

</html>