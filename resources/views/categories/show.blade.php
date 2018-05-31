<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>{{ $category->name }}</h1>
		<p>{{ $category->description }}</p>
		<a href="{{ url('categories') }}" class="btn btn-primary">Go Back Home</a>
	</div>
</body>
</html>