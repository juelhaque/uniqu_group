@extends('admin.layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid my-2">
        @include('message')
        <div class="row">
            <div class="col-sm-6">
                <h1>Candidates Application</h1>
            </div>
        </div>
    </div>
</section>
<!-- Main content -->
<section class="content">
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
                                <th width="120">Position</th>
                                <th width="120">Company/Department</th>
                                <th width="120">File</th>
                                <th width="50">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applications as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->position }}</td>
                                <td>{{ $item->company }}</td>
                                <td><a href="{{asset($item->file)}}" download=""><i class="fas fa-download"></i> Download File</a></td>
                                {{-- <td>
                                    <a href="{{route('apply.destroy', $item->id)}}" onclick="return confirm('Are You Sure?')" class="text-danger w-4 h-4 mr-1">
                                        <svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path	ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                          </svg>
                                    </a>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer clearfix d-flex justify-content-end">
                {{ $applications->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</section>
@endsection
