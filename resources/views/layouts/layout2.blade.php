<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSK</title>
  <link rel="stylesheet" href="/css/layout.css">
</head>
<body>
  <div class="home">
    <div class="header">
      <div class="logo">CSK</div>
      <div class="user">
        <p>Welcome {{auth()->user()->name}}</p>
      </div>
      <ul>
        <li><a href="/home">Home</a></li>
        <li><a href="/products">Products</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <li class="logout">
          <form action="/logout" method="POST">
            @csrf
            <button type="submit">
              Logout
            </button>
          </form>
        </li>
      </ul>
    </div>
      @yield('content')
    <div class="footer">
      Copyright &copy; 2022 - Team Kanto
    </div>
  </div>
</body>
</html>