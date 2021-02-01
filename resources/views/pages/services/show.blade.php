@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Show Service Details

                    <a href="{{ route('services.index') }}" class="btn btn-primary btn-sm float-right">Back</a>
                </div>

                <div class="card-body">
                    @include('partials._messages')

                    <div class="form-group">
                        <label for="title">Title</label>

                        <p class="lead">{{ $service->title }}</p>
                    </div>

                    <div class="form-group">
                        <label for="label">Label</label>

                        <p class="lead">{{ $service->label }}</p>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>

                        <p class="lead">{{ $service->description }}</p>
                    </div>

                    <div class="form-group">
                        <label for="image">Service Image</label>
                        <br />

                        <img src="{{ Storage::url($service->image) }}" alt="Service Image" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
