<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(180deg, #022C99, #8BACFF);
            font-family: 'Lato', Arial, sans-serif;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 738px;
            width: 100%;
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        .form-group {
            position: relative;
            margin-bottom: 15px;
            max-width: 715px;
            font-family: 'Lato', Arial, sans-serif;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group label {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: white;
            padding: 0 5px;
            color: #888;
            pointer-events: none;
            transition: 0.2s;
        }
        .form-group input:focus + label,
        .form-group input:not(:placeholder-shown) + label {
            top: -10px;
            left: 10px;
            font-size: 16px;
            color: #022C99;
        }
        .form-buttons {
            display: flex;
            flex-direction: column;
            gap: 10px; /* Adds space between the buttons */
        }
        button {
            padding: 10px;
            background-color: #022C99;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Lato', Arial, sans-serif;
            height: 40px; /* Ensuring both buttons have the same height */
            font-size: 16px; /* Setting font size to 12px */
        }
        button:hover {
            background-color: #021A66;
        }
        .back-button {
            padding: 10px;
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
        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #022C99;
            text-decoration: none;
            font-family: 'Lato', Arial, sans-serif;
        }
        a:hover {
            text-decoration: underline;
        }
        .error-messages {
            background-color: #ffdddd;
            border-left: 6px solid #f44336;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
        }
        .error-messages ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>
        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" id="name" name="name" value="{{ $user->name }}" required placeholder=" ">
                <label for="name">Name</label>
            </div>
            <div class="form-group">
                <input type="file" id="profile_picture" name="profile_picture">
                <label for="profile_picture">Profile Picture</label>
            </div>
            <div class="form-buttons">
                <button type="submit">Update Profile</button>
                <a href="{{ route('profile') }}" class="back-button">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
