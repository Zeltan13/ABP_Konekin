<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
            font-size: 12px;
            color: #022C99;
        }
        button {
            padding: 10px;
            background-color: #022C99;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Lato', Arial, sans-serif;
            
        }
        button:hover {
            background-color: #021A66;
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
            font-family: 'Lato', Arial, sans-serif;
        }
        .error-messages ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
            font-family: 'Lato', Arial, sans-serif;
        }
        .form-buttons {
            display: flex;
            justify-content: center; /* Centers buttons */
            gap: 10px; /* Adds space between the buttons */
            flex: 1;
            
        }

        button, .back-button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            flex: 1; /* Makes buttons grow equally */
            font-family: 'Lato', Arial, sans-serif;

        }

        button {
            background-color: #022C99;
            color: white;
        }

        button:hover {
            background-color: #021A66;
        }

        .back-button {
            background-color: #ff4b4b; /* Red color */
            color: white;
        }

        .back-button:hover {
            background-color: #cc0000; /* Darker red on hover */
        }


    </style>
</head>
<body>
    <div class="container">
        <h1>Change Password</h1>
        <form action="{{ route('profile.change-password.update') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="password" id="current_password" name="current_password" required placeholder=" ">
                <label for="current_password">Current Password</label>
            </div>
            <div class="form-group">
                <input type="password" id="new_password" name="new_password" required placeholder=" ">
                <label for="new_password">New Password</label>
            </div>
            <div class="form-group">
                <input type="password" id="new_password_confirmation" name="new_password_confirmation" required placeholder=" ">
                <label for="new_password_confirmation">Confirm New Password</label>
            </div>
            <div class="form-buttons">
                <button type="submit">Change Password</button>
                <a href="{{ route('profile') }}" class="back-button">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
