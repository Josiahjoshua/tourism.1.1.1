@extends('tirdoweb.sw.base_layout')
        <!-- /HEADER -->

        <!-- contents -->
@section('content')
<div class="container px-0">
    <div class="col-12 special-page">
        <div class="col-12 p-4">
            <div class="row">
                <div class="col-12 px-xs-0">
                    <nav aria-label="breadcrumb" class="mb-0">
                        <ol class="breadcrumb px-0">
                            <li class="breadcrumb-item"><a href="{% url 'home' current_language %}"><span class="fas fa-home"></span></a></li>
                            <li class="breadcrumb-item"><a href="{% url 'mynews:all_articles' language=current_language %}" class="link-no-underline">All_articles<span></span></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Habari</li>
                        </ol>
                    </nav>
                </div>
            </div>

<div class="row">

                  <div class="col-md-9 bg-white py-3 page-content">
                      <h4>Habari</h4>
                    </div>
                    <div class="">
                        <ul class="list-unstyled list-inline mb-1">

                            <li class="list-inline-item">
                                <i class="fa fa-folder-o text-danger"></i>
                                <div><small><i class="fa fa-calendar"></i> {{ $article->date }}</small></div>
                            </li>

                        </ul>
                    </div>
                    <hr>
                    <div class="news-img">
                        <img  src="{{ $article->img->url }}" alt="Article Image" class="w-100">
                    </div>
                    <div class="news-content">
                        <p>{{ $article->desc|linebreaksbr }}</p>
                    </div>

                </div>
            </div>

<!-- {% include 'en/new_section.html' %} -->
</div>
  </div>
</div>

</div>


<!-- /contents -->
@endsection