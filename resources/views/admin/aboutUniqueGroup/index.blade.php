@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            @include('message')
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>About Unique Group</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <div class="p-3">
                        <form action="{{ route('about_unique_group.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row justify-content-start">
                                <div class="col-6 mb-1">
                                    <label for="title" class="form-label">About Title</label>
                                    <input type="text" class="form-control form-control-sm" name="title"
                                        id="title" value="{{ old('title', $details->title) }}">

                                    <div class="form-check mb-2 mt-2">
                                        <label class="form-label" for="file">About Image</label><br>
                                        <input type="file" name="about_image" accept="image/*"
                                            onchange="readURL(this)" />
                                    </div>
                                    <img id="img-preview" src="{{ asset($details->about_image) }}" width="200px" height="150px" />
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="about_description" class="form-label">About Description</label>
                                    <textarea class="form-control form-control-sm" name="about_description" id="editor"cols="4" rows="4">
                                        {{ old('about_description', $details->about_description) }}</textarea>
                                </div>
                            </div>
                            <br>
                            @if (Auth::user()->role != 2)
                                <button type="submit" class="btn btn-primary">Update</button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('admin-js')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        let noimage = "https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png";

        function readURL(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview").attr("src", e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview").attr("src", noimage);
            }
        }
    </script>
@endpush

