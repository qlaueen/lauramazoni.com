<x-admin-layout>
  <x-slot name="header">

  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <div class="flex justify-end m-2 p-2">
          <a href="{{ route('admin.categories.index') }}" class="btn-primary">See All Categories</a>
        </div>
        <div class="m-1 p-1">
          <div class="space-y-8">
            @csrf
            @method('PUT')
              <div class="space-y-8">
                <form method="POST" action="{{  route('admin.categories.update', $category->id) }}" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="col-span-6">
                    <label for="name" class="block">Category Title</label>
                    <div class="mt-1">
                      <input type="text" id="name"  name="name" value="{{ $category->name }}"
                          class="block w-full" />
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
  </div>
</x-admin-layout>
