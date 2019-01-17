<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SisVent</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('style_sisvent/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	@yield('style')
</head>
<body>
	@yield('body')
<script type="text/javascript" src="{{ asset('style_sisvent/js/jquery-3.3.1.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('style_sisvent/js/bootstrap.min.js') }}" ></script>
</body>
</html>