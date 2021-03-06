<!DOCTYPE html>
<html lang="en">
<head>

   


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield( 'meta' )


    <link rel="icon" href="../../favicon.ico">

    <title>

        @yield( 'title' )

    </title>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Great+Vibes|Niconne|Damion|Pinyon+Script|Allura|Parisienne|Italianno|Arizonia|Ramabhadra|Rubik:400,900|Coda:400,800' rel='stylesheet' type='text/css'>
    <script>tinymce.init({

            selector: '#ingredients',


        });

    </script>



    <!-- Custom styles for this template -->
    <link href="/css/admin.css" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">
    <link href="/css/letscook.css" rel="stylesheet">
    <link href="/css/hover-min.css" rel="stylesheet">

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
            <a class="navbar-brand " href="#"><div class="logo-2">COOK<span style="font-style:italic; color: ">!</span><div class="logo-1 glow">Lets</div></div></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li id="home" value="9999"><a href="/home">Home</a></li>
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Browse <span class="caret"></span></a>
                    <ul class="dropdown-menu multi-column columns-3" id="main-dropdown">
                        <div id="arrow-pointer" class="arrow-up"></div>

                        <div class="row">
                            <div class="col-sm-3">
                                <ul class="multi-column-dropdown">
                                    <li class="divider"></li>
                                    <li value="1"><a href="#">Appetizers & Snacks</a></li>
                                    <li class="divider"></li>
                                    <li value="2"><a href="#">Barbecue & Grilling</a></li>
                                    <li class="divider"></li>
                                    <li value="3"><a href="#">Bread Recipes</a></li>
                                    <li class="divider"></li>
                                    <li value="4"><a href="#">Breakfast & Brunch</a></li>
                                    <li class="divider"></li>
                                    <li value="23"><a href="#">Chili</a></li>
                                    <li class="divider"></li>
                                    <li value="5"><a href="#">Desserts</a></li>
                                    <li class="divider"></li>
                                    <li value="6"><a href="#">Dinner Recipes</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="multi-column-dropdown">
                                    <li class="divider"></li>
                                    <li value="7"><a href="#">Drinks</a></li>
                                    <li class="divider"></li>
                                    <li value="8"><a href="#">Eggs</a></li>
                                    <li class="divider"></li>
                                    <li value="9"><a href="#">Free From Recipes</a></li>
                                    <li class="divider"></li>
                                    <li value="10"><a href="#">Fruits & Vegtables</a></li>
                                    <li class="divider"></li>
                                    <li value="11"><a href="#">Healthy Recipes</a></li>
                                    <li class="divider"></li>
                                    <li value="12"><a href="#">Holidays & Events</a></li>
                                    <li class="divider"></li>
                                    <li value="14"><a href="#">Lunch Recipes</a></li>
                                    <li class="divider"></li>


                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="multi-column-dropdown">
                                    <li class="divider"></li>
                                    <li value="15"><a href="#">Main Dishes</a></li>
                                    <li class="divider"></li>
                                    <li value="16"><a href="#">Meat and Poultry</a></li>
                                    <li class="divider"></li>
                                    <li value="17"><a href="#">Pasta & Noodles</a></li>
                                    <li class="divider"></li>
                                    <li value="18"><a href="#">Salad Recipes</a></li>
                                    <li class="divider"></li>
                                    <li value="19"><a href="#">Seafood Recipes</a></li>
                                    <li class="divider"></li>
                                    <li value="20"><a href="#">Side Dishes</a></li>
                                    <li class="divider"></li>
                                    <li value="21"><a href="#">Soups</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </div>

                            <div class="col-sm-3">
                                <ul class="multi-column-dropdown">
                                    <li class="divider"></li>
                                    <li value="22"><a href="#">Stews</a></li>
                                    <li class="divider"></li>
                                    <li value="26"><a href="#">Vegan</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </div>

                        </div>
                    </ul>
                </li>
                <li id="dropdown" value="9999">

                    <a href="#" style="display:none;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">World Food <span class="caret"></span></a>
                    <ul class="dropdown-menu multi-column columns-3" id="world-dropdown" style="display:none">

                        <div class="row">
                            <div class="col-sm-2">
                                <ul class="multi-column-dropdown dropdown-mod">
                                    <li value="1"><a href="#">American</a></li>
                                    <li class="divider"></li>
                                    <li value="2"><a href="#">Argentinian</a></li>
                                    <li class="divider"></li>
                                    <li value="3"><a href="#">Armenian</a></li>
                                    <li class="divider"></li>
                                    <li value="4"><a href="#">Austrailian</a></li>
                                    <li class="divider"></li>
                                    <li value="5"><a href="#">Austrian</a></li>
                                    <li class="divider"></li>
                                    <li value="6"><a href="#">Basque</a></li>
                                    <li class="divider"></li>
                                    <li value="8"><a href="#">Belgian</a></li>
                                    <li class="divider"></li>

                                </ul>
                            </div>
                            <div class="col-sm-2">
                                <ul class="multi-column-dropdown">

                                    <li value="9"><a href="#">Brazillian</a></li>
                                    <li class="divider"></li>
                                    <li value="10"><a href="#">British</a></li>
                                    <li class="divider"></li>
                                    <li value="11"><a href="#">Burmese</a></li>
                                    <li class="divider"></li>
                                    <li value="14"><a href="#">Cajun</a></li>
                                    <li class="divider"></li>
                                    <li value="15"><a href="#">Canadian</a></li>
                                    <li class="divider"></li>
                                    <li value="16"><a href="#">Caribbean</a></li>
                                    <li class="divider"></li>
                                    <li value="17"><a href="#">Chinese</a></li>
                                    <li class="divider"></li>

                                </ul>
                            </div>
                            <div class="col-sm-2">
                                <ul class="multi-column-dropdown">

                                    <li value="18"><a href="#">Colombian</a></li>
                                    <li class="divider"></li>
                                    <li value="19"><a href="#">Croation</a></li>
                                    <li class="divider"></li>
                                    <li value="19"><a href="#">Czech</a></li>
                                    <li class="divider"></li>
                                    <li value="19"><a href="#">Danish</a></li>
                                    <li class="divider"></li>
                                    <li value="19"><a href="#">Dutch</a></li>
                                    <li class="divider"></li>
                                    <li value="19"><a href="#">Egyption</a></li>
                                    <li class="divider"></li>
                                    <li value="19"><a href="#">Eskimo</a></li>
                                    <li class="divider"></li>


                                </ul>
                            </div>

                            <div class="col-sm-2">
                                <ul class="multi-column-dropdown">
                                    <li value="19"><a href="#">Ethiopian</a></li>
                                    <li class="divider"></li>
                                    <li value="21"><a href="#">Filipino</a></li>
                                    <li class="divider"></li>
                                    <li value="22"><a href="#">Finnish</a></li>
                                    <li class="divider"></li>
                                    <li value="23"><a href="#">French</a></li>
                                    <li class="divider"></li>
                                    <li value="23"><a href="#">German</a></li>
                                    <li class="divider"></li>
                                    <li value="23"><a href="#">Greek</a></li>
                                    <li class="divider"></li>
                                    <li value="23"><a href="#">Hawaiian</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </div>

                            <div class="col-sm-2">
                                <ul class="multi-column-dropdown">
                                    <li value="19"><a href="#">Ethiopian</a></li>
                                    <li class="divider"></li>
                                    <li value="21"><a href="#">Filipino</a></li>
                                    <li class="divider"></li>
                                    <li value="22"><a href="#">Finnish</a></li>
                                    <li class="divider"></li>
                                    <li value="23"><a href="#">French</a></li>
                                    <li class="divider"></li>
                                    <li value="23"><a href="#">German</a></li>
                                    <li class="divider"></li>
                                    <li value="23"><a href="#">Greek</a></li>
                                    <li class="divider"></li>
                                    <li value="23"><a href="#">Hawaiian</a></li>
                                    <li class="divider"></li>
                                </ul>
                            </div>

                        </div>
                    </ul>


                </li>
                <li id="how_to_guide" value="9999"><a href="/recipes/How-To-Guide">Cooking Tutorials</a></li>


            </ul>


                <form class="navbar-form pull-right">

                    <div class="input-group ">

                        <input type="text" class="form-control search" id="search-parameter" placeholder="Find a recipe" style="width:300px">
                        <div id="search-button" class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>

                    </div>



                </form>

        </div><!--/.nav-collapse -->


    </div>

</nav>

<div style="padding-bottom: 15px;"></div>
<div class="line-seperator-jumbotron"></div>




@yield('content')




<div class="line-seperator-jumbotron"></div>
<div class="footer">

    <br/>

    <div class="footer-text" style="color:#b5b5b5; ">

        <div style="width:190px; " class="centered">
            <div  style="float:left; width:60px"><img src="/img/facebook.png" alt="Facebook" class="icons" ></div>
            <div  style="float:left; width:60px"><img src="/img/twitter3.png" alt="Twitter" class="icons" ></div>
            <div  style="float:left; width:60px"><img src="/img/instagram.png" alt="Instagram" class="icons" ></div>
            <div style="clear:both"></div>
        </div>

        <br/>

        <h4 class="company centered">©2016 TamTam Web Design</h4>

    </div>

    <br/>

</div>



<script>



    $( function()
    {

        Search();

        Browse();

        LoadPage();


        //Rating();
    });


    /*

        Search Function

        Read user input

        Build Search url using user input

        Redirect to Search url

    */
    function Search()
    {

        var l = window.location;
        var base_url = l.protocol + "//" + l.host + "/" ;

        var url = base_url + 'search/';

        $( "#search-button" ).click(function()
        {
            id = $( "#search-parameter" ).val();

            if( id == '' )
            {

            }
            else
            {

                window.location.replace( url + id );
            }

        });


        $( '#search-parameter' ).keydown(function ( e )
        {

            if( e.keyCode == 13 )
            {
                e.preventDefault();

                id = $( "#search-parameter" ).val();

                if( id == '')
                {

                }
                else
                {
                    window.location.replace( url + id );
                }



            }

        })

    }


    function Browse()
    {

        $( "#browse" ).click(function()
        {
            alert( 'Browse Clicked' );

        });

    }

    function LoadPage()
    {

        var l = window.location;
        var base_url = l.protocol + "//" + l.host + "/" ;

        var url = base_url + 'recipes/';


        $( "#main-dropdown li" ).click(function()
        {

            id = $( this ).val();

            window.location.replace( url + id );

        })


    }


</script>
</body>
</html>

