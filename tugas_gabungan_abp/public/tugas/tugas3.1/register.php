<?php
session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!isset($_SESSION["users"])) {
        $_SESSION["users"] = array();
    }

    $_SESSION["users"][] = array(
        "username" => $username,
        "password" => $password
    );

    $message = "user is added";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px 40px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 350px;
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
        }
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .form-group label {
            width: 100px;
            font-size: 14px;
        }
        .form-group input {
            flex: 1;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }
        .form-actions {
            margin-left: 100px;
            margin-top: 10px;
        }
        .btn-send {
            padding: 8px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        .btn-send:hover {
            background-color: #218838;
        }
        a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
        a:hover {
            text-decoration: underline;
        }
        .message {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }
        .message span {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''; ?>">
            </div>
            <div class="form-actions">
                <button type="submit" class="btn-send">Send</button>
            </div>
        </form>
        <?php if ($message != ""): ?>
            <p class="message">
                <span><?php echo $message; ?></span>
                <a href="login.php">Login</a>
            </p>
        <?php endif; ?>
    </div>
</body>
</html>
