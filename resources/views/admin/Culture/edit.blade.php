@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Culture Information Update</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('culture.index') }}" class="btn btn-primary">Back</a>
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
                        <form action="{{ route('culture.update',$culture->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-10 mb-3">
                                    <label for="icon"   class="form-label">Culture Icon Class</label>
                                    <input type="text" class="form-control" name="icon" id="icon" value="{{ old('icon', $culture->icon) }}" placeholder="Enter culture icon class">
                                    <label for="title"   class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $culture->title) }}" placeholder="Enter Title">
                                    <label for="title" class="form-label">Details</label>
                                    <textarea type="text" class="form-control" name="details" id="editor" value="{{ old('details', $culture->details) }}" placeholder="Enter Details">{!!$culture->details!!} </textarea>


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
@endpush
