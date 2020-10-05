@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Categories -->
            <div class="card">
                <div class="card-header">{{ __('Latest Categories') }}</div>

                <div class="card-body">
                    @if($categories)
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">Name</th>
                                <th scope="col" width="200">Author</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->user->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    @else
                    <div class="card">
                        No Categories yet
                    </div>
                    @endif
                </div>
            </div>
            <!-- Posts -->
            <div class="card mt-4">
                <div class="card-header">{{ __('Latest Posts') }}</div>

                <div class="card-body">
                    @if($posts)
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">Title</th>
                                <th scope="col" width="200">Author</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->user->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
                    @endif
                </div>
            </div>
            <!-- Pages -->
            <div class="card mt-4">
                <div class="card-header">{{ __('Latest Posts') }}</div>

                <div class="card-body">
                    @if($pages)
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">Title</th>
                                <th scope="col" width="200">Author</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $page)
                            <tr>
                                <td>{{ $page->id }}</td>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->user->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    @else
                    <div class="card">
                        No Page yet
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
