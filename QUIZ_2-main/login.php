<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
</head>
<body>
    <form class="login-box" method="POST" action="aksilogin.php">
        <h1>Form Login</h1>
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username">
        </div>
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password">
        </div>
        <input type="submit" class="btn" value="LOGIN">
    </form>
</body>
<!-- <head>
    <title>Form LOGIN</title>
    <style>tr{border: 1; background-color: rebeccapurple;}</style>
</head>
<body>
    <center>
        <table border="0">
            <form method="POST" action="aksilogin.php">
            <h1><td colspan="2" align="center">FORM LOGIN</td></h1>
            <tr><td>Username<td><input type="text" name="username"></td></tr>
            <tr><td>Password<td><input type="password" name="password"></td></tr>
            <tr><td colspan="2" align="right"><input type="submit" value="LOGIN"></td></tr>
            </form>
        </table>
    </center>
</body> -->
</html>