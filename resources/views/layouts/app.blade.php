<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	{!! Charts::styles() !!}
</head>
<body>
@yield('header')
@yield('content')
@yield('footer')

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

{!! Charts::scripts() !!}
{!! $user_agent->script() !!}
{!! $url->script() !!}
{!! $http_host->script() !!}
</body>
</html>