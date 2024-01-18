@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            @include('message')
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Welcome Note</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <div class="p-3">
                        <form action="{{ route('welcome_note.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row justify-content-start">
                                <div class="col-6 mb-1">
                                    <label for="welcome_note" class="form-label">Welcome Title</label>
                                    <input type="text" class="form-control form-control-sm" name="welcome_note"
                                        id="welcome_note" value="{{ old('welcome_note', $details->welcome_note) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="accessories" class="form-label">Point 1</label>
                                    <textarea class="form-control form-control-sm" name="accessories" id="editor2"cols="4" rows="4">
                                        {{ old('accessories', $details->accessories) }}</textarea>
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="about_description" class="mt-2 form-label">Welcome Description</label>
                                    <textarea class="form-control form-control-sm" name="about_description" id="editor"cols="4" rows="4">
                                        {{ old('about_description', $details->about_description) }}</textarea>
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="analysis" class="mt-2 form-label">Point 2</label>
                                    <textarea class="form-control form-control-sm" name="analysis" id="editor3"cols="4" rows="4">
                                        {{ old('analysis', $details->analysis) }}</textarea>
                                </div>
                                <div class="col-sm-6 mb-1 mt-2">
                                    <div class="form-check mb-2">
                                        <label for="file">Welcome Image</label><br>
                                        <input type="file" name="about_image" accept="image/*"
                                            onchange="readURL(this)" />
                                    </div>
                                    <img id="img-preview" src="{{ asset($details->about_image) }}" width="200px"
                                        height="150px" />
                                </div>
                                <div class="col-sm-6 mb-1 mt-2">
                                    <div class="form-check mb-2">
                                        <label for="file">Welcome Image2</label><br>
                                        <input type="file" name="about_image2" accept="image/*"
                                            onchange="readURL2(this)" />
                                    </div>
                                    <img id="img-preview2" src="{{asset($details->about_image2) }}" width="200px"
                                        height="150px" />
                                </div>
                                <div class="col-6 mb-1">
                                    <div class="form-check mb-2">
                                        <label for="file">Welcome Image3</label><br>
                                        <input type="file" name="about_image3" accept="image/*"
                                            onchange="readURL3(this)" />
                                    </div>
                                    <img id="img-preview3" src="{{asset($details->about_image3) }}" width="200px"
                                        height="150px" />
                                </div>
                                <div class="col-6 mb-1">
                                    <div class="form-check mb-2">
                                        <label for="file">Welcome Image4</label><br>
                                        <input type="file" name="about_image4" accept="image/*"
                                            onchange="readURL4(this)" />
                                    </div>
                                    <img id="img-preview4" src="{{ asset($details->about_image4) }}" width="200px"
                                        height="150px" />
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
        <!-- /.card -->
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
        ClassicEditor
            .create(document.querySelector('#editor2'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor3'))
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

        function readURL2(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview2").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview2").attr("src", noimage);
            }
        }

        function readURL3(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview3").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview3").attr("src", noimage);
            }
        }
        function readURL4(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview4").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview4").attr("src", noimage);
            }
        }
    </script>
@endpush
