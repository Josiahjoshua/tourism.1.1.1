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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Energy Auditing </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Energy Auditing</h4>
                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">

                          <p class="about_hub">
                            <b>Energy Auditing </b><p>Energy Management(EM) is the proactive and systematic monitoring, control, and
                                optimization of an organization’s energy consumption to conserve energy and decrease
                                energy costs. An energy audit, as the first key element in EM, is a systematic inspection
                                and analysis of the energy use and consumption of a site, building, system, or
                                organization with the objective of identifying energy flows and the potential for energy
                                efficiency improvements and reporting them</p></p>

                            <p>
                                TIRDO provides Energy Auditing services to industries, commercial buildings, and
                                households. This service plays a big role in energy management, which is key for
                                industries and businesses to remain competitive. In supporting industrial development,
                                we understand how important energy is as a prerequisite input that needs to be well
                                managed to sustain business excellence. The professional energy auditing service
                                provided at TIRDO seeks to administer and bridge the existing gap in energy
                                management. With the current global energy crisis and initiatives to address climate
                                change, energy auditing helps to determine carbon footprints and set reduction goals
                                while offering various options for switching between different clean energy sources.
                                Having a strong environmental, social, and governance (ESG) foundation helps
                                companies save energy, increase transparency, and work towards better
                                sustainability goals.
                            </p>
                            <p>
                                The state-of-the-art Energy Efficiency Laboratory and Certified Energy Auditors and
                                Managers (CEA and CEM) place TIRDO service on an international scale beyond
                                Tanzania, i.e., EAC, etc. To comply with international market demands, both ASHRAE
                                and ISO standards requirements and procedures are being followed when carrying out
                                energy audits in relation to energy performance. Among other services provided by the
                                lab are performance testing of energy systems like ovens, cook stoves, boilers, tobacco
                                barns, and solar dryers, among others.
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
