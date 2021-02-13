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

                            @include('pages.services.form', ['service' => $service, 'btn_text' => 'Create'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
