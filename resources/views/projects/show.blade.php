<x-guest-layout>
    <div>
        <span>{{ $project->name }}</span>
        <div>
            <div>
                <span>About</span>
                <span>{{ $project->description }}</span>
            </div>
            <div>
                <div>
                    <img src="{{ $project->image }}" alt="{{ $project->name }}">
                </div>
            </div>
        </div>
        <div>
            @foreach ($project->categories as $category)
                <span>{{ $category->name }}</span>
            @endforeach
        </div>
    </div>
</x-guest-layout>