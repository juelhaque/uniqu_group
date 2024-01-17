@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            @include('message')
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Banner</h1>
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
                        <form action="{{ route('banner.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row justify-content-start">
                                <div class="col-6 mb-1">
                                    <div class="row mt-3">
                                        <div class="col-sm-6 mb-1 mt-2">
                                            <div class="form-check mb-2">
                                                <label for="file">Business Query Image</label><br>
                                                <input type="file" name="about_banner" accept="image/*"
                                                    onchange="readURL(this)" />
                                            </div>
                                            <img id="img-preview" src="{{ asset($banner->about_banner) }}" width="200px" height="150px" />
                                        </div>
                                        <div class="col-sm-6 mb-1 mt-2">
                                            <div class="form-check mb-2">
                                                <label for="file">Director Message Banner</label><br>
                                                <input type="file" name="message_banner" accept="image/*"
                                                    onchange="readURL2(this)" />
                                            </div>
                                            <img id="img-preview2" src="{{ asset($banner->message_banner) }}" width="200px" height="150px" />
                                        </div>
                                        <div class="col-sm-6 mb-1 mt-5">
                                            <div class="form-check mb-2">
                                                <label for="file"> Company Charter Banner</label><br>
                                                <input type="file" name="charter_banner" accept="image/*"
                                                    onchange="readURL3(this)" />
                                            </div>
                                            <img id="img-preview3" src="{{ asset($banner->charter_banner) }}" width="200px" height="150px" />
                                        </div>
                                        <div class="col-sm-6 mb-1 mt-5">
                                            <div class="form-check mb-2">
                                                <label for="file">Mission And Vision Banner</label><br>
                                                <input type="file" name="mission_vision_banner" accept="image/*"
                                                    onchange="readURL4(this)" />
                                            </div>
                                            <img id="img-preview4" src="{{ asset($banner->mission_vision_banner) }}" width="200px" height="150px" />
                                        </div>
                                        <div class="col-sm-6 mb-1 mt-5">
                                            <div class="form-check mb-2">
                                                <label for="file">Gobernance  Banner</label><br>
                                                <input type="file" name="governance_banner" accept="image/*"
                                                    onchange="readURL5(this)" />
                                            </div>
                                            <img id="img-preview5" src="{{ asset($banner->governance_banner) }}" width="200px" height="150px" />
                                        </div>
                                        <div class="col-sm-6 mb-1 mt-5">
                                            <div class="form-check mb-2">
                                                <label for="file">Company Culture Banner</label><br>
                                                <input type="file" name="culture_banner" accept="image/*"
                                                    onchange="readURL6(this)" />
                                            </div>
                                            <img id="img-preview6" src="{{ asset($banner->culture_banner) }}" width="200px" height="150px" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-1">
                                    <div class="row mt-3">
                                        <div class="col-sm-6 mb-1 mt-2">
                                            <div class="form-check mb-2">
                                                <label for="file">Managment Banner</label><br>
                                                <input type="file" name="managment_banner" accept="image/*"
                                                    onchange="readURL7(this)" />
                                            </div>
                                            <img id="img-preview7" src="{{ asset($banner->managment_banner) }}" width="200px" height="150px" />

                                        </div>
                                        <div class="col-sm-6 mb-1 mt-2">
                                            <div class="form-check mb-2">
                                                <label for="file">Company Sprit Banner</label><br>
                                                <input type="file" name="sprit_banner" accept="image/*"
                                                    onchange="readURL8(this)" />
                                            </div>
                                            <img id="img-preview8" src="{{ asset($banner->sprit_banner) }}" width="200px" height="150px" />
                                        </div>
                                        <div class="col-sm-6 mb-1 mt-5">
                                            <div class="form-check mb-2">
                                                <label for="file">Social Responsibilities Banner</label><br>
                                                <input type="file" name="social_banner" accept="image/*"
                                                    onchange="readURL9(this)" />
                                            </div>
                                            <img id="img-preview9" src="{{ asset($banner->social_banner) }}" width="200px" height="150px" />
                                        </div>
                                        <div class="col-sm-6 mb-1 mt-5">
                                            <div class="form-check mb-2">
                                                <label for="file">News & Events Banner</label><br>
                                                <input type="file" name="news_event_banner" accept="image/*"
                                                    onchange="readURL10(this)" />
                                            </div>
                                            <img id="img-preview10" src="{{ asset($banner->news_event_banner) }}" width="200px" height="150px" />
                                        </div>
                                        <div class="col-sm-6 mb-1 mt-5">
                                            <div class="form-check mb-2">
                                                <label for="file">Career Banner</label><br>
                                                <input type="file" name="career_banner" accept="image/*"
                                                    onchange="readURL11(this)" />
                                            </div>
                                            <img id="img-preview11" src="{{ asset($banner->career_banner) }}" width="200px" height="150px" />
                                        </div>
                                        <div class="col-sm-6 mb-1 mt-5">
                                            <div class="form-check mb-2">
                                                <label for="file">Terms & Conditions Banner</label><br>
                                                <input type="file" name="terms_condition_banner" accept="image/*"
                                                    onchange="readURL12(this)" />
                                            </div>
                                            <img id="img-preview12" src="{{ asset($banner->terms_condition_banner) }}" width="200px" height="150px" />
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
        function readURL5(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview5").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview5").attr("src", noimage);
            }
        }
        function readURL6(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview6").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview6").attr("src", noimage);
            }
        }
        function readURL7(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview7").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview7").attr("src", noimage);
            }
        }
        function readURL8(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview8").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview8").attr("src", noimage);
            }
        }
        function readURL9(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview9").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview9").attr("src", noimage);
            }
        }
        function readURL10(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview10").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview10").attr("src", noimage);
            }
        }
        function readURL11(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview11").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview11").attr("src", noimage);
            }
        }
        function readURL12(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview12").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview12").attr("src", noimage);
            }
        }
    </script>
@endpush
