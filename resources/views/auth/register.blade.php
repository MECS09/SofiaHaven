

@if (\Request::is('register'))  

@else

<x-jet-validation-errors class="mb-4" />
    
    <form method="POST" action="{{ route('register') }}">
        
        @csrf

        <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="register"
        aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content text-center rounded-lg">
                <div class="modal-body">
                    <x-jet-authentication-card>
                        <x-slot name="logo">
                            <x-jet-authentication-card-logo />
                        </x-slot>
                            
                    <h2 class="title">Get More Things Done</h2>
                    <p>Access all stories Available</p>

                    <h1>Register Now</h1>
        
                    <div class="text-center">
                        <div class="">
                            <x-jet-label value="{{ __('Name') }}" />
                            <x-jet-input class="block form-control b-maroon" type="text" name="first_name" :value="old('name')" required autofocus placeholder="Given Name" autocomplete="first_name" />
                            <x-jet-input class="block form-control b-maroon" type="text" name="last_name" :value="old('name')" required autofocus placeholder="Surname" autocomplete="last_name" />
                        </div>
            
                        <div class="mt-4">
                            <x-jet-label value="{{ __('Username') }}" />
                            <x-jet-input class="block form-control b-maroon" type="text" name="username" :value="old('username')" required />
                        </div>

                        <div class="mt-4">
                            <x-jet-label value="{{ __('Email') }}" />
                            <x-jet-input class="block form-control b-maroon" type="email" name="email" :value="old('email')" required />
                        </div>
            
                        <div class="mt-4">
                            <x-jet-label value="{{ __('Password') }}" />
                            <x-jet-input class="block form-control b-maroon" type="password" name="password" required autocomplete="new-password" />
                        </div>
            
                        <div class="mt-4">
                            <x-jet-label value="{{ __('Confirm Password') }}" />
                            <x-jet-input class="block form-control b-maroon" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                    </div>
                            
                
                </div>
                <div class="modal-footer">
                    <x-jet-button class="btn bg-maroon">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
                </div>
            </div>
        </div>
    </form>
</x-jet-authentication-card>
    
@endif
