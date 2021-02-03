@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Add Service Form

                        <a href="{{ route('services.index') }}" class="btn btn-primary btn-sm float-right">Back</a>
                    </div>

                    <div class="card-body">
                        @include('partials._messages')

                        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="title">Title</label>

                                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Service Title" value="{{ old('title') }}" required />

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="label">Label</label>

                                <input type="text" name="label" id="label" class="form-control @error('label') is-invalid @enderror" placeholder="Enter Service Label" value="{{ old('label') }}" required />

                                @error('label')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>

                                <textarea rows="5" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Enter Service Description" required>{{ old('description') }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image">Upload Service Image</label>
                                <br />

                                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group text-center">
                                <hr />

                                <button type="submit" class="btn btn-dark btn-sm">Save</button>
                                <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
