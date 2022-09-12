<x-guest-layout>
  <div class="container col-xl-8 px-4">
    @foreach ($projects as $project)
    <div class="row intro flex-lg-row-reverse align-items-center">
      <div class="col-10 col-sm-8 col-lg-4">
        <img src="{{  Storage::url($project->image)  }}" alt="My profile picture" class="img-intro d-flex justify-end">
      </div>
      <div class="col">
        <h1 class="py-2">{{  $project->name }}</h1>
        <div class="py-2">
          @foreach($project->categories as $category)
            <span class="category-bead">{{$category->name}}</span>
          @endforeach
        </div>
        <p class="lead-project">{{ $project->description }}</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a type="button" class="btn-secondary m-1" href="http://{{ $project->link }}">View More</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</x-guest-layout>