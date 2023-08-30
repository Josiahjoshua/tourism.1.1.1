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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Research Services </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Research Services</h4>
                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">

                          <p class="about_hub">
                            TIRDO conducts applied research for <strong>Local Material Utilization:</strong> this involves conducting applied research that focuses on the evaluation,
                            development, and utilization of local materials within industrial processes. This entails a systematic investigation into how various locally
                            available materials can be effectively integrated into industrial manufacturing and production. The services may be in one of the following aspects;
                            <ul>
                                <li>
                                    Material Evaluation: TIRDO analyzes the properties, characteristics, and potential applications of different local materials.
                                    This assessment helps to determine their suitability for use in various industries and processes.
                                </li>
                                <li>
                                    Material Development: Once promising materials are identified, TIRDO also collaborates with potential stakeholders in
                                    optimizing materials properties or modifying them to make them more compatible with specific industrial processes.
                                </li>
                                <li>
                                    Industrial Integration: In collaboration with industrial stakeholders TIRDO  performs experimentation, testing, and
                                    prototyping to see how these materials can be practically incorporated into existing or new industrial processes
                                </li>
                            </ul>
                            Apart from local material utilization, Also TIRDO conducts Research on Industrial Techniques and Technologies aiming at advising the
                            Government or Industrial stakeholders on various aspects of both local and foreign industrial techniques and technologies. The purpose
                             of this research is to assess the feasibility and appropriateness of adopting these techniques within the local industrial context.</br>
                            By engaging in these research activities, TIRDO aims to bridge the gap between scientific knowledge and industrial application.
                            The organization strives to enhance local industries by leveraging the potential of local materials and evaluating the viability
                            of adopting external techniques and technologies. Through these efforts, TIRDO contributes to the growth and development of Tanzania's
                             industrial sector and economy.


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
