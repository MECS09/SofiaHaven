<x-guest-layout>
    @section('styles')
    
        <style>
            .comment-tabs ul.nav.nav-tabs li {
                padding: 10px!important;
            }
            
            .comment-tabs ul.nav.nav-tabs li a.active .reviews {
                background: #f09e9d;
                border-top-right-radius: 15px;
                border-top-left-radius: 15px;
            }
            .comment-tabs ul.nav.nav-tabs li a.active{
                color: #fff;
            }
        </style>

    @endsection


    <div class="bg-pink">
        <div class="container-fluid">
            <h3 class="text-white p-1">{{$chapter->story_name}}</h3>
        </div>
    </div>
    <div class="container mt-5">
        
        <h1 class="text-center capitalize"> {{$chapter->chapter}} </h1>

        <div class="bg-pink p-2">
            <h3 class="text-white p-1">Authors Note</h3>
            
            @php
                $content_desc = $chapter->media_desc;
                echo html_entity_decode($content_desc, ENT_QUOTES);
            @endphp
        </div>
        <div class="content-wrapper mt-5">
            @php
                $content = $chapter->content;
                echo html_entity_decode($content, ENT_QUOTES);
            @endphp
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item @if($book_prev == null) disabled @endif">
                @if($book_prev == null)
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                @else
                    <a class="page-link" href="{{route('chapter.show', $book_prev->id)}}?book={{$book_prev->story_name}}&chapter={{$book_prev->chapter}}">Previous</a>
                @endif
              </li>
              <li class="page-item @if($book_next == null) disabled @endif">
                @if($book_next == null)
                    <a class="page-link" href="#">Next</a>
                @else
                    <a class="page-link" href="{{route('chapter.show', $book_next->id)}}?book={{$book_next->story_name}}&chapter={{$book_next->chapter}}">Next</a>
                @endif
                </li>
            </ul>
        </nav>
    </div>


    <div class="container bootdey">
      <h3>Comments</h3>
      <div class="col-md-12 bootstrap snippets">
      <div class="panel">
        <div class="panel-body">
          <form action="{{route('save_comment')}}" method="post">
            @csrf
            <input type="text" hidden name="chapter_id" value="{{$chapter->id}}">
            <input type="text" hidden name="story_id" value="{{$chapter->story_id}}">
            <textarea class="form-control" rows="2" placeholder="What are you thinking?" name="comment"></textarea>
            <div class="mar-top clearfix">
              <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Share</button>
            </div>
          </form>
          
        </div>
      </div>
      <div class="panel">
          <div class="panel-body">
            @foreach ($comment as $single)
                
              <!-- Newsfeed Content -->
              <!--===================================================-->
              <div class="media-block">
                <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                <div class="media-body">
                  <div class="mar-btm">
                    <a href="#" class="btn-link text-semibold media-heading box-inline">
                      @php
                          $user = DB::table('users')->find($single->user_id);
                          echo $user->name;
                      @endphp
                    </a>
                    <p class="text-muted text-sm"> {{ \Carbon\Carbon::parse($single->created_at)->format('M d, Y - h:ia')}}</p>
                  </div>
                  {!! $single->comment !!}
                  <div class="pad-ver">
                    <a class="btn btn-sm btn-default btn-hover-primary" onclick="addcomment{{$single->id}}()">Comment</a>
                  </div>
                  <hr>
                  <div id="addcomment" style="display: none">
                    <form action="{{route('save_reply')}}" method="post">
                      @csrf
                      <input type="text" hidden name="chapter_id" value="{{$chapter->id}}">
                      <input type="text" hidden name="story_id" value="{{$chapter->story_id}}">
                      <input type="text" hidden name="comment_id" value="{{$single->id}}">
                      <textarea class="form-control" rows="2" placeholder="What are you thinking?" name="comment"></textarea>
                      <div class="mar-top clearfix">
                        <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Share</button>
                      </div>
                    </form>
                  </div>
                  <script>
                    function addcomment{{$single->id}}() {
                      var x = document.getElementById("addcomment");
                      if (x.style.display === "none") {
                        x.style.display = "block";
                      } else {
                        x.style.display = "none";
                      }
                    }
                    </script>
                  <!-- Comments -->
                  @php
                      
                    $reply = DB::table('comments')->where('comment_id', $single->id)->orderby('created_at','desc')->get();


                  @endphp
                  
                  <div>
                    @foreach ($reply as $item)
                      
                        <div class="media-block">
                          <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="https://bootdey.com/img/Content/avatar/avatar2.png"></a>
                          <div class="media-body">
                            <div class="mar-btm">
                              <a href="#" class="btn-link text-semibold media-heading box-inline">
                                @php
                                  $reply_user = DB::table('users')->find($item->user_id);
                                  echo $reply_user->name;
                                @endphp
                              </a>
                              
                              <p class="text-muted text-sm"> {{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y - h:ia')}}</p>
                              
                            
                            </div>
                            {!! $item->comment !!}
                            <hr>
                          </div>
                        </div>
                    @endforeach
                  </div>
                  
                </div>
              </div>
              <!--===================================================-->
              <!-- End Newsfeed Content -->
            @endforeach
      
          
        </div>
      </div>
      </div>
      </div>
</x-guest-layout>