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
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
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
        .forum-list {
            margin-top: 20px;
            text-align: left;
        }
        .forum-list h3 {
            margin-bottom: 10px;
        }
        .forum-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .forum-item:last-child {
            border-bottom: none;
        }
        .forum-item a {
            text-decoration: none;
            color: #007bff;
        }
        .forum-item a:hover {
            text-decoration: underline;
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
        <h2>Forum</h2>
        <div class="forum-list">
            <h3>Latest Discussions</h3>
            @foreach ($threads as $thread)
                <div class="forum-item">
                    <a href="{{ route('forum.thread', $thread->id) }}">{{ $thread->title }}</a>
                    <p>Started by {{ $thread->user->name }} on {{ $thread->created_at->format('M d, Y') }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
