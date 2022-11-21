<!DOCTYPE html>
<html lang="en">
<head>
  @Vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>