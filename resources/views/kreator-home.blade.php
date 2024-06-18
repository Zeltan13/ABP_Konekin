<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kreator Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', Arial, sans-serif;
            background: linear-gradient(180deg, #022C99, #8BACFF);
            margin: 0;
            min-height: 100vh;
        }
        .container {
            max-width: 1200px;
            margin: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        .category {
            margin-bottom: 40px;
            flex: 1 1 48%;
            box-sizing: border-box;
        }
        .category h2 {
            margin-bottom: 20px;
        }
        .course {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .course img {
            width: 150px;
            height: 100px;
            border-radius: 8px;
            margin-right: 20px;
        }
        .course-details {
            flex: 1;
        }
        .course-details h3 {
            margin: 0 0 10px 0;
        }
        .course-details .price {
            color: green;
            margin-bottom: 10px;
        }
        .course-details button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .main-content {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .profile-container {
            width: 200px;
            height: 320px;
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
        .welcome-container {
            max-width: 1200px;
            margin: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
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
                <a href="{{ route('kreator.home') }}" class="active">
                    <img src="assets/images/Home Icon.png" alt="Home Icon" width="24" height="24">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('kreator.forum') }}">
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
        <div>
            <div class="welcome-container">
                <h2>Welcome to your Kreator home page!</h2>
                <p>Here you can manage your content, view analytics, and more.</p>
            </div>
            <div class="container">
                <div class="video-container">
                    <h2>Your Videos</h2>
                    @foreach($courses as $category => $categoryCourses)
                    <div class="category">
                        <h2>{{ $category }}</h2>
                        @foreach($categoryCourses as $course)
                        <div class="course">
                            <img src="data:image/jpeg;base64,{{ $course->thumbnail_base64 }}" alt="{{ $course->videoTitle }}">
                            <div class="course-details">
                                <h3>{{ $course->videoTitle }}</h3>
                                <div class="price">Rp{{ number_format($course->cleanPrice, 0, ',', '.') }}</div>
                                <a href="{{ route('course.description', ['course' => $course->videoTitle]) }}">
                                    <button type="button">View Details</button>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <button class="floating-button" onclick="window.location.href='{{ route('kreator.create') }}'">
        +
    </button>
</body>
</html>
