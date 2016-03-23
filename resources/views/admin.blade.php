@extends('app')

@section('content')

    
    <div class="container">
        <!-- Example row of columns -->

        <div class="row">

            <div class="col-md-offset-2  col-md-8">

                <h3>Add Recipe</h3>

            </div>

        </div>

        <br/>

        <div class="row">
            <div class="col-md-offset-2  col-md-8">

                <form id="recipes">
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
                        <label for="recipe">Recipe</label>
                        <textarea name="recipe" class="form-control" id="recipe" rows="3"></textarea>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="author">Author</label>
                        <input name="author" class="form-control" id="author" placeholder="">
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="region">Region</label>
                        <select name="region" class="form-control" id="region">

                            @foreach ( $region as $value )

                                <option value="{{  $value->id  }}">{{  $value->name  }}</option>

                            @endforeach

                        </select>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="country">Country</label>
                        <select name="country" class="form-control" id="country">

                            @foreach ( $countries as $value )

                                <option value="{{  $value->id  }}">{{  $value->name  }}</option>

                            @endforeach

                        </select>
                    </fieldset>


                    <fieldset class="form-group">
                        <label for="category">Category</label>
                        <select name="category" class="form-control" id="category">

                            @foreach ( $categories as $value )

                                <option value="{{  $value->id  }}">{{  $value->name  }}</option>

                            @endforeach

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
                            <input name="featured" id="featured"   type="checkbox"> Feature
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input name="main_feature" id="main_feature" type="checkbox"> Main Feature
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input name="published" id="published" type="checkbox"> Published
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input name="how_to_guide" id="how_to_guide" type="checkbox"> How To Guide
                        </label>
                    </div>


                    <fieldset class="form-group">
                        <label for="file_input">File input</label>
                        <input name="file" type="file" class="form-control-file" id="file_input">
                        <small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </fieldset>

                    <button id="btn_save" class="btn btn-default pull-right" type=button>Save</button>


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

            SaveRecipe();

        });


        function SaveRecipe()
        {
            $( "#btn_save" ).click(function()
            {
                var url = 'article'

                var title;
                var link;
                var description;
                var recipe;
                var author;
                var region;
                var country;
                var category;
                var sub_category;
                var skill_level;
                var content_type;
                var feature;
                var main_feature;
                var published;
                var how_to_guide;

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

                recipe = $( '#recipe' ).val();



                author = $( '#author' ).val();

                if( author === '' )
                {
                    alert( 'Author Field Cannot Be Empty' );
                }


                region = $( '#region').val();
                country = $( '#country' ).val();
                category = $( '#category' ).val();

                if( category === '' )
                {
                    alert( 'Category Field Cannot Be Empty' );
                }


                if( $('#featured').is(':checked') )
                {
                    feature = 1;
                }
                else
                {
                    feature = 0;
                }

                if( $('#published').is(':checked') )
                {
                    published = 1;
                }
                else
                {
                    published = 0;
                }


                if( $('#how_to_guide').is(':checked') )
                {
                    how_to_guide = 1;
                }
                else
                {
                    how_to_guide = 0;
                }

                sub_category = $( '#sub_category' ).val();
                skill_level = $( '#skill_level' ).val();
                content_type = $( '#content_type' ).val();
                author =  $( '#author' ).val();
                main_feature = $( '#main_feature' ).val();
              //  published =  $( '#published' ).val();
              //  how_to_guide = $( '#how_to_guide' ).val();





                $.ajax({

                    url: url,

                    data: {


                        title: title ,
                        link: link,
                        description: description,
                        region: region,
                        country: country,
                        category: category,
                        sub_category: sub_category,
                        skill_level: skill_level,
                        content_type: content_type,
                        feature: feature,
                        main_feature: main_feature,
                        published: published,
                        how_to_guide: how_to_guide


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


                //$('#recipes').trigger("reset");

            });
        }

    </script>

@endsection