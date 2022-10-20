<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSK</title>
    <link rel="stylesheet" href="/css/layout1.css">
</head>
<body>
   <div class="welcome">
     <div class="header">
        <div class="logo">
          <span class="logo-1">CS</span><span class="logo-2">K</span>
        </div>
        <ul class="register-login">
          <li><a href="/register">Register</a></li>
          <li><a href="/login">Login</a></li>
        </ul>
     </div>
     @yield('content')
     <div class="footer">
        Copyright &copy; 2022 - Team Kanto
     </div>
   </div>
</body>
</html>