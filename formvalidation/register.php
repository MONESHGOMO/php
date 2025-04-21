<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gomo";

$connectionToDataBase = new mysqli($servername, $username, $password, $dbname);

if ($connectionToDataBase->connect_error) {
    die("Connection failed: " . $connectionToDataBase->connect_error);
} else {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $connectionToDataBase->query($sql);

    if ($result->num_rows > 0) {
        echo '
<!DOCTYPE html>
<html>
<head>
    <title>Email Already Registered</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fefefe;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .error-box {
            padding: 20px 30px;
            background-color: #ffe6e6;
            border-left: 6px solid #ff4d4d;
            color: #cc0000;
            font-size: 18px;
            border-radius: 10px;
            animation: shake 0.3s ease-in-out 3;
        }
        @keyframes shake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-5px); }
            100% { transform: translateX(0); }
        }
        .back-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #25b09b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .back-button:hover {
            background-color: #1e907f;
        }
    </style>
</head>
<body>
    <div class="error-box"> '. 
    $email . '  '.' already registered!<br>Please use another email address to register.
    </div>
    <button class="back-button" onclick="window.history.back();">Go Back</button>
</body>
</html>';


    } else {
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')";
        if ($connectionToDataBase->query($sql) === TRUE) {
            // Show loader and redirect after 5 seconds
            echo '
            <!DOCTYPE html>
            <html>
            <head>
                <title>Registration Successful</title>
                <style>
                    .loader {
                      width: 50px;
                      aspect-ratio: 1;
                      display: grid;
                      border: 4px solid #0000;
                      border-radius: 50%;
                      border-right-color: #25b09b;
                      animation: l15 1s infinite linear;
                      margin: 100px auto;
                    }
                    .loader::before,
                    .loader::after {    
                      content: "";
                      grid-area: 1/1;
                      margin: 2px;
                      border: inherit;
                      border-radius: 50%;
                      animation: l15 2s infinite;
                    }
                    .loader::after {
                      margin: 8px;
                      animation-duration: 3s;
                    }
                    @keyframes l15{ 
                      100%{transform: rotate(1turn)}
                    }
                    body {
                        text-align: center;
                        font-family: Arial, sans-serif;
                    }
                </style>
                <script>
                    setTimeout(function(){
                        window.location.href = "index.html";
                    }, 5000);
                </script>
            </head>
            <body>
                <h2>Registration successful! Redirecting to home...</h2>
                <div class="loader"></div>
            </body>
            </html>';
        } else {
            echo "Error: " . $connectionToDataBase->error;
        }
    }

    $connectionToDataBase->close();
}
?>