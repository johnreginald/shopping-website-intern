<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<br>
		<a href="{{ url('items/create') }}" class="btn btn-primary">Create Item</a>
		<br><br>
		@foreach ($items as $item)
			<h1><a href="{{ url('items', $item->id) }}">{{ $item->name }}</a></h1>
			<p>{{ $item->price }}</p>

			<a href="{{ url('items/edit', $item->id) }}" class="btn btn-info">Edit</a>
			<a href="{{ url('items/delete', $item->id) }}" class="btn btn-danger">Delete</a>
			<hr>
		@endforeach
	</div>
</body>
</html>