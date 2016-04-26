@extends('app')

@section('content')



    <div class="wrapper">
        <div class="container">
            <br/>
            <h2 class="centered">Recipes</h2>
            <br/>


            <!-- <ul class="grid-nav">
                 <li><a href="#" data-id="two-columns" >2 Columns</a></li>
                 <li><a href="#" data-id="three-columns" class="active">3 Columns</a></li>
                 <li><a href="#" data-id="four-columns">4 Columns</a></li>
             </ul>-->

            @if( sizeof( $recipes ) ===  0 )

                <h2 class="centered">No Matches Found</h2>


            @else


                <div id="two-columns" class="grid-container" >
                    <ul class="rig columns-2">



                    </ul>
                </div>
                <!--/#two-columns-->


                <div id="three-columns" class="grid-container centered" style="display:block;">

                    <ul class="rig columns-3">


                        @foreach ( $recipes as $value )

                            <?php

                            $link_title = $value[ 'title' ];

                            ?>

                            <a href="/recipe/{{ str_replace( ' ' , '-',  trim( $link_title ) ) }}/{{  $value[ 'id' ]  }}/{{ $value[ 'link' ] }}">

                                <li>

                                    <div class="li-wrapper">

                                        <img class="image-border" src="http://img.youtube.com/vi/{{ $value[ 'link' ] }}/mqdefault.jpg" />

                                    </div>
                                    <br/>
                                    <h4 class="centered"> {{ $value[ 'title' ]}} </h4>

                                </li>

                            </a>

                        @endforeach

                    </ul>

                </div>

            @endif

            <!--/#three-columns-->

            <!--  <div id="four-columns" class="grid-container">
            <ul class="rig columns-4">

                    </ul>
                </div> -->
            <!--/#four-columns-->
       </div>
        <!--/.container-->

    </div>
    <!--/.wrapper-->


    <div class="centered">

        <?php echo $recipes->render(); ?>
    </div>

    <br/>
    <br/>


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