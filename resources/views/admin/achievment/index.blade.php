@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            @include('message')
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Achievments</h1>
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
                        <form action="{{ route('achievment.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row justify-content-start">
                                <div class="col-6 mb-1">
                                    <label for="group" class="form-label">Group</label>
                                    <input type="text" class="form-control form-control-sm" name="group" id="group"
                                        value="{{ old('group', $details->group) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="group_data" class="form-label">Group Data</label>
                                    <input type="number" class="form-control form-control-sm" name="group_data" id="group_data"
                                        value="{{ old('group_data', $details->group_data) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="company" class="form-label">Company</label>
                                    <input type="text" class="form-control form-control-sm" name="company"
                                        id="company" value="{{ old('company', $details->company) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="company_data" class="form-label">Company Data</label>
                                    <input type="number" class="form-control form-control-sm" name="company_data"
                                        id="company_data" value="{{ old('company_data', $details->company_data) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="business" class="form-label">Business</label>
                                    <input type="text" class="form-control form-control-sm" name="business"
                                        id="business" value="{{ old('business', $details->business) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="business_data" class="form-label">Business Data</label>
                                    <input type="number" class="form-control form-control-sm" name="business_data"
                                        id="business_data" value="{{ old('business_data', $details->business_data) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="employee" class="form-label">Employee</label>
                                    <input type="text" class="form-control form-control-sm" name="employee"
                                        id="employee" value="{{ old('employee', $details->employee) }}">
                                </div>
                                <div class="col-6 mb-1">
                                    <label for="employee_data" class="form-label">Employees Data</label>
                                    <input type="number" class="form-control form-control-sm" name="employee_data"
                                        id="employee_data" value="{{ old('employee_data', $details->employee_data) }}">
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
