@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Services Listing
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id No.</th>
                                    <th>Title</th>
                                    <th>label</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($services as $index => $service)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $service->title }}</td>
                                        <td>{{ $service->label }}</td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{ $services->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
