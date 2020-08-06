<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Angled Theme by TEMPLATED</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
	<style>
	body {
		margin: 0px 0px 0px 0px;
		padding: 0;
		background: #1f31bb url(images/bg01.png) repeat;
		font-family: Arial, Helvetica, sans-serif;
		font-size: 12px;
		color: #4b4b4b;
	}

	h2{
		margin: 0;
		padding: 0;
		font-weight: 200;
		color: #222222;
		font-size: 3em;
	}
	p{
		margin-top: 0px;
		padding: 0px;
		line-height: 180%;
        font-size: 18px;
	}
	a {
		color: #5C5539;
	}

	a:hover {
		text-decoration: none;
	}

	a img {
		border: none;
	}

	img.border {
	}

	img.alignleft {
		float: left;
		margin-top: 8px;
		margin-right: 50px;
	}

	img.alignright {
		float: right;
	}

	img.aligncenter {
		margin: 0px auto;
	}

	hr {
		display: none;
	}

	/** WRAPPER */

	#wrapper {
		overflow: hidden;
		background: #FFFFFF;
	box-shadow: 
			inset 0px 11px 8px -20px #CCC,
			inset 0px -11px 8px -10px #CCC;}

	.container {
		width: 1200px;
		margin: 0px auto;
	}

	.clearfix {
		clear: both;
	}

	/* Header */
	/* #header-wrapper {
		overflow: hidden;
		height: 150px;
	}

	#header {
		width: 1200px;
		height: 150px;
		margin: 0 auto;
		padding: 0px 0px;
	} */


	/* Page */

	#page-wrapper {
		overflow: hidden;
	}

	#page {
		overflow: hidden;
		width: 1120px;
		margin: 0px auto;
		padding: 50px 40px;
		color: #8F8F8F;
	}

	/** CONTENT */

	#wide-content {
		padding: 50px;
		border: 10px solid #f1f1f1;
	}

	#wide-content h2 {
		padding: 0px 0px 20px 0px;
		letter-spacing: -1px;
		font-size: 36px;
		color: #222222;
	}


	/** CONTENT */

	#content {
		float: right;
		width: 760px;
		padding: 0px 0px 0px 0px;
	}

	#content h2 {
		padding: 0px 0px 20px 0px;
		letter-spacing: -1px;
		font-size: 36px;
		color: #222222;
	}

	#content .subtitle {
		padding: 0px 0px 30px 0px;
		text-transform: uppercase;
		font-family: 'Oswald', sans-serif;
		font-size: 18px;
		color: #81AFC5;
	}
	</style>

<body>

<div id="wrapper">
	<div id="page-wrapper">
		<div id="page">
			<div id="wide-content">
				<div>
					<h2>{{ $blog -> title }}</h2>
                    <p><img src="{{asset('public/image/'. $blog ->image)}}" alt="" width="300" height="186" class="alignleft" />{{ $blog -> description }}</p>
                    
                    <button type="button" class="btn btn-success"><a href="{{ route('edit.Blog', $blog->id) }}" style="color:white;">Edit</button>

                    <button type="button" class="btn btn-danger"><a href="{{ route('delete.Blog', $blog->id) }}" style="color:white;">Delete</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
