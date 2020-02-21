@extends('layouts.main')
@section('title','Add post')

@section('content')
    <div class="container">
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
                <label for="body">Text</label>
                <textarea name="body" class="form-control" id="body"
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
@endsection
