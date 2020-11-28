
@if (\Request::is('login'))  
  <x-auth-layout>
    <x-jet-authentication-card>
        
        <div class="container">
                    <x-slot name="logo">
                        <x-jet-authentication-card-logo />
                        {{-- <img class="img-responsive"  src="{{asset('img/logo/Sofia-Pink_logo.png')}}" alt="Sofia haven Logo"> --}}
                        
                    </x-slot>
                    <x-slot name="slot">
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <x-jet-label value="{{ __('Email') }}" />
                                <x-jet-input class="block mt-1 w-full b-maroon form-control" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-jet-label value="{{ __('Password') }}" />
                                <x-jet-input class="block mt-1 w-full b-maroon form-control" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            <div class="block mt-4">
                                <label class="flex items-center">
                                    <input type="checkbox" class="form-checkbox" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-jet-button class="ml-4 bg-maroon">
                                    {{ __('Login') }}
                                </x-jet-button>
                            </div>
                        </form>
                    </x-slot>
            </div>
        
        

        

        </div>
        
    </x-jet-authentication-card>


  </x-guest-layout>
@else
    
<x-jet-authentication-card>
    <x-slot name="logo">
        {{-- <x-jet-authentication-card-logo /> --}}
    </x-slot>

    <x-jet-validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf


        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login"
        aria-hidden="true">

        <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
        <div class="modal-dialog modal-dialog-centered" role="document">


          <div class="modal-content">
            
            <div class="modal-body text-center">
                  
                  <h2 class="title">Get More Things Done</h2>
                  <p>Access all stories Available</p>

                  <h1>Register Now</h1>
                  <div class="text-left">
                    <div>
                      <x-jet-label value="{{ __('Email') }}" />
                      <x-jet-input class="block mt-1 form-control b-maroon" type="email" name="email" :value="old('email')" required autofocus />
                  </div>

                  <div class="mt-4">
                      <x-jet-label value="{{ __('Password') }}" />
                      <x-jet-input class="block mt-1 form-control b-maroon" type="password" name="password" required autocomplete="current-password" />
                  </div>

                  <div class="block mt-4">
                      <label class="flex items-center">
                          <input type="checkbox" class="form-checkbox" name="remember">
                          <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                      </label>
                  </div>
                  </div>

            </div>
            <div class="modal-footer">
              
              <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-dark " href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4 bg-maroon">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
            </div>
          </div>
        </div>
        </div>
</form>
</x-jet-authentication-card>


@endif



