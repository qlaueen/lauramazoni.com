<x-admin-layout>
  	<x-slot name="header">

  	</x-slot>
	<div>
		<div>
			<div>
				<div>
					<a href="{{ route('admin.categories.index') }}">See All Categories</a>
				</div>
				<div>
					<div>
						@csrf
						@method('PUT')
						<div>
							<form method="POST" action="{{  route('admin.categories.update', $category->id) }}" enctype="multipart/form-data">
								@csrf
								@method('PUT')
								<div>
									<label for="name">Category Title</label>
									<div>
										<input type="text" id="name" name="name" value="{{ $category->name }}"/>
									</div>
								</div>
								<div>                
									<button type="submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div
			</div>
		</div>
	</div>
	</div>
</x-admin-layout>
