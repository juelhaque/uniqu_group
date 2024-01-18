@extends('admin.layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            @include('message')
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Career</h1>
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
                        <form action="{{ route('career.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row justify-content-start">
                                <div class="col-6 mb-1">
                                    <label for="title" class="form-label">Career Title</label>
                                    <input type="text" class="form-control form-control-sm" name="title"
                                        id="title" value="{{ old('title', $details->title) }}">
                                </div>
                                <div class="col-6 mb-1 mt-2">
                                    <label for="description" class="mt-2">Career Description</label>
                                    <textarea class="form-control form-control-sm" name="description" id="editor"cols="4" rows="4">
                                        {{ old('description', $details->description) }}</textarea>
                                </div>
                            </div>
                            <br>
                            @if (Auth::user()->role != 2)
                                <button type="submit" class="btn btn-primary">Update</button>
                            @endif
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
