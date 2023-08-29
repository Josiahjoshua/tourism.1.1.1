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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO-COMSATS</li><li class="breadcrumb-item list-inline-item active">Malengo ya Kituo</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Malengo ya Kituo cha Hali ya Hewa</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">

                                 <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">

                                    <li>Imarisha maarifa ya kisayansi ya Kusini juu ya mabadiliko ya hali ya hewa kwa
                                        hatua sahihi ya hali ya hewa na utetezi; </li>

                                    <li>Tathmini athari za mabadiliko ya mazingira na hali ya hewa
                                        juu ya maisha na maendeleo ya kiuchumi; </li>


                                    <li>Pambana na mabadiliko ya hali ya hewa kupitia kupunguza na kukabiliana na hali hiyo
                                        kwa ukuaji na maendeleo endelevu; </li>

                                    <li>Kuboresha maarifa ya jamii na kujenga uwezo juu ya hali ya hewa
                                        mabadiliko na masuala ya mazingira; </li>

                                    <li>Tengeneza benki ya maarifa ya taarifa na data ili kufahamisha vyema zaidi
                                        uundaji wa sera kulingana na ushahidi; </li>

                                    <li>Kuza ushirikiano wa kikanda na kimataifa ili kuchukua hatua madhubuti
                                        kwa hali ya hewa na uendelevu. </li>
                                 </ul>

                          <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                             <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                Vikundi Kazi vya Kituo</strong><br><br>
                                Chini ya vikundi vya kazi vya CCCS vitapitisha mbinu ya kupitisha nidhamu kwa viendeshaji muhimu
                                ya uhusiano endelevu wa hali ya hewa.<br>
                             <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                <li>Kikundi Kazi cha "Utafiti wa Hali ya Hewa na Tathmini ya Athari" kitazingatia ushirikiano
                                    utafiti juu ya hali ya hewa na mfumo ikolojia unaohitajika ili kukabiliana na mabadiliko ya tabianchi na kufikia SDGs. </li>

                                <li>Kikundi Kazi cha "Hatua ya Kupunguza" kitafanya shughuli za kupunguza ndani ya mfumo
                                    ya Mkataba wa Paris na SDGs. </li>

                                <li>Kikundi Kazi cha "Mabadiliko ya Tabianchi" kitazingatia upangaji wa kukabiliana na hali ya hewa
                                     ustahimilivu wa jamii zilizo hatarini kulingana na tathmini ya athari za hali ya hewa. </li>

                                <li>Kikundi kinachofanya kazi kuhusu “Sayansi, Teknolojia na Ubunifu (STI)” kitafanya tathmini za kisekta
                                     mahitaji ya kiteknolojia ya nchi zinazoendelea na kuhakikisha kukuza matumizi sahihi ya teknolojia
                                     maendeleo na uhamisho. </li>

                                     <li>Kikundi Kazi "Utawala wa Hali ya Hewa na Mipango ya Sera" kitazingatia kuunganisha hali ya hewa na mazingira
                                        kuzingatia sekta za maendeleo kama vile nishati, viwanda, kilimo na usafiri na utetezi wa hali ya hewa
                                         mabadiliko ya kupunguza na kukabiliana katika muktadha wa ushahidi wa kisayansi. </li>

                                    <li>Kikundi kinachofanya kazi kuhusu "Fedha ya Hali ya Hewa" kitatathmini mahitaji ya kifedha ya kukabiliana na mabadiliko ya tabianchi, kukabiliana na mabadiliko ya tabianchi.
                                        na kutafuta ufadhili kutoka kwa mifumo ya kimataifa ya ufadhili kwa ajili ya utekelezaji wa shughuli zilizopangwa. </li>

                                    <li>Kikundi Kazi cha "Usimamizi wa Maarifa na Kujenga Uwezo" kitasisitiza juu ya usimamizi wa maarifa, maarifa
                                         kushirikiana, mazoea mazuri na kujenga uwezo. </li>

                                    <li>Kikundi Kazi cha "Mawasiliano na Uhamasishaji" kitazingatia utetezi na kukuza ufahamu ili kuboresha
                                        uelewa wa mabadiliko ya tabianchi na hatari zake katika kukuza maendeleo endelevu. </li>

                                    <li>Kikundi kinachofanya kazi kuhusu “Ushirikiano Shirikishi” kitakuza ushirikiano wa sekta mbalimbali kitaifa, kikanda.
                                         na ngazi ya kimataifa ili kuimarisha juhudi katika kukuza hatua za hali ya hewa na kufikia maendeleo endelevu. </li>

                             </ul>
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
