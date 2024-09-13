<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="{{ asset('css/edit-profile.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <div class="edit-container">
        <div class="edit-card">
            <h2>Edit Profile</h2>
            <form action="/update-profile" method="post">
                @csrf
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="Yahya Ayash" required>
                </div>
                <div class="input-group">
                    <label for="role">Role</label>
                    <input type="text" id="role" name="role" value="Chef" required>
                </div>
                <div class="input-group">
                    <label for="bio">About Me</label>
                    <textarea id="bio" name="bio" required>saya adalah chef ternama indonesia, salah satu chef terbaik dunia pada masanya</textarea>
                </div>
                <div class="input-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" value="+65 832728934" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="boysss@gmail.com" required>
                </div>
                <div class="input-group">
                    <label for="location">Location</label>
                    <input type="text" id="location" name="location" value="Depok, IND" required>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
