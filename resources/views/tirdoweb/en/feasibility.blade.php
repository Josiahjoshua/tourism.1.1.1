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
															<li class="breadcrumb-item "><a href="{{ route('home', ['language' => $current_language]) }}}"><span class="fas fa-home"></span></a></li>
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Feasibility Studies </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Feasibility Studies</h4>
                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">

                          <p class="about_hub">
                            TIRDO plays a crucial role in conducting feasibility studies for industries that are looking to establish themselves or expand their production capacity.
                            Generally,  A feasibility study is a comprehensive analysis conducted before the commencement of a new project, venture, or expansion to
                            determine its practicality, viability, and potential for success. Therefore, TIRDO provides the service to assist industries in determining the following;
                            <ul>
                                <li>
                                    Project Definition and Scope: TIRDO works closely with the industry or business to define the scope and objectives of the proposed project.
                                    This includes understanding the industry's goals, requirements, and the scope of expansion.
                                </li>
                                <li>
                                    Market Analysis: TIRDO conducts a thorough analysis of the market to assess the demand for the products or services the industry plans to
                                    offer. This involves evaluating market trends, competition, customer preferences, and potential growth opportunities.
                                </li>
                                <li>
                                    Technical Evaluation and Sourcing;  TIRDO assesses the technical aspects of the project. For new industries, this involves evaluating the
                                     availability of resources, infrastructure requirements, technology options, and regulatory compliance. For expansion projects, the existing
                                      infrastructure and its capacity are considered.
                                </li>
                                <li>
                                    Financial Assessment: TIRDO conducts a detailed financial analysis to estimate the costs involved in establishing the new industry or
                                    expanding the existing one. This includes capital expenditure, operating expenses, revenue projections, and potential return on investment.
                                </li>
                                <li>
                                    Risk Assessment: TIRDO identifies potential risks and challenges associated with the project. Strategies to mitigate these risks are also explored.
                                </li>
                                <li>
                                    Resource Availability: TIRDO evaluates the availability of resources needed for the project, including raw materials, labor, energy, and
                                    infrastructure. This assessment helps determine the feasibility of sustainable operations.
                                </li>
                                <li>
                                    Environmental and Social Impact Assessment: TIRDO conducts ESIA for the proposed project or expansion. This involves assessing potential
                                    environmental risks and developing strategies to minimize negative effects and ensure compliance with environmental regulations.
                                </li>
                                <li>
                                    Report and Recommendations: Based on the gathered information and analysis, TIRDO compiles a comprehensive feasibility study report.
                                    This report outlines the findings, presents financial projections, highlights potential risks, and provides recommendations on whether the
                                    project is viable or not.
                                </li>
                            </ul>
                            Overall, TIRDO's feasibility studies provide valuable insights to industries and businesses, helping them make informed decisions about new ventures or expansions.
                            By conducting these studies, TIRDO contributes to minimizing risks, optimizing resource utilization, and enhancing the overall success rate of industrial
                            projects in Tanzania.
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
