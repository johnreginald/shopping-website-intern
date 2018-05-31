<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="{{ url('categories/update', $category->id) }}" method="POST">
			{{ csrf_field() }}

			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" value="{{ $category->name }}" class="form-control">
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea name="description" rows="10" class="form-control">{{ $category->description }}</textarea>
			</div>

			<button class="btn btn-primary">Update Category</button>
		</form>
	</div>
</body>
</html>