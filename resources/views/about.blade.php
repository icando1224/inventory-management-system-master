<!DOCTYPE html>
<html dir="{{ session()->get('locale') == 'fa' ? 'rtl' : '' }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<title>About Page</title>
</head>

<body>
	<h1>This is About Page from controller </h1>
	<a href="{{ route('cotact.page') }}"> Contact </a>
</body>

</html>