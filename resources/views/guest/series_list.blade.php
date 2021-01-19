<x-guest-layout>
    <div class="container mt-5">
        <h1 class="text-center">{{$book->title}} Series List</h1>
        <hr>
        {{-- <div class="d-flex justify-content-center h-100">
            <div class="searchbar">
              <input class="search_input" type="text" name="" placeholder="Search Series...">
              <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
            </div>
          </div> --}}
        <div class="row">
            {{-- <div class="col-md-3 my-5">
                <a href="{{route('book.show', $book->id)}}" class="text-dark">
                    <div class="book-cover">
                        <img src="{{asset('/img/book-cover') .'/'. $book->cover}}" alt="" class="img-responsive box-shadow">
                    </div>
                    <div class="desc text-center">
                        <h4 class="text-dark pt-4">{{$book->title}}</h4>
                        
                        <div class="data">
                            <h6 class="text-dark"><i class="fas fa-eye"></i> 5.1M | <i class="fas fa-layer-group"></i> 100 </h6>
                        </div>
                    </div>
                </a>
            </div> --}}
            @if ($collection->count() > 0)
                @foreach ($collection as $item)
                    <div class="col-md-3 my-5">
                        <a href="{{route('book.show', $item->id)}}" class="text-dark">
                            <div class="book-cover">
                                <img src="{{asset('/img/book-cover') .'/'. $item->cover}}" alt="" class="img-responsive box-shadow">
                            </div>
                            <div class="desc text-center">
                                <h4 class="text-dark pt-4">{{$item->title}}</h4>
                                {{-- <div class="star-ratings-css">
                                    <div class="star-ratings-css-top" style="width: 93%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                                    <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                                    
                                </div>
                                <div class="data">
                                    <h6 class="text-dark"><i class="fas fa-eye"></i> 5.1M | <i class="fas fa-layer-group"></i> 100 </h6>
                                </div> --}}
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <h1 class="text-center">No series Story for a moment</h1>
            @endif



            
        </div>
    </div>
</x-guest-layout>