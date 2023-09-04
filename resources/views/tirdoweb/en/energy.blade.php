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
                        <h4 class="mt-3">TIRDO ENERGY TECHNOLOGIES DIVISION</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p class="about_hub">

                                The following are the functions of the division:
                            <br/>
                            </p>
                            <h5>Research and Innovation</h5>
                        <p>
                            a)	Undertake research and development for developing energy technologies and for
                            enhancing utilization of alternative energy sources;
                            <ul>
                                <li>Coal Characterization for existing coal mines. new coal fields and coal database development.</li>
                                <li>Development of coal utilization technologies such as coal briquettes for household and industrial use.</li>
                                <li>Developing industrial technologies for the production of biofuels and bio-based chemicals</li>
                                <li>Improved cook stoves for rural and peri-urban applications.</li>
                            </ul>

                        </p>

                        <p>
                        	b)	Undertake innovations in energy generation technologies for utilizing locally available energy resources;
                            <ul>
                                <li>Transforming biomass, especially agro-wastes, forest wastes and animal dung into bio fuels</li>
                                <li>Production of bioethanol and biogas from Organic wastes</li>
                            </ul>
                            c)	Design and implement baseline and market potential studies
                        </p><br>
                        <h5>Technical Services</h5>
                        <p>a)	Undertake energy resource quality assessment and establish a databank of Tanzania energy resources;</p>
                        <ul>
                        <li>Quality assessment of clean and alternative energy sources such as Biomass briquettes, coal briquettes, etc.</li>
                        <li>Performance testing of different energy systems and technologies such as Ovens, furnaces, Solar PV, boilers and cooking stoves, etc. using national and international protocols and standards.</li>
                        <li>Renewable energy technologies development such as Solar PV, Wind, Biogas, etc.</li></p>
                        </ul>
                        <p>
                        b)	Perform energy services in assisting industries and organization to proactive and systematic monitoring, control,
                        and optimization of an organization’s energy consumption to conserve energy and reduce organization/company energy costs;
                        </p><ul>
<li>
    Assisting industries and businesses to implement Energy Management practices
    (adoption of Energy Management System (EnMS) to companies in accordance with ISO 50001)
</li>
<li>
    Carrying out energy audit to identify cost effective energy consumption reduction options to industries and
    businesses including supporting through measurement and verification while implementing audits recommendations.
</li>

                        </ul>
         <p>              c)  Carrying out energy audit to identify cost effective energy consumption reduction options to industries and businesses
                        including supporting through measurement and verification while implementing audits recommendations.
<ul>
<li>
    The use of solar driers for rural community applications
</li>
<li>
    Improved cook stoves to replace traditional stoves in rural communities
</li>
</ul></p>

<p>d)	Project Management of different energy projects</p>
<ul>
<li>
	From pre-feasibility studies to commissioning of sustainable energy projects.
</li>
</ul>

<h5>Training and Skills development</h5>
<p>a)	Performs skills development and capacity building to industrialists in energy materials selection,<br>
    b)	Capacity building in quality assessment of different energy system and technologies;<br>
    c)	Training and awareness program to SMEs and industrialists in production of clean energy technologies.<br>
    d)	Capacity building and knowledge management through training and awareness raising on energy management practices i.e., Energy Auditing, Energy Conservation, Energy Efficiency and Renewable Energy
</p>

                                <img src="/uploads/icon/energylab.png" style="padding:7px;float:left;">
                                <img src="/uploads/icon/energy-coal.jpg" style="padding:7px;float:left;">
                                {{-- <img src="/uploads/icon/energy1.png" style="padding:7px;float:left;"> --}}
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
