@extends('app')

@section( 'meta' )

    <meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">
    <meta name="description" content="TEST">
    <meta name="author" content="test">

@endsection

@section('content')

<div class="container-fluid">
        <div class="row less-gutter"  >


        </div>



            <div class="row less-gutter">

                <div class="col-sm-1">


                </div>

                <div class="col-sm-7 recipe-div">


                    <div class="recipe-container">

                        <div class="video-container">

                            <!-- Copy & Pasted from YouTube -->
                            <iframe width="650" height="349" src="http://www.youtube.com/embed/{{ $video_id  }}?vq=hd720" frameborder="0" allowfullscreen></iframe>

                        </div>

                        <div id="recipe-title">

                            <h3>{{ $title }}</h3>
                            <div><span class="signature">by {{ $res[0]->author }}</span></div>

                        </div>

                        <br/>


                        <div id="recipe-rating">



                        </div>

                        @if( $res[0]->description != "" )


                            <div id="recipe-description">

                                {{  $res[0]->description  }}

                            </div>


                        @endif

                        <br/>

                        @if( $res[0]->ingredients != "" )


                            <?
                                $ingredients = explode( PHP_EOL , $res[0]->ingredients );
                            ?>


                            <div style="margin-left: 5px;">

                                <h4>Ingredients</h4>

                            </div>



                            <div id="recipe-ingredients">

                                <ul style="list-style: none;">

                                    @foreach ( $ingredients as $value )

                                        @if( !empty( $value  )  )

                                            <li style="font-weight: 600; font-style: italic">{{ $value }}</li>

                                        @endif

                                    @endforeach

                                </ul>

                            </div>

                        @endif

                        <br/>

                        <div style="margin-left: 5px;">

                            <h4>Cooking Instructions</h4>

                        </div>

                        <div id="recipe-ingredients">



                            <?
                                $instructions = explode( PHP_EOL , $res[0]->instructions );
                            ?>


                                <ol>

                                    @foreach ( $instructions as $value )

                                        @if( !empty( $value  )  )

                                            <li style="font-weight: 500; font-style: italic">{{ $value }}</li>

                                        @endif

                                    @endforeach

                                </ol>



                        </div>

                        <br/>
                        <br/>




                    </div>

                </div>

                <div class="col-sm-2">


                    <div class="recipe-container">

                    <div class="adverts1" style="margin-top: 75px; margin-left: 15px;">



                    </div>


                    <div class="adverts1" style="margin-top: 15px; margin-left: 15px;">



                    </div>


                    <div class="adverts1" style="margin-top: 15px; margin-left: 15px;">



                    </div>

                </div>

                <div class="col-sm-2">




                </div>
                </div>

            </div>



            <br/>
            <div class="row less-gutter">

                <div class="col-md-offset-1 col-md-6">

                    <a href="/home">Home Page</a>

                    <span>|</span>

                    <a id="report-broken" name="{{ $id  }}"  href="#">Report Broken Link</a>

                </div>

            </div>

        </div>

        <br/>

</div>
    <script>

        $( function()
        {
            $( "#report-broken" ).click(function()
            {

                id = $( '#report-broken' ).attr( 'name' );

                ReportBrokenLink( id );

            });
        });


        function ReportBrokenLink( id )
        {
            var l = window.location;
            var base_url = l.protocol + "//" + l.host + "/" ;

            var url = base_url + '/report/' + id;


            $.ajax({

                url: url,

                error: function( error )
                {
                    // console.log( error )
                },
                dataType : 'json',
                success: function( data )
                {
                    //alert( data );

                },
                type: 'GET'

            });
        }

    </script>


@endsection