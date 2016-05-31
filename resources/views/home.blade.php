@extends('app')


@section( 'meta' )


    <meta property="og:title" content="Lets Cook" />
    <meta property="og:url" content="http://www.letscook.ie" />
    <meta property=”og:type” content=”website” />
    <meta property="og:description" content="a site where you can learn to cook and find some amazing recipes." />
    <meta property=”og:image” content=”http://www.letcook.ie/image-name.jpg” />

    <meta name="keywords" content="Cooking Site, Cook, cooking, Recipe, Recipes, Healthy, Main Courses, Appetizers, Desserts, Snacks, Drinks, Salads, Breakfast, Soups, Stews, Bread , Barbecue, Seafood , Side Dishes ">


@endSection

@section( 'title' )

     Lets Cook - Home

@endsection




@section('content')


        <!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">

    <div class="container">

        <video id="video-background"preload muted autoplay loop>

            <source src="video/food-background(2).webm" type="video/webm">

        </video>

    </div>

</div>

     <div class="line-seperator-jumbotron"></div>
<div class="wrapper">


    <div class="container-fluid" style="margin-top: 0px; background-color: #ffffff">
        <br/>
        <br/>
        <h2 class="centered">More to explore</h2>
        <h4 class="centered subtitle">Featured Recipes</h4>
        <br/>
        <br/>

       <!-- <ul class="grid-nav">
            <li><a href="#" data-id="two-columns" >2 Columns</a></li>
            <li><a href="#" data-id="three-columns" class="active">3 Columns</a></li>
            <li><a href="#" data-id="four-columns">4 Columns</a></li>
        </ul>-->

 <div id="three-columns" class="grid-container centered">

                <ul class="rig columns-3">

                    @foreach ( $featured as $value )

                        <a href="recipe/{{  $value[ 'id' ]   }}/{{ str_replace( ' ' , '-',  trim( $value[ 'title' ] ) )  }}">

                            <li>

                                <div class="li-wrapper">

                                    <img class="image-border " src="http://img.youtube.com/vi/{{ $value[ 'link' ] }}/mqdefault.jpg" />

                                </div>
                                <br/>
                                <h4 class="home-title centered"> {{ $value[ 'title' ] }} </h4>

                            </li>

                        </a>

                    @endforeach

                </ul>

            </div>


        <a href="recipes/all" style="text-decoration: none">

            <div class="view-more-div centered">

                <span class="view-more-content subtitle " >View More</span>

            </div>

        </a>


        <br/>
        <br/>





        <!--/#three-columns-->

      <!--  <div id="four-columns" class="grid-container">
            <ul class="rig columns-4">

                @foreach ( $featured as $value )

                    <li>
                        <img src="http://img.youtube.com/vi/{{ $value['link'] }}/mqdefault.jpg" />
                        <h3> {{ $value['title'] }} </h3>
                        <p> {{ $value[ 'description' ]  }} </p>
                    </li>

                @endforeach


            </ul>
        </div> -->
        <!--/#four-columns-->


        <br/>
        <br/>
        <br/>


    </div>
    <!--/.container-->


    <div class="line-separator"></div>

    <div class="container-fluid" style="margin-top: 0px; background-color:rgba(168, 136, 78, 0.15);">

        <br/>
        <br/>
        <br/>

        <h2 class="centered">Learn to Cook</h2>
        <h4 class="centered subtitle">The best cooking tutorials</h4>

        <br/>
        <br/>

        <div id="three-columns" class="grid-container centered">

            <ul class="rig columns-3">

                @foreach ( $tutorials as $value )

                    <a href="recipe/{{  $value[ 'id' ]  }}/{{  str_replace( ' ' , '-',  trim( $value[ 'title' ] ) ) }}">

                        <li>

                            <div class="li-wrapper">

                                <img class="image-border" src="http://img.youtube.com/vi/{{ $value[ 'link' ] }}/mqdefault.jpg"  />

                            </div>
                            <br/>
                            <h4 class="home-title  centered"> {{ $value[ 'title' ] }} </h4>

                        </li>



                    </a>

                @endforeach

            </ul>

        </div>

        <a href="recipes/How-To-Guide" style="text-decoration: none">

            <div class="view-more-div centered">

                <span class="view-more-content subtitle" style="vertical-align: middle">View More</span>

            </div>

        </a>

        <br/>
        <br/>
        <br/>
        <br/>

    </div>

    <div class="line-separator"></div>

    <div class="container-fluid" style="margin-top: 0px; background-color:#ffffff;">



        <br/>
        <br/>
        <h2 class="centered">Indulge</h2>
        <h4 class="centered subtitle">The best Desserts</h4>
        <br/>
        <br/>

        <div id="three-columns" class="grid-container centered">

            <ul class="rig columns-3">

                @foreach ( $desserts as $value )

                    <a href="recipe/{{ $value[ 'id' ]  }}/{{  str_replace( ' ' , '-',  trim( $value[ 'title' ] ) ) }}">

                        <li>

                            <div class="li-wrapper">

                                <img class="image-border" src="http://img.youtube.com/vi/{{ $value[ 'link' ] }}/mqdefault.jpg" />

                            </div>
                            <br/>
                            <h4 class="home-title  centered"> {{ $value[ 'title' ] }} </h4>

                        </li>
                    </a>

                @endforeach

            </ul>

        </div>

        <a href="recipes/5" style="text-decoration: none">

            <div class="view-more-div centered">

                <span class="view-more-content subtitle" style="vertical-align: middle">View More</span>

            </div>


        </a>


    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

</div>
<!--/.wrapper-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
        $('.grid-nav li a').on('click', function(event){
            event.preventDefault();
            $('.grid-container').fadeOut(500, function(){
                $('#' + gridID ).fadeIn(500);
            });
            var gridID = $(this).attr("data-id");

            $('.grid-nav li a').removeClass("active");
            $(this).addClass("active");
        });

        $('video').on('ended', function () {

            alert( 'Over' );
            this.load();
            this.play();
        });
    });


</script>


@endsection

