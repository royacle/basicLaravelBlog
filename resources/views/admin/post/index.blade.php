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
                    {{ __('Posts - List') }}
                    <a class="btn btn-sm btn-primary float-right" href="{{ route('posts.create') }}">{{ __('Add new') }}</a>
                </div>

                <div class="card-body">
                    @if($posts)
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" >Title</th>
                                <th scope="col" width="200">Author</th>
                                <th scope="col" width="200">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('posts.edit', $post->id) }}"> {{ __('Edit') }}</a> &nbsp; | &nbsp;
                                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'style' => 'display:inline' ]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                    {!! Form::close() !!}
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="clearfix mt-4">
                        {{-- {{ $posts->links }} --}}
                    </div>
                    
                    @else
                    <div class="card">
                        No post yet
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
