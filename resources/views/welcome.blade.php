<x-guest-layout>
  <section class="container">
    <div class="row intro align-items-center">
      <div class="col">
        <x-large-logo/>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilis.</p>
        <div class="d-flex justify-content-around buttons-wrapper">
          <a type="button" class="button-home" href="{{ route('projects.index') }}">View my projects</a>
          <a type="button" class="button-home" href="{{ route('projects.index') }}">More about me</a>
        </div>
      </div>
    </div>
  </section>
</x-guest-layout>