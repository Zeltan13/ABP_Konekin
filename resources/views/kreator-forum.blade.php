<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Kreator</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', Arial, sans-serif;
            background: linear-gradient(180deg, #022C99, #8BACFF);
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            max-width: 1200px; /* Increase max-width for wider container */
            margin: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1;
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
        .main-content {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .profile-container {
            width: 200px;
            height:320px;
            padding: 20px;
            margin-right: 10px;
            margin-left: 10px; 
            margin-top: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .profile-picture {
            border-radius: 50%;
            margin-bottom: 10px;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .forum-categories {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Two columns layout */
            gap: 20px; /* Space between columns */
            flex: 1;
        }
        .forum-category {
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: background-color 0.3s;
        }
        .forum-category:hover {
            background-color: #f0f0f0;
        }
        .forum-category img {
            width: 160px;
            height: 90px;
            border-radius: 8px;
            margin-right: 20px;
        }
        .forum-category .details {
            flex: 1;
        }
        .forum-category .details h3 {
            margin: 0;
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
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <h1>Konekin</h1>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ route('kreator.home') }}">
                    <img src="assets/images/Home Icon.png" alt="Home Icon" width="24" height="24">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('kreator.forum') }}" class="active">
                    <img src="assets/images/Forum Icon.png" alt="Forum Icon" width="24" height="24">
                    Forum
                </a>
            </li>
            <li>
                <a href="{{ route('kreator.profile') }}">
                    <img src="assets/images/Profile Icon.png" alt="Profile Icon" width="24" height="24">
                    Profile
                </a>
            </li>
        </ul>
    </div>
    <div class="main-content">
        <div class="profile-container">
            <img src="{{ $profileImage }}" alt="Profile Picture" class="profile-picture">
            <h2>Creator Profile</h2>
            <p>Hello, {{ Auth::user()->name }}!</p>
            <p>Let's be the best consultant with us!</p>
        </div>
        <div class="container">
            <h1>Forum</h1>
            <div class="forum-categories">
                @foreach($forums as $forum)
                    <a href="{{ $forum['link'] }}" target="_blank" class="forum-category">
                        <img src="{{ $forum['image'] }}" alt="{{ $forum['name'] }}">
                        <div class="details">
                            <h3>{{ $forum['name'] }}</h3>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <button class="floating-button" onclick="window.location.href='{{ route('kreator.create') }}'">
        +
    </button>
</body>
</html>
