<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('style/style.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light" style="margin-bottom: 10px">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"
                 class="d-inline-block align-text-top">
            Free Ads
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            @auth
                <ul class="navbar-nav">
                    <li class="nav-item" style="margin-right: 20px">
                        <a class="btn btn-primary" href="/edit" role="button">Create Ad</a>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</nav>
