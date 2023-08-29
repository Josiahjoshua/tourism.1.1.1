@extends('tirdoweb.sw.base_layout')
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
															<li class="breadcrumb-item "><a href="{{ route('home', ['language' => $current_language]) }}"><span class="fas fa-home"></span></a></li>
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO T-Hub</li><li class="breadcrumb-item list-inline-item active">T-Hub Huduma</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Huduma za T-Hub</h4>
                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">

                                T-hub hutoa ufumbuzi wa ubunifu katika eneo la: ufumbuzi wa programu, kubuni na maendeleo. Huduma za ushauri wa ICT,
                                ICT incubation biashara kwa sekta ya umma na binafsi, kama vile watu binafsi.
                                Sisi ni washauri wako, washauri, watafiti na washirika wa usimamizi wa biashara, tukijumuisha kazi ya wataalamu wengine kama vile washauri wa kodi,
                                wataalam wa usimamizi wa fedha,
                                Wataalamu wa udhibiti wa ICT, wanasheria miongoni mwa wengine ili kufikia malengo haya,
                                tunachunguza vipengele vyote vya suluhisho la biashara yako vinavyohitajika na kujenga suluhu moja bora ili kukuwezesha wewe na biashara yako kutambua malengo yako.
                                <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                    <li>suluhisho la programu</li>
                                    <li>utafiti na ushauri</li>
                                    <li> incubation na ushauri</li>
                                    <li>mafunzo na kujenga uwezo </li>
                                    <li>kufundisha na kuwezesha</li>
                                    <li>huduma za ushauri</li>
                                </ul>
                                Suluhisho la usalama la T-hub linachanganya ushauri wenye uzoefu, bidhaa za hali ya juu na huduma zinazodhibitiwa kwa ufanisi ili
                                kutoa uboreshaji mkubwa katika mkao wa usalama na ufanisi wa uendeshaji.
                          </p>

                        </div>
                    </div>

                    @include('tirdoweb.sw.newsection')

                </div>
            </div>
        </div>

    </div>

<!-- /contents -->
@endsection
