@extends('tirdoweb.en.base_layout')
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
                                                        <li class="breadcrumb-item "><a href="{{ route('home', ['language' => $current_language]) }}"><span class="fas fa-home"></span></a></li>
                          <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li>
                          <li class="breadcrumb-item list-inline-item active">Search Results</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <h2>News Results</h2>
                <ul>
                    {% for article in articles_results %}
                    <li><a href="{% url 'mynews:article_detail' language=current_language article_id=article.id %}">{{ article.name }}</a></li>
                    {% empty %}
                    <li>No news found.</li>
                    {% endfor %}
                </ul>

                <h2>Product Results</h2>
                <ul>
                    {% for product in product_results %}
                    <li><a href="{% url 'myproducts:product_detail' language=current_language product_id=product.id %}">{{ product.name }}</a></li>
                    {% empty %}
                    <li>No products found.</li>
                    {% endfor %}
                </ul>

                <h2>Publication Results</h2>
                <ul>
                    {% for publish in publications %}
                        <li>
                            <a href="{% url 'mypublish:publish_download' language=current_language publish_id=publish.id %}" target="_blank">
                                {{ publish.name }} (Download PDF)
                            </a>

                        </li>
                        {% empty %}
                        <li>No products found.</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>

</div>
<!-- /contents -->
@endsection
