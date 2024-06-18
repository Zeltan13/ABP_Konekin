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
        .container {
            max-width: 750px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .upload-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .upload-btn img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <h1>KonekIn</h1>
        </div>
        <ul class="nav">
            <li><a href="#" class="active"><img src="https://via.placeholder.com/20" alt="Video Icon">Video</a></li>
            <li><a href="#"><img src="https://via.placeholder.com/20" alt="Stream Icon">Stream</a></li>
            <li><a href="#"><img src="https://via.placeholder.com/20" alt="Class Icon">Class</a></li>
        </ul>
    </div>
    <div class="container">
        <h1>Welcome to your Kreator home page!</h1>
        <p>Here you can manage your content, view analytics, and more.</p>
    </div>
    <button class="upload-btn" onclick="window.location.href='{{ route('video.upload') }}'">
        <img src="https://via.placeholder.com/30" alt="Upload Icon">
    </button>
</body>
</html>
