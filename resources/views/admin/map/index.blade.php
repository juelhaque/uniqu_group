@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6 text-center">
                    <h1>Map Update</h1>
                </div>
                <div class="col-sm-6 text-center">
                    <h1>Map View</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <div class="p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ route('map.update', $mapp->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="justify-content-start">
                                        <div>
                                            <textarea class="form-control" name="map" rows="6">{{ old('map', $mapp->map) }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label style="margin-top:2rem" for="file">Map Image</label>
                                            <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                                            <img id="img-preview" src="{{ asset($mapp->image) }}" width="250px"
                                                height="180px" />
                                        </div>
                                        <br>
                                        @if (Auth::user()->role != 2)
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        @endif
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <iframe class="w-100 rounded" src="{{ $mapp->map }}" style="height: 350px;"
                                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
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
