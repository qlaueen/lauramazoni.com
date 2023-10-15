<x-admin-layout>
  <x-slot name="header"></x-slot>
    <div class="container">
        <div class="card">
            <div class="card-header text-end">
                <a href="{{ route('admin.projects.index') }}">See All Projects</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{  route('admin.projects.update', $project->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-text">
                        <x-label class="form-label" for="name" :value="__('Project name')" />
                        <x-input class="form-control" id="name" value="{{ $project->name }}" />

                        <x-label class="form-label mt-3" for="slug" :value="__('Slug')" />
                        <x-input class="form-control" id="slug" value="{{ $project->slug }}" />

                        <x-label class="form-label mt-3" for="categories" :value="__('Categories')" /> 
                        <ul class="list-group" id="categories" name="categories[]" multiple>
                            @foreach ($categories as $category)
                                <li class="list-group-item">
                                    <input class="form-check-input me-2" type="checkbox" value="{{ $category->id }}" @selected($project->categories->contains($category))>{{ $category->name }}</input>
                                </li>
                            @endforeach
                        </ul>

                        <x-label class="form-label mt-3" for="description" :value="__('Description')" />
                        <textarea class="form-control" type="text" rows=3 id="description" name="description">{{ $project->description }}</textarea>

                        <x-label class="form-label mt-3" for="image" :value="__('Preview')" />
                        <img src="{{ Storage::url($project->image) }}">
                        <x-input class="form-control" type="file" id="image" name="image"/>

                        <x-label class="form-label mt-3" for="link" :value="__('Link')" />
                        <x-input type="text" class="form-control" id="link" name="link" value="{{ $project->link }}"/>
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
