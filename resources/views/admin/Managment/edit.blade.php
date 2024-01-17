@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Managment Information Update</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('managment.index') }}" class="btn btn-primary">Back</a>
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
                        <form action="{{ route('managment.update', $managment->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="title"   class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $managment->name) }}" placeholder="Enter Name">
                                    <label for="title" class="form-label">Designation</label>
                                    <input type="text" class="form-control" name="designation" id="designation" value="{{ old('designation', $managment->designation) }}"placeholder="Enter Designation">

                                        <label style="margin-top:2rem" for="file">Image Size <span style="color: red">(328*373)</span>px</label>
                                        <input type="file" name="image" accept="image/*" onchange="readURL(this)"/>
                                        <img id="img-preview" src="{{ asset($managment->image)}}" width="250px" height="180px" />

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="title2" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="facebook" value="{{ old('facebook', $managment->facebook) }}">
                                    <label for="title2" class="form-label">Linkedin</label>
                                    <input type="text" class="form-control" name="linkdin" id="linkdin" value="{{ old('linkdin', $managment->linkdin) }}">
                                    <label for="title2" class="form-label">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" id="twiter" value="{{ old('twitter', $managment->twitter) }}">
                                    <label for="speech" class="form-label">Speech</label>
                                    <textarea type="text" class="form-control" name="speech" id="editor" value="{{ old('speech', $managment->speech) }}" placeholder="Enter speech"></textarea>
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
