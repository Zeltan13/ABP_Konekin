<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch {{ $course }}</title>
    <style>
        /* Add your CSS styles here */
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
        iframe {
            width: 100%;
            height: 450px;
            border: none;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>{{ $course }}</h2>
        <iframe src="{{ $videoUrl }}" frameborder="0" allowfullscreen></iframe>
    </div>
</body>
</html>
