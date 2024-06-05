<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <form action="{{ route('profile.change-password.update') }}" method="POST">
        @csrf
        <div>
            <label for="current_password">Current Password:</label>
            <input type="password" id="current_password" name="current_password" required>
        </div>
        <div>
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required>
        </div>
        <div>
            <label for="new_password_confirmation">Confirm New Password:</label>
            <input type="password" id="new_password_confirmation" name="new_password_confirmation" required>
        </div>
        <button type="submit">Change Password</button>
    </form>
</body>
</html>
