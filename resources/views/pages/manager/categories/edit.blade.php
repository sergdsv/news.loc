@extends('layouts.main')
@section('title','Edit category')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit category</h3>
            </div>
            <div class="card-body">
                <form type="submit" action="{{ route('manager.category.update', ['id' => $category->id]) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" value="{{ old('title') ?? $category->title}}"
                               class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                               type="text" class="form-control" id="title">
                        @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('title') }}</strong>
                            </div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>

@endsection
