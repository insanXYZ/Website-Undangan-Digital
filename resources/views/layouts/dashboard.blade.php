<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard i-wedding</title>
    <link rel="stylesheet" href="{{asset('css/dashboard/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    @yield('css')
</head>
<body >
    <div class="container">
        <div class="sidebar">
            <div class="header">
                <img src="{{asset('favicon/logo.png')}}">
            </div>
            <div class="flexBeetween">
                <div class="flexMenu">
                    <a href="/dashboard"><img src="{{asset('svg/other/home.svg')}}"> Home</a>
                    <a href="/dashboard/manage"><img src="{{asset('svg/other/manage.svg')}}">Manage Postingan</a>
                    <a href="/dashboard/create"><img src="{{asset('svg/other/plus.svg')}}">Tambah Postingan</a>
                </div>
                <form action="/logout" method="POST" id="logout">
                    @csrf
                    <button type="submit" value="Logout" onclick="return confirm('Aseli erek kaluar??')">logout</button>
                </form>
            </div>
        </div>
        <div class="mainbar">
            <div class="topbar">
                <div class="clock"></div>
            </div>
            <div class="contentMainbar">
                @yield('mainbar')
            </div>
        </div>
    </div>
    @yield('script')
    <script>
        
        function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.querySelector('.clock').innerHTML =  h + ":" + m + ":" + s;
        setTimeout(startTime, 1000);
        }

        function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
        }
        startTime()
        </script>
        
</body>
</html>