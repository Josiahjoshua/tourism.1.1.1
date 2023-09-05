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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Technology Transfer division</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                      <div class="row">
                        <div class="col-md-4 col-xs-12">
                          <div class="text-center img-frame custom-img-frame">
                                  <img src="/uploads/administration/martha.png" alt="Departmental Head" class="img-fluid">
                          </div>
                        </div>

                        <div class="col-md-8">
                          <div class="">
                            <h5 class="title mb-2">Ms. Martha Mhongole</h5>
                            <small><i>   </i></small>
                          </div>
                          <div class="col-12 px-0 my-2">
                            <p>Head of Technology Transfer and Pilot Plants Section</p>
                          </div>
                        </div>
                      </div>
                        <h4 class="mt-3">TECHNOLOGY TRANSFER AND PILOT PLANTS DIVISION</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p class="about_hub">

                                The Technology Transfer and Pilot Plant Unit at TIRDO plays a crucial role in bridging the gap between research and practical application.<br>
                                The Unit aims to ensure that TIRDO-developed innovations, knowledge, and technologies are made available and shared with potential users,
                                 particularly industries so that they can be used to address issues limiting industrial productivity.<br>
                                The functions of the Technology Transfer and Pilot Plant Unit are as follows;<br>
                                1.	Manage, and monitor all the technologies, innovations, and inventions developed at TIRDO.<br>
                                2.	Assess the commercial potential of inventions, technologies, and research findings developed at TIRDO.<br>
                                3.	Identify potential markets, industries, and applications for developed technology, and inventions.<br>
                                4.	Intellectual Property Management: Identify and protect intellectual property (IP) generated from research activities, including patents, copyrights, and trademarks.<br>
                                5.	Research and Development: Conduct market research to determine the feasibility and potential demand for new technologies.<br>
                                6.	Start-up Incubation: Assist in the formation of start-up companies by providing guidance, mentorship, and resources to researchers looking to spin off their innovations into new ventures.<br>
                                7.	Industry Collaboration: Foster collaboration between researchers and industry partners.<br>
                                8.	Intellectual Property Education: Coordinate for education and training of researchers on topics related to intellectual property, technology transfer, and commercialization processes.<br>
                                9.	Networking and Outreach: Establish relationships with potential partners, investors, and industry stakeholders to promote collaboration and increase the visibility of the institution's innovations.<br>


                        </div>
                    </div>

                    @include('tirdoweb.en.newsection')

                </div>
            </div>
        </div>
    </div>

      <!-- /contents -->
@endsection
