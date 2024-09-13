<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="{{asset('css/style.css') }}" rel="stylesheet" >
</head>

<body>
    <div class="wrapper">
        <form action="handler_login.php" method="post">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" id="username" name="username" required />
                <i class="bx bxs-user"></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" id="password" name="password" required />
                <i class="bx bxs-lock-alt"></i>
            </div>

            <button type="submit" id="btn" class="btn">Register</button> 

            <div class="login-link">
                <p>Do you have an account? <a href="login.blade.php">login</a></p>
            </div>
        </form>
    </div>
    </div>
</body>

</html>