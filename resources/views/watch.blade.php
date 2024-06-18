<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <title>Watch {{ $course->videoTitle }}</title>
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
            width: 45%; /* Adjust the width as needed */
            height: 60%;
            position: absolute; /* Position it absolutely within the body */
            top: 50%; /* Position the top edge of the container at the middle of the page */
            left: 50%; /* Position the left edge of the container at the middle of the page */
            transform: translate(-50%, -50%); /* Offset the container by half its width and height to center it */
            max-width: 1200px;
            margin: 20px auto; /* Center horizontally if not using absolute positioning */
            background-color: white;
            padding: 40px; /* Increase padding to make it look bigger */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        iframe {
            width: 100%;
            height: 450px;
            border: none;
            border-radius: 8px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .back-button {
            background-color: #dc3545;
            border-radius: 5px;
        }
        button:hover{
            background-color: #0056b3; /* Darker shade of blue */
        }
        .back-button:hover{
            background-color: #a91b0d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>{{ $course->videoTitle }}</h2>
        <iframe src="{{ $videoUrl }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <a href="{{ route('home') }}" class="back-button">
            <button type="button" class="back-button">Back to Home</button>
        </a>
    </div> 
</body>
</html>
