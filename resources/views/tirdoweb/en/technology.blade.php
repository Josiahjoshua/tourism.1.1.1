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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Technology Transfer division</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                      <div class="row">
                        <div class="col-md-4 col-xs-12">
                          <div class="text-center img-frame custom-img-frame">
                                  <img src="/uploads/administration/unknown.png" alt="Departmental Head" class="img-fluid">
                          </div>
                        </div>

                        <div class="col-md-8">
                          <div class="">
                            <h5 class="title mb-2">Ms. Martha Mhongole</h5>
                            <small><i>   </i></small>
                          </div>
                          <div class="col-12 px-0 my-2">
                            <p>Head of Technology Transfer and  Pilot Plants Section</p>
                          </div>
                        </div>
                      </div>
                        <h4>Technology Transfer and  Pilot Plants Division</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p class="about_hub">

                                   <strong class="about_hub">
                                    Objectives</strong><br>
                                    To provide expertise and services on application of ICT to the Organization and  also, to provide technical
                                    advisory and support to industries and other stakeholders on ICT issues.
                          </p>
                          <p class="about_hub">
                                This division will perform the following actvities:<br><br>
                                 <strong class="about_hub">
                                    1. Research and development</strong><br>
                                 <ul class="about_hub">
                                  <li>Cyber security and Forensics</li>
                                 <li>Sensor applications  </li>
                                  <li>Mobile applications</li>
                                  <li>E-waste management</li>

                                 </ul>
                          </p>
                          <p class="about_hub">
                             <strong class="about_hub">
                                2. Consultancies</strong><br>
                             <ul class="about_hub">
                                <li>Industrial research, Innovations and tech database</li>
                                <li>Use of ICT in SMEs operations </li>
                                <li>Advanced computer applications in teaching</li>
                                <li>Ideation portal</li>

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
