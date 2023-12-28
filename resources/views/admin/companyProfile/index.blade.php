@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            @include('message')
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Company Profile</h1>
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
                        <form action="{{ route('company_profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row justify-content-start">
                                <div class="col-6 mb-1">
                                    <label for="about_title" class="form-label">Company Title</label>
                                    <input type="text" class="form-control form-control-sm" name="about_title"
                                        id="about_title" value="{{ old('about_title', $details->about_title) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control form-control-sm" name="phone" id="phone"
                                        value="{{ old('phone', $details->phone) }}" aria-describedby="emailHelp">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-sm" name="email" id="email"
                                        value="{{ old('email', $details->email) }}" aria-describedby="emailHelp">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control form-control-sm" name="address" id="address"
                                        value="{{ old('address', $details->address) }}" aria-describedby="emailHelp">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="url" class="form-control form-control-sm" name="facebook"
                                        id="facebook" value="{{ old('facebook', $details->facebook) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="youtube" class="form-label">Youtube</label>
                                    <input type="url" class="form-control form-control-sm" name="youtube" id="youtube"
                                        value="{{ old('youtube', $details->youtube) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="url" class="form-control form-control-sm" name="instagram"
                                        id="instagram" value="{{ old('instagram', $details->instagram) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="aboutDescription" class="mt-2">About Description</label>
                                    <textarea class="form-control form-control-sm" name="about_description" id="editor"cols="4"
                                        rows="4">{{ old('about_description', $details->about_description) }}</textarea>
                                </div>
                                <div class="col-6 mb-1">
                                    <div>
                                        <label for="professional_repair_description" class="mt-2">Professional Repair Description</label>
                                        <textarea class="form-control form-control-sm" name="professional_repair_description" id="professional_repair_description"cols="5"
                                        rows="5">{{ old('professional_repair_description', $details->professional_repair_description) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <div class="row mt-2">
                                        <div class="col-sm-6 mb-1 mt-2">
                                            <div class="form-check mb-2">
                                                <label for="file">About Image</label><br>
                                                <input type="file" name="about_image" accept="image/*"
                                                    onchange="readURL(this)" />
                                            </div>
                                            <img id="img-preview" src="{{ asset($details->about_image) }}" width="200px" height="150px" />
                                        </div>
                                        <div class="col-sm-6 mb-1 mt-2">
                                            <div class="form-check mb-2">
                                                <label for="file">Company Logo</label><br>
                                                <input type="file" name="company_logo" accept="image/*"
                                                    onchange="readURL2(this)" />
                                            </div>
                                            <img id="img-preview2" src="{{ asset($details->company_logo) }}" width="200px" height="150px" />
                                        </div>
                                        <div class="col-sm-6 mb-1 mt-5">
                                            <div class="form-check mb-2">
                                                <label for="file">Professional Repair Image</label><br>
                                                <input type="file" name="professional_repair_image" accept="image/*"
                                                    onchange="readURL3(this)" />
                                            </div>
                                            <img id="img-preview3" src="{{ asset($details->professional_repair_image) }}" width="200px" height="150px" />
                                        </div>
                                    </div>
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
    </script>
@endpush
