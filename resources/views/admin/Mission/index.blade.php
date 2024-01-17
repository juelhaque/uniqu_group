@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            @include('message')
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Company Mission & Vision Information</h1>
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
                        <form action="{{ route('mission.update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="title" class="form-label">Mission Title</label>
                                    <input type="text" class="form-control" name="title" id="name"
                                        value="{{ old('title', $mission->title) }}" placeholder="Enter Mission Title">
                                    <label for="title" class="form-label">Mission Details</label>
                                    <textarea type="text" class="form-control" name="details" id="editor"
                                        value="{{ old('details', $mission->details) }}" placeholder="Enter Mission Details">{!! $mission->details !!}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="vision_title" class="form-label">Vision Title</label>
                                    <input type="text" class="form-control" name="vision_title" id="vision_title"
                                        value="{{ old('vision_title', $mission->vision_title) }}" placeholder="Enter Vision Title">
                                    <label for="vision_details" class="form-label">Vision Details</label>
                                    <textarea type="text" class="form-control" name="vision_details" id="editor2"
                                        value="{{ old('vision_details', $mission->vision_details) }}" placeholder="Enter Vision Details">{!! $mission->vision_details !!}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label style="margin-top:2rem" for="file">Mission Image <span
                                            style="color: red">(330*247)</span>px</label>
                                    <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                                    <img id="img-preview" src="{{ asset($mission->image) }}" width="250px"
                                        height="180px" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label style="margin-top:2rem" for="file">Vision Image <span
                                            style="color: red">(330*247)</span>px</label>
                                    <input type="file" name="vision_image" accept="image/*" onchange="readURL2(this)" />
                                    <img id="img-preview2" src="{{ asset($mission->vision_image) }}" width="250px"
                                        height="180px" />
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
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
    </script>
@endpush
