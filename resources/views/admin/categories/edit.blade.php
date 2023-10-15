<x-admin-layout>
  	<x-slot name="header"></x-slot>

	<div class="container">
		<div class="card">
			<div class="card-header text-end">
				<a href="{{  route('admin.categories.index') }}">See All Categories</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{  route('admin.categories.update', $category->id) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="card-text">
						<x-label class="form-label" for="name" :value="__('Category title')" />
						<x-input class="form-control" id="name" name="name" value="{{ $category->name }}" required autofocus />
						<button class="btn btn-primary mt-2" type="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</x-admin-layout>
