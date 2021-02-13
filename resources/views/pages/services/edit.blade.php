@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Service Form

                        <a href="{{ route('services.index') }}" class="btn btn-primary btn-sm float-right">Back</a>
                    </div>

                    <div class="card-body">
                        @include('partials._messages')

                        <form action="{{ route('services.update', $service) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            @method('PUT')

                            @include('pages.services.form', ['service' => $service, 'btn_text' => 'Update'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
