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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Research</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>RESEARCH</h4>
                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
        
                          <p class="about_hub">
                                 <strong class="about_hub">
                                    Ongoing Research:</strong><br>	
                                    Greener Cassava Processing System Leading to Zero Waste for Enhanced Market Access by Small and Medium
                                     Entrepreneurs.<br><br>

                                     <strong class="about_hub">
                                        Objectives</strong><br>	
                                        To improve income and welfare of small and medium entrepreneurs in the cassava subsector in Tanzania 
                                        through innovative processing technology
                                         Capacity Building for Commercial Production of Edible and Medicinal Mushrooms in Tanzania Background.<br>
                                         This is a collaborative project between TIRDO, Hubert Kairuki Memorial University (HKMU) and Guangdong
                                          Institute of Microbiology (GDIM) China.<br><br>
                                          <strong class="about_hub">
                                           The main Objectives</strong><br>

                                          To enhance the anti-poverty and nutritional impact of agriculture through promotion and production 
                                        of edible and medicinal mushroom in Tanzania .<br>
                                        Utilization of Tanzanian oilseed meals to develop high protein foods and wellness ingredients
                                        This is a collaborative project between TIRDO and CSIR-CFTRI-India TIRDO, Tanzania-CSIR, India 
                                        S&T Collaboration Programme.
                                        To develop appropriate technologies for utilization of select oilseeds of Tanzanian origin such as, Sunflower,
                                             Bambara groundnut etc  by harnessing proteins and other valuable nutraceuticals for food, feed and health applications.<br><br>

                                        <strong class="about_hub">
                                            Capacity building in Medicinal and Aromatic plant utilization for Tanzania through training and 
                                      assistance on documentation, gene banking, conservation, processing and quality control:</strong><br>
                                      <strong class="about_hub">
                                        Objectives</strong><br>
                                      I.	Systematic survey of Medicinal and Aromatic plants and infrastructure for the documentation 
                                          and conservation.<br>
                                     II.	Gap analysis, Identification of institute, personnel for training.<br>
                                        III.	Training and assistance on.<br>
                                           a.)	Documentation of Medicinal and Aromatic plant resources
                                          b.)	Gene banking and conservation.<br>
                                        c.)	 Processing and quality control.<br>
                                             d.)	Chemical and molecular diversity.<br><br>
                                    <strong class="about_hub">
                                        Characterization of Spent Bleaching Earth and improvement of biogas through supplementation of manure:</strong>
                                        <strong class="about_hub">
                                            Objective</strong><br>
                                      To utilize spent bleaching earth (SBE) to improve biogas production efficiency through co-digesting with manure and provide 
                                        a practical way of disposing the SBE.
                                      <br>
                                
                          </p>
              
                        </div>
                    </div>

                    {% include 'en/new_section.html' %}   
                </div>
            </div>
        </div>

    </div>

       <!-- /contents -->
@endsection
