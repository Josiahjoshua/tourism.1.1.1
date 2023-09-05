
<div class="col-md-3 navigation-column">
  <aside class="col-12 sticky side-bar px-0 sm-hide">
      <ul class="nav nav-tabs row pl-3" role="tablist" id="myTab">
          <li class="nav-item col-4 float-left px-0 text-left">
              <a class="nav-link active px-0" data-toggle="tab" href="#news" role="tab">News</a>
          </li>
          <li class="nav-item col-8">
              <a class="nav-link px-0" data-toggle="tab" href="#products" role="tab">Product</a>
          </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content sidebar-tabing" id="nav-tabContent">

          <!-- News Tab Pane -->
          <div class="tab-pane active" id="news" role="tabpanel">
          @foreach($news_articles as $article)
              <div class="media">
                  <a href="{{ route('news.article_detail', ['language' => $current_language, 'article_id' => $article->id]) }}">
                      <img class="d-flex mr-3" src="{{ asset('storage/'.$article->img) }}" alt="Thumbnail">
                  </a>
                  <div class="media-body">
                      <div class="news-title">
                          <h2 class="title-small pt-0 mt-0">
                              <a href="{{ route('news.article_detail', ['language' => $current_language, 'article_id' => $article->id]) }}" class="link-no-underline">{{$article->name}}</a>
                          </h2>
                      </div>
                      <small class="text-muted"><i class="fa fa-calendar" style="color: #006f8b;"></i> {{ $article->created_at }}</small>
                  </div>
              </div>
              @endforeach
              <!-- Add a link for "Tazama Zote" -->
              <div class="row justify-content-center mt-2">
                  <a href="{{ route('news.all_articles', ['language' => $current_language]) }}" class="link-no-underline"><i>See all <i class="far fa-arrow-alt-circle-right"></i></i></a>
              </div>
          </div>

          <!-- Products Tab Pane -->
          <div class="tab-pane" id="products" role="tabpanel">
            @foreach($resources_products as $product)
              <div class="media">
                  <a href="{{ route('product.product_detail', ['language' => $current_language, 'product_id' => $product->id]) }}">
                      <img class="d-flex mr-3" src="{{ asset('storage/'.$product->img) }}" alt="Thumbnail">
                  </a>
                  <div class="media-body">
                      <div class="news-title">
                          <h2 class="title-small pt-0 mt-0">
                              <a href="{{ route('product.product_detail', ['language' => $current_language, 'product_id' => $product->id]) }}" class="link-no-underline">{{$product->name}}</a>
                          </h2>
                      </div>
                      <small class="text-muted"><i class="fa fa-calendar" style="color: #006f8b;"></i> {{ $product->created_at }}</small>
                  </div>
              </div>
              @endforeach

              <div class="row justify-content-center mt-2">
                  <a href="{{ route('product.all_products', ['language' => $current_language]) }}"class="link-no-underline"><i>See all <i class="far fa-arrow-alt-circle-right"></i></i></a>
              </div>
          </div>

      </div>
  </aside>
</div>
