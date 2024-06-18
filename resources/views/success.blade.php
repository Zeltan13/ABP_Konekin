<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Payment Successful</title>
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
            width: 20%; /* Adjust the width as needed */
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
        .success {
            color: green;
            font-family: 'Lato', sans-serif;
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
        <div class="success">
            Payment Successful!
        </div>
        <a href="{{ route('watch', ['course' => $course->videoTitle]) }}">
            <button type="button">Watch Course</button>
        </a>
        <a href="{{ route('payment', ['course' => $course->videoTitle]) }}" class="back-button">
            <button type="button" class="back-button">Back to Payment</button>
        </a>
    </div>
</body>
</html>
