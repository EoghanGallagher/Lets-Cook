@extends('app')

@section('content')

<<div class="container-fluid">
        <div class="row less-gutter"  >

                <div class="col-sm-offset-1 col-sm-6 header-spacing">

                    <h1>{{ $title }}</h1>

                </div>

        </div>



             <div class="row less-gutter">


                <div class="col-sm-offset-1 col-sm-6">
                        <div class="video-container">
                        <!-- Copy & Pasted from YouTube -->
                        <iframe width="560" height="349" src="http://www.youtube.com/embed/{{ $video_id  }}?vq=hd720" frameborder="0" allowfullscreen></iframe>
                    </div>

                </div>


                 <div class="col-sm-3">
                     <div class="adverts1">

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