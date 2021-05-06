<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Use the title from a page's frontmatter if it has one -->
    <title>Amazing Store: Precios más bajos</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    @include('compartido.navbar')
    <main class="mt-5">
        <div class="container">
            @if(session('info'))
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
            @endif
            @yield('content')
        </div>
    </main>
    <script src="/js/app.js"></script>
</body>

</html>