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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Environment</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <div class="col-12 px-0 mt-4">
                            <!-- this is to add a picture of the department head -->
                            <div class="row">
                              <div class="col-md-4 col-xs-12">
                                <div class="text-center img-frame custom-img-frame">
                                        <img src="/uploads/administration/Kunda_Sikazwe_-_HoD_Environment.png" alt="Departmental Head" class="img-fluid">
                                </div>
                              </div>

                              <div class="col-md-8">
                                <div class="">
                                    <h5 class="title mb-2">Ms. Kunda Sikazwe</h5>
                                  <small><i>   </i></small>
                                </div>
                                <div class="col-12 px-0 my-2">
                                  <p>Head of Environment Section</p>
                                </div>
                              </div>
                            </div>

                          </div>
                        <h4>ENVIRONMENTAL TECHNOLOGIES AND OCCUPATIONAL SAFETY DIVISION</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="about_hub">
                                The division of Environmental Technologies and Occupational safety engage itself in matters pertaining to industrial research and development,
                                management of the environmental and ensuring a sound occupational health and safety of the industrial work floor for improved production and
                                well-being of industrial staff

                            </p>

                            <h4>What we do best </h4>
                            <p class="about_hub">

                               <strong> 1.Research and Development</strong><br>
                              It is the core activity of the division. Research programmes  dealt with include:-</p>
                              <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;text-decoration: none;" >
                               <li>Value addition to industrial waste streams.</li>
                                <li>-conventional waste water treatment system. </li>
                                <li>Onsite waste water treatment systems.</li>
                               <li>Cleaner production in leather and textile industries.</li>
                               </ul>
                            </p>

                            <strong class="about_hub">2.Consultancy and Technical services to industries</strong><br>
                            <p class="about_hub">
                            Include advice to industries on how to manage their resources for optimum production while ensuring minimal environmental pollution.<br>
                            The division offers services indoor and outdoor environmental quality monitoring for industries, government instituties and individual customers.<br>
                            Environmental quality monitoring services include Air quality (Particulate metal and gas emissions), noise level, light intensity, ground vibration,heat, wastewater and potable water quality monitoring.<br>
                            Other services include Environmental Impact assessment and Environmental Auditing.
                        </p>

                         <h4> Achievements</h4>
                        <ul class="about_hub">
                        <li>Indoor air quality monitoring for steel/ metal, tobacco processing, cement manufacturing industries and mine.</li>
                        <li>Waste water monitoring for beverage, tobacco processing, steel/metal industries, breweries and mine.</li>
                        <li>Noise level monitoring in in mines, cement, tobacco processing, steel/metal industries.</li>
                        <li>Flue gas monitoring in mines, cement, tobacco processing, steel/metal industries.</li>
                        <li>Particulate matter monitoring in mines, cement  factories, tobacco processing, steel/metal industries.</li>
                        <li>Monitoring of biological and chemical quality of sludge from waste water works of some industries.</li>
                        </ul>
                        </div>
                    </div>

                    {{-- {% include 'en/new_section.html' %} --}}
                </div>
            </div>
        </div>

    </div>

      <!-- /contents -->
@endsection
