<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Petopia - Pet Adoption Portal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fc933f22a6.js" crossorigin="anonymous"></script>
    {{-- Main CSS --}}
    @vite('resources/css/app.css')
</head>
<body class="font-sans">
    
    @yield('section')

</body>
</html>