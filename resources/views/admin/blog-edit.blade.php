
<x-app-layout>
    @section('styles')
    <link rel="stylesheet" href="{{asset('css/addons/tagsinput.css')}}">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap2-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
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
                {{ __('Edit blog') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @include('inc.alert')
                    <h1 class="mt-5 text-center">Edit {{$blog->title}} Blog!</h1>
                            <!-- Default form contact -->
                    <form class="p-5" action="{{route('blog.update', $blog->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <!-- Name -->
                        <div class="form-group row align-items-center">
                            <input type="text" id="blog-title" name="blog-title" value="{{$blog->title}}" class="form-control mb-4" placeholder="Title">
                        </div>

                        
                        <!-- Upload image input-->
                        <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                            <input id="upload" type="file" name="blog_cover" onchange="readURL(this);" class="form-control border-0">
                            <label id="upload-label" for="upload" class="font-weight-light text-muted">{{$blog->cover_image}}</label>
                            <div class="input-group-append">
                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                            </div>
                        </div>

                        <!-- Uploaded image area-->
                        <p class="font-italic text-center">The image uploaded will be rendered inside the box below.</p>
                        <div class="image-area mt-4"><img id="imageResult" src="{{asset('/img/blog-cover'.'/'.$blog->cover_image)}}" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                        
                        
                        <!-- Subject -->
                        <label>Category</label>
                        <select class="browser-default custom-select mb-4" name="category">
                            <option value="" disabled>Choose option</option>
                            <option value="Travel and Leisure" 
                            @if ($blog->category == 'Travel and Leisure')
                                selected
                            @endif>Travel and Leisure</option>
                            <option value="Events"
                            @if ($blog->category == 'Events')
                                selected
                            @endif>Events</option>
                            <option value="Writing Tips"
                            @if ($blog->category == 'Writing Tips')
                                selected
                            @endif>Writing Tips</option>
                            <option value="Random thoughts"
                            @if ($blog->category == 'Random thoughts')
                                selected
                            @endif>Random thoughts</option>
                            <option value="How to Earn"
                            @if ($blog->category == 'How to Earn')
                                selected
                            @endif>How to Earn</option>
                        </select>

                        <!-- Description -->
                        <label>Blog Content</label>
                        <div class="form-group">
                            <textarea class="form-control rounded-0 ckeditor" name="blog-content" id="exampleFormControlTextarea2" rows="3" placeholder="Content">
                                {{$blog->content}}
                            </textarea>
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
        
        @endsection
</x-app-layout>