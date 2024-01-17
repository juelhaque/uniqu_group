@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            @include('message')
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Director Massage</h1>
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
                        <form action="{{ route('director-massage.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row justify-content-start">
                                <div class="col-6 mb-1">
                                    <label for="about_title" class="form-label">Name</label>
                                    <input type="text" class="form-control form-control-sm" name="name"
                                        id="name" value="{{ old('name', $message->name) }}">
                                </div>

                                <div class="col-6 mb-1">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-sm" name="email" id="email"
                                        value="{{ old('email', $message->email) }}" aria-describedby="emailHelp">
                                </div>

                                <div class="col-6 mb-1">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control form-control-sm" name="phone" id="phone"
                                        value="{{ old('phone', $message->phone) }}" aria-describedby="emailHelp">
                                </div>

                                <div class="col-6 mb-1">
                                    <label for="address" class="form-label">Designation</label>
                                    <input type="text" class="form-control form-control-sm" name="designation" id="designation"
                                        value="{{ old('designation', $message->designation) }}" aria-describedby="emailHelp">
                                </div>

                                <div class="col-6 mb-1">
                                    <label for="address" class="form-label">Message</label>
                                    <textarea type="text" class="form-control form-control-sm" name="message" id="editor"
                                        value="{{ old('message', $message->message) }}" aria-describedby="emailHelp">{!!$message->message!!} </textarea>
                                </div>

                                <div class="col-6 mb-1">
                                    <div class="row mt-2">
                                        <div class="col-sm-6 mb-1 mt-2">
                                            <div class="form-check mb-2">
                                                <label for="file">Director Image Size(491*589)px</label><br>
                                                <input type="file" name="image" accept="image/*"
                                                    onchange="readURL(this)" />
                                            </div>
                                            <img id="img-preview" src="{{ asset($message->image) }}" width="200px" height="150px" />
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

    </script>
@endpush
