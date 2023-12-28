@extends('admin.layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid my-2">
        @include('message')
        <div class="row">
            <div class="col-sm-6">
                <h1>Customer Messages</h1>
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
                <div>
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th width="50">ID</th>
                                <th width="120">Name</th>
                                <th width="120">Email</th>
                                <th width="120">Phone</th>
                                <th width="120">Subject</th>
                                <th>Message</th>
                                <th width="50">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->subject }}</td>
                                <td>
                                    <textarea class="form-control form-control-sm form-control form-control-sm-sm"
                                     cols="" rows="6">{{ $item->message }}</textarea>
                                </td>
                                {{-- <td>{{ $item->message }}</td> --}}
                                <td>
                                    {{-- <a href="{{route('categories.edit', $category->id)}}">
                                        <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg>
                                    </a> --}}
                                    <a href="{{route('messages.destroy', $item->id)}}" onclick="return confirm('Are You Sure?')" class="text-danger w-4 h-4 mr-1">
                                        <svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path	ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                          </svg>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer clearfix d-flex justify-content-end">
                {{ $messages->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
    <!-- /.card -->
</section>
@endsection
