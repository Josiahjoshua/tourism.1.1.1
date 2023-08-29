@extends('tirdoweb.en.base_layout')

@section('content')

<!-- all_articles.html in your app's templates directory -->
<h1>All Publications</h1>
    <div class="article-container mb-3">
    @foreach ($publications as $publication)
        <div class="article">
            <a href="{{ asset('storage/'.$publication->file) }}" class="link-no-underline"><h5 class="article-h2"><span class="icon"><i class="fas fa-file-pdf"></i></span>
            {{ $publication->name }}</h5></a>
            <i class="fa fa-calendar"></i> {{ $publication->created_at }}
        </div>
    @endforeach
    </div>
    <!-- /contents -->
@endsection

