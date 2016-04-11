@extends('app')

@section('content')



    <div class="wrapper">
        <div class="container">
            <h1>Recipes</h1>
            <!-- <ul class="grid-nav">
                 <li><a href="#" data-id="two-columns" >2 Columns</a></li>
                 <li><a href="#" data-id="three-columns" class="active">3 Columns</a></li>
                 <li><a href="#" data-id="four-columns">4 Columns</a></li>
             </ul>-->

            <hr />



            @if( sizeof( $recipes ) ===  0 )

                <p>No Records</p>


            @else


                <div id="two-columns" class="grid-container" >
                    <ul class="rig columns-2">



                    </ul>
                </div>
                <!--/#two-columns-->


                <div id="four-columns" class="grid-container" style="display:block;">

                    <ul class="rig columns-4">


                        @foreach ( $recipes as $value )

                            <?php

                            $link_title = $value[ 'title' ];

                            ?>

                            <a href="/recipe/{{ str_replace( ' ' , '-',  trim( $link_title ) ) }}/{{  $value[ 'id' ]  }}/{{ $value[ 'link' ] }}">

                                <li>
                                    <img src="http://img.youtube.com/vi/{{ $value[ 'link' ] }}/mqdefault.jpg" />
                                    <h3> {{ $value[ 'title' ]}} </h3>
                                    <p> {{ $value[ 'description' ]  }} </p>
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

            <hr />


        </div>
        <!--/.container-->


    </div>
    <!--/.wrapper-->

    <?php echo $recipes->render(); ?>

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