<x-admin-layout>
	<x-slot name="header">
	</x-slot>

  	<div>
		<div>
			<div>
				<div>
					<a href="{{  route('admin.categories.create') }}">New Category</a>
				</div>  
				<div>
					<table>
						<thead>
							<tr>
								<th scope="col">
									ID
								</th>
								<th scope="col">
									Category
								</th>
								<th scope="col">
									<span>Edit</span>
								</th>
								<th scope="col">
									<span>Delete</span>
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($categories as $category)
								<tr>
									<td scope="row">
										{{ $category->id }}
									</td>
									<td scope="row">
										{{ $category->name }}
									</td>
								<td scope="row">
									<div>
										<a href="{{ route('admin.categories.edit', $category->id) }}">
											Edit
										</a>
										<form
											method="POST" 
											action="{{ route('admin.categories.destroy', $category->id) }}"
											onsubmit="return confirm('Are you sure?');">
											@csrf
											@method('DELETE')
											<button type="submit">Delete</button>
										</form>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
  	</div>
</x-admin-layout>
