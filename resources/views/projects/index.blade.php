<x-guest-layout>
  <div>
    @foreach ($projects as $project)
    <div>
        
      <div></div>

      <div>
        <span>Projects</span>
        <div>
          <a href="/projects/{{ $project->slug }}">{{  $project->name }}</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</x-guest-layout>
