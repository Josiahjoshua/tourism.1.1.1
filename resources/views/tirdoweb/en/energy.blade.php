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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Energy</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                      <div class="row">
                        <div class="col-md-4 col-xs-12">
                          <div class="text-center img-frame custom-img-frame">
                                  <img src="/uploads/administration/Eng.Hossen Iddi Kayumba.png" alt="Departmental Head" class="img-fluid">
                          </div>
                        </div>

                        <div class="col-md-8">
                          <div class="">
                            <h5 class="title mb-2">Eng.Hossen Iddi Kayumba</h5>
                            <small><i>   </i></small>
                          </div>
                          <div class="col-12 px-0 my-2">
                            <p>Head of Energy Section</p>
                          </div>
                        </div>
                      </div>
                        <h4>MANDATE</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p class="about_hub">

                                To increase access to clean energy by all Tanzanians by undertaking research and development
                                     in energy technologies and by offering energy management services.

                            </p>
                            <h4>OUR SERVICES</h4>
                            <P class="about_hub">
                                1) Research and Development <br><br>
                               <strong class="about_hub">
                                 Coal Characterization for</strong><br>
                            <ul class="about_hub">
                                <li>Existing coal mines</li>
                                <li>New coal fields</li>
                                <li>Coal database development</li>
                                </ul>

                            </P>
                            <p class="about_hub">
                                2) Coal technologies development for Industrial, agriculture and household use
                              <ul class="about_hub">
                                   <li>Coal bed methane</li>
                                   <li>Coal combustion</li>
                                    <li>Coal gasification</li>
                                    <li>Coal briquetting</li>
                                    <li>Coal to liquid</li>
                                  </ul>
                            </p>
                            <p class="about_hub">
                                3) Renewable energy technology development
                              <ul class="about_hub">
                                <li>Biomass</li>
                                <li>Wind</li>
                                <li>Solar</li>
                                <li>Hydro(mini)</li>
                                  </ul>
                            </p>
                            <p class="about_hub">
                                4) Consultancies
                              <ul class="about_hub">
                                <li>Energy auditing</li>
                                 <li>Coal resource quality assessment (RQA) on demand.</li>
                                  </ul>
                            </p>
                            <p>
                                <img src="/uploads/icon/energylab.png" style="padding:7px;float:left;">
                                <img src="/uploads/icon/energy-coal.jpg" style="padding:7px;float:left;">
                                <img src="/uploads/icon/energy1.png" style="padding:7px;float:left;">
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
