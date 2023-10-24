<x-admin-layout>
  <x-slot name="header"></x-slot>

    <div class="container mt-5">
      	<div class="card">
			<div class="card-header text-end">
				<a href="{{  route('admin.projects.index') }}">See All Projects</a>
			</div>
			<div class="card-body">
			
				<form method="POST" action="{{  route('admin.projects.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="card-text">
						<x-label class="form-label" for="name" :value="__('Project name')" />
						<x-input class="form-control" id="name" name="name"/>
						
						<x-label class="form-label mt-3" for="slug" :value="__('Slug')" />
						<x-input class="form-control" id="slug" name="slug"/>
						
						<x-label class="form-label mt-3" for="categories" :value="__('Categories')" /> 
						{{-- <select id="categories" name="categories[]" multiple>
							@foreach ($categories as $category)
								  <option value="{{ $category->id }}">{{ $category->name }}</option>
							@endforeach
						</select> --}}
						@foreach ($categories as $category)
                            <div class="form-check" multiple>
                                <label class="form-check-label" >{{ $category->name }}</label>
                                <input class="form-check-input" id="categories" type="checkbox" name="categories[]" value="{{ $category->id }}"></input>
                            </div>
                        @endforeach

						<x-label class="form-label mt-3" for="description" :value="__('Description')" />
						<textarea class="form-control" type="text" rows=3 id="description" name="description"></textarea>

						<x-label class="form-label mt-3" for="image" :value="__('Preview')" />
						<x-input class="form-control" type="file" id="image" name="image"/>

						<x-label class="form-label mt-3" for="link" :value="__('Link')" />
						<x-input type="text" class="form-control" id="link" name="link"/>
						<button class="btn btn-primary mt-2" type="submit">Submit</button>
					</div>
				</form>
			</div>
      	</div>
    </div>
</x-admin-layout>
