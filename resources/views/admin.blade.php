<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <style>
        .logo {
            position: absolute;
            top: 140px;
            left: 15%;
            width: 16cm;
            height: auto;
        }


        .container {
            position: absolute;
            top: 50%;
            left: 65%;
            transform: translate(-50%, -50%);
            max-width: 500px;
            padding: 20px;
        }



        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: gold;
            border-radius: 60px;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div>
        <img class="logo" src="https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihaCgt3DwpXR8AMCps3gs6BGjbY0iqZ1ITwjEOlP3uBtBk7PecL9NrE31PCwUZAuwXxGTsKV1Qph_URP9bJPG9roSiod=w1866-h994-v0">
    </div>
    <div class="container">
        <h2 text-align=center>Login</h2>
        <form id="login-form">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>

                <button class="button" type="submit">Login</button>

            </div>
            <p id="error-message" class="error-message"></p>
        </form>
    </div>
    <script>
        document.getElementById("login-form").addEventListener("submit", function(event) {
            event.preventDefault();
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "wonglukchin" && password === "999999999") {
                window.location.href = "{{ route('dashboard') }}";

            } else {
                document.getElementById("error-message").textContent = "Invalid username or password";
            }
        });
    </script>
</body>

</html>