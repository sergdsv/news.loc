@extends('layouts.main')
@section('title','Add post')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add post</h3>
            </div>
            <div class="card-body">
                <form type="submit" action="{{ route('manager.post.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" value="{{ old('title')}}"
                               class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                               type="text" class="form-control" id="title">
                        @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('title') }}</strong>
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select id="category" name="category_id" class="form-control">
                            @foreach ($categories as $category)
                                <option
                                    value="{{$category->id}}">
                                    {{$category->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="body">Text</label>
                        <textarea name="body" id="body"
                                  class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
                                  rows="5">{{ old('body') }}</textarea>
                        @if ($errors->has('body'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('body') }}</strong>
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
@endsection
