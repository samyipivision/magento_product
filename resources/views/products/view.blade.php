@extends('layout')

@section('title')
	Products Watcher
@endsection

@section('content')
	<h1>Product Viewer</h1>
	<div>
		Last update: {{ $last_update }} HKT
	</div>
	<table>
		<tr><th>SKU</th><th>Store</th><th>Name</th><th>Brand</th><th>Type</th><th>Stock</th><th>Edit</th><th>Delete</th></tr>
		@foreach($result as $item)
			<tr>
				<td>{{ $item['sku'] }}</td>
				<td>{{ $item['store_code'] }}</td>
				<td>{{ $item['name'] }}</td>
				<td>{{ $item['brand'] }}</td>
				<td>{{ $item['product_type'] }}</td>
				<td>{{ $item['stock'] }}</td>
				<td>
					<form action="/products/{{ $item->id }}/editor">
						<button type="submit">Edit</button>
					</form>
				</td>
				<td>
					<form method="POST" action="/products/{{ $item->id }}/delete">
						@method('DELETE')
						@csrf
						<button type="submit">Delete</button>
						<input type="hidden" name="delete_id" value="{{ $item->id }}">
					</form>
				</td>
			</tr>
		@endforeach
	</table>
@endsection