<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Video</title>
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
            max-width: 1200px;
            width:100%;
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
        .nav a:hover {
            color: #007bff; /* Change color when hovered */
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group textarea {
            width: 98%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;

        }
        .form-group input[readonly] {
            background-color: #f0f0f0; /* Optional: provide a different background color for readonly fields */
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #007bff;
            font-family: 'Lato', Arial, sans-serif;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .back-button {
            padding: 8px 20px;
            background-color: #f44336;
            color: white;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            font-family: 'Lato', Arial, sans-serif;
            display: inline-block;
            font-size: 16px; /* Setting font size to 12px */
        }
        .back-button:hover {
            background-color: #d32f2f;
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
                    <img src="/assets/images/Home Icon.png" alt="Home Icon" width="24" height="24">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('kreator.forum') }}">
                    <img src="/assets/images/Forum Icon.png" alt="Forum Icon" width="24" height="24">
                    Forum
                </a>
            </li>
            <li>
                <a href="{{ route('kreator.profile') }}">
                    <img src="/assets/images/Profile Icon.png" alt="Profile Icon" width="24" height="24">
                    Profile
                </a>
            </li>
        </ul>
    </div>
    <div class="container">
        <h2>Edit Video</h2>
        <form action="{{ route('kreator.video.update', ['id' => $video->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="videoTitle">Video Title</label>
                <input type="text" id="videoTitle" name="videoTitle" value="{{ $video->videoTitle }}" required>
            </div>
            <div class="form-group">
                <label for="videoDescription">Video Description</label>
                <textarea id="videoDescription" name="videoDescription" rows="5" required>{{ $video->videoDescription }}</textarea>
            </div>
            <div class="form-group">
                <label for="videoPrice">Video Price</label>
                <input type="text" id="videoPrice" name="videoPrice" value="{{ $video->videoPrice }}" required>
            </div>
            <div class="form-group">
                <label for="salesCount">Sales Count</label>
                <input type="text" id="salesCount" value="{{ $salesCount }}" readonly>
            </div>
            <div class="form-group">
                <button type="submit">Update Video</button>
                <a href="{{ route('kreator.home') }}" class="back-button">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
