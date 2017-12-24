<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
	<link rel="stylesheet" type="text/css" href="styles/admin_styles.css">
</head>

<body>
	<section>
		<div class="mast">
			<h1>T<span>SSB</span></h1>
			@include('layout.admin-nav')
		</div>
	</section>
	<div class="wrapper">
		<div id="stream">
			@yield('content')
		</div>
	</div>

    @include('layout.admin-footer')
</body>
</html>
