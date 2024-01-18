@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            @include('message')
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Company Sprit Information</h1>
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
                        <form action="{{ route('sprit.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control mb-2" name="title" id=""
                                        value="{{ old('title', $sprit->title) }}" placeholder="Enter  Title">
                                    <label for="title" class="form-label">Details</label>
                                    <textarea type="text" class="form-control" name="details" id="editor" placeholder="Enter  Details">{!! $sprit->details !!}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="file">Image Size <span style="color: red">(595*446)</span>px</label>
                                    <input type="file" name="image" accept="image/*" onchange="readURL(this)"/>
                                    <img id="img-preview" src="{{ asset($sprit->image) }}" width="250px" height="180px" />
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
