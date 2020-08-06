<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<form action="{{ route('update.Blog',$blog->id) }}" method="POST" style="overflow: hidden; display:block; width:50%; text-align:center; margin-left:320px; margin-top:20px;" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="title" 
            value="{{ $blog->title }}">
        </div>
    </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Description</span>
            </div>
             <textarea class="form-control" aria-label="With textarea" name="description">{{ $blog->description }}</textarea>
        </div>

        <div class="form-group col-sm-6">
            <label for="formGroupExampleInput2">Image</label>
            <img src="{{asset('public/image/'. $blog ->image)}}" class="img-fluid " width="100px" alt="">
            <input type="file" class="form-control-file" name="image" value="" id="exampleFormControlFile1">

            <input type="hidden" name="old_image" value="{{$blog ->image}}">
        </div>

            <button style="margin-top:15px; margin-left:10%;" class="btn btn-primary" type="submit">Update</button>
</form>
</body>
</html>