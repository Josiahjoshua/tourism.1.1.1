@extends('tirdoweb.sw.base_layout')
        <!-- /HEADER -->

        <!-- contents -->
@section('content')
<!-- all_articles.html
<!-- all_articles.html in your app's templates directory -->
<div class="container px-0">
    <div class="col-12 special-page">

        <div class="col-12 px-xs-0">
          <nav aria-label="breadcrumb" class="mb-0">
            <ol class="breadcrumb px-0">
              <li class="breadcrumb-item"><a href="{{ route('home', ['language' => $current_language]) }}"><span class="fas fa-home"></span></a></li>

              <li class="breadcrumb-item active" aria-current="page">Makala za TIRDO</li>
            </ol>
          </nav>
        </div>

        <div class="col-md-12 page-content">
            <h4>T-Articles</h4>

              <div class="row mt-4">

                  @foreach($news_articles as $article)
                    <div class="post-slide7 col-xs-6 col-sm-4 col-md-3 my-2">
                      <div class="post-img">
                        <img src="{{ asset('storage/'.$article->img) }}" alt="" class="w-100">
                      </div>
                      <div class="post-review">
                        <ul class="post-bar">
                          <li><i class="fa fa-calendar"></i>{{ $article->created_at }}</li>
                        </ul>
                        <p class="post-description">
                          {!! Str::limit($article->preview_desc, 20) !!}
                        </p>
                        <div align='right'>
                            <a href="{{ route('news.article_detail', ['language' => $current_language, $article->id]) }}" class="read ml-2">Soma zaidi<i class="fa fa-angle-right"></i></a>
                        </div>
                      </div>
                    </div>
                  @endforeach

              </div>
              <!-- <div class="row my-2">
  <div class="col-md-12">
    <ul class="pagination justify-content-center d-flex">
    <nav>
        <ul class="pagination">

                            <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                    <span class="page-link" aria-hidden="true">‹</span>
                </li>

            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
            <li class="page-item"><a class="page-link" href="https://www.viwanda.go.tz/news?page=2">2</a></li>
            <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
            <li class="page-item"><a class="page-link" href="https://www.viwanda.go.tz/news?page=2" rel="next" aria-label="Next »">›</a></li>
       </ul>
    </nav>

    </ul>
  </div>
              </div> -->
          </div>

      </div>
    </div>
    <!-- /contents -->
@endsection
