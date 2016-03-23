@extends('app')

@section('content')


        <div class="row" >

                <div class="col-md-offset-3 col-md-6 header-spacing" style="border-style: solid">

                    <h1>{{ $title }}</h1>

                </div>

        </div>

        <div class="row" >

            <div class="col-md-offset-3 col-md-6 header-spacing">



            </div>

        </div>

             <div class="row">
                <div class="col-md-3">


                </div>

                <div class="col-md-6">
                        <div class="video-container">
                        <!-- Copy & Pasted from YouTube -->
                        <iframe width="560" height="349" src="http://www.youtube.com/embed/{{ $video_id  }}?vq=hd720" frameborder="0" allowfullscreen></iframe>
                    </div>

                </div>

            </div>

            <br/>
            <div class="row">

                <div class="col-md-offset-3 col-md-6">

                    <a href="/home">Home Page</a>

                    <span>|</span>

                    <a id="report-broken" name="{{ $id  }}"  href="#">Report Broken Link</a>

                </div>

            </div>

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