<x-guest-layout>

    
    <div class="container mt-5">
        <h1 class="text-center">Community</h1>
        <hr class="mb-5">
        @foreach ($category as $item)
            <div class="card  my-4">
                <div class="card-header  bg-maroon text-white">
                    {{$item->name}}
                </div>
                <div class="card-body">
                
                </div>
            </div>
        @endforeach
        
    </div>


    



</x-guest-layout>