<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Lets Cook Admin Page</title>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


    <!-- Bootstrap core CSS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">




    <!-- Custom styles for this template -->
    <link href="/css/admin.css" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">
    <link href="/css/letscook.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet" type="text/css">





    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!--<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Lets Cook</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">

                <div class="input-group ">

                    <input type="text" class="form-control" id="search-parameter" placeholder="Search">
                    <div id="search-button" class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>

                </div>

            </form>

        </div>


    </div>
</nav>-->

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Lets Cook Logo</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Browse <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a><a href="#">Action</a><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>


                <form class="navbar-form navbar-right">

                    <div class="input-group ">

                        <input type="text" class="form-control search" id="search-parameter" placeholder="Find a recipe">
                        <div id="search-button" class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>

                    </div>

                </form>


        </div><!--/.nav-collapse -->


    </div>
</nav>






@yield('content')




<script>

    $(document).ready(function() {
        $(".dropdown-toggle").dropdown();
    });

    $( function()
    {




        Search();

        Browse();

    });


    function Search()
    {

        $( "#search-button" ).click(function()
        {
            alert( $( '#search-parameter').val() );

        });

    }


    function Browse()
    {

        $( "#browse" ).click(function()
        {

            alert( 'Browse Clicked' );

        });

    }

</script>
</body>
</html>

