<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div id="background"></div>
    <div id="formcontainer">
        <div id="formcontainerinside">
            <div id="form">
                <h1>Welcome back!</h1>
                <h2>Log in or Sign up for the wonderful waffles!</h2>
                 <form action="loginform.php" id="forminside" method="post">
                        <label>Email: <input type="text" name="email" required></label>
                        <label>Password: <input type="password" name="passwd" required></label>
                        <div id="remembermecontainer">
                            <label>Remember Me<input type="checkbox" id="rememberMe" name="rememberMe"></label>
                        </div>
                        <button id="submit">Sign In</button>
                </form>
                <p>Don't have an account? <a href="register.php">Sign Up</a></p>
            </div>
            <div id="image">
                <img src="resources/wafflelogin.jpg" alt="">
            </div>
        </div>
    </div>
    <a href="index.php" id="gobackbutton">←</a>
</body>
</html>