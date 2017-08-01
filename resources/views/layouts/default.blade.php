<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    {{--<link rel="icon" href="../../favicon.ico">--}}

    <title>Ontology{{isset($title) ? " - " . $title : ""}}</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/blog.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    @stack('scripts')
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        {{--<a class="blog-nav-item h1" href="/">PoliDroid</a>--}}
        <nav class="blog-nav">
            <a class="blog-nav-item {{isset($title) && $title == 'Home' ? 'active' : ''}}" href="{{ url('/') }}">Home</a>
            {{--<a class="blog-nav-item {{isset($title) && $title == 'PVDetector' ? 'active' : ''}}" href="/pvdetector">PVDetector</a>--}}
            {{--<a class="blog-nav-item {{isset($title) && $title == 'Source Code Analyzer' ? 'active' : ''}}" href="/source-analyzer">Source Code Analyzer</a>--}}
            {{--<a class="blog-nav-item {{isset($title) && $title == 'PoliDroid-AS' ? 'active' : ''}}" href="/plugin">Android Studio Plugin</a>--}}
            {{--<a class="blog-nav-item {{isset($title) && $title == 'Publications' ? 'active' : ''}}" href="/publications">Publications</a>--}}
            {{--<a class="blog-nav-item {{isset($title) && $title == 'Studies' ? 'active' : ''}}" href="/studies">Studies</a>--}}
            {{--<a class="blog-nav-item {{isset($title) && $title == 'Tutorial' ? 'active' : ''}}" href="/tutorials">Tutorials</a>--}}
        </nav>
    </div>
</div>

<div class="container">


    <div class="blog-header">
        @yield('top')
         <h1 class="blog-title">Ontology Browser</h1>
        <p class="lead blog-description"></p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">
            @yield('content')


            {{--<nav>--}}
            {{--<ul class="pager">--}}
            {{--<li><a href="#">Previous</a></li>--}}
            {{--<li><a href="#">Next</a></li>--}}
            {{--</ul>--}}
            {{--</nav>--}}

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>
                Put some stuff here.
            </p>
            </div>

            <div class="sidebar-module">
                <h4>Related</h4>
                <ol class="list-unstyled">
                    <li><a href="http://polidroid.org">PoliDroid</a></li>
                    <li><a href="http://sefm.cs.utsa.edu">UTSA Software Engineering</a></li>
                </ol>
            </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
    <p>&copy; {{date("Y")}} UTSA Software Engineering and Formal Methods Group | <a href="/privacy">Privacy Policy</a> | Built by <a href="https://twitter.com/rockyslavin">@RockySlavin</a>.</p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
</body>
</html>