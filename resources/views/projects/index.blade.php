<x-guest-layout>
  <div class="container">
    @foreach ($projects as $project)
    <div class="row">
        
      <div class="col-6"></div>

      <div class="col-6">
        <span class="projects__title d-flex">Projects</span>
        <div class="projects__wrapper">
          <a href="/projects/{{ $project->slug }}" class="project__title">{{  $project->name }}</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</x-guest-layout>
