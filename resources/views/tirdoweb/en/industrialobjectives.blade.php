@extends('tirdoweb.en.base_layout')
        <!-- /HEADER -->

        <!-- contents -->
@section('content')
<!-- contents -->
<div class="container px-0">
    <div class="col-12 special-page">
        <div class="col-12 p-4">
            <div class="row">
                <div class="col-12 px-xs-0">
                    <nav aria-label="breadcrumb" class="mb-0">
                        <ol class="breadcrumb px-0">
                                                        <li class="breadcrumb-item "><a href="{% url 'home' current_language %}"><span class="fas fa-home"></span></a></li>
                          <li class="breadcrumb-item list-inline-item font-weight-bold">Industrial Information Center</li><li class="breadcrumb-item list-inline-item active">Core Objectives</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">

                <div class="col-md-9 bg-white py-3 page-content">
                    <h4>Core Objectives</h4>

                    <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                      <p class="about_hub">
                             <strong class="about_hub">
                                1. Knowledge Dissemination:</strong></br>
                                The center will act as a repository of up-to-date information related to various industries,
                                including manufacturing processes, market trends, regulatory frameworks, and technological advancements.
                      </p>
                      <p class="about_hub">
                             <strong class="about_hub">
                                2. Research Support:</strong></br>
                                Researchers at TIRDO and other institutions will benefit from the center's vast collection of scholarly journals,
                                research papers, and patents, facilitating their work and promoting innovation.
                      </p>
                      <p class="about_hub">
                        <strong class="about_hub">
                            3. Industry Insights:</strong></br>
                            The center will conduct regular studies and analysis, providing industries with valuable insights into
                            emerging opportunities and potential challenges, contributing to their growth and competitiveness.
                        </p>
                        <p class="about_hub">
                            <strong class="about_hub">
                            4. Training and Workshops:</strong></br>
                            Workshops, seminars, and training sessions will be organized to enhance the skill set of professionals and
                             entrepreneurs, fostering an environment of continuous learning and development.
                        </p>
                        <p class="about_hub">
                        <strong class="about_hub">
                            5. Collaboration Platform: </strong></br>
                            The center will encourage collaboration between academia, industries, and the government, promoting knowledge exchange
                            and driving collaborative research and development projects.
                </p>

                    </div>
<br>
                    <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                        <h5><b>Facilities and Services:</b></h5>

                        <ul class="about_hub">
                            <li>Library and Digital Resources: The center will have a physical library with an extensive collection of books, journals, and reports.
                                Additionally, it will provide online access to digital databases and research tools. </li><br>
                            <li>Data Analysis and Visualization: Equipped with modern data analysis software,
                                the center will assist industries in interpreting data and trends effectively.</li><br>
                            <li>Networking and Events: The center will host networking events, conferences, and industrial exhibitions,
                                 bringing stakeholders together to discuss challenges and opportunities. </li><br>
                            <li>Technical Advisory: A team of subject matter experts will be available to provide technical advice and consultation to entrepreneurs and industries seeking guidance.</li>
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
