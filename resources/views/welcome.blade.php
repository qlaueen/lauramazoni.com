<x-guest-layout>
  <section class="container">
    <div class="container col-xl-8 px-4">
      <div class="row intro flex-lg-row-reverse align-items-center">
        <div class="col-9 col-sm-8 col-lg-4">
          <img src="{{  url('/picture.png')  }}" alt="My profile picture" class="img-intro d-flex justify-end">
        </div>
        <div class="col">
          <p class="lead">Hi! My name is <b>Laura Mazoni</b>, I am a Computer Science student at New York University with interest in working in <span style="color:#8075FF; font-weight: bold"> front-end development</span>.</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a type="button" class="btn-primary m-1" href="qlaueen@gmail.com">Get in touch!</a>
            <a type="button" class="btn-secondary m-1" href="{{ route('projects.index') }}">My projects</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-guest-layout>