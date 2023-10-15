<x-admin-layout>
  <x-slot name="header">

  </x-slot>

  <div>
    <div>
      <div>
        <div>
          <a href="{{ route('admin.projects.index') }}">See All Projects</a>
        </div>
        <div>
          <div>
            @csrf
            @method('PUT')
            <div>
              <form method="POST" action="{{  route('admin.projects.update', $project->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                  <label for="name">Project Title</label>
                  <div>
                    <input type="text" id="name"  name="name" value="{{ $project->name }}"/>
                  </div>
                </div>
                <div>
                  <label for="categories">Categories</label>
                  <div>
                    <select id="categories" name="categories[]" multiple>
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @selected($project->categories->contains($category))>
                                  {{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div>
                  <label for="name">Project Description</label>
                  <div>
                    <div>
                      <textarea type="text" rows=3 id="description"  name="description" value="{{ $project->description }}">{{ $project->description }}</textarea>
                    </div>
                  </div>
                </div>
                <div>
                  <label for="image">Project Preview</label>
                  <div>
                    <img src="{{ Storage::url($project->image) }}">
                  </div>
                  <div>
                    <input type="file" id="image" name="image"/>
                  </div>
                </div>
                <div>
                  <label for="link">Project Link</label>
                  <div>
                    <input type="text" id="link"  name="link" value="{{ $project->link }}"/>
                  </div>
                </div>
                <div>                
                  <button type="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>
