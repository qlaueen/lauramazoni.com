<x-guest-layout>
    <x-slot name="logo"></x-slot>
    <div class="container justify-content-center d-flex mt-5">
        <div class="card" style="width: 25rem;">

            <!-- Validation Errors -->
            <x-auth-validation-errors :errors="$errors" />

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="card-text">

                        <!-- Name -->
                        <x-label class="form-label" for="name" :value="__('Name')" />
                        <x-input class="form-control"  id="name" type="text" name="name" :value="old('name')" required autofocus />

                        <!-- Email Address -->
                        <x-label class="form-label mt-3" for="email" :value="__('Email')" />
                        <x-input class="form-control"  id="email" type="email" name="email" :value="old('email')" required />

                        <!-- Password -->
                        <x-label class="form-label mt-3" for="password" :value="__('Password')" />
                        <x-input class="form-control"  id="password" type="password" name="password" required autocomplete="new-password" />
                        <!-- Confirm Password -->
                        <x-label class="form-label mt-3" for="password_confirmation" :value="__('Confirm Password')" />
                        <x-input class="form-control"  id="password_confirmation" type="password" name="password_confirmation" required />

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <button class="btn btn-primary">{{ __('Register') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
