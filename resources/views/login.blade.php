<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(180deg, #022C99, #8BACFF);
            font-family: 'Lato', Arial, sans-serif;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 738px;
            width: 100%;
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        .form-group {
            position: relative;
            margin-bottom: 15px;
            max-width: 715px;
            font-family: 'Lato', Arial, sans-serif;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group label {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: white;
            padding: 0 5px;
            color: #888;
            pointer-events: none;
            transition: 0.2s;
        }
        .form-group input:focus + label,
        .form-group input:not(:placeholder-shown) + label {
            top: -10px;
            left: 10px;
            font-size: 12px;
            color: #022C99;
        }
        button {
            padding: 10px;
            background-color: #022C99;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Lato', Arial, sans-serif;
        }
        button:hover {
            background-color: #021A66;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #022C99;
            text-decoration: none;
            font-family: 'Lato', Arial, sans-serif;
        }
        a:hover {
            text-decoration: underline;
        }
        .error-messages {
            background-color: #ffdddd;
            border-left: 6px solid #f44336;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
        }
        .error-messages ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" id="email" name="email" required placeholder=" ">
                <label for="email">Email Address</label>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" required placeholder=" ">
                <label for="password">Password</label>
            </div>
            <button type="submit">Login</button>
        </form>
        <a href="{{ route('register') }}">Don’t have an account yet? Register now</a>
    </div>
</body>
</html>
