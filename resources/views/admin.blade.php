@extends('app')


@section( 'title' )

    Lets Cook Admin Page

@endsection

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

                <form id="recipes" method="post" enctype="multipart/form-data"  >

                    <fieldset class="form-group">
                        <label for="content_type">Content Type</label>
                        <select name="content_type" class="form-control" id="content_type">
                            <option>Video</option>
                            <option>Text</option>
                        </select>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="">
                    </fieldset>

                    <fieldset id="link_fieldset" class="form-group">
                        <label for="link">Link</label>
                        <input name="link" type="text" class="form-control" id="link" placeholder="">
                    </fieldset>


                    <fieldset id="image_upload" class="form-group" style="display: none">
                        <label for="file_input">File input</label>
                        <input name="file" type="file" class="form-control-file" id="file_input">
                        <small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </fieldset>




                    <fieldset class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="blurb">Blurb</label>
                        <textarea name="blurb" class="form-control" id="blurb" rows="3"></textarea>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="keywords">Meta Keywords</label>
                        <textarea name="keywords" class="form-control" id="keywords" rows="3"></textarea>
                    </fieldset>



                    <fieldset class="form-group">
                        <label for="recipe">Ingredients</label>
                        <textarea name="ingredients" class="form-control" id="ingredients" rows="3"></textarea>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="recipe">Instructions</label>
                        <textarea name="instructions" class="form-control" id="instructions" rows="3"></textarea>
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="author" class="form-control" id="author" placeholder="">
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
                        <select name="skill_level" class="form-control" id="skill_level">
                            <option>Beginner</option>
                            <option>Intermediate</option>
                            <option>Advanced</option>
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
                            <input name="published" id="published" type="checkbox"> Published
                        </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input name="how_to_guide" id="howto" type="checkbox"> How To Guide
                        </label>
                    </div>




                    <button id="btn_save" class="btn btn-default pull-right" >Save</button>


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


            SetContentType();
            SaveFormData();
           // SaveRecipe();

        });


        //Switch fields for video and text recipes
        function SetContentType()
        {
            var content_type = '';

            $( "#content_type" ).change( function()
            {
                content_type = $( "#content_type").val();

                if( content_type != '' )
                {

                    if( content_type.toLowerCase() == 'video' )
                    {


                        $( '#link_fieldset').show();
                        $( '#image_upload').hide();
                    }
                    else
                    {

                        //Hide Video Link input

                        $( '#link_fieldset').hide();
                        $( '#image_upload').show();

                        //Show Image upload Field Set

                    }

                }

            });

        }

        function SaveFormData()
        {

            var url = 'article'




            $("form#recipes").submit(function(){



                tinyMCE.triggerSave();
                var formData = new FormData( $(this)[0] );




                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    success: function ( data )
                    {
                        alert( data )
                        $( '#recipes' ).trigger( 'reset' );
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });

                return false;

            });



        }


        function SaveRecipe()
        {

            $( "#btn_save" ).click(function()
            {
                var url = 'article'

                var title;
                var link;
                var description;
                var ingredients;
                var instructions;
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
                ingredients = $( '#ingredients' ).val();
                instructions = $( '#instructions' ).val();

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

                alert( $( '#feature').val() );

                if( $('#feature').is(':checked') )
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


                if( $('#howto').is(':checked') )
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
                        ingredients: ingredients,
                        instructions: instructions,
                        region: region,
                        country: country,
                        category: category,
                        sub_category: sub_category,
                        skill_level: skill_level,
                        content_type: content_type,
                        author: author,
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

                        $( '#recipes' ).trigger( 'reset' );
                        alert( 'Recipe Saved Successfully' );
                        console.log( 'Response OK ' + data );



                    },
                    type: 'POST'

                });


                //$('#recipes').trigger("reset");

            });
        }

    </script>

@endsection