<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
   <header class="sticky top-0">
        <x-navbar />
        @yield('header')
   </header>
   <main>
        @yield('main')
   </main>
   <footer>
     @yield('footer')
   </footer>

   <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>
</html>