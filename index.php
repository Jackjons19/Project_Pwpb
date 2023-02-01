<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Login Page</title>
</head>


<body>
    <div class="input">
        <h1>LOGIN</h1>
        <form action="login.php" method="POST">
        <div class="box-input">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="box-input">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
          <a href="dashboard.php">
          <button type="sumbit" name="login" class="btn-input">Login</button>
          </a>
          <div class="bottom">
            <p>Belum Punya Akun?
                <a href="register.html">Register Disni</a>
            </p>
    </div>
    </form>
</body>
</html>