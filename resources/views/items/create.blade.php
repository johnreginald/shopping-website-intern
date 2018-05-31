<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="{{ url('items/store') }}" method="POST">
			{{ csrf_field() }}

			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control">
			</div>

			<div class="form-group">
				<label>Price</label>
				<input type="text" name="price" class="form-control">
			</div>

			<div class="form-group">
				<label>Category</label>
				<select name="category_id[]" class="form-control" multiple="multiple">
					@foreach($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
				</select>
			</div>

			<button class="btn btn-primary">Create Item</button>
		</form>
	</div>
</body>
</html>