<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
    <ul class="nav">
      @if (Auth::check())
        <li class="nav-item">
          <a href="/profile" class="nav-link">Profile</a>
        </li>
        <li class="nav-item">
          <a href="/invoices" class="nav-link">Invoices</a>
        </li>
        <li class="nav-item">
          <a href="/logout" class="nav-link">Logout</a>
        </li>
        <li class="nav-item">
          <a href="/setting" class="nav-link">Setting</a>
        </li>
      @else
        <li class="nav-item">
          <a href="/login" class="nav-link">Login</a>
        </li>
        <li class="nav-item">
          <a href="/signup" class="nav-link">Sign Up</a>
        </li>
      @endif
    </ul>

    @yield('main')
  </div>
</body>
</html>
