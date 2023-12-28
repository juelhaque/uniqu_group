@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            @include('message')
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Contact Information</h1>
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
                        <form action="{{ route('contact_info.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <h3 class="text-center mt-3">Services Address 1</h3>
                            <div class="row justify-content-start">
                                <div class="col-6 mb-1">
                                    <label for="address1" class="form-label">Address Name</label>
                                    <input type="text" class="form-control form-control-sm" name="address1"
                                        id="address1" value="{{ old('address1', $details->address1) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="location1" class="form-label">Location</label>
                                    <input type="text" class="form-control form-control-sm" name="location1" id="location1"
                                        value="{{ old('location1', $details->location1) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="phone1" class="form-label">Phone</label>
                                    <input type="tel" class="form-control form-control-sm" name="phone1" id="phone1"
                                        value="{{ old('phone1', $details->phone1) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="email1" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-sm" name="email1" id="email1"
                                        value="{{ old('email1', $details->email1) }}" aria-describedby="emailHelp">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="offday1" class="form-label">Off Day</label>
                                    <input type="text" class="form-control form-control-sm" name="offday1" id="offday1"
                                        value="{{ old('offday1', $details->offday1) }}">
                                </div>
                            </div>

                            <h3 class="text-center mt-3">Services Address 2</h3>
                            <div class="row justify-content-start">
                                <div class="col-6 mb-1">
                                    <label for="address2" class="form-label">Address Name</label>
                                    <input type="text" class="form-control form-control-sm" name="address2"
                                        id="address2" value="{{ old('address2', $details->address2) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="location2" class="form-label">Location</label>
                                    <input type="text" class="form-control form-control-sm" name="location2" id="location2"
                                        value="{{ old('location2', $details->location2) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="phone2" class="form-label">Phone</label>
                                    <input type="tel" class="form-control form-control-sm" name="phone2" id="phone2"
                                        value="{{ old('phone2', $details->phone2) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="email2" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-sm" name="email2" id="email2"
                                        value="{{ old('email2', $details->email2) }}" aria-describedby="emailHelp">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="offday2" class="form-label">Off Day</label>
                                    <input type="text" class="form-control form-control-sm" name="offday2" id="offday2"
                                        value="{{ old('offday2', $details->offday2) }}">
                                </div>
                            </div>

                            <h3 class="text-center mt-3">Services Address 3</h3>
                            <div class="row justify-content-start">
                                <div class="col-6 mb-1">
                                    <label for="address3" class="form-label">Address Name</label>
                                    <input type="text" class="form-control form-control-sm" name="address3"
                                        id="address3" value="{{ old('address3', $details->address3) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="location3" class="form-label">Location</label>
                                    <input type="text" class="form-control form-control-sm" name="location3" id="location3"
                                        value="{{ old('location3', $details->location3) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="phone3" class="form-label">Phone</label>
                                    <input type="tel" class="form-control form-control-sm" name="phone3" id="phone3"
                                        value="{{ old('phone3', $details->phone3) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="email3" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-sm" name="email3" id="email3"
                                        value="{{ old('email3', $details->email3) }}" aria-describedby="emailHelp">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="offday3" class="form-label">Off Day</label>
                                    <input type="text" class="form-control form-control-sm" name="offday3" id="offday3"
                                        value="{{ old('offday3', $details->offday3) }}">
                                </div>
                            </div>

                            <h3 class="text-center mt-3">Services Address 4</h3>
                            <div class="row justify-content-start">
                                <div class="col-6 mb-1">
                                    <label for="address4" class="form-label">Address Name</label>
                                    <input type="text" class="form-control form-control-sm" name="address4"
                                        id="address4" value="{{ old('address4', $details->address4) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="location4" class="form-label">Location</label>
                                    <input type="text" class="form-control form-control-sm" name="location4" id="location4"
                                        value="{{ old('location4', $details->location4) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="phone4" class="form-label">Phone</label>
                                    <input type="tel" class="form-control form-control-sm" name="phone4" id="phone4"
                                        value="{{ old('phone4', $details->phone4) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="email4" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-sm" name="email4" id="email4"
                                        value="{{ old('email4', $details->email4) }}" aria-describedby="emailHelp">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="offday4" class="form-label">Off Day</label>
                                    <input type="text" class="form-control form-control-sm" name="offday4" id="offday4"
                                        value="{{ old('offday4', $details->offday4) }}">
                                </div>
                            </div>

                            <div class="col-6 mb-1">
                                <div class="row mt-2">
                                    <div class="col-sm-6 mb-1 mt-2">
                                        <div class="form-check mb-2">
                                            <label for="file">About Image</label><br>
                                            <input type="file" name="image" accept="image/*"
                                                onchange="readURL(this)" />
                                        </div>
                                        <img id="img-preview" src="{{ asset($details->image) }}" width="200px" height="150px" />
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
    </script>
@endpush
