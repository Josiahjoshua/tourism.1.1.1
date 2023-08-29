@extends('tirdoweb.en.base_layout')

@section('content')
<!-- all_articles.html in your app's templates directory -->
    <h1>All Publications</h1>
    <div class="article-container">
    @foreach ($files as $file)
        <div class="article">
            <a href="{{ $file->file->url }}" class="link-no-underline"><h5 class="article-h2"><span class="icon"><i class="fas fa-file-pdf"></i></span>
            {{ $file->name }}</h5></a>
            <i class="fa fa-calendar"></i> {{ $file->date }}
        </div>
    @endforeach
    </div>
    <!-- /contents -->
@endsection

