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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO COMSATS</li><li class="breadcrumb-item list-inline-item active">COMSATS-Background</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>COMSATS Centre for Climate & Sustainability (CCCS) AT Tanzania Industrial Research and Development
                            Organization (TIRDO)</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p class="about_hub">

                                On 10th October 2018 approval was accorded to establish COMSATS Centre for Climate and Sustainability
                       The 2030 Global Development Agenda contains 17 Sustainable Development Goals (SDGs) and the Paris Climate
                            Agreement provides the foundation for sustainable low carbon and resilient development. The links between
                             climate change and sustainable development are strong.

                   Climate change presents a serious threat to sustainable development. <br><br>
                   The 2030 Development Agenda identifies climate
                        change as “one of the greatest challenges of our time” and states that “its adverse impacts undermine the ability of all countries to achieve sustainable development”.

                   Managing and adapting to long term climate risk is critical for sustainable development. Hence environmental
                       sustainability is the underlying theme connecting the SDGs. Not only has climate change been given its dedicated
                       target (Goal 13), but it is also integrated into almost all of the other SDGs.

                   The Commission on Science and Technology for Sustainable Development in the South (COMSATS) has decided to create
                       a network of COMSATS Centre for Climate and Sustainability (CCCS).<br><br>
                       COMSATS is an intergovernmental organization
                       of 27 developing countries as members based in Islamabad, Pakistan. It has a Network of 22 International S&T
                       Centres of Excellence. The Tanzania Industrial Research and Development Organization (TIRDO) is a Centre of
                       Excellence of COMSATS. Information about COMSATS can be accessed on www.comsats.org.

                   Interested COMSATS member countries will work in the framework of CCCS on shared commitment and purpose in
                       addressing twin challenges of climate change and sustainable development.

                   The institutional framework will be on the principle of mutual benefit under South-South & Triangular Cooperation
                        and keeping in view the significance of partnerships as an important mechanism under SDG 17.

                   COMSATS Centre for Climate & Sustainability will be a multi-stakeholder institute working in the framework of

                       South-South & Triangular Cooperation to bring innovative approaches to plan, fund and tackle climate change
                       challenges in line with the policy and practices of developing countries and their international obligations.

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
