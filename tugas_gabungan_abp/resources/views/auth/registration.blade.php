<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Tugas 12</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        .form-group label {
            width: 100px;
            color: #555;
        }
        .form-group input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
        }
        .btn-container {
            display: flex;
            align-items: center;
            margin-top: 30px;
        }
        .btn {
            background-color: #198754;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #157347;
        }
        .link {
            margin-left: 20px;
            color: #0d6efd;
            text-decoration: none;
        }
        .link:hover {
            text-decoration: underline;
        }
        
        .toast {
            background-color: #28a745;
            color: white;
            padding: 15px 30px;
            border-radius: 4px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            animation: fadeIn 0.5s, fadeOut 0.5s 4.5s forwards;
            position: absolute;
            top: 20px;
        }
        
        @keyframes fadeIn {
            from { top: -50px; opacity: 0; }
            to { top: 20px; opacity: 1; }
        }
        
        @keyframes fadeOut {
            from { top: 20px; opacity: 1; }
            to { top: -50px; opacity: 0; }
        }
    </style>
</head>
<body>

@if(session('success'))
    <div class="toast">
        {{ session('success') }}
    </div>
@endif

<div class="container">
    <h2>Registration</h2>

    <form method="POST" action="/register">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="btn-container">
            <button type="submit" class="btn">Register</button>
            <a href="/login" class="link">Sudah punya<br>akun? Login</a>
        </div>
    </form>
</div>

<script>
    setTimeout(function() {
        var toast = document.querySelector('.toast');
        if (toast) {
            toast.style.display = 'none';
        }
    }, 5000);
</script>
</body>
</html>
