<x-admin-layout>
  <x-slot name="header">
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <div class="flex justify-end m-2 p-2">
          <a href="{{  route('admin.categories.create') }}" class="px-4 py-2 btn-primary">New Category</a>
        </div>  
        <div class="overflow-x-auto relative">
          <table class="w-full">
            <thead class="header-table">
              <tr>
                <th scope="col" class="text-left py-4 px-6 whitespace-nowrap">
                  ID
                </th>
                <th scope="col" class="text-left py-4 px-6 whitespace-nowrap">
                  Category
                </th>
                <th scope="col" class="text-left py-4 px-6 whitespace-nowrap">
                  <span class="sr-only">Edit</span>
                </th>
                <th scope="col" class="text-left py-4 px-6 whitespace-nowrap">
                  <span class="sr-only">Delete</span>
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
                <tr>
                  <td scope="row" class="py-4 px-6 whitespace-nowrap">
                    {{ $category->id }}
                  </td>
                  <td scope="row" class="py-4 px-6 whitespace-nowrap">
                    {{ $category->name }}
                  </td>
                  <td scope="row" class="py-4 px-6 whitespace-nowrap">
                    <div class="flex justify-end space-x-2">
                      <a href="{{ route('admin.categories.edit', $category->id) }}" 
                          class="px-4 py-2 btn-edit">Edit</a>
                      <form class="px-4 py-2 btn-delete" 
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
