<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="{{ url('categories/store') }}" method="POST">
			{{ csrf_field() }}

			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control">
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea name="description" rows="10" class="form-control"></textarea>
			</div>

			<button class="btn btn-primary">Create Category</button>
		</form>
	</div>
</body>
</html>