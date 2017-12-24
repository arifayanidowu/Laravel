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
        </div>
    </section>

    <div class="wrapper">
        @yield('content')
    </div>

    @include('layout.admin-footer')
</body>

</html>