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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Consultancy and Technical services</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Consultancy and Technical services</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p class="about_hub">
                                TIRDO is currently offering technical support to a local investor on establishment
                                of a process or factory.
                          <p class="about_hub">
                            OTHER CONSULTANCY AND TECHNICAL SERVICES OFFERED<br><br>
                                 <strong class="about_hub">
                                    1.Quality assurance by using Non Destructive Testing (NDT)</strong><br>
                                    TIRDO has a range of equipment to conduct quality assessment of engineering products.
                                    The NDT technology can be used to provide quality assurance in areas like welded oil tanks,
                                     pressure and marine vessels, gas pipelines, oil pipelines, concretes testing and inspection,
                                      refinery piping systems, chemical processing plants, cast industrial products, manufactures
                                       components and power plants. The testing performed includes radiographic, Ultrasonic, Magnetic
                                        particle, Liquid penetrant, visual inspection.
                          </p>
                          <p class="about_hub">
                             <strong class="about_hub">
                                2. Energy efficiency systems</strong><br>
                                TIRDO provides energy efficiency services to industries, commercial centres and households.
                                The services includes energy efficiency audit to identify cost effective energy consumption
                                 reduction options, performance testing of energy systems like ovens, cook stoves, tobacco barns,
                                  solar dryers, among others.
                           </p>
                           <p class="about_hub">
                            <strong class="about_hub">
                                3.Coal technologies</strong><br>
                               The coal laboratory offers Coal materials analysis (proximate, ultimate, coking characteristics),
		                      but also to create creating coal quality databank for Tanzania. Other activities for the laboratory
		                     includes; development of coal utilization technologies and assessing gassing characteristics of coal
		                    deposits for �&#128;&#156;coal bed methane �&#128;&#147; CBM�&#128;� technologies application in
		                     energy generation.
                          </p>
                          <p class="about_hub">
                            <strong class="about_hub">
                                4. Food Microbiological analysis</strong><br>
                                The analysis offered by the laboratory includes chemical, physical and microbiological quality testing of
                                both animal and plant origin that includes fish and fish products, cereals, legumes, meat and meat products,
                                 edible fats and oil, dairy and dairy products, honey, fruits and vegetables among others.
                           The Food laboratory at TIRDO is the accredited laboratory with the following parameters; detection and enumeration
                           of total aerobic count, detection and enumeration of staphylococcus aureus, detection and enumeration of total coli
                            forms, detection and enumeration of Escherichia coli and detection of salmonella.
                           Other non-accredited analysis are; detection of vibrio cholera, detection and enumeration of enterobactericeae and
                            detection and enumeration of fecal coli form.
                          </p>
                          <p class="about_hub">
                            <strong class="about_hub">
                                5.Environmental services</strong><br>
                                The environmental laboratory has the capacity to conduct research and provide technical advisory services  in
		                            areas of value addition to wastewater streams, non-conventional wastewater treatment systems, on site wastewater
		                      treatment systems as well as solid waste. Also the laboratory offers environmental monitoring services such as;
	                    	Air quality (Particulate metal and gas emissions), noise level, light intensity, air vibration, wastewater and
		                   portable water quality monitoring.  Other services are Environmental Impact Assessment and Environmental Audit.
                          </p>
                          <p class="about_hub">
                            <strong class="about_hub">
                                6.Chemical analytical services</strong><br>
                                The Chemistry laboratory provides a range of analytical services including physicochemical quality testing of raw
		                      materials, industrial products and industrial wastes. These involve macro and micro nutrient analysis in food
		                  and food proximate analysis such as determination of ash content, moisture content, energy content/ calorific
		                value, fat content, carbohydrate content and protein content. The division also has a vast experience in salt,
		                     fertilizer and chalk quality analysis. Furthermore, the laboratory has the capacity for heavy metals analysis
		                    in industrial raw materials, industrial products, industrial wastes and other environmental samples.
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
