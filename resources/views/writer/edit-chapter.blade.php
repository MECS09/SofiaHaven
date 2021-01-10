
<x-guest-layout>
    @section('styles')
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


        <div class="container">
            <h1 class="mt-5 text-center">Create New Chapter!</h1>
                    <!-- Default form contact -->
        <form class="p-5" action="{{route('chapter.update')}}" method="POST"  enctype="multipart/form-data">
            @csrf
            
            <input type="text" id="Chapter-title" name="story_id" class="form-control mb-4 d-none">
            <input type="text" id="Chapter-title" name="story_name" class="form-control mb-4 d-none">
            <!-- Name -->
            <input type="text" id="Chapter-title" name="chapter-title" class="form-control mb-4" placeholder="Chapter Title">

            
            <!-- Upload image input-->
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                <input id="upload" type="file" name="chapter-cover" onchange="readURL(this);" class="form-control border-0">
                <label id="upload-label" for="upload" class="font-weight-light text-muted">Chapter Cover (Optional)</label>
                <div class="input-group-append">
                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                </div>
            </div>

            <!-- Uploaded image area-->
            <p class="font-italic text-center">The image uploaded will be rendered inside the box below.</p>
            <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

            <label>Chapter Description</label>
            <!-- Name -->
            <textarea type="text" id="Chapter-description" name="chapter-description" class="ckeditor form-control mb-4" placeholder="Chapter Description"></textarea>

            <!-- Subject -->
            <label class="mt-5">Rated</label>
            <select class="browser-default custom-select mb-4" name="chapter-audience-rate">
                <option value="" disabled>Choose option</option>
                <option value="G" selected>G – All ages admitted.</option>
                <option value="PG-13">PG-13 – Some material may be inappropriate for children under 13.</option>
                <option value="R">R – Under 17 with precaution.</option>
                <option value="X">X – No one under 17 admitted.</option>
            </select>

            <!-- Privacy -->
            <label class="mt-5">Privacy</label>
            <select class="browser-default custom-select mb-4" name="chapter-status">
                <option value="" disabled>Choose option</option>
                <option value="public" selected>Public – Everyone can view</option>
                <option value="draft">Draft – Under Construction</option>
                <option value="private">Private – Chosen viewer only or Me only</option>
            </select>

            <label class="mt-5">Chapter Content</label>
            <div class="form-group">
                <textarea class="form-control rounded-0 ckeditor" name="chapter-content" id="exampleFormControlTextarea2" rows="3" placeholder="content"></textarea>
            </div>

            
            <!-- Send button -->
            <button class="btn btn-info btn-block" type="submit">Submit</button>

        </form>
        </div>
        
        @section('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
        <script>
            

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
</x-guest-layout>