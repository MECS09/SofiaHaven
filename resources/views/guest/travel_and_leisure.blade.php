<x-guest-layout>
    <div class="blog py-5">
        <div class="container">
            
        <div class="section-header">
            <h1 class="text-center">Travel and Leisure</h1>
        </div>
        <hr>

        <div class="card">
            <div class="card-header">
              Sofia's latest Post 
            </div>
            <div class="card-body">
                @if($blog->count() < 1)
                    <h1 class="text-center">No Blog for Travel and leisure at the moment</h1>
                @else
                    @foreach ($blog as $item)
                        <div class="row border-bottom py-3">
                            <div class="col-sm-4">
                                <img src="{{asset('img/blog-cover/'. $item->cover_image)}}" alt="" class="img-responsive box-shadow">
                            </div>
                            <div class="col-sm-8 pt-lg-1 pt-sm-1  pt-5 ">
                                <h6 class="category mb-3">{{$item->category}}</h6>
                                <a href="{{route('blog.show',$item->id)}}"><h2>{{$item->title}}</h2></a>
                                
                                <div class="ellipsis content-wrapper">
                                @php
                                    $content_desc = $item->content;
                                    echo strip_tags($content_desc);
                                @endphp
                                </div>
                                <div class="blog-desc pt-3">
                                    <div class="row justify-content-center relative">
                                        <div class="col-sm-4 text-center">
                                            <a href="#">
                                                <img src="{{asset('img')}}/user_profile-img/user-placeholder.jpg" alt="" class="blog-author-thumb px-1">
                                                @php
                                                    $author = DB::table('users')->where('id',$item->author)->first();
                                                @endphp
                                                {{$author->name}}
                                            </a>
                                        </div>
                                        <div class="col-sm-3 text-center">
                                            <span class="fas fa-comment px-1"></span>
                                            50
                                        </div>
                                        <div class="col-sm-5 text-center">
                                            <span class="fas fa-calendar-alt px-1"></span>
                                            @php
                                                $date = date('F d, Y', strtotime($item->created_at));
                                            @endphp
                                            {{$date}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                
            </div>
          </div>
        </div>
    </div>
</x-guest-layout>