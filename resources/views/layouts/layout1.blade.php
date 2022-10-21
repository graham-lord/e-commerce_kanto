<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KCS</title>
    <link rel="stylesheet" href="/css/layout1.css">
</head>
<body>
   <div class="welcome">
     <div class="header">
        <div class="logo">
          <!-- <a href="/"><span class="logo-1">K</span><span class="logo-2">CS</span></a> -->
          <a href="/"><img src="/images/logo.png" alt="asdads"></a>
        </div>
        <ul class="register-login">
          <li ><a href="/register" class="register">Register</a></li>
          <li ><a href="/login" class="login">Login</a></li>
        </ul>
     </div>
     @yield('content')
     <div class="footer">
        Copyright &copy; 2022 - Team Kanto
     </div>
   </div>
</body>
</html>