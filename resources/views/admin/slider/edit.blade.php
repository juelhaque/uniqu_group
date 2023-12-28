@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Slider Update</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('sliders.index') }}" class="btn btn-primary">Back</a>
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
                        <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $slider->title) }}"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="title2" class="form-label">Title2</label>
                                    <input type="text" class="form-control" name="title2" id="title2" value="{{ old('title2', $slider->title2) }}"
                                        aria-describedby="emailHelp">
                                </div>                               
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3 form-check">
                                    <label for="file">Image</label>
                                    <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                                    <img id="img-preview" src="{{ asset($slider->image) }}" width="250px" height="180px" />
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
