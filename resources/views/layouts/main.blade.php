<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC-COMICS</title>
    {{-- importo il file app.scss x usare bootstrap --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <main>
       @include ("partials.header")
        @yield('content') 
    </main>
    @include("partials.footer")
    
</body>

</html>