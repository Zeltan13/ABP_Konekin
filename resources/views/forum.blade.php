<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .forum-category {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: background-color 0.3s;
        }
        .forum-category:hover {
            background-color: #f0f0f0;
        }
        .forum-category img {
            width: 100px;
            height: 100px;
            border-radius: 8px;
            margin-right: 20px;
        }
        .forum-category .details {
            flex: 1;
        }
        .forum-category .details h3 {
            margin: 0;
        }
        .nav {
            list-style: none;
            padding: 0;
            margin: 20px 0;
            display: flex;
            justify-content: space-around;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .nav a {
            text-decoration: none;
            padding: 10px;
            display: block;
            color: #000;
        }
        .nav a.active {
            color: #007bff;
        }
    </style>
</head>
<body>
    <ul class="nav">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('forum') }}" class="active">Forum</a></li>
        <li><a href="{{ route('profile') }}">Profile</a></li>
    </ul>
    <div class="container">
        <h1>Forum</h1>
        @foreach($forums as $forum)
            <a href="{{ $forum['link'] }}" target="_blank" class="forum-category">
                <img src="{{ $forum['image'] }}" alt="{{ $forum['name'] }}">
                <div class="details">
                    <h3>{{ $forum['name'] }}</h3>
                </div>
            </a>
        @endforeach
    </div>
</body>
</html>
