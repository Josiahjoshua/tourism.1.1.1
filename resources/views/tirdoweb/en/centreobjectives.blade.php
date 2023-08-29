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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO-COMSATS</li><li class="breadcrumb-item list-inline-item active">Centre Objectives</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Objectives of the Climate Centre</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">

                                 <ul class="about_hub">

                        	          <li>Enhance scientific knowledge of the South on climate change for
                                        appropriate climate action and advocacy; </li>

    	                                 <li>Assess impacts of environmental and climatic variability
                                          on livelihoods and economic development; </li>


                                          	<li>Combat climate change through mitigation and adaptation
                                                 for sustainable growth and development; </li>

    	                                 <li>Improve societal knowledge and capacity building on climate
                                              change and environmental issues; </li>

    	                            <li>Develop knowledge bank of information and data to inform better
                                      evidence based policy making; </li>

    	                              <li>Promote regional and global partnerships to take effective action
                                    for climate and sustainability. </li>
                                 </ul>

                          <p class="about_hub">
                             <strong class="about_hub">
                                Working Groups of the Centre</strong><br><br>
                                Under the CCCS working groups will adopt a trans-disciplinary approach to key drivers
		                        of climate-sustainability nexus.<br>
                             <ul class="about_hub">
                                	<li>Working Group on “Climate Research and Impact Assessment” will focus on collaborative
                                    research on climate and ecosystem required to combat climate change and to attain SDGs. </li>

                                	<li>Working Group on “Mitigation Action” will undertake mitigation activities within the framework
                                    of Paris Agreement and SDGs. </li>

                                	<li>Working Group on “Climate Change Adaptation” will focus on adaptation planning and build climate
                                     resilience of vulnerable communities based on climate impact assessments. </li>

                                	<li>Working group on “Science, Technology and Innovation (STI)” will conduct sector-wise evaluations of
                                     technological needs of developing countries and ensure promoting appropriate application of technological
                                     development and transfer. </li>

                                	<li>Working Group “Climate Governance and Policy Planning” will focus on integrating climate and environmental
                                    considerations into development sectors like energy, industry, agriculture and transport and advocacy of climate
                                     change mitigation and adaptation in context of science-based evidence. </li>

                                	<li>Working group on “Climate Finance” will assess financial requirements of climate change mitigation, adaptation
                                    and seek funding from international financing mechanisms for implementation of planned activities. </li>

                                	<li>Working Group on “Knowledge Management and Capacity Building” will emphasize on knowledge management, knowledge
                                     sharing, good practices and capacity building. </li>

                                	<li>Working Group on “Communication and Awareness” will focus on advocacy and awareness-raising to improve
                                    understanding of climate change and its risks in promoting sustainable development. </li>

                                	<li>Working group on “Collaborative Partnerships‟ will promote cross-sectoral partnerships at national, regional
                                     and global level to strengthen efforts in promoting climate action and achieving sustainable development. </li>

                             </ul>
                      </p>
                        </div>
                    </div>

                    {{-- {% include 'en/new_section.html' %} --}}
                </div>
            </div>
        </div>

    </div>

    <!-- /contents -->
@endsection
