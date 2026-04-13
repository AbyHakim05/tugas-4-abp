<?php
session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_SESSION["users"])) {
        $found = false;
        foreach ($_SESSION["users"] as $user) {
            if ($user["username"] == $username && $user["password"] == $password) {
                $found = true;
                break;
            }
        }
        if ($found) {
            $message = "welcome " . htmlspecialchars($username);
        } else {
            $message = "wrong username/password";
        }
    } else {
        $message = "wrong username/password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            display: flex;
            align-items: center;
            gap: 15px;
            margin-left: 100px;
            margin-top: 10px;
        }
        .btn-login {
            padding: 8px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        .btn-login:hover {
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
            color: #333;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
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
                <button type="submit" class="btn-login">Login</button>
                <a href="register.php">Register</a>
            </div>
        </form>
        <?php if ($message != ""): ?>
            <p class="message"><?php echo $message; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
