<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<br>
		<a href="{{ url('categories/create') }}" class="btn btn-primary">Create Category</a>
		<br><br>
		@foreach ($categories as $category)
			<h1><a href="{{ url('categories', $category->id) }}">{{ $category->name }}</a></h1>
			<p>{{ $category->description }}</p>

			<a href="{{ url('categories/edit', $category->id) }}" class="btn btn-info">Edit</a>
			<a href="{{ url('categories/delete', $category->id) }}" class="btn btn-danger">Delete</a>
			<hr>
		@endforeach
	</div>
</body>
</html>