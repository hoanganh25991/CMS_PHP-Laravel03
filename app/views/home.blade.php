<html>
<head>
    <title>Note</title>
</head>
<body>
    <div id="header">
        <h1><a href="{{URL::to('/')}}">Welcome to Hoang Anh's Note</a></h1>
    @if(Auth::check())
        <p>
            Logged in as: <strong>{{Auth::user()->username}}</strong>
            <a href="/logout">Log out</a>
        </p>
        <button><a href="/create-post">+</a></button>
    @else
        <a href="/login">Log in</a>
    @endif
    </div>
    <hr>

    <div class="wrapper">
        <div id="main">
            @yield('main')
        </div>
    </div>
    <hr>

    <div id="footer">
        <p>Contact me: lehoanganh25991@gmail.com</p>
        <p>Mobile phone: +84903 86 56 57</p>
    </div>
</body>
</html>