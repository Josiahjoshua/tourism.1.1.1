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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Material science and technology</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                      <div class="row">
                        <div class="col-md-4 col-xs-12">
                          <div class="text-center img-frame custom-img-frame">
                                  <img src="/uploads/administration/Eng.Liberatus Chizuzu.png" alt="Departmental Head" class="img-fluid">
                          </div>
                        </div>

                        <div class="col-md-8">
                          <div class="">
                            <h5 class="title mb-2">Eng.Liberatus Chizuzu</h5>
                            <small><i>   </i></small>
                          </div>
                          <div class="col-12 px-0 my-2">
                            <p>Head of Material science and Technologies Section</p>
                          </div>
                        </div>
                      </div>
                        <h4 class="mt-3">MATERIAL SCIENCE AND TECHNOLOGIES</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                Charged with the responsibility of developing and specifying materials use based on cost and performance,
		                       understand the limits of material and change in properties and create new materials with superior properties.
		                       Materials dealt include metals, ceramics, polymers, biomaterials and composites.

                            </p>
                            <h4>Research and Development</h4>
                            <P style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                1) Metallurgical research<br>
                            <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                <li>Introduction of secondary metallurgy practices in steel rolling mills/foundries.</li>
                                 <li>Development of sponge iron for rolling mills and foundries</li>
                                </ul>

                            </P>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                2) 	Coke for iron and steel
                              <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                <li>Characterization of coking coal</li>
                                <li>Coal Blending</li>
                                <li>Coal for coke technologies</li>
                                  </ul>
                            </p>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                3)Inspection Services/ Consultancy<br>
                                The division is equipped with portable equipment and instruments for carrying out Non Destructive
                                    Testing activites. The existing capacities enable the division to undertake the following services<br>
                                i).Destructive testing (DT)<br>
                                Destructive testing (DT) is a test method conducted to find the exact point of failure of materials, components, or machines. During the process,
                                 the tested item undergoes stress that eventually
                                deforms or destroys the material. Naturally, tested parts and materials cannot be reused in regular
                                operation after undergoing destructive testing procedures.<br>
                                <h6>Services</h6>
                                <ul>
                                  <li>Hardness testing (HT)</li>
                                  <li>Tensile (elongation) testing</li>
                                  <li>Torsion testing</li>
                                </ul>


                                ii).Non Destructive Testing (NDT)<br>
                                Non-destructive testing (NDT) comprises a vast array of analytical techniques that are applicable to a wide range of industries.
                                These techniques can identify and assess defects and examine the properties of all kinds of materials and structures without causing damage.
                                As NDT in no way alters the part or structure under inspection, it is an extremely useful technique that can lead to cost and time savings when
                                applied to product evaluations, asset management and fault identification and repair.

                                NDT methods such as ultrasonic testing (UT), magnetic particle inspection (MPI), liquid penetrant testing (LPT), radiographic testing (RT),
                                remote visual inspection and eddy current testing are now in standard use in civil, aeronautical, and systems engineering. <br>

                                <h6>Services</h6>

                                     <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                        <li>Eddy Current Testing</li>
                                        <li>Eddy Current Inspection</li>

                                        </ul>

                            </p>
                            <p>
                              <img src="/uploads/icon/UT1.png" style="padding:7px;float:left;">
                              <img src="/uploads/icon/UT2.png" style="padding:7px;float:left;">
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
