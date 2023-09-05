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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Instrumentation Technology division</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                      <div class="row">
                        <div class="col-md-4 col-xs-12">
                          <div class="text-center img-frame custom-img-frame">
                                  <img src="/uploads/administration/Ms. Ester Lazaro.png" alt="Departmental Head" class="img-fluid">
                          </div>
                        </div>

                        <div class="col-md-8">
                          <div class="">
                            <h5 class="title mb-2">Ms. Ester Lazaro</h5>
                            <small><i>   </i></small>
                          </div>
                          <div class="col-12 px-0 my-2">
                            <p>Head of Electronics and Instrumentation Technology Section</p>
                          </div>
                        </div>
                      </div>
                        <h4 class="mt-3">ELECTRONICS AND INSTRUMENTATION TECHNOLOGIES</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p>

                                  <h5>Objectives</h5>
                                    Development, control and transfer of technical expertise in the field of electronics and instrumentation
                                    to meet the changing needs of industrial sector,involving electronic circuit designing, simulation testing
                                    calibration and maintenance of existing electronic devices.
                          </p>

                         <h5>Mission</h5>
                        <p>To ensure measurements taken by the instrument are accurate and reliable</p>

                          <h5>Vision</h5>
                          <p>To become centre of excellence in the field of instrumentation and Electronics for research in industrial sector.</p>

                          <p>This division will perform the following activities:
                         <br>
                            <b>I.	Designing</b>
                            <br>
                          Electronics circuit design involves the selection and interconnection of physical devices in a variety
                          of topologies to meet performance specifications, environmental requirements, and other specification
                          in order to realize digital transformation
                         <br><br>
                          <b>II.	Calibration</b>
                          <br>
                          Configuration of instrument to provide a technical result within an acceptable range. Eliminating or
                          minimizing factors that may lead to inaccurate measurements for industrial development in specific
                          area of
                         <br>
                         <ul>
                         <li>Mechanical calibration</li>
                         <li>Electrical calibration</li>
                         <li>Pipette Calibration</li>
                         <li>Flow Calibration</li>
                         <li>Temperature Calibration</li>
                         <li>Pressure Calibration</li>
                         </ul>
                         <br>
                          <b>III.	Installation and Maintenance</b>
                          <br>
                          The section responsible for installation, maintenance and repair of electronic equipment, including
                          the circuits, components, and related equipment used in electronic communications systems,
                          telemetering, power systems, metering equipment, and remote-control equipment in order to Maintain,
                          Prevent, Improve and Manage laboratory and industrial processes. These instruments include: -
                          <ul><li>Analytical instruments, HPLCs, GCs,</li>
                          <li>Dissolution instrumentation, UV-VIS</li>
                          <li>Spectrophotometers,</li>
                          <li>TOC Analysers</li></ul>
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
