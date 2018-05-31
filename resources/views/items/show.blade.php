<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>{{ $item->name }}</h1>
		<p>{{ $item->price }}</p>
		<hr>
		@foreach($categories as $category)
			<p>{{ $category->name }}</p>
		@endforeach
		<hr>	
		<a href="{{ url('items') }}" class="btn btn-primary">Go Back Home</a>
	</div>
</body>
</html>