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
        .nav a:hover {
            color: #007bff; /* Change color when hovered */
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
            width: 200px;
            height: 200px;
            object-fit: cover; 
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
            border-radius:10px;
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
            font-family: 'Lato', Arial, sans-serif;
            font-size: 16px;
        }
        .logout-form button:hover {
            background-color: #f0f0f0;
            border-radius:10px;
        }
        .floating-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50%;
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .floating-button:hover {
            background-color: #0056b3;
        }
        .logo-link {
            text-decoration: none; /* Remove underline from link */
        }

        .logo-link .logo {
            display: flex;
            align-items: center;
            background-color: #122F77;
            border-radius: 10px;
            padding: 10px 20px;
        }

        .logo-link .logo h1 {
            color: white;
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="{{ route('kreator.home') }}" class="logo-link">
            <div class="logo">
                <h1>Konekin</h1>
            </div>
        </a>
        <ul class="nav">
            <li>
                <a href="{{ route('kreator.home') }}">
                    <img src="{{ asset('assets/images/Home Icon.png') }}" alt="Home" width="24" height="24">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('kreator.forum') }}">
                    <img src="{{ asset('assets/images/Forum Icon.png') }}" alt="Forum" width="24" height="24">
                    Forum
                </a>
            </li>
            <li>
                <a href="{{ route('kreator.profile') }}" class="active">
                    <img src="{{ asset('assets/images/Profile Icon.png') }}" alt="Profile" width="24" height="24">
                    Profile
                </a>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="profile-header">
            <img src="{{ $profileImage }}" alt="Profile Picture" width="100" height="100">
            <h2>{{ Auth::user()->name }}</h2>
        </div>
        <div class="settings">
            <a href="{{ route('kreator.profile.edit') }}">Edit Profile</a>
            <a href="{{ route('kreator.profile.change-password') }}">Change Password</a>
            <a href="{{ route('home') }}">Switch to Audience</a> 
            <a href="https://docs.google.com/document/d/1-XAXTJ7fhj3vXKfGuunh95WCvWixjvcrbFLdBmFL0As/edit?usp=sharing" target="_blank">Help</a>
            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
    <button class="floating-button" onclick="window.location.href='{{ route('kreator.create') }}'">
        +
    </button>
</body>
</html>
