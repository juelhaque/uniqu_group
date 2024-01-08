@extends('admin.layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Managment Information Create</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{route('managment.index')}}" class="btn btn-primary">Back</a>
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
                    <form action="{{route('managment.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="title" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="" placeholder="Enter Name">
                                    <label for="title" class="form-label">Designation</label>
                                    <input type="text" class="form-control" name="designation" id="designation" value="" placeholder="Enter Designation">
                                    <label for="title" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="Email" id="email" value="" placeholder="Enter Designation">

                                        <label style="margin-top:2rem" for="file">Image Size <span style="color: red">(328*373)</span>px</label>
                                        <input type="file" name="image" accept="image/*" onchange="readURL(this)" required/>
                                        <img id="img-preview" src="https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png" width="250px" height="180px" />

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="title2" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="facebook" value="" placeholder="Title2 (Optional)">
                                    <label for="title2" class="form-label">LinkdIn</label>
                                    <input type="text" class="form-control" name="linkdin" id="linkdin" value="" placeholder="Title2 (Optional)">
                                    <label for="title2" class="form-label">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" id="twiter" value="" placeholder="Title2 (Optional)">
                                    <label for="title2" class="form-label">Phone No</label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="" placeholder="Title2 (Optional)">
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
