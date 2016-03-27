@extends('app')

@section('content')

        <!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Lets Cook</h1>
         <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>

<div class="wrapper">
    <div class="container">
        <h1>Latest Recipes</h1>
       <!-- <ul class="grid-nav">
            <li><a href="#" data-id="two-columns" >2 Columns</a></li>
            <li><a href="#" data-id="three-columns" class="active">3 Columns</a></li>
            <li><a href="#" data-id="four-columns">4 Columns</a></li>
        </ul>-->



        <div id="two-columns" class="grid-container" >
            <ul class="rig columns-2">

                @foreach ( $featured as $value )

                    <li>
                        <img src="http://img.youtube.com/vi/{{ $value['link'] }}/mqdefault.jpg" />
                        <h3> {{ $value['title'] }} </h3>
                        <p> {{ $value[ 'description' ]  }} </p>
                    </li>

                @endforeach

            </ul>
        </div>
        <!--/#two-columns-->





            <div id="three-columns" class="grid-container" style="display:block;">

                <ul class="rig columns-3">

                    @foreach ( $featured as $value )

                        <a href="recipe/{{ str_replace( ' ' , '-',  trim( $value[ 'title' ] ) ) }}/{{  $value[ 'id' ]  }}/{{ $value[ 'link' ] }}">

                            <li>
                                <img src="http://img.youtube.com/vi/{{ $value[ 'link' ] }}/mqdefault.jpg" />
                                <h4> {{ $value[ 'title' ] }} </h4>
                                <div id="rating" class="blurb">
                                    <input id="input-1" value="4" type="number" class="rating" readonly="true" min=0 max=5 step=0.2 data-size="xs">
                                </div>
                                <span class="description"> {{ $value[ 'description' ]  }} </span>
                                <div id="author" class="blurb">Author:</div>

                            </li>

                        </a>

                    @endforeach

                </ul>

            </div>


            <div class="centered">{{  $featured->links()  }}</div>


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

        <hr />

    </div>
    <!--/.container-->
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
    });
</script>


@endsection

