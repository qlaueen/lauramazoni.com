<x-admin-layout>
    <x-slot name="header"></x-slot>
    <section class="container">
        <h1 class="text-center">Admin Panel</h1>
        <div class="cards d-flex">
            <div class="card m-2" style="width: 25rem;">
                <div class="card-header text-center">
                    Projects
                </div>
                <div class="card-body">
                    <p class="card-text">
                        See all projects, edit or add a new one.
                    </p>
                    <a href="{{  route('admin.projects.create') }}" class="btn btn-primary">+ Project</a>
                    <a href="{{  route('admin.projects.index') }}" class="btn btn-primary">All</a>
                </div>
            </div>
            <div class="card m-2" style="width: 25rem;">
                <div class="card-header text-center">
                    Categories
                </div>
                <div class="card-body">
                    <p class="card-text">
                        See all categories, edit or add a new one.
                    </p>
                    <a href="{{  route('admin.categories.create') }}"class="btn btn-primary">+ Category</a>
                    <a href="{{  route('admin.categories.index') }}" class="btn btn-primary">All</a>
                </div>
            </div>
            <div class="card m-2" style="width: 25rem;">
                <div class="card-header text-center">
                    Live site
                </div>
                <div class="card-body">
                    <p class="card-text">
                        View live site.
                    </p>
                    <a href="/" class="btn btn-primary">Home</a>
                    <a href="/projects/" class="btn btn-primary">Projects</a>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
