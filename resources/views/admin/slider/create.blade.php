@extends('admin.layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Slider Create</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{route('sliders.index')}}" class="btn btn-primary">Back</a>
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
                    <form action="{{route('sliders.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="" placeholder="Title (Optional)">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="title2" class="form-label">Title2</label>
                                    <input type="text" class="form-control" name="title2" id="title2" value="" placeholder="Title2 (Optional)">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3 form-check">
                                    <label for="file">Image Size <span style="color: red">(1350*600)</span>px</label>
                                    <input type="file" name="image" accept="image/*" onchange="readURL(this)" required/>
                                    <img id="img-preview" src="https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png" width="250px" height="180px" />
                                </div>
                            </div>
                            <br>
                        <button type="submit" class="btn btn-primary">Create</button>
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
                reader.onload = function (e) {
                $("#img-preview").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview").attr("src", noimage);
            }
            }
    </script>
@endpush
