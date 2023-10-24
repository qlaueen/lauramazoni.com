<x-guest-layout>
    <x-slot name="logo"></x-slot>

    <div class="container justify-content-center d-flex mt-5">
        <div class="card" style="width: 25rem;">
            <!-- Session Status -->
            <x-auth-session-status :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors :errors="$errors" />
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card-text">
                        
                        <!-- Email Address -->
                        <x-label class="form-label" for="email" :value="__('Email')" />
                        <x-input class="form-control"  id="email" type="email" name="email" :value="old('email')" required autofocus />

                        <!-- Password -->
                        <x-label class="form-label" for="password" :value="__('Password')" />
                        <x-input class="form-control"  id="password" type="password" name="password" required autocomplete="current-password" />
                    
                        <!-- Remember Me -->
                        <label class="form-label mt-3" for="remember_me">
                            <input class="form-check-input" id="remember_me" type="checkbox">
                            <span>{{ __('Remember me') }}</span>
                        </label>
                    

                        <div class="d-flex justify-content-between align-items-center">
                            @if (Route::has('password.request'))
                                <a class="align-items-center" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <button class="btn btn-primary">{{ __('Log in') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
