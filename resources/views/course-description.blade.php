<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course->videoTitle }}</title>
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
        .course img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .course-details {
            text-align: left;
        }
        .price {
            color: green;
            font-size: 24px;
            margin-bottom: 20px;
        }
        button {
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
    <div class="container">
        <div class="course">
            <img src="data:image/jpeg;base64,{{ $thumbnail_base64 }}" alt="{{ $course->videoTitle }}">
            <div class="course-details">
                <h2>{{ $course->videoTitle }}</h2>
                <p>{{ $course->videoDescription }}</p>
                <div class="price">Rp{{ $formattedPrice }}</div>
                <a href="{{ route('payment', ['course' => $course->videoTitle]) }}">
                    <button type="button">Proceed to Payment</button>
                </a>
                <a href="{{ route('home') }}">
                    <button type="button">Back</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
