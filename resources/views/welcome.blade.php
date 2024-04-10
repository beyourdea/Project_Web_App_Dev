<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
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
        font-size: 20px;
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
        padding-top: 40px;
    }

    .admin {
        position: fixed;
        left: 92%;
        display: inline-block;
        background-color: white;
        border: none;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        padding: 10px 20px;
    }
    
    
    .admin img {
        width: 0.8cm;
        height: auto; 
        vertical-align: middle; 
        margin-right: 5px; 
    }
</style>

<body>
    <div id="google_translate_element"></div>
    <div>
        <a href="http://127.0.0.1:8000/Admin">
            <button class="admin" type="submit"><img src="https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihZV02CqDJZprR6XCygCZfTNYHBXfx2rQgwiPz_DWXRijsNB6bQcFOCjp5-AhXVz0h8QhDwFQ5JGIfrAgRs_DlmE-seWptP5TsY=w1866-h994">
            </button>
        </a>
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
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en'
                },
                'google_translate_element'
            );
        }
    </script>

</html>
