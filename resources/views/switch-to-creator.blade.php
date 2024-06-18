<!-- switch-to-creator.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch to Kreator</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', Arial, sans-serif;
            background: linear-gradient(180deg, #022C99, #8BACFF);
            margin: 0;
            min-height: 100vh;
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
        form {
            text-align: left;
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        input[type="file"] {
            margin-top: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Switch to Kreator</h2>
        <form action="{{ route('profile.switch-to-creator') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="noHP">Phone Number:</label>
            <input type="text" id="noHP" name="noHP" required>
            <br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br><br>
            <label for="cv">CV (PDF):</label>
            <input type="file" id="cv" name="cv" required accept=".pdf">
            <br><br>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio"></textarea>
            <br><br>
            <label for="socMed">Social Media:</label>
            <input type="text" id="socMed" name="socMed">
            <br><br>
            <label for="rekening">Bank Account Number:</label>
            <input type="text" id="rekening" name="rekening" required>
            <br><br>
            <label for="profile_picture">Profile Picture:</label>
            <input type="file" id="profile_picture" name="profile_picture" accept="image/*">
            <br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
