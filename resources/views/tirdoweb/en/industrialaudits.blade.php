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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Industrial Technical Audits</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Industrial Technical Audits</h4>
                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">

                          <p class="about_hub">
                            TIRDO's Industrial Technical Audits comprehensively evaluate the operational performance of industrial establishments, including those not performing optimally,
                             with the objective of providing informed recommendations for revival or alternative utilization. Through meticulous data collection, process analysis, and
                             infrastructure assessment, TIRDO's experts assess factors such as efficiency, resource utilization, quality control, compliance, and risk. The resulting insights
                             form the basis of a comprehensive report that offers actionable strategies for improving operations, incorporating new technologies,
                            optimizing resource allocation, and exploring alternative avenues for utilization, fostering sustainable growth and resilience within Tanzania's industrial landscape.

                          </p>

                        </div>
                    </div>

                    @include('tirdoweb.en.newsection')

                </div>
            </div>
        </div>

    </div>

       <!-- /contents -->
@endsection
