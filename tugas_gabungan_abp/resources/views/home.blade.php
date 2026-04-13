<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Tugas 12</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
            min-height: 200px;
        }
        h2 {
            color: #333;
            margin-top: 0;
            margin-bottom: 20px;
        }
        .btn {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
        }
        .btn:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Selamat datang, {{ $user->name }}</h2>
    <a href="/logout" class="btn">Logout</a>
</div>

</body>
</html>
