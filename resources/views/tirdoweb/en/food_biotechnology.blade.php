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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Food and Biotechnology</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                              <div class="text-center img-frame custom-img-frame">
                                      <img src="/uploads/administration/Dr.purificator.png" alt="Departmental Head" class="img-fluid">
                              </div>
                            </div>

                            <div class="col-md-8">
                              <div class="">
                                <h5 class="title mb-2">Dr. Purificator Andrew</h5>
                                <small><i>   </i></small>
                              </div>
                              <div class="col-12 px-0 my-2">
                                <p>Head of Food And Bio-Technology Section</p>
                              </div>
                            </div>
                          </div>
                        <h4 class="mt-3">FOOD AND BIOTECHNOLOGY DIVISION</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="about_hub">
                                The Food and Biotechnology Division is under Industrial Research Department. It has three sections namely food processing,
                                 microbiology and biotechnology. The food industry in the country is fast growing in terms of investments and product development
                                  and therefore needs R & D and analytical services in order to produce quality and safe food
                                    The division of Food and Biotechnology at TIRDO deals with R&D related to field and thereby acts as a bridge between the organization
                                     and the food industry.<br><br>
                                    <strong>
                                        The division of Food and Biotechnology was developed purposely for;
                                    </strong>

                                    <ul class="about_hub">
                                    <li>Carrying out research activities related to food and biotechnology</li>
                                    <li>Prepare project proposal on food issues</li>
                                    <li>Provide food analytical services to industries and public in general</li>
                                    <li>Provide consultancy services related to food and biotechnology</li>
                                    <li>Produce spawn for mushroom farmers</li>
                                    <li>Provide training on basic food processing, microbiology and mushroom production to industrialists,
                                        small and medium enterprises SMEs, establishments and general public  </li>

                                    </ul>
                            </p>

                            <p class="about_hub">
                                The division has food laboratory that was established in 1995 to cater for research and projects at TIRDO.
                                    The laboratory also carries food and analytical services.
                                    The food analytical services mainly involve chemical, physical and microbiological quality testing of foods
                                    of both animal and plant origin that include fish and its products, cereals, legumes, meat and meat products,
                                    edible fats and oil, dairy and dairy products, honey, fruits, vegetables just to mention few. Also the laboratory
                                    carries out water quality determination.
                                    The laboratory clients include individuals, industries, hotels and institutions.
                                    The laboratory was accredited in November 2009 with five microbiology parameters. The accreditation scope is based on
                                    the food samples.
                                    The parameters accredited are as follow;

                                    <ul class="about_hub">
                                        <li>Detection and enumeration of total aerobic count</li>
                                        <li>Detection and enumeration of Staphylococcus aureus</li>
                                        <li>Detection and enumeration of total coliforms</li>
                                        <li>Detection and enumeration of Escherichia coli</li>
                                        <li>Detection of Salmonella</li>
                                    </ul>
                            </p>


                            <p class="about_hub">
                                 Other non accredited parameters the laboratory is capable of conducting including, detection of Vibrio cholerae,
                                    detection and enumeration of enterobacteriaceae, detection and enumeration of fecal coliform. The laboratory is
                                    in the process of increasing its scope to water samples on the same parameters and other common parameters found
                                    in water samples
                                    Currently projects:<br>
                                    Currently the division is performing the following project;
                                    <ul class="about_hub">
                                    <li>	Improvement of the drying techniques for drying cassava grits using improved tunnel solar dryer to produce HQCF</li>
                                    <li>	Improvement of the palm oil extraction machine and palm oil quality parameters</li>
                                    </ul>
                            </p>
                                    <h4>Consultancies the division is offering</h4>
                                    <p class="about_hub">
                                        The Food and Biotechnology division has been offering number of services to its clients in the sort of consultancy services.
                                    The following are the key consultancy services the division is offering;
                                    <ul class="about_hub">
                                        <li>Analytical services to food and water samples for outlets such as hotels, catering service centers, schools, industries and SMEs</li>
                                        <li>Industrial assessment to evaluate production processes, raw material utilization, plant set up, quality assurance implementation,
                                             food safety programmes in industries</li>
                                        <li>Training on food processing, food packaging, food safety, Good Manufacturing Practices, Good Hygienic Practices, Hazard Analysis
                                            Critical Control Point for outlets such as hotels, catering service centers, schools, industries, associations,  and SMEs.</li>
                                        </ul>
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
