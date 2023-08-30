@extends('tirdoweb.en.base_layout')

@section('content')

<div class="container px-0">
    <div class="col-12 special-page">

        <div class="col-12 px-xs-0">
          <nav aria-label="breadcrumb" class="mb-0">
            <ol class="breadcrumb px-0">
              <li class="breadcrumb-item"><a href="{{ route('home', ['language' => $current_language]) }}"><span class="fas fa-home"></span></a></li>

              <li class="breadcrumb-item active" aria-current="page">Publications</li>
            </ol>
          </nav>
        </div>

        <div class="col-md-12 page-content">
<!-- all_articles.html in your app's templates directory -->
<h1>All Publications</h1>
    <div class="article-container mb-3 mt-3">
        @foreach ($publications as $publication)
        <div class="article">
            <h5 class="article-h2"><span class="icon"><i class="fas fa-file-pdf"></i></span>
                {{ $publication->name }}</h5>            
            <p class="mt-2">
                <i class="fa fa-calendar"></i> {{ $publication->created_at }}
            </p>

            @foreach (json_decode($publication['file']) as $file)

                <div class="row align-content-center mt-3">
                    <a href="{{ asset('storage/'.$file->download_link) }}" class="ml-3 link-no-underline" target="_blank"><i class="fa fa-eye"></i> View</a>
                    <a href="{{ asset('storage/'.$file->download_link) }}" class="ml-5 link-no-underline" download="{{ $file->original_name}}"><i class="fa fa-download"></i> Download</a>
                </div>
                        
            @endforeach

        </div>
    @endforeach
    </div>
</div>

</div>
</div>
    <!-- /contents -->
@endsection

