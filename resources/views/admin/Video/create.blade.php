@extends('admin.layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Video Create</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{route('video-gallery.index')}}" class="btn btn-primary">Back</a>
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
                    <form action="{{route('video-gallery.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="title" class="form-label">Video Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="">
                                </div>
                                <div class="col mb-3">
                                    <label for="rank" class="form-label">Video Rank</label>
                                    <input type="number" class="form-control" name="rank" id="rank" value="">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="video" class="form-label">Video</label>
                                <input type="file" accept="video/*" name="video" id="video" value="">
                            </div>
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

    {{-- <script>
        let noimage ="https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png";

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
    </script> --}}
@endpush
