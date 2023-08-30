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
                            <li class="breadcrumb-item"><a href="{{ route('home', ['language' => $current_language]) }}"><span class="fas fa-home"></span></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('product.all_products', ['language' => $current_language]) }}" class="link-no-underline">All_products<span></span></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bidhaa za TIRDO</li>
                        </ol>
                    </nav>
                </div>
            </div>

<div class="row">

                  <div class="col-md-9 bg-white py-3 page-content">
                      <h4>Bidhaa za TIRDO</h4>
                      <div class="col-12 px-0 mb-2">

                          <div class="news-title">
                              <h2 class="article-h2">{{ $product->name }}</h2>
                          </div>
                          <div class="">
                              <ul class="list-unstyled list-inline mb-1">

                                  <li class="list-inline-item">
                                      <i class="fa fa-folder-o text-danger"></i>
                                      <div><small><i class="fa fa-calendar"></i> {{ $product->created_at }}</small></div>
                                  </li>

                              </ul>
                          </div>
                          <hr>
                          <div class="news-img">
                              <img  src="{{ asset('storage/'.$product->img) }}" alt="Product Image" class="w-100">
                          </div>
                          <div class="news-content">
                              <p>{!! $product->preview_desc !!}</p>
                          </div>

                      </div>
                  </div>

                  @include('tirdoweb.sw.newsection')

</div>
        </div>
    </div>

</div>
    <!-- /contents -->
@endsection
