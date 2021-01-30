
@section('styles')
    <link rel="stylesheet" href="{{asset('/')}}css/addons/datatables.min.css">
    
@endsection

<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Story List') }}
        </h2>
    </x-slot>

    <div class="container bg-white mt-4">
        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @include('inc.alert')
                        <a class="btn btn-primary" href="{{route('book.create')}}"> Create New Book </a>
    
                        @if (count($books) > 0)
                            
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
                                    @foreach ($books as $book)
                                    
                                    @php
                                        $author = DB::table('users')->find($book->author);
                                    @endphp 
                                    <tr>
                                        
                                        <td class="align-middle w-25"><img src="{{asset('/img/book-cover') .'/'. $book->cover}}" alt="{{$book->title}} Cover" class="w-100"></td>
                                        <td class="align-middle">{{$book->title}}</td>
                                        <td class="align-middle">{{$author->name}}</td>
                                        <td class="align-middle">{{$book->rated}}</td>
                                        <td class="align-middle">{{$book->privacy}}</td>
                                        <td class="align-middle"></td>
                                        <td class="align-middle">{{$book->type}}</td>
                                        <td class="align-middle" class="text-center">
                                            <a href="{{route('book.show', $book->id)}}" class="btn btn-primary  btn-block">View</a> <br><br>
                                            <a href="{{route('book.edit', $book->id)}}" class="btn btn-secondary btn-block">Edit</a><br><br>
                                            <a href="{{route('chapter.create')}}?book_id={{$book->id}}&book_title={{$book->title}}" class="btn btn-success btn-block">Add New Chapter</a><br><br>
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
    </div>




    @section('scripts')
        <script src="{{ asset('/') }}js/addons/datatables.min.js"></script>
        <script>
            
            $(document).ready(function() {
                $('#story_table').DataTable();
            } );
        </script>
       
    @endsection
    
</x-app-layout>
