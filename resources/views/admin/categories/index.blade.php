<x-admin-layout>
	<x-slot name="header"></x-slot>
		<div class="container">
			<div class="text-end mb-3 mt-3">
				<a class="btn btn-primary" href="{{  route('admin.categories.create') }}">New Category</a>
			</div>
 
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Category</th>
						<th scope="col" class="text-center">Edit</th>
						<th scope="col" class="text-center">Delete</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($categories as $category)
						<tr>
							<th scope="row">{{ $category->id }}</th>
							<td scope="row">{{ $category->name }}</td>
							<td scope="row" class="text-center">
								<a class="btn btn-success" href="{{ route('admin.categories.edit', $category->id) }}">
									Edit
								</a>
							</td>
							<td class="text-center">
								<form
									method="POST" 
									action="{{ route('admin.categories.destroy', $category->id) }}"
									onsubmit="return confirm('Are you sure?');">
									@csrf
									@method('DELETE')
									<button class="btn btn-danger" type="submit">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

</x-admin-layout>
