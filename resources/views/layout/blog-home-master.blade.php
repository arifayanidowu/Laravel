<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/styles/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/styles/blog.css" rel="stylesheet">
</head>

<body>

    <div class="blog-masthead">
        <div class="container">
            @include('layout.user-nav')
        </div>
    </div>

    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">{{ $post->title }}</h1>
            <p class="lead blog-description">A Book written and published by no other than {{ $post->author }}</p>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">

                <div class="blog-post">
                   
                    @yield('content')

                </div>
                <!-- /.blog-post -->

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>

            </div>
            <!-- /.blog-main -->

            <div class="col-sm-3 offset-sm-1 blog-sidebar">
                @include('layout.front-sidebar')
            </div>
            <!-- /.blog-sidebar -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

   @include('layout.user-footer')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.min.js"></script>


    <script src="js/bootstrap.min.js"></script>

</body>

</html>