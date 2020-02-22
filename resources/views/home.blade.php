@extends('layouts.main')
@section('title','List news')

@section('content')
    <div class="container-fluid">
        <div class="row">
           @include('includes.categories')
            <div class="col-md-9">
                @foreach($posts as $post)
                <div class="card mb-3">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="{{ route('post.show', [ 'id' => $post->id ]) }}">{{ $post->title }}</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        {{ $post->shortBody(config('constants.posts.limit_body')) }}
                    </div>
                    <div class="card-footer">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    Date: {{ $post->created_at }}
                                </li>
                                <li class="list-inline-item">
                                    Category: <a href="{{ route('posts.category', ['id' => $post->category_id]) }}">{{ $post->category['title'] }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $posts->links() }}
            </div>
        </div>
@endsection
