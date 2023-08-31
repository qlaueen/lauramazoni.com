<x-admin-layout>
  <x-slot name="header">
    <h2>
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <div class="flex justify-end m-2 p-2">
          <a href="{{  route('admin.projects.create') }}" class="px-4 py-2 btn-primary">New Project</a>
        </div>
        <div class="overflow-x-auto relative">
          <table class="w-full">
            <thead class="header-table">
              <tr>
                <th scope="col" class="text-left py-4 px-6 whitespace-nowrap">
                  ID
                </th>
                <th scope="col" class="text-left py-4 px-6 whitespace-nowrap">
                  Project Name
                </th>
                <th scope="col" class="text-left py-4 px-6 whitespace-nowrap">
                  Slug
                </th>
                <th scope="col" class="text-left py-4 px-6 whitespace-nowrap">
                  Link
                </th>
                <th scope="col" class="text-left py-4 px-6 whitespace-nowrap">
                  Categories
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($projects as $project)
                <tr>
                  <td scope="row" class="py-4 px-6 whitespace-nowrap">
                    {{ $project->id }}
                  </td>
                  <td scope="row" class="py-4 px-6 whitespace-nowrap">
                    {{ $project->slug }}
                  </td>
                  <td scope="row" class="py-4 px-6 whitespace-nowrap">
                    {{ $project->name }}
                  </td>
                  <td scope="row" class="py-4 px-6 whitespace-nowrap">
                    {{ $project->link }}
                  </td>
                  <td scope="row" class="py-4 px-6 whitespace-nowrap">
                  @foreach($project->categories as $category)
                    <span class="category-bead">{{$category->name}}</span>
                  @endforeach
                  <td scope="row" class="py-4 px-6 whitespace-nowrap">
                    <div class="flex space-x-2">
                      <a href="{{ route('admin.projects.edit', $project->id) }}"
                         class="px-4 py-2 btn-edit">Edit</a>
                      <form class="px-4 py-2 btn-delete"
                            method="POST"
                            action="{{ route('admin.projects.destroy', $project->id) }}"
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
