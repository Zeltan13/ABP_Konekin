<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', Arial, sans-serif;
            background: linear-gradient(180deg, #022C99, #8BACFF);
            margin: 0;
            min-height: 100vh;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: white;
            border-bottom: 1px solid #ddd;
            width: 100%;
            box-sizing: border-box;
        }
        .logo {
            display: flex;
            align-items: center;
            background-color: #122F77;
            border-radius: 10px;
            padding: 10px 20px;
        }
        .logo h1 {
            color: white;
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }
        .nav {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        .nav li {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-left: 20px;
        }
        .nav a {
            text-decoration: none;
            padding: 10px;
            display: flex;
            align-items: center;
            color: #000;
        }
        .nav a img {
            margin-right: 8px;
        }
        .nav a.active {
            color: #007bff;
        }
        .container {
            max-width: 750px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-header img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover; /* Ensure the image fills the circle without stretching */
        }
        .profile-header h2 {
            margin-top: 10px;
            color: #333;
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
        .logout-form button {
            background: none;
            border: none;
            color: inherit;
            cursor: pointer;
            padding: 15px;
            width: 100%;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <h1>Konekin</h1>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/Home Icon.png') }}" alt="Home" width="24" height="24">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('forum') }}">
                    <img src="{{ asset('assets/images/Forum Icon.png') }}" alt="Forum" width="24" height="24">
                    Forum
                </a>
            </li>
            <li>
                <a href="{{ route('profile') }}" class='active'>
                    <img src="{{ asset('assets/images/Profile Icon.png') }}" alt="Profile" width="24" height="24">
                    Profile
                </a>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="profile-header">
            <img src="{{ $profileImage }}" alt="Profile Picture">
            <h2>{{ Auth::user()->name }}</h2>
        </div>
        <div class="settings">
            <a href="{{ route('profile.edit') }}">Edit Profile</a>
            <a href="{{ route('profile.change-password') }}">Change Password</a>
            <a href="#">Switch to Creator</a>
            <a href="https://docs.google.com/document/d/1-XAXTJ7fhj3vXKfGuunh95WCvWixjvcrbFLdBmFL0As/edit?usp=sharing" target="_blank">Help</a>
            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>
