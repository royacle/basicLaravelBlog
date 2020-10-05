@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ Session('message') }}
                </div>
            @endif
            @if(Session::has('delete-message'))
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ Session('delete-message') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Categories -->
            <div class="card">
                <div class="card-header">
                    {{ __('Galleries - List') }}
                    <a class="btn btn-sm btn-primary float-right" href="{{ route('galleries.create') }}">{{ __('Add new') }}</a>
                </div>

                <div class="card-body">
                    @if($galleries)
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" >URL</th>
                                <th scope="col" width="200">Author</th>
                                <th scope="col" width="200">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($galleries as $gallery)
                            <tr>
                                <td>{{ $gallery->id }}</td>
                                <td>{{ asset('storage/galleries/' .$gallery->image_url) }}</td>
                                <td>{{ $gallery->user->name }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('galleries.edit', $post->id) }}"> {{ __('Edit') }}</a> &nbsp; | &nbsp;
                                    {!! Form::open(['route' => ['galleries.destroy', $post->id], 'method' => 'delete', 'style' => 'display:inline' ]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                    {!! Form::close() !!}
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="clearfix mt-4">
                        {{-- {{ $galleries->links }} --}}
                    </div>
                    
                    @else
                    <div class="card">
                        No galleries yet
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
