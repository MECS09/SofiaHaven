<x-guest-layout>
    <div class="bg-lightpink py-3">
        <div class="container">
            <div class="row justify-center">
                <div class="col-sm-3">
                    <img class="d-block w-100 box-shadow" src="{{asset('')}}img/book cover/placeholder1.jpg" alt="book title">
                </div>
                <div class="col-sm-9 relative">
                    <div class="stories-caption px-3 featured-content-holder">
                        <h1 class="title">{{$book->title}}</h1>
                        <h6 class="genre" data-value>{{$book->genre}}</h6>
                        {{-- <div class="star-ratings-css">
                            <div class="star-ratings-css-top" style="width: 93%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                            <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                            
                          </div>
                        <div class="data my-1">
                            
                            <span><i class="fas fa-star"></i> 4.5</span>
                            <span><i class="fas fa-eye"></i> 5.1M</span>
                        </div> --}}
                    <div class="description">
                        @php
                            $str = $book->description;
                            echo html_entity_decode($str, ENT_QUOTES); // Converts double and single quotes
                        @endphp
                    </div>
                        <a href="#" class="btn rounded-10 bg-maroon text-white">Start Reading</a>
                        @if ($book->author == auth()->user()->id)
                            <a href="{{route('book.edit', $book->id)}}" class="btn rounded-10 bg-primary text-white">Edit Book</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    
    <div class="container mt-5">
        <nav>
            <div class="nav nav-tabs nav-pills nav-justified" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">About</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Table of Content</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                @php
                    $str = $book->description;
                    echo html_entity_decode($str, ENT_QUOTES); // Converts double and single quotes
                @endphp
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                @if ($book->author == auth()->user()->id)
                    <a href="{{route('chapter.create')}}?book_id={{$book->id}}&book_title={{$book->title}}" class="btn rounded-10 bg-primary text-white">Add New Chapter</a>
                @endif

                @if (count($chapter) > 0)
                    
                    <table id="story_table" class="table table-striped table-bordered text-center" style="width:100%">
                        <thead>
                            <tr>
                                <th>Cover</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Rated</th>
                                <th>Privacy</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chapter as $data)
                            
                            @php
                                $author = DB::table('users')->find($data->author);
                            @endphp 
                            <tr>
                                
                                <td class="align-middle w-25"><img src="{{asset('/img/book-cover/chapter_cover') .'/'. $data->media}}" alt="{{$data->title}} Cover" class="w-100"></td>
                                <td class="align-middle">{{$data->story_name}}</td>
                                {{-- <td class="align-middle">{{$author->name}}</td> --}}
                                <td class="align-middle">{{$data->rated}}</td>
                                <td class="align-middle">{{$data->privacy}}</td>
                                <td class="align-middle">{{$d
                                ata->publish}}</td>
                                <td class="align-middle">{{$data->type}}</td>
                                <td class="align-middle" class="text-center">
                                    <a href="#" class="btn btn-primary  btn-block">View</a> <br><br>
                                    <a href="#" class="btn btn-secondary btn-block">Edit</a><br><br>
                                    <a href="#" class="btn btn-success btn-block">Add New Chapter</a><br><br>
                                    <a href="#" class="btn btn-danger btn-block">Delete</a>
                                </td>
                            </tr>

                            
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Cover</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Rated</th>
                                <th>Privacy</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>

                @else
                    I don't have any records!
                @endif
            </div>
        </div>
    </div>

    @section('scripts')
        <script>
            $("[data-value]").each(function(){
                var words = $(this).text().split(",");
                $(this).text("");
                for(var i=0; i< words.length; i++){
                    $(this).append("<span class='badge badge-secondary mr-1 p-2 rounded-pill'>"+words[i]+ ((i< words.length-1) ? ",":"").replace(",", "")+"</span>");
                    
                }
            }); 
        </script>
    @endsection
    
</x-guest-layout>