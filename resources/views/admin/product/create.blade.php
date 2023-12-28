@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product Create</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            @include('message')
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <div class="p-3">
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-control form-control-sm" name="category_id" id="category" aria-label="Default select example">
                                        <option disabled selected>Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ old('category', $category->id) }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="sub_category" class="form-label">Sub Category</label>
                                    <select class="form-control form-control-sm" name="sub_category" id="sub_category" aria-label="Default select example">
                                        <option value="">Select Sub Category</option>
                                    </select>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="product_name" class="form-label">Product Name</label>
                                    <input type="text" class="form-control form-control-sm" name="product_name" id="product_name"
                                        value="">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control form-control-sm" name="description" id="editor"cols="4"
                                        rows="8"></textarea>
                                </div>
                                <div class="col-6 mb-1 form-check">
                                    <label for="file">Image</label>
                                    <input type="file" name="image" accept="image/*" onchange="readURL(this)" />
                                    <img id="img-preview"
                                        src="https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png"
                                        width="250px" />
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
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        let noimage =
            "https://ami-sni.com/wp-content/themes/consultix/images/no-image-found-360x250.png";

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


        $('#category').change(function(){
            var category_id = $(this).val()
            $.ajax({
                url: '{{ route('product-subcategories.index') }}',
                type: 'get',
                data: {category_id:category_id},
                dataType: 'json',
                success: function(response){
                    $('#sub_category').find('option').not(':first').remove()
                    $.each(response['subCategories'], function(key, item){
                        $('#sub_category').append(`<option = value='${item.id}'>${item.name}</option>`)
                    })
                },
                error: function(){
                    console.log('Something went worng');
                }
            });
        });
    </script>
@endpush
