@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Services Listing

                    <a href="{{ route('services.create') }}" class="btn btn-primary btn-sm float-right">Add New Service</a>
                </div>

                <div class="card-body">
                    @include('partials._messages')

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id No.</th>
                                    <th>Title</th>
                                    <th>Label</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($services as $index => $service)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ Str::limit($service->title, 40) }}</td>
                                        <td>{{ $service->label }}</td>
                                        <td>
                                            <a href="{{ route('services.show', $service) }}" class="btn btn-primary btn-sm">View</a>

                                            <a href="{{ route('services.edit', $service) }}" class="btn btn-warning btn-sm">Edit</a>

                                            <a href="#" class="btn btn-danger btn-sm" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete</a>

                                                <form id="delete-form" action="{{ route('services.destroy', $service) }}" method="POST" class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
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
