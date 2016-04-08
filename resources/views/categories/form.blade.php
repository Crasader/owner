<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Cats & Dependent Subcats AJAX, select dropdown</h1>
        <div class="col-lg-4">
            {!! Form::open(array('url'=>'', 'files'=>true)) !!}
                <div class="form-group">
                    <label for="">Categories</label>
                    <select class="form-control input-sm" name="category" id="category">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Subcategories</label>
                    <select class="form-control input-sm" name="subcategory" id="subcategory"></select>
                    <option value=""></option>
                </div>
            </form>
        </div>
    </div>

    <script>
        $('#category').on('change', function(e){
            console.log(e);

            var cat_id = e.target.value;

            //ajax
            $.get('/ajax-subcat?cat_id=' +cat_id, function(data){
                //success data
                //console.log(data);
                $('#subcategory').empty();
                $.each(data, function(index, subcatObj){
                    $('#subcategory').append('<option value="+subcatObj.id+">'+subcatObj.name+'</option>');
                });
            });
        });
    </script>

</body>
</html>