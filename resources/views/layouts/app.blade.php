<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}" defer></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="{{asset('favicon.ico')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Montserrat:wght@100;400;500&family=Sacramento&display=swap"
        rel="stylesheet">
    <title>Laravel App - @yield('title')</title>
</head>
<body>
   
    <div>
    @yield('content')
    </div>

    <div class="bg-primary">
  
  <a class="text-light bottom-link" href="#">Twitter</a>
  <a class=" text-light bottom-link" href="#">Facebook</a>
  <a class="text-light bottom-link" href="#">Telegram</a>

<p class="copyright"> © 2021 sunnylawrence @ Grace Technologies</p>
</div>
</div>
</body>
</html>