<x-guest-layout>
    <div class="bg-pink">
        <div class="container-fluid">
            <h3 class="text-white p-1">{{$chapter->story_name}}</h3>
        </div>
    </div>
    <div class="container mt-5">
        
        <h1 class="text-center capitalize"> {{$chapter->chapter}} </h1>

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
</x-guest-layout>