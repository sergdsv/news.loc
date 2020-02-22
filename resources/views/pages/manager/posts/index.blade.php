@extends('layouts.main')
@section('title','List news')

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List posts</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <a href="{{ route('manager.post.create') }}" type="button" class="btn btn-primary btn-lg">Create</a>
                <a href="{{ route('manager.categories.index') }}" type="button" class="btn btn-primary btn-lg">Categories</a>

            </div>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Category</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->shortBody(config('constants.posts.limit_body')) }}</td>
                        <td>{{ $post->category['title']}}</td>
                        <td>
                            <div class="form-inline">
                                <a href="{{ route('manager.post.edit', ['id' => $post->id]) }}" type="button"
                                   class="btn btn-info btn-sm mr-2">Edit</a>
                                <form action="{{ route('manager.post.destroy', ['id' => $post->id]) }}"
                                      method="POST">
                                    @csrf
                                    @method('delete')
                                    <button data-toggle="modal" data-target="#deleteModal" type="button"
                                            class="btn btn-info btn-sm">delete
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                         aria-labelledby="deleteReviewTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalCenterTitle">Remove
                                                        post</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete the entry?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $posts->links() }}
        </div>
    </div>

@endsection
