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
															<li class="breadcrumb-item "><a href="{% url 'home' current_language %}"><span class="fas fa-home"></span></a></li>
                              <li class="breadcrumb-item list-inline-item font-weight-bold">ORGANIZATION STRUCTURE</li><li class="breadcrumb-item list-inline-item active">Administrative structure</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4></h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">


    <img class="img-fluid align-items-center" src="{% static 'asset/images/structure1.jpg' %}" alt="">

<p style="text-align:justify">&nbsp;</p>

                        </div>
                    </div>

                    {{-- {% include 'en/new_section.html' %} --}}
                </div>
            </div>
        </div>

    </div>

       <!-- /contents -->
@endsection
