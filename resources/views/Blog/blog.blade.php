<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Sharing is Caring</title>
</head>
<body>
    <a href="/blog/create" class="btn btn-outline-primary btn-lg btn-block">Create</a>
    <div class="row">
        @foreach ($Blog as $Blogs)
        <div class="card" style="width: 18rem; margin-top:10px; margin-left:25px; margin-right:25px; padding:10px;">
            <img src="{{asset('public/image/'. $Blogs ->image)}}" class="img-fluid" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $Blogs -> title }}</h5>
                <p class="card-text">{{ $Blogs -> description }}</p>
                <a href="{{ route('view.Blog', $Blogs->id) }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
        @endforeach
        
    </div>       
</body>
</html>