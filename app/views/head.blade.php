
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta> @yield('description')</meta>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	{{ stylesheet_link_tag() }}
    {{ javascript_include_tag() }}
</head>