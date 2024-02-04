@extends('admin.layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Business Concern Name Create</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{route('business.index')}}" class="btn btn-primary">Back</a>
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
                    <form action="{{route('business.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="link" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="" placeholder="Business Name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input type="url" class="form-control" name="link" id="link" value="" placeholder="Business Link">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control form-control-sm" name="description" id="editor"cols="4"
                                    rows="8"></textarea>
                            </div>
                            <div class="col-md-6 mb-1 form-check">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="file">Image</label>
                                        <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                                        <img id="img-preview"
                                            src="https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png"
                                            width="250px" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="file">Logo</label>
                                        <input type="file" name="logo" accept="image/*" onchange="readURL2(this)" />
                                        <img id="img-preview2"
                                            src="https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png"
                                            width="250px" />
                                    </div>
                                </div>
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
            function readURL2(input) {
                console.log(input.files);
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                    $("#img-preview2").attr("src", e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                } else {
                    $("#img-preview2").attr("src", noimage);
                }
            }
    </script>
@endpush
