@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Categories -->
            <div class="card">
                <div class="card-header">{{ __('Galleries - Create') }}</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'galleries.store', 'enctype' => 'multipart/form-data']) !!}
                    
                    {!! Form::submit('Create', ['class' => 'btn btn-sm btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
