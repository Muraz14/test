<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @stack('css')
</head>
<body>
    <nav class="header">
        <h2>Logo</h2>
        <div class="menu">
            <a href="#">Home</a>
            <a href="#">Page 1</a>
            <a href="#">Page 2</a>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        <div>
            <form class="subscription" method="POST">
                @method('POST')
                @csrf
                <input name="email" placeholder="Enter your email" type="email">
                <input type="submit">
            </form>
        </div>
    </footer>
    @stack('js')
</body>
</html>