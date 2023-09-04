@extends('tirdoweb.sw.base_layout')
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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Energy</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                      <div class="row">
                        <div class="col-md-4 col-xs-12">
                          <div class="text-center img-frame custom-img-frame">
                                  <img src="/uploads/administration/Eng.Hossen Iddi Kayumba.png" alt="Departmental Head" class="img-fluid">
                          </div>
                        </div>

                        <div class="col-md-8">
                          <div class="">
                            <h5 class="title mb-2">Eng.Hossen Iddi Kayumba</h5>
                            <small><i>   </i></small>
                          </div>
                          <div class="col-12 px-0 my-2">
                            <p>Head of Energy Section</p>
                          </div>
                        </div>
                      </div>
                        <h4 class="mt-3">MGAO WA TEKNOLOJIA YA NISHATI YA TIRDO</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p class="about_hub">

                                Zifuatazo ni kazi za kitengo:
                            <br/>
                            </ p>
                            <h5>Utafiti na Ubunifu</h5>
                        <p>
                            a) Kufanya utafiti na maendeleo kwa ajili ya kuendeleza teknolojia ya nishati na kwa
                            kuimarisha matumizi ya vyanzo vya nishati mbadala;
                            <ul>
                                <li>Tabia ya Makaa ya mawe kwa migodi iliyopo ya makaa ya mawe. mashamba mapya ya makaa ya mawe na maendeleo ya hifadhidata ya makaa ya mawe.</li>
                                <li>Maendeleo ya teknolojia ya matumizi ya makaa ya mawe kama vile briketi za makaa ya mawe kwa matumizi ya kaya na viwandani.</li>
                                <li>Kukuza teknolojia za viwanda kwa ajili ya uzalishaji wa nishatimimea na kemikali zinazotokana na kibayolojia</li>
                                <li>Jiko la kupikia lililoboreshwa kwa matumizi ya vijijini na pembezoni mwa miji.</li>
                            </ul>

                        </p>

                        <p>
                        	b)	Kufanya ubunifu katika teknolojia ya kuzalisha nishati kwa kutumia rasilimali za nishati zinazopatikana ndani ya nchi;
                            <ul>
                                <li>Kubadilisha majani, hasa taka za kilimo, taka za misitu na kinyesi cha wanyama kuwa nishati ya mimea</li>
                                <li>Uzalishaji wa bioethanoli na gesi ya bayogesi kutoka kwa taka za Kikaboni</li>
                            </ul>
                            c) Kubuni na kutekeleza tafiti za msingi na za soko
                        </ p><br>
                        <h5>Huduma za Kiufundi</h5>
                        <p>a) Kufanya tathmini ya ubora wa rasilimali za nishati na kuanzisha hifadhidata ya rasilimali za nishati Tanzania;</p>
                        <ul>
                        <li>Tathmini ya ubora wa vyanzo vya nishati safi na mbadala kama vile briketi za Biomass, briketi za makaa ya mawe, n.k.</li>
                        <li>Upimaji wa utendakazi wa mifumo na teknolojia mbalimbali za nishati kama vile Oveni, vinu, Sola PV, boilers na majiko ya kupikia, n.k. kwa kutumia itifaki na viwango vya kitaifa na kimataifa.</li>
                        <li>Ukuzaji wa teknolojia ya nishati mbadala kama vile Solar PV, Upepo, Biogas, n.k.</li></p>
                        </ul><p>
                            b) Kufanya huduma za nishati katika kusaidia viwanda na shirika kwa ufuatiliaji, udhibiti wa haraka na wa kimfumo;
                            na uboreshaji wa matumizi ya nishati ya shirika ili kuhifadhi nishati na kupunguza gharama za shirika/kampuni za nishati;
                            </ p ><ul>
    <li>
        Kusaidia viwanda na biashara kutekeleza mazoea ya Usimamizi wa Nishati
        (kupitishwa kwa Mfumo wa Usimamizi wa Nishati (EnMS) kwa makampuni kwa mujibu wa ISO 50001)
    </li>
    <li>
        Kufanya ukaguzi wa nishati ili kubaini chaguzi za kupunguza matumizi ya nishati kwa gharama nafuu kwa viwanda na
        biashara ikiwa ni pamoja na kusaidia kupitia vipimo na uthibitishaji wakati wa kutekeleza mapendekezo ya ukaguzi.
    </li></ul>
    <p> c) Kufanya ukaguzi wa nishati ili kubainisha chaguzi za kupunguza matumizi ya nishati kwa gharama nafuu kwa viwanda na biashara
                   ikiwa ni pamoja na kusaidia kupitia kipimo na uthibitishaji wakati wa kutekeleza mapendekezo ya ukaguzi.
<ul>
<li>
Utumiaji wa vikaushio vya jua kwa matumizi ya jamii za vijijini
</li>
<li>
Majiko ya kupikia yaliyoboreshwa kuchukua nafasi ya majiko ya kitamaduni katika jamii za vijijini
</li>
</ul></p>

<p>d) Usimamizi wa Mradi wa miradi tofauti ya nishati</p>
<ul>
<li>
Kuanzia tafiti za upembuzi yakinifu hadi kuanzisha miradi ya nishati endelevu.
</li></ul>

<h5>Mafunzo na Ukuzaji wa Ujuzi</h5>
<p>a) Hufanya ukuzaji wa ujuzi na kuwajengea uwezo wenye viwanda katika uteuzi wa nyenzo za nishati,<br>
    b) Kujenga uwezo katika kutathmini ubora wa mfumo na teknolojia mbalimbali za nishati;<br>
    c) Mpango wa mafunzo na uhamasishaji kwa wafanyabiashara wadogo na wenye viwanda katika uzalishaji wa teknolojia ya nishati safi.<br>
    d) Kujenga uwezo na usimamizi wa maarifa kupitia mafunzo na kuongeza uelewa juu ya mbinu za usimamizi wa nishati yaani, Ukaguzi wa Nishati, Uhifadhi wa Nishati, Ufanisi wa Nishati na Nishati Mbadala.
</p>

                                <img src="/uploads/icon/energylab.png" style="padding:7px;float:left;">
                                <img src="/uploads/icon/energy-coal.jpg" style="padding:7px;float:left;">
                                {{-- <img src="/uploads/icon/energy1.png" style="padding:7px;float:left;"> --}}
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
