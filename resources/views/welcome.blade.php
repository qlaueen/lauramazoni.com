<x-guest-layout>
    <section class="d-flex justify-content-center align-items-center vh-100">
        <div class="container">
            <div class="text-center">
                <x-large-logo/>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilis.</p>
                <div>
                    <a type="button" href="{{ route('projects.index') }}" class="btn btn-primary">View my projects</a>
                    <a type="button" href="{{ route('projects.index') }}" class="btn btn-secondary">More about me</a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
