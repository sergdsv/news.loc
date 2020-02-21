@extends('layouts.main')
@section('title','List news')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Categories</h3>
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('posts.category', ['id' => $category->id]) }}">{{ $category->title }}</a>
                                    <span>{{ "(" . $category->posts->count() . ")" }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                @foreach($posts as $post)
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <a href="{{ route('post.show', [ 'id' => $post->id ]) }}">{{ $post->title }}</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        {{ $post->body }}
                    </div>
                    <div class="card-footer">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    Date: {{ $post->created_at }}
                                </li>
                                <li class="list-inline-item">
                                    Category: <a href="{{ route('posts.category', ['id' => $category->id]) }}">{{ $post->category['title'] }}</a>
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
