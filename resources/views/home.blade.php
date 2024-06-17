<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
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
            margin-bottom: 20px;
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
            margin-left: 20px;
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
        .category {
            margin-bottom: 40px;
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
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <h1>Konekin</h1>
        </div>
        <ul class="nav">
            <li>
                <img src="{{ asset('public\assets\images\Home Icon.png') }}" alt="Home"> 
                <a href="{{ route('home') }}" class="active">Home</a>
            </li>
            <li>
                <img src="{{ asset('public\assets\images\Forum Icon.png') }}" alt="Forum"> 
                <a href="{{ route('forum') }}">Forum</a>
            </li>
            <li>
                <img src="{{ asset('public\assets\images\Profile Icon.png') }}" alt="Profile"> 
                <a href="{{ route('profile') }}">Profile</a>
            </li>
        </ul>

    </div>
    <div class="container">
        @foreach($courses as $category => $categoryCourses)
        <div class="category">
            <h2>{{ $category }}</h2>
            @foreach($categoryCourses as $course)
            <div class="course">
                <img src="{{ $course['image'] }}" alt="{{ $course['title'] }}">
                <div class="course-details">
                    <h3>{{ $course['title'] }}</h3>
                    <div class="price">Rp{{ number_format($course['price'], 0, ',', '.') }}</div>
                    <form action="{{ route('course.buy', ['course' => $course['title']]) }}" method="POST">
                        @csrf
                        <button type="submit">Buy Now</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</body>
</html>
