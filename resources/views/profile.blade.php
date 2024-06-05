<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .profile-header {
            text-align: center;
        }
        .profile-header img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
        .profile-header h2 {
            margin-top: 10px;
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
        .settings {
            text-align: left;
            margin-top: 20px;
        }
        .settings a {
            display: block;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-decoration: none;
            color: #000;
        }
        .settings a:last-child {
            border-bottom: none;
        }
        .settings a:hover {
            background-color: #f0f0f0;
        }
        .logout-form {
            display: inline;
        }
    </style>
</head>
<body>
    <ul class="nav">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('forum') }}">Forum</a></li>
        <li><a href="{{ route('profile') }}" class="active">Profile</a></li>
    </ul>
    <div class="container">
        <div class="profile-header">
            <img src="https://via.placeholder.com/100" alt="Profile Picture">
            <h2>{{ Auth::user()->name }}</h2>
        </div>
        <div class="settings">
            <a href="{{ route('profile.edit') }}">Edit Profile</a>
            <a href="{{ route('profile.change-password') }}">Change Password</a>
            <a href="#">Switch to Creator</a>
            <a href="https://docs.google.com/document/d/1-XAXTJ7fhj3vXKfGuunh95WCvWixjvcrbFLdBmFL0As/edit?usp=sharing" target="_blank">Help</a>
            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                @csrf
                <button type="submit" style="background:none;border:none;color:inherit;cursor:pointer;padding:15px;width:100%;text-align:left;">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>
