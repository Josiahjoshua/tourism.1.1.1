@extends('tirdoweb.en.base_layout')
        <!-- /HEADER -->

        <!-- contents -->
@section('content')
        <!-- contents -->

    <div class="container px-0">
        <div class="col-12 special-page">
            <div class="col-12 p-4">
                <div class="row">
                    <div class="col-12 px-xs-0">
                        <nav aria-label="breadcrumb" class="mb-0">
                            <ol class="breadcrumb px-0">
															<li class="breadcrumb-item "><a href="{% url 'home' current_language %}"><span class="fas fa-home"></span></a></li>
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO T-Hub</li><li class="breadcrumb-item list-inline-item active">About T-Hub</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>T-Hub AT Tanzania Industrial Research and Development
                            Organization (TIRDO)</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p class="about_hub">

                                T-hub has emerged to help businesses balance the benefits of proven best practices, innovation, software development, need for speed, efficiency and flexibility.
                                Our experts draw upon a broad and deep range of experience to guide you through complex IT environment and help deliver strategic alignment between business objectives, polices and procedures, and security platforms.
                                 Our services can help provided insights into a wide variety of IT disciplines and platform for greater value added to your day-to-day operations.

                          </p>

                        </div>
                    </div>
                    {{-- {% include 'en/new_section.html' %} --}}
                </div>
            </div>
        </div>

    </div>
     <!-- /contents -->
@endsection
