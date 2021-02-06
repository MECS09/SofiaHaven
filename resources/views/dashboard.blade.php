<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
    <div class="container py-12 text-center">
        <h1>Welcome to your dashboard {{auth()->user()->accesslevel}} {{auth()->user()->name}}</h1>
        <img src="{{asset('img/logo/Sofia-pink_logo.png')}}" alt="">
        {{-- <div class="row">
            <div class="col-sm-3">
                <div class="card bg-maroon">
                    <div class="card-body text-center text-white">
                      <h1>100</h1>
                      <h4>users</h4>
                    </div>
                </div>
                <div class="card bg-maroon">
                    <div class="card-body text-center text-white">
                      <h1>100</h1>
                      <h4>users</h4>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</x-app-layout>
