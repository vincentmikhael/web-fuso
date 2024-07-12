@extends('layouts/dashboard')
@section('url','Sparepart')
@section('title','CMS sparepart')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>CMS sparepart</div>
                <small>Last updated by {{$sparepart->updated_by}}</small>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <button class="btn btn-primary mt-4" type="submit">Submit</button>
                    <label for=""><h5>Content</h5> <p class="text-danger">Dilarang menghapus section!! hanya boleh mengganti text atau gambar (untuk mengganti gambar, pilih gambar klik kanan lalu image properties)</p></label>
                    <textarea name="content" id="content" rows="10" cols="80">{{$sparepart->content}}</textarea>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.ckeditor.com/4.22.1/standard-all/ckeditor.js"></script>
    <script>

        CKEDITOR.replace('content', {

        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form',
        allowedContent: true,
        height: 800,
        extraAllowedContent: '*(*)',
        contentsCss: ['https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/dist/assets/css/styles.css?ver=6.5.2','https://www.ktbfuso.co.id/wp-content/themes/ktb_fuso/style.css?ver=1.0.1','/css/custom2.css'], 
        on: {
            instanceReady: function (evt) {
                var editor = evt.editor;

                // Track initial content
                var initialContent = editor.getData();

                editor.on('change', function () {
                    var currentContent = editor.getData();

                    // Function to extract image sources from HTML
                    function extractImageSources(html) {
                        var div = document.createElement('div');
                        div.innerHTML = html;
                        var images = div.getElementsByTagName('img');
                        var sources = [];
                        for (var i = 0; i < images.length; i++) {
                            sources.push(images[i].src);
                        }
                        return sources;
                    }

                    var initialImages = extractImageSources(initialContent);
                    var currentImages = extractImageSources(currentContent);

                    // Find deleted images
                    var deletedImages = initialImages.filter(function(src) {
                        return !currentImages.includes(src);
                    });

                    // Handle deleted images
                    if (deletedImages.length > 0) {
                        console.log('Images deleted:', deletedImages);
                        // Perform your logic here
                        // You can make an AJAX call or any other action
                        deletedImages.forEach(function(src) {
                            fetch('{{ route('ckeditor.deleteImage') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    image_src: src
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                console.log('Image deletion handled:', src, data);
                            })
                            .catch(error => {
                                console.error('Error handling image deletion:', src, error);
                            });
                        });
                    }

                    // Update initial content
                    initialContent = currentContent;
                });
            }
        }
    });
    </script>
@endsection