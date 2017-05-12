<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt-br" class="no-js">
<!--<![endif]-->
<head>

	<meta charset="utf-8"/>
	<title>Admin Bella @yield('page_title')</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta name="description" content="@yield('page_description')"/>
	<meta name="author" content="@yield('page_author')"/>

	<link rel="stylesheet" href="{{ asset('assets/admin.css') }}">
	<script src="{{ asset('assets/tinymce/tinymce.min.js') }}" type="text/javascript"></script>

</head>

<body>	

	@yield('body')
	<script src="{{ asset('assets/admin.js') }}" type="text/javascript"></script>

</body>
</html>