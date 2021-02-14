
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
                <ul class="nav nav-pills mb-3  nav-justified" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-user-tab" data-toggle="pill" href="#pills-user" role="tab" aria-controls="pills-user" aria-selected="true">My Users</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-writer-tab" data-toggle="pill" href="#pills-writer" role="tab" aria-controls="pills-writer" aria-selected="false">My Writers</a>
                    </li>
                </ul>
                
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">
                @if (count($user) > 0)
                        
                        <table id="story_table" class="table table-striped table-bordered text-center" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Acess Level</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $user)
                                
                                @php
                                    $author = DB::table('users')->find($user->author);
                                @endphp 
                                <tr>
                                    
                                    
                                    <td class="align-middle">{{$user->name}}</td>
                                    <td class="align-middle">{{$user->email}}</td>
                                    <td class="align-middle">{{$user->accesslevel}}</td>
                                    <td class="align-middle" class="text-center">
                                        <a href="{{route('user.changetowriter', $user->id)}}" class="btn btn-primary  btn-block">Change access to writer</a> <br><br>
                                        
                                        
                                    </td>
                                </tr>

                                
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Acess Level</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>

                @else
                    I don't have any records!
                @endif
            </div>
            <div class="tab-pane fade" id="pills-writer" role="tabpanel" aria-labelledby="pills-writer-tab">
                @if (count($writer) > 0)
                        
                        <table id="story_table" class="table table-striped table-bordered text-center" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Acess Level</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($writer as $writer)
                                
                                <tr>
                                    <td class="align-middle">{{$writer->name}}</td>
                                    <td class="align-middle">{{$writer->email}}</td>
                                    <td class="align-middle">{{$writer->accesslevel}}</td>
                                    <td class="align-middle" class="text-center">
                                        <a href="{{route('user.changetouser', $writer->id)}}" class="btn btn-primary  btn-block">Change access to user</a> <br><br>
                                    </td>
                                </tr>

                                
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Acess Level</th>
                                    <th>Action</th>
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
