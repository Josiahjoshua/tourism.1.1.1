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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">Kampuni iliyo chini ya T-Hub</li>
                              <li class="breadcrumb-item list-inline-item active">Albetus technologies</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <img src="/uploads/innovasie/albetus.png" alt="innovasive">
                        <p>Kuimarisha Uchumi wa Dijitali</p>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                        <h5>KAMPUNI YETU</h5>
                            <p style="text-align:justify;">
                                 Albetus Technologies ni huduma kamili ya ICT, suluhisho na
                                mtoa bidhaa. Ni mtendaji kwa pamoja wana zaidi ya a
                                uzoefu wa muongo katika tasnia ya teknolojia na wako
                                amini sana nafasi ya teknolojia barani Afrika. Yetu
                                Makao makuu yako Dar es salaam, Tanzania.
                                <br>
                                Tunajitahidi kutoa kwa ufanisi zaidi, ufanisi na muhimu
                                huduma bora na suluhisho zinazolengwa na
                                mahitaji yanayozidi kuwa magumu ya mashirika, ili
                                ili kuongeza tija ya shughuli na kuongeza
                                thamani kwa wateja wetu
                            </p>
<br>
                            <h5>
                            Maadili ya Kampuni
                            </h5>
                            <p>Albetus Technologies inaamini katika ukuaji endelevu
                            kupitia uvumbuzi, ubunifu na umahiri. Sisi pia
                            tunaamini katika kuwatendea wateja wetu kwa heshima. Sisi
                            thamini uaminifu, uadilifu na mazoea ya kimaadili ya biashara.
                            </p>
                            <div style="display: flex; flex-direction: row-reverse;">
                                <div style="flex: 1;">
                                <ul>
                                    <li>
                                    Uadilifu
                                    </li>
                                        <p>Tunajivunia kuwa waaminifu,
                                        uwazi na kujitolea kufanya
                                        kilicho bora kwa wateja wake.</p>
                                    <li>
                                    Mwitikio
                                    </li><p>Tunapenda, maamuzi kwa wakati yanapelekea
                                        vitendo kwa wakati vinavyopelekea kuhama
                                        biashara mbele.
                                        </p>
                                    <li>
                                    Shauku
                                    </li>
                                    <p> Kupenda na kujivunia kile tunachofanya
                                        inatia hamasa ya kufanya kazi kwa bidii zaidi
                                        kufanikiwa.</p>
                                    <li>
                                Agile
                                    </li>
                                    <p>Timu yetu inaweza kubadilika na kushirikiana,
                                        kutanguliza watu juu ya michakato na
                                        kutumia "programu ya kufanya kazi" kupata bidhaa
                                        tayari sokoni haraka iwezekanavyo.
                                        </p>
                                </ul>
                            </div>
                            {{-- <div style="flex: 1;"> --}}
                                {{-- <img src="/uploads/innovasie/shirton.JPG" alt="Picha" style="width: 100%;"> --}}
                            {{-- </div> --}}
                        </div>

                            <br>
                            <h5>
                            Misheni
                            </h5>
                            <p>Ili kusaidia shughuli za biashara kupitia
                                teknolojia ya kuaminika na Ubunifu
                                ufumbuzi.
                            </p>

                            <h5>
                            Maono
                            </h5>
                            <p>Kutofautishwa kama mtu anayetegemewa na
                                Teknolojia ya Kibunifu ya Pan-Afrika
                                mtoa huduma.
                            </p>

                            <h5>
                            Kusudi
                            </h5>
                            <p>kuboresha uwezo wa watu kufanya kazi zao na
                                ubora wa maisha kupitia uvumbuzi wenye maana
                            </p><br>
                            <h5>
                                huduma zinazosimamiwa:
                            </h5>
                            <p>
                               <ul>
                                    <li>
                                    1. Upangaji na usanifu wa miundombinu
                                    </li>
                                    Upangaji wa miundombinu, muundo, usanidi, utekelezaji na matengenezo. Mikataba ya kiwango cha huduma iliyoundwa iliyoundwa maalum
                                    <li>
                                    2. Matengenezo ya kuzuia
                                    </li>
                                    Ugunduzi makini na uzuiaji wa matatizo yanayoweza kutokea na huduma za 24/7Helpdesk na usaidizi wa mbali

                                    <li>
                                    3. Dhibiti chelezo
                                    </li>
                                    Dhibiti seva za ubadilishanaji na ubadilishanaji kwenye msingi na msingi wa wingu:<ul>
                                        <li>Barua pepe ya mwenyeji</li>
                                        <li>Uwekaji chapa na usimamizi wa saini kwa barua pepe</li>
                                        <li>Uhifadhi wa barua pepe</li>
                                    </ul>
                                    <li>
                                    4. Programu kama huduma
                                    </li>
                                    Tunatoa Usajili wote kulingana na
                                    programu k.m: Microsoft
                                    Bidhaa (Ms Office & Windows
                                    Leseni. Programu ya kuzuia virusi,
                                    Programu za Uhasibu, Autocad,
                                    Archicad nk)
                                    <h5>
                                    <br>
                                        Huduma zetu:
                                    </h5>
                                     <p>
                                     <ul>
                                     <li>Miundombinu ya LAN</li>
                                     Teknolojia ya Albetus
                                     '
                                     mwenye uzoefu
                                     wataalamu wanaweza kutoa ufanisi
                                     Miundombinu ya mtandao kulingana na yako
                                     mazingira na mahitaji ya biashara.
                                     Usanifu wa Mtandao na Ufungaji
                                        <li>Ukuzaji Programu</li>
                                        Pamoja na timu ya maendeleo yenye ujuzi ya Albetus IT sisi pia
                                        utaalam katika kutengeneza masuluhisho ya programu muhimu sana Tengeneza yaliyolengwa kulingana na mahitaji yako.
                                        <li>Suluhisho la Miundombinu ya Wingu</li>
                                            Biashara zinaweza kuokoa pesa na kupunguza
                                            uendeshaji wa kiutawala kwa kutumia Hifadhi ya Wingu kwa
                                            badilisha seva za faili zilizopo. Hifadhi iliyopo na NAS
                                            vifaa pamoja na programu ya Hifadhi ya Wingu
                                            kutoa uwezo wa kuhifadhi wa ndani ambao ni rahisi zaidi
                                            kupeleka na kudumisha. Kawaida gharama za faili
                                            programu ya seva, matengenezo, na rasilimali watu
                                            ni takriban mara tano ya maunzi asili
                                            gharama
                                            <li>Bidhaa za IT</li>
                                            Ufumbuzi wa programu na
                                            huduma,
                                            Bidhaa za usalama wa mtandao na data,
                                            Bidhaa za Biashara,
                                            Katika Albetus tutakuwa chanzo kila wakati,
                                            juu ya bidhaa mbalimbali kwa ajili yako
                                            biashara, bora na zaidi
                                            bei nafuu.
                                            Maombi ya uzalishaji wa ofisi,
                                            Mifumo ya uendeshaji ya kompyuta na mtandao,
                                            Seva, rafu, vifaa vya umeme na mtandao
                                            hifadhi,
                                            Programu ya usimamizi wa biashara,
                                            Kompyuta za mezani, kompyuta ndogo na vifuasi
                                            Printers, scanners, na projectors,
                                            Vipanga njia, swichi na sehemu za ufikiaji zisizo na waya
                                            Dhamana ya vifaa na programu na
                                            usajili,
                                            <li>Mifumo ya usalama</li>
                                            Tunaweka, kudumisha na kutoa huduma kwa mifumo ya usalama
                                            kama vile kamera za CCTV, mifumo ya udhibiti wa ufikiaji,
                                            intruder Kengele, kengele za moto, Ufuatiliaji wa Magari
                                            mifumo, na Uzio wa Umeme.
                                             </ul>
                                         </p>
                            <p>
                                <h5>Wasiliana Nasi: </h5>
                                Timu yetu inaweza kuhusishwa kama vile kujitolea kwetu
                                kuridhika kwa wateja kama ujuzi wetu wa kiufundi.
                            <!-- </br>
                            Website: <a href="#">www.bivatekafrica.com</a>  -->
                            <br>
                            Barua pepe: <a href="#">support@albetus.co.tz</a>
                            <br>
                            Simu: +255 654 473 474
                            <br>
                            <!-- Whatsapp link: <a href="https://wa.me/message/LJDO4WFMDB7BL1.">https://wa.me/message/LJDO4WFMDB7BL1.</a> -->
                            <br>

                            </p>
                        </div>
                        <div class="col-12 mt-4 text-center">
                            <img src="/uploads/innovasie/albetus.png" alt="Innovasie" style="max-width: 100%;">
                        </div>
                    </div>

                    @include('tirdoweb.sw.newsection')

                 </div>
                </div>
                </div>

            </div>

@endsection
