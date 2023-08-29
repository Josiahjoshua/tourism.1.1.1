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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO-COMSATS</li><li class="breadcrumb-item list-inline-item active">Centre activities</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Priority areas and Activities of the CCCS</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p class="about_hub">

                                The COMSATS Centre for Climate and Sustainability (CCCS-TIRDO) is under Environmental Technology
                                and Occupational Health and Safety division.
                             The division engages itself in matters pertaining to Industrial Research and Development,
                           management of the Environmental and ensuring a sound Occupational Health and Safety of the industrial
                            work floor for improved production and well-being of industrial staff.
                          </p>
                          <p class="about_hub">
                            What we do:<br><br>
                                 <strong class="about_hub">
                                    1.Research and Development activities that include:</strong><br>
                                 <ul class="about_hub">
                                    <li>Value addition to industrial waste streams. </li>
                                    <li>Cleaner production technologies in industrial sector </li>
                                    <li>Liquid and solid waste management. </li>
                                 </ul>
                          </p>
                          <p class="about_hub">
                             <strong class="about_hub">
                                2.Consultancy and Technical services to industries.</strong><br>
                             <ul class="about_hub">
                                <li>Indoor and outdoor environmental management</li>

		                       <li>Environmental air quality monitoring services notably: </li>

		                        <li>Particulate matter (PM) and pollutant gas emissions.</li>
		                        <li>Noise level assessment</li>
		                           <li>Light intensity</li>
		                       <li>Heat intensity</li>
		                        <li>Ground vibration.</li>
                                <li >Environmental and social impacts assessment (ESIA) and environmental audits (EA).</li>

                             </ul>



	                              <h4>Contact Person for the COMSATS Centre for Climate & Sustainability – TIRDO:</h4>
	                              Ms. Jacqueline Godfrey Mwendwa.<br>
	                              Research Officer.<br>
	                              COMSAT Centre for Climate & Sustainability – TIRDO
	                              Kimweri Avenue – Msasani.<br>
	                              P. O. BOX 23235.<br>
	                              Dar es Salaam – Tanzania.<br>
	                              Office: +255 22 2666034/ 2668822.<br>
                                  Fax: +255 22 2666034.<br>
                                  E-mail:info@tirdo.or.tz.

                                         </br>
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
