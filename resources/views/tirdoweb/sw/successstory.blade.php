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
															<li class="breadcrumb-item "><a href="{% url 'home' current_language %}"><span class="fas fa-home"></span></a></li>
                              <li class="breadcrumb-item list-inline-item font-weight-bold">Mafanikio ya TIRDO</li><li class="breadcrumb-item list-inline-item active">Hadithi ya mafanikio</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4> Tathmini ya Ubora wa Rasilimali ya Makaa ya Mawe</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                Kupitia msaada wa kiufundi kutoka Tume ya Tanzania ya Teknolojia ya Sayansi
                                (COSTECH), Kitengo cha Nishati cha TIRDO kimepata vifaa vya hali ya juu kwa ajili ya uchambuzi
                                makaa ya mawe (na vifaa vingine vya nishati) ubora. Baada ya kuwasha vifaa mwaka 2015,
                                maabara ya makaa ya mawe ya Idara ina uwezo wa kuchambua nyenzo kwa heshima na ukaribu,
                                vigezo vya thamani ya mwisho na inapokanzwa. Ina uwezo zaidi wa kuchanganua yaliyomo isokaboni
                                (fuatilia metali) kutoka kwa nyenzo. Hadi sasa, maabara imechambua zaidi ya sampuli 60 za makaa ya mawe
                                kutoka kwa makampuni ya madini.<br>
                                                                Kwa kutambua uwezo huu na, hasa baada ya maabara ya makaa ya mawe imeweza kutatua makaa ya mawe
                                migogoro ya ubora kati ya makampuni ya madini na watumiaji wa makaa ya mawe (k.m. Kiwanda cha Saruji cha Dangote Vs.
                                Kesi ya mgodi wa TANCOAL), Waziri wa Nishati na Madini, Prof. Sospeter Muhongo alitangaza TIRDO.
                                maabara ya makaa ya mawe kama maabara ya rejea ya kitaifa kwa ajili ya tathmini ya ubora wa makaa ya mawe kwa Tanzania.
                            </p>
                            <h4>Uhakikisho wa ubora wa viunga vya mabomba ya gesi Mnazi Bay Mtwara</h4>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                TIRDO ilipewa kandarasi ya kufanya majaribio yasiyo ya uharibifu kwenye mabomba na vifaa vya gesi.
                                Kazi hiyo ilijumuisha utoaji wa vibarua, usimamizi, vifaa, vifaa, zana ndogo na nyingine yoyote
                                huduma muhimu kufanya uchunguzi usio na uharibifu (NDE) kwenye pwani na kwenye mabomba ya pwani kama
                                kulingana na mipango na viwango.<br>
                                Bomba la Baharini lilikuwa na urefu wa takriban 5.2km na sehemu ya pwani ya bomba ilikuwa karibu kilomita 26.
                                bomba refu kutoka Peninsula ya Msimbati hadi Pwani ya Kusini ya Mnazi Bay karibu na mto Kelinde na kupanua bomba.
                                kwa Manispaa ya Mtwara ambako TANESCO inazalisha umeme.<br>
                                Mradi ulifanyika kwa mafanikio kulingana na viwango vya ISO.
                            </p>
                            <h4>Kuanzishwa kwa Kampuni ya GS1-TANZANIA kwa Misimbo Misingi na mfumo wa ufuatiliaji nchini Tanzania</h4>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                TIRDO imekuwa ikitekeleza mifumo ya ufuatiliaji katika mnyororo mkuu wa kilimo tangu 2004. Kwanza ulikuwa mpango wa majaribio katika
                                mauzo kuu nje ya nchi yaani kahawa, korosho, chai, samaki wa maji baridi na dagaa; unaofadhiliwa na DANIDA na Serikali ya
                                Tanzania. Mpango wa majaribio ulifanikiwa sana katika mfumo wa ufuatiliaji ulitekelezwa katika kahawa, chai, korosho, maji safi
                                 na dagaa. Mradi huo sasa umepanuliwa kwa sekta ndogo ndogo kama vile kilimo cha bustani, nyama na asali, na unatekelezwa.
                                 kuboreshwa hadi mfumo wa kompyuta.
                            </p>
                            <h4>Mafanikio</h4>
                            <p>
                                <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;text-decoration: none;">
                                    <li>
                                        Wahusika wakuu katika mauzo ya nje ya kilimo ikiwa ni pamoja na kahawa, chai, korosho, samaki wa maji baridi na dagaa, wamehamasishwa.
                                        na kufundishwa juu ya mifumo ya ufuatiliaji
                                     </li>
                                    <li>
                                        Mfumo wa ufuatiliaji wa mwongozo umeandaliwa na kutekelezwa katika sekta ndogo za kahawa, chai, korosho na maji safi na dagaa.
                                    </li>
                                   <li>
                                       Mradi huo ulipelekea kuanzishwa kwa GS1-TZ NATIONAL LTD ambayo ilizinduliwa rasmi Julai 4, 2011.
                                   </li>
                                   <li>
                                       Bidhaa za Tanzania sasa zinatumia mfumo wa bar code kwa Tanzania.
                                   </li>
                                 </ul>
                           </p>

                           <h4>Ongezeko la thamani kwenye taka za Plastiki na kupunguza uchafuzi wa mazingira wa taka za plastiki.</h4>
                           <p style="text-align:justify">
                               TIRDO kwa kushirikiana na UNIDO walikuwa wameanzisha kiwanda cha kuchakata plastiki kwa lengo la kuonyesha
                               mchakato wa kuchakata tena plastiki na pia kutoa mafunzo kwa SME juu ya teknolojia ya kuchakata tena. Zaidi ya watu 300
                                walipewa mafunzo kupitia programu hii.

                                Miongoni mwa SME's ambazo zilifunzwa, baadhi walianzisha viwanda vyao vya kuchakata plastiki /mimea na
                                 kuajiri wengine. Kupitia mradi huu, taka za plastiki zimekuwa malighafi yenye thamani ya kuchakata tena
                                 mimea na hivyo taka za plastiki zimepungua kwa kiasi kikubwa.

                                Mafanikio makuu ya mradi huo ni kumwagika ambapo umetengeneza ajira kwa wajasiriamali wadogo na wa kati,
                                watu walioajiriwa kwenye viwanda, wakusanyaji taka na wasambazaji taka.
                            </ p>
                            <h4>Ukaguzi wa Nishati katika Viwanda</h4>
                            <p style="text-align: justify;">
                                Kwa miaka 28 iliyopita kituo hicho kimefanya zaidi ya shughuli 60 za usimamizi wa nishati na mazingira kwa
                                viwanda na vituo vya biashara nchini Tanzania. Kituo pia kimefanya utekelezaji kwa mafanikio
                                ya fursa za uhifadhi wa nishati (ECO) kwa baadhi ya tasnia hizi. Ukaguzi wa nishati ulifadhiliwa na
                                Benki ya Rasilimali Tanzania (TIB), UNDP/UNIDO. Benki ya dunia/ESMAP, Wizara ya Nishati na Madini na mtu binafsi
                                viwanda ambao waliona haja ya ufanisi wa nishati. Zifuatazo ni shughuli kuu zinazofanywa.
                                <Ul>
                                    <li style="text-align: justify;">
                                        Utafiti wa viwanda 50 vya Tanzania ili kuchunguza uwiano kati ya uzalishaji na matumizi ya umeme na hivyo gharama.
                                    </li>
                                    <li style="text-align: justify;">
                                        Usimamizi wa upande wa mahitaji ya umeme kwa viwanda vikubwa 6 na vituo vya biashara nchini Tanzania.
                                        Masomo yalishughulikia wasifu wa mzigo, uchambuzi wa sababu ya nguvu, ufanisi wa taa, ufanisi wa gari,
                                         nk na mapendekezo ya hatua za kurekebisha. Mradi huu ulifadhiliwa na UNDP/Benki ya Dunia/ESMAP na
                                         Kituo cha nishati na mazingira cha TIRDO⦣128 kilichaguliwa kama mshauri wa ndani.
                                    </li>
                                    <li style="text-align: justify;">
                                        Ukaguzi wa kiufundi na tathmini kwa kiwanda cha ngozi na mashine ya uchapishaji. Ukaguzi huu ulifadhiliwa na TIB na NBC mtawalia.
                                    </li>
                                    <li style="text-align: justify;">
                                        Usimamizi wa upande wa mahitaji ya umeme kwa tasnia ya sukari Tanzania kama sehemu ya mpango wa Benki ya Dunia⦣128;™ kuchunguza uwezekano huo.
                                         ya kujitengenezea nguvu kwenye tasnia. Kituo kilifanya kazi kama mshauri wa ndani.
                                    </li>
                                    <li style="text-align: justify;">
                                        Ufanisi wa nishati ya tanuru na upimaji wa utendakazi kwa kiwanda cha kuchakata chuma na utafiti wa usimamizi wa nishati kwa kiwanda cha vioo.
                                        Makampuni binafsi yalifadhili miradi hii.
                                    </li>
                                    <li>
                                        Masomo ya upande wa usimamizi wa mahitaji ya umeme kwa vituo vya biashara na taasisi za elimu ya juu.
                                    </li>
                                    <li style="text-align: justify;">
                                        Ukaguzi wa nishati kwa vituo vya kusukuma maji safi ya maji taka. Utafiti ulihusisha kuamua ufanisi wa kusukuma maji, uvujaji wa maji,
                                        kipengele cha nguvu, ufanisi wa motors na kupendekeza hatua za kurekebisha.
                                    </li>
                                </Ul>
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