<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
</head>
<body>


@include('inc.header')

@if(Request::is('/'))
    @include('inc.hero')
@endif

<div class="container mt-5">
    <div class="row">
        <div class="col-8">@yield('content')</div>
        <div class="col-4">@include('inc.aside')</div>
    </div>
</div>

@include('inc.footer')

</body>
</html>
