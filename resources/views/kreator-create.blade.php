<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Video</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', Arial, sans-serif;
            background: linear-gradient(180deg, #022C99, #8BACFF);
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 738px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group input[type="file"] {
            padding: 3px;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload Video</h2>
        <form action="{{ route('kreator.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="videoDuration">Video Duration</label>
                <input type="text" id="videoDuration" name="videoDuration" required>
            </div>
            <div class="form-group">
                <label for="harga">Price (Rp)</label>
                <div style="position: relative;">
                    <span style="position: absolute; top: 50%; transform: translateY(-50%); left: 10px;">Rp</span>
                    <input type="text" id="harga" name="harga" pattern="[0-9]+" title="Only numeric values are allowed" required style="padding-left: 30px;">
                </div>
            </div>
            <div class="form-group">
                <label for="video_link">Video Link</label>
                <input type="url" id="video_link" name="video_link" required>
            </div>
            <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <input type="file" id="thumbnail" name="thumbnail" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select id="category" name="category" required>
                    <option value="Design">Design</option>
                    <option value="Business">Business</option>
                    <option value="Personal Development">Personal Development</option>
                    <option value="3D and Animation">3D and Animation</option>
                    <option value="Finance & Accounting">Finance & Accounting</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Lifestyle">Lifestyle</option>
                    <option value="Health & Fitness">Health & Fitness</option>
                    <option value="Development">Development</option>
                    <option value="IT & Software">IT & Software</option>
                </select>
            </div>
            <div class="form-buttons">
                <button type="submit">Upload Video</button>
                <a href="{{ route('kreator.home') }}" class="back-button">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
