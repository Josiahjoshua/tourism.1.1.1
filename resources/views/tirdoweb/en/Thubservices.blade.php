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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO T-Hub</li><li class="breadcrumb-item list-inline-item active">T-Hub Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>T-Hub Services</h4>
        
                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p class="about_hub">
                    
                                T-hub provides creative solutions in the area of: software solution, design and development. ICT consultancy services,
                                ICT business incubation to both public and private sector, as well as individuals.
                                We are your advisors, consultants, researches and business management partners, integrating the work of other professional such as tax consultants, 
                                finance management specialists,
                                ICT regulatory specialists, lawyers among others in order to achieve these goals, 
                                we examine all aspects of your business solution needed and build one optimal solution to enabled you and your business realize your goals
                                <ul class="about_hub">
                                    <li>software solution</li> 			
                                    <li>research and consultancy</li>	
                                    <li>incubation and mentoring</li>				
                                    <li>training and capacity building </li>					
                                    <li>coaching and facilitation</li>						
                                    <li>advisory services</li>
                                </ul>
                                T-hub security solution combine experienced consulting, advanced products and efficient managed services to deliver dramatic improvement in security posture and operational efficiencies
                                
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