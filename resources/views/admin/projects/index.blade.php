<x-admin-layout>
  <x-slot name="header">

  </x-slot>

  <div>
    <div>
      <div>
        <div>
          <a href="{{  route('admin.projects.create') }}">New Project</a>
        </div>
        <div>
          <table>
            <thead>
              <tr>
                <th scope="col">
                  ID
                </th>
                <th scope="col">
                  Project Name
                </th>
                <th scope="col">
                  Slug
                </th>
                <th scope="col">
                  Link
                </th>
                <th scope="col">
                  Categories
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($projects as $project)
                <tr>
                  <td scope="row">
                    {{ $project->id }}
                  </td>
                  <td scope="row">
                    {{ $project->slug }}
                  </td>
                  <td scope="row">
                    {{ $project->name }}
                  </td>
                  <td scope="row">
                    {{ $project->link }}
                  </td>
                  <td scope="row">
                  @foreach($project->categories as $category)
                    <span>{{$category->name}}</span>
                  @endforeach
                  <td scope="row">
                    <div>
                      <a href="{{ route('admin.projects.edit', $project->id) }}">Edit</a>
                      <form method="POST"
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
