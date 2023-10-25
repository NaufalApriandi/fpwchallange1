<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata - @yield('nama_title')</title>
</head>
<body>
    <div>
    <h1>@yield('nama_heading')</h1>
    </div>
    <div id="bio">
        <p>@yield('bio')</p>
    </div>
    <div id="bio">
        <div>
            Hobby:
        </div>
        <div>
            @yield('hobi')
        </div>
    </div>
</body>
</html>