<x-guest-layout>
    <x-slot name="logo"></x-slot>
    
    <div class="container">
        <div class="card" style="width: 25rem;">
            <div class="card-body">

                <!-- Validation Errors -->
                <x-auth-validation-errors :errors="$errors" />

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />
                        <x-input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-label for="password" :value="__('Password')" />
                        <x-input id="password" type="password" name="password" required />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-input id="password_confirmation" type="password" name="password_confirmation" required />
                    </div>

                    <div>
                        <x-button>
                            {{ __('Reset Password') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
