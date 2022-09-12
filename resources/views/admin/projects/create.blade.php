<x-admin-layout>
  <x-slot name="header">
      <h2 class="title-text">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <div class="flex justify-end m-2 p-2">
          <a href="{{  route('admin.projects.index') }}" class="btn-primary">See All Projects</a>
        </div>
        <div class="m-2 p-2">
          <div class="space-y-8">
            <form method="POST" action="{{  route('admin.projects.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="col-span-6">
                <label for="name" class="block">Project Title</label>
                <div class="mt-1">
                  <input type="text" id="name"  name="name" class="block w-full"/>
                </div>
              </div>
              <div class="col-span-6">
                <label for="categories" class="form-label select-label">Categories</label>
                <div class="mt-1">
                  <select id="categories" name="categories[]" class="form-multiselect block w-full" multiple>
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-span-6">
                <label for="description" class="block">Project Description</label>
                <div class="mt-1">
                  <textarea type="text" id="description" name="description"
                  class="block w-full"></textarea>              
                </div>
              </div>
              <div class="col-span-6">
                <label for="image" class="block">Preview</label>
                <div class="mt-1">
                  <input type="file" id="image" name="image"
                        lass="block w-full"/>
                </div>
              </div>
              <div class="col-span-6">
                <label for="link" class="block w-100">Project Link</label>
                <div class="mt-1">
                  <input type="text" id="link"  name="link" class="block w-full" />
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
</x-admin-layout>
