<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>{{ $course->videoTitle }}</title>
    <style>
        body {
            font-family: 'Lato', sans-serif;
            background: linear-gradient(180deg, #022C99, #8BACFF);
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            max-width: 800px;
            margin: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        .course-details h2,
        .course-details p,
        .price {
            font-family: 'Lato', sans-serif;
        }
        .price {
            color: green;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .button-container {
            display: flex;
            gap: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Lato', sans-serif;
        }
        .back-button {
            background-color: #dc3545;
            border-radius: 5px;
            font-family: 'Lato', sans-serif;
        }
        button:hover {
            background-color: #0056b3; /* Darker shade of blue */
        }
        .back-button:hover {
            background-color: #a91b0d;
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
                <div class="button-container">
                    <a href="{{ route('payment', ['course' => $course->videoTitle]) }}">
                        <button type="button">Proceed to Payment</button>
                    </a>
                    <a href="{{ route('home') }}">
                        <button type="button" class="back-button">Back</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
