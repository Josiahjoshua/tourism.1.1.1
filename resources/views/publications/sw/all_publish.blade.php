@extends('tirdoweb.sw.base_layout')

@section('content')

<!-- all_articles.html in your app's templates directory -->
    <h1>Machapisho Yote</h1>
    <div class="article-container mb-3">

        @foreach ($publications as $publication)
            <div class="article">
                @foreach (json_decode($publication['file']) as $file)
                <a href="{{ asset('storage/'.$file->download_link) }}" download="{{ $file->original_name}}" class="link-no-underline" target="_blank">

                @endforeach
                <h5 class="article-h2"><span class="icon"><i class="fas fa-file-pdf"></i></span>
                    {{ $publication->name }}</h5>
                </a>

                <i class="fa fa-calendar"></i> {{ $publication->created_at }}
            </div>
        @endforeach
        </div>
        <!-- /contents -->
    <!-- /contents -->
@endsection

