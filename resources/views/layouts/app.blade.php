
<!DOCTYPE html>
<html  lang="fr">
<head class='font-[sans-serif] min-h-[60px] tracking-wide relative z-50'>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
