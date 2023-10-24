<x-guest-layout>
    <x-slot name="logo"></x-slot>
    <div class="container justify-content-center d-flex">
        <div class="card mt-5" style="width:25rem">
            <div class="card-body">

                {{ __('Forgot your password? Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}

                <!-- Session Status -->
                <x-auth-session-status :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors :errors="$errors" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <x-label class="form-label mt-3" for="email" :value="__('Email')" />
                    <x-input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus />

                    <button class="btn btn-primary mt-3">{{ __('Email Password Reset Link') }}</button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
