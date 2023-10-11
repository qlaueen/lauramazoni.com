<x-admin-layout>
  <x-slot name="header">

  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <div class="flex justify-end m-2 p-2">
          <a href="{{ route('admin.projects.index') }}" class="btn-primary">See All Projects</a>
        </div>
        <div class="m-2 p-2">
          <div class="space-y-8">
            @csrf
            @method('PUT')
            <div class="space-y-8">
              <form method="POST" action="{{  route('admin.projects.update', $project->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-span-6">
                  <label for="name" class="block">Project Title</label>
                  <div class="mt-1">
                    <input type="text" id="name"  name="name" value="{{ $project->name }}" class="block w-full"/>
                  </div>
                </div>
                <div class="col-span-6">
                  <label for="categories" class="form-label select-label">Categories</label>
                  <div class="mt-1">
                    <select id="categories" name="categories[]" class="form-multiselect block w-full" multiple>
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @selected($project->categories->contains($category))>
                                  {{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-span-6">
                  <label for="name" class="block">Project Description</label>
                  <div class="mt-1">
                    <div class="mt-1">
                      <textarea type="text" rows=3 id="description"  name="description" value="{{ $project->description }}" class="block w-full">{{ $project->description }}</textarea>
                    </div>
                  </div>
                </div>
                <div class="col-span-6">
                  <label for="image" class="block">Project Preview</label>
                  <div class="mt-1">
                    <img src="{{ Storage::url($project->image) }}">
                  </div>
                  <div class="mt-1">
                    <input type="file" id="image" name="image" class="block w-full"/>
                  </div>
                </div>
                <div class="col-span-6">
                  <label for="link" class="block">Project Link</label>
                  <div class="mt-1">
                    <input type="text" id="link"  name="link" value="{{ $project->link }}"
                          class="block w-full"/>
                  </div>
                </div>
                <div class="col-span-6">                
                  <button type="submit" class="my-2 px-4 btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>
