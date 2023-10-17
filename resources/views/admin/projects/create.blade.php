<x-admin-layout>
  <x-slot name="header">
  </x-slot>

  <div>
    <div>
      <div>
        <div>
          <a href="{{  route('admin.projects.index') }}">See All Projects</a>
        </div>
        <div>
          <div>
            <form method="POST" action="{{  route('admin.projects.store') }}" enctype="multipart/form-data">
              @csrf
              <div>
                <label for="name">Project Title</label>
                <div>
                  <input type="text" id="name"  name="name"/>
                </div>
              </div>
              <div>
                <label for="slug">Slug</label>
                <div>
                  <input type="text" id="slug"  name="slug"/>
                </div>
              </div>
              <div>
                <label for="categories">Categories</label>
                <div>
                  <select id="categories" name="categories[]" multiple>
                    @foreach ($categories as $category)
                      	<option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div>
                <label for="description">Project Description</label>
                <div>
                  <textarea type="text" id="description" name="description"
                 ></textarea>              
                </div>
              </div>
              <div>
                <label for="image">Image</label>
                <div>
                  <input type="file" id="image" name="image"/>
                </div>
              </div>
              <div>
                <label for="link" >Project Link</label>
                <div>
                  <input type="text" id="link"  name="link" />
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
</x-admin-layout>
