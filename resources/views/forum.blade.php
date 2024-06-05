<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
</head>
<body>
    <ul class="nav">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('forum') }}" class="active">Forum</a></li>
        <li><a href="{{ route('profile') }}">Profile</a></li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" style="background:none;border:none;color:inherit;cursor:pointer;padding:0;">Logout</button>
            </form>
        </li>
    </ul>
    <h1>Welcome to Forum</h1>
</body>
</html>
