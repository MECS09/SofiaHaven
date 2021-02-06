<x-guest-layout>
    <div class="container mt-5">
        <h1 class="text-center">
            @if ($user->username == null)
                {{$user->name}}
            @else
                {{$user->username}}
            @endif
        
        </h1>
        <hr>
        {{-- <div class="d-flex justify-content-center h-100">
            <div class="searchbar">
              <input class="search_input" type="text" name="" placeholder="Search Series...">
              <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
            </div>
        </div> --}}
        <ul class="nav nav-pills mb-3  nav-justified" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-series-tab" data-toggle="pill" href="#pills-series" role="tab" aria-controls="pills-series" aria-selected="true">series</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-standalone-tab" data-toggle="pill" href="#pills-standalone" role="tab" aria-controls="pills-standalone" aria-selected="false">standalone</a>
            </li>
          </ul>



          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-series" role="tabpanel" aria-labelledby="pills-series-tab">
                
                <div class="row justify-content-center">
            
                    @if ($collection_series->count() > 0)
                        @foreach ($collection_series as $item)
                            <div class="col-md-3 my-5">
                                <a href="{{route('book.series_list', $item->id)}}" class="text-dark">
                                    <div class="book-cover">
                                        <img src="{{asset('/img/book-cover') .'/'. $item->cover}}" alt="" class="img-responsive box-shadow">
                                    </div>
                                    <div class="desc text-center">
                                        <h4 class="text-dark pt-4">{{$item->title}}</h4>
                                        <div class="star-ratings-css">
                                            {{-- <div class="star-ratings-css-top" style="width: 93%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                                            <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                                             --}}
                                        </div>
                                        {{-- <div class="data">
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
            <div class="tab-pane fade" id="pills-standalone" role="tabpanel" aria-labelledby="pills-standalone-tab">


                
        <div class="row justify-content-center">
            
            
            
            @if ($collection_standalone->count() > 0)
                @foreach ($collection_standalone as $item)
                    <div class="col-md-3 my-5">
                        <a href="{{route('book.show', $item->id)}}" class="text-dark">
                            <div class="book-cover">
                                <img src="{{asset('/img/book-cover') .'/'. $item->cover}}" alt="" class="img-responsive box-shadow">
                            </div>
                            <div class="desc text-center">
                                <h4 class="text-dark pt-4">{{$item->title}}</h4>
                                <div class="star-ratings-css">
                                    {{-- <div class="star-ratings-css-top" style="width: 93%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                                    <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                                     --}}
                                </div>
                                <div class="data">
                                    <h6 class="text-dark"><i class="fas fa-eye"></i> 5.1M | <i class="fas fa-layer-group"></i> 100 </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <h1 class="text-center">No Story Available at the moment</h1>
            @endif
        </div>
            </div>
          </div>



        
    </div>
</x-guest-layout>