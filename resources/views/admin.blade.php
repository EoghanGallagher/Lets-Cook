@extends('app')

@section('content')


    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Lets Cook Admin</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                </form>
            </div><!--/.navbar-collapse -->
        </div>
    </nav>




    <div class="container">
        <!-- Example row of columns -->

        <div class="row">

            <div class="col-md-10">

                <h3>Add Recipe</h3>

            </div>

        </div>

        <br/>

        <div class="row">
            <div class="col-md-10">

                <form>
                    <fieldset class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="">
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="link">Link</label>
                        <input name="link" type="text" class="form-control" id="link" placeholder="">
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="category">Category</label>
                        <select name="category" class="form-control" id="category">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="sub_category">Sub Category</label>
                        <select name="sub_category" class="form-control" id="sub_category">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="skill_level">Skill Level</label>
                        <select name="select" class="form-control" id="skill_level">
                            <option>Beginner</option>
                            <option>Intermediate</option>
                            <option>Advanced</option>
                        </select>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="content_type">Content Type</label>
                        <select name="content_type" class="form-control" id="content_type">
                            <option>Video</option>
                            <option>Text</option>
                        </select>
                    </fieldset>


                    <div class="checkbox">
                        <label>
                            <input name="feature" id="feature"   type="checkbox"> Feature
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input name="main_feature" id="main_feature" type="checkbox"> Main Feature
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input name="archive" id="archive" type="checkbox"> Archive
                        </label>
                    </div>


                    <fieldset class="form-group">
                        <label for="file_input">File input</label>
                        <input name="file" type="file" class="form-control-file" id="file_input">
                        <small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </fieldset>

                    <button id="btn_save" class="btn btn-default" type=button>Save</button>


                </form>

            </div>

        </div>

        <hr>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


    <script>

        $( function()
        {

            $( "#btn_save" ).click(function()
            {
                var url = 'article'

                var title;
                var link;
                var description;
                var category;
                var sub_category;
                var skill_level;
                var content_type;
                var feature;
                var main_feature;
                var archive;

                title = $( '#title' ).val();

                if( title === '' )
                {
                    alert( 'Title Field Cannot Be Empty' );
                }


                link = $( '#link' ).val();

                if( link === '' )
                {
                    alert( 'link Field Cannot Be Empty' );
                }


                description = $( '#description' ).val();

                if( description === '' )
                {
                    alert( 'Description Field Cannot Be Empty' );
                }


                category = $( '#category' ).val();

                if( category === '' )
                {
                    alert( 'Category Field Cannot Be Empty' );
                }

                sub_category = $( '#sub_category' ).val();
                skill_level = $( '#skill_level' ).val();
                content_type = $( '#content_type' ).val();
                feature  = $( '#feature' ).val();;
                main_feature = $( '#main_feature' ).val();
                archive =  $( '#archive' ).val();




                $.ajax({

                    url: url,

                data: {


                    title: title ,
                    link: link,
                    description: description,
                    category: category,
                    sub_category: sub_category,
                    skill_level: skill_level,
                    content_type: content_type,
                    feature: feature,
                    main_feature: main_feature,
                    archive: archive


                },

                    error: function( error )
                    {
                        // console.log( error )
                    },
                    dataType : 'json',
                    success: function( data )
                    {
                        //alert( data );
                        console.log( 'Response OK ' + data );
                    },
                    type: 'GET'

                });

            });

        });

    </script>

@endsection