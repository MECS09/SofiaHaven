<x-guest-layout>
    <div class="container mt-5">
        <h1 class="text-center"> Guest Writer and Contributor</h1>
        <hr>
        {{-- <div class="d-flex justify-content-center h-100">
            <div class="searchbar">
              <input class="search_input" type="text" name="" placeholder="Search Series...">
              <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
            </div>
          </div> --}}

            @if ($writers->count() > 0)
                @foreach ($writers as $user)
                    <div class="col-md-3 my-5">
                        <div class="profile-block">
                            <a href="{{route('writer_collection',$user->id)}}" class="text-dark">
                                <div class="profile_pic">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->fist_name }}" />
                                        
                                    @else
                                        @if ($user->username == null)
                                            {{$user->name}}
                                        @else
                                            {{$user->username}}
                                        @endif
                                    
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        <i class="fas fa-user fa-lg"></i>
                                    </div>
                                    @endif
                                    {{-- <div>{{ $user->name }}</div>
                
                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                            <i class="fas fa-user fa-lg"></i>
                                        </div> --}}
                                </div>
                                <div class="desc text-center">
                                    <h4 class="text-dark pt-4">{{$user->name}}</h4>
                                    
                                    @php
                                        $books = DB::table('books')->where('author', $user->id)->get();
                                    @endphp
                                    {{-- <div class="star-ratings-css">
                                        <div class="star-ratings-css-top" style="width: 93%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                                        <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                                        
                                    </div> --}}
                                    <div class="data">
                                        <h6 class="text-dark">
                                            {{-- <i class="fas fa-eye"></i> 5.1M |  --}}
                                            <i class="fas fa-layer-group"></i> {{$books->count()}} Books</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            {{-- @else
                <h1 class="text-center">No series Story for a moment</h1> --}}
            @endif



            
        </div>
    </div>
</x-guest-layout>