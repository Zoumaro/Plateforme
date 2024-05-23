
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    @livewireStyles

</head>
<body>
    @yield('content')
           <main>
                {{ $slot }}
            </main>

    @livewireScripts
</body>
</html>
