<div class="col-md-3">
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
