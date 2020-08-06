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

<form action="{{ route('save.Blog') }}" method="POST" style="overflow: hidden; display:block; width:50%; text-align:center; margin-left:320px; margin-top:20px;"  enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Sharing Title">
        </div>
    </div>

  <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Description</span>
        </div>
        <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
  </div>

  <button style="margin-top:15px; margin-left:10%;" class="btn btn-primary" type="submit">Save</button>
</form>

</body>
</html>