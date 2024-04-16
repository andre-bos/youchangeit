<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
   <header class="fixed w-full">
        @yield('header')
   </header>

   <main>
        @yield('main')
   </main>
   <footer></footer>
</body>
</html>