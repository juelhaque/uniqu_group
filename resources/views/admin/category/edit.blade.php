@extends('admin.layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Category Update</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{route('categories.index')}}" class="btn btn-primary">Back</a>
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
                    <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{old('name', $category->name)}}">
                            </div>
                            <div class="mb-3">
                                <select class="form-select form-control" id="type" name="type">
                                    <option>Select a category</option>
                                    <option value="repair_category" {{$category->type == 'repair_category' ? 'selected' : ''}} >Repair Category</option>
                                    <option value="product_category" {{$category->type == 'product_category' ? 'selected' : ''}} >Product Category</option>
                                </select>
                            </div>
                            <div class="mb-3 form-check">
                                <label for="file">Image</label>
                                <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                            </div>

                            <img id="img-preview" src="{{asset($category->image)}}" width="200px" height="200px" />
                            <br><br>
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
    </script>
@endpush
