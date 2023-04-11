<!DOCTYPE html>
<html dir="{{ session()->get('locale') == 'fa' ? 'rtl' : '' }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<title>Contact Page</title>
</head>

<body>
	<h2> This is a Contact Page from controller </h2>
	<a href="{{ route('about.page') }}"> About </a>
</body>

</html>