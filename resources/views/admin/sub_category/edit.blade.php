@extends('admin.layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Sub Category Update</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{route('sub_categories.index')}}" class="btn btn-primary">Back</a>
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
                    <form action="{{ route('sub_categories.update', $sub_category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-control form-control-sm" name="category_id" aria-label="Default select example">
                                        <option disabled>Select Category</option>
                                        @foreach ($categories as $category)
                                            <option {{ ($sub_category->category_id == $category->id) ? 'selected' : '' }}
                                            value="{{ old('category', $category->id) }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="name" class="form-label">Sub Category Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{old('name', $sub_category->name)}}">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control form-control-sm" name="description" id="editor"cols="4"
                                        rows="4">{{ old('description', $sub_category->description) }}</textarea>
                                </div>
                                {{-- <div class="col-6 mb-3">
                                    <label for="price" class="form-label">Service Cost</label>
                                    <input type="text" class="form-control form-control-sm" name="price" id="price"
                                        value="{{ old('price', $sub_category->price) }}">
                                </div> --}}
                                <div class="col-6 mb-3 form-check">
                                    <label for="file">Image</label>
                                    <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                                    <img id="img-preview" src="{{asset($sub_category->image)}}" width="200px" height="200px" />
                                </div>
                            </div>
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
