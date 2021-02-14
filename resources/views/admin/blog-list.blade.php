
@section('styles')
<link rel="stylesheet" href="{{asset('/')}}css/addons/datatables.min.css">

@endsection

<x-app-layout>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('My Blog List') }}
    </h2>
</x-slot>

<div class="" style="min-height: 100vh; overflow-Y: auto;">
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @include('inc.alert')
                    <a class="btn btn-primary" href="{{route('blog.create')}}"> Create New Blog </a>

                    @if (count($list) > 0)
                        
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
                                @foreach ($list as $blog)
                                
                                @php
                                    $author = DB::table('users')->find($blog->author);
                                @endphp 
                                <tr>
                                    
                                    <td class="align-middle w-25"><img src="{{asset('/img/blog-cover') .'/'. $blog->cover_image}}" alt="{{$blog->title}} Cover" class="w-100"></td>
                                    <td class="align-middle">{{$blog->title}}</td>
                                    <td class="align-middle">{{$author->name}}</td>
                                    <td class="align-middle">{{$blog->rated}}</td>
                                    <td class="align-middle">{{$blog->privacy}}</td>
                                    <td class="align-middle"></td>
                                    <td class="align-middle">{{$blog->type}}</td>
                                    <td class="align-middle" class="text-center">
                                        <a href="{{route('blog.show', $blog->id)}}" class="btn btn-primary  btn-block">View</a> <br><br>
                                        <a href="{{route('blog.edit', $blog->id)}}" class="btn btn-secondary btn-block">Edit</a><br><br>
                                        <a href="{{route('blog.delete', $blog->id)}}" class="btn btn-danger btn-block">Delete</a>
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
