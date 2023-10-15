<x-admin-layout>
  <x-slot name="header"></x-slot>
    <div class="container">
        <div class="text-end mb-3 mt-3">
            <a class="btn btn-primary" href="{{  route('admin.projects.create') }}">New Project</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Project Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Link</th>
                <th scope="col">Categories</th>
                <th scope="col" class="text-center">Edit</th>
                <th scope="col" class="text-center">Delete</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td scope="row">{{ $project->id }}</td>
                <td scope="row">{{ $project->slug }}</td>
                <td scope="row">{{ $project->name }}</td>
                <td scope="row">{{ $project->link }}</td>
                <td scope="row">
                    @foreach($project->categories as $category)
                        <span class="badge rounded-pill text-bg-secondary">{{$category->name}}</span>
                    @endforeach
                </td>
                <td scope="row" class="text-center">
                    <a class="btn btn-success" href="{{ route('admin.projects.edit', $project->id) }}">Edit</a>
                </td>
                <td scope="row" class="text-center">
                    <form method="POST"
                        action="{{ route('admin.projects.destroy', $project->id) }}"
                        onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>

</x-admin-layout>
