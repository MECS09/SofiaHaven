
<x-app-layout>
    @section('styles')
    <link rel="stylesheet" href="{{asset('css/addons/tagsinput.css')}}">
<style>
    
    #upload {
        opacity: 0;
    }

    #upload-label {
        position: absolute;
        top: 50%;
        left: 1rem;
        transform: translateY(-50%);
    }

    .image-area {
        border: 2px dashed rgba(255, 255, 255, 0.7);
        padding: 1rem;
        position: relative;
    }

    .image-area::before {
        content: 'Uploaded image result';
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 0.8rem;
        z-index: 1;
    }

    .image-area img {
        z-index: 2;
        position: relative;
    }

</style>
@endsection


        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Book') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @include('inc.alert')
                    <h1 class="mt-5 text-center">Create New Book!</h1>
                            <!-- Default form contact -->
                    <form class="p-5" action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Name -->
                        <input type="text" id="book-title" name="book-title" class="form-control mb-4" placeholder="Title">

                        
                        <!-- Upload image input-->
                        <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                            <input id="upload" type="file" name="book_cover" onchange="readURL(this);" class="form-control border-0">
                            <label id="upload-label" for="upload" class="font-weight-light text-muted">Book Cover</label>
                            <div class="input-group-append">
                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                            </div>
                        </div>

                        <!-- Uploaded image area-->
                        <p class="font-italic text-center">The image uploaded will be rendered inside the box below.</p>
                        <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

                        <!-- Subject -->
                        <label>rated</label>
                        <select class="browser-default custom-select mb-4" name="book-audience-rate">
                            <option value="" disabled>Choose option</option>
                            <option value="G" selected>G – All ages admitted.</option>
                            <option value="PG-13">PG-13 – Some material may be inappropriate for children under 13.</option>
                            <option value="R">R – Under 17 with precaution.</option>
                            <option value="X">X – No one under 17 admitted.</option>
                        </select>

                        <!-- Privacy -->
                        <label>Privacy</label>
                        <select class="browser-default custom-select mb-4" name="book-status">
                            <option value="" disabled>Choose option</option>
                            <option value="public" selected>Public – Everyone can view</option>
                            <option value="draft">Draft – Under Construction</option>
                            <option value="private">Private – Chosen viewer only or Me only</option>
                        </select>

                        <!-- Description -->
                        <label>Description</label>
                        <div class="form-group">
                            <textarea class="form-control rounded-0 ckeditor" name="book-description" id="exampleFormControlTextarea2" rows="3" placeholder="Description"></textarea>
                        </div>

                        
                        {{-- <label class="mt-5">Genre</label>
                        <input type="genre" id="book-genre" class="form-control mb-4" name="book-genre" placeholder="genre"> --}}

                        
                        <label class="mt-5">Genre <span class="text-danger">(For multiple genre. Press enter for every genre)</span></label>
                        {{-- <input type="genre" id="book-genre" value="" > --}}
                        <input type="text" name="book-genre" placeholder="Genre" class="form-control" data-role="tagsinput" />
                        
                        
                        <!-- Subject -->
                        <label class="mt-5">Book Type</label>
                        <select class="browser-default custom-select mb-4" id="type" name="book-type">
                            <option value="" disabled>Choose option</option>
                            <option value="stand alone" selected>Stand Alone</option>
                            <option value="series">Series</option>
                        </select>

                        
                        <div id="series" class="d-none">
                            <!-- Subject -->
                            <label>Series Title</label>
                            <select class="browser-default custom-select mb-4" name="series-id" id="type">
                                <option value="" disabled>Choose option</option>
                                <option value="1">Stallion 1</option>
                                <option value="2" selected>Stallion 2</option>
                            </select>
                        </div>
                        <!-- Send button -->
                        <button class="btn btn-info btn-block" type="submit">Submit</button>

                    </form>
                </div>
            </div>
        </div>


        
        @section('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
        <script src="{{asset('js/addons/tagsinput.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
        <script>
            
            $(document).ready(function() {
                $('#story_table').DataTable();
            } );

            /*  ==========================================
                SHOW UPLOADED IMAGE
            * ========================================== */
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#imageResult')
                            .attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(function () {
                $('#upload').on('change', function () {
                    readURL(input);
                });
            });

            /*  ==========================================
                SHOW UPLOADED IMAGE NAME
            * ========================================== */
            var input = document.getElementById( 'upload' );
            var infoArea = document.getElementById( 'upload-label' );

            input.addEventListener( 'change', showFileName );
            function showFileName( event ) {
            var input = event.srcElement;
            var fileName = input.files[0].name;
            infoArea.textContent = 'File name: ' + fileName;
            }
        </script>
            <script>
                $('#type').change(function(){
                    if($(this).val() == 'series'){ // or this.value == 'volvo'
                        $("#series").removeClass("d-none");
                    }
                    else {
                        $("#series").addClass("d-none");
                    }
                });
            </script>
        @endsection
</x-app-layout>