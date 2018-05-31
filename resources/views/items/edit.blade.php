<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="{{ url('items/update', $item->id) }}" method="POST">
			{{ csrf_field() }}

			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" value="{{ $item->name }}" class="form-control">
			</div>

			<div class="form-group">
				<label>Price</label>
				<input type="text" name="price" value="{{ $item->price }}" class="form-control">
			</div>

			<div class="form-group">
				<label>Category</label>
				<select name="category_id[]" class="form-control" multiple="multiple">
					@foreach($categories as $category)
						<option
						@if( in_array($category->id, $selected_categories) )
							selected="selected"
						@endif
						 value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
				</select>
			</div>

			<button class="btn btn-primary">Update Item</button>
		</form>
	</div>
</body>
</html>