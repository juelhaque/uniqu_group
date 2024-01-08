@extends('admin.layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Company Culture Information Create</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{route('culture.index')}}" class="btn btn-primary">Back</a>
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
                    <form action="{{route('culture.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-md-10 mb-3">
                                    <label for="icon" class="form-label">Culture Icon Class</label>
                                    <input type="text" class="form-control" name="icon" id="icon" value="" placeholder="Enter icon Class">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="" placeholder="Enter Title">
                                    <label for="title" class="form-label">Details</label>
                                    <textarea type="text" class="form-control" name="details" id="editor" value="" placeholder="Enter Details"> </textarea>
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
@endpush
