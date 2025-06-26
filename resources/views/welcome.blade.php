<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welkom</title>
    <style>
        body {
            background: #f8fafc;
            color: #222;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px #0001;
            padding: 2rem 2.5rem;
            text-align: center;
        }
        .login-btn {
            display: inline-block;
            margin-top: 2rem;
            padding: 0.75rem 2rem;
            background: #6366f1;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            text-decoration: none;
            transition: background 0.2s;
        }
        .login-btn:hover {
            background: #4f46e5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welkom!</h1>
        <p>Dit is een simpele Laravel startpagina.</p>
        <a href="{{ route('login') }}" class="login-btn">Login</a>
    </div>
</body>
</html>
