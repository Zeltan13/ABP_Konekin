<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    <ul class="nav">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('forum') }}">Forum</a></li>
        <li><a href="{{ route('profile') }}" class="active">Profile</a></li>
    </ul>
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
