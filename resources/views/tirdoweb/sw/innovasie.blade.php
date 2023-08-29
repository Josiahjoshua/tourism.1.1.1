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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">Kampuni iliyo chini ya T-Hub</li>
                              <li class="breadcrumb-item list-inline-item active">Innovasie</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <img src="/uploads/icon/innovasi.png" alt="innovasive">
                        <p>Innovasie Company Limited: Kuwezesha Wakati Ujao kwa Teknolojia na Ubunifu</p>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <h5>Kuhusu Sisi:</h5>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                Innovasie ni kampuni inayobadilika na bunifu ya ufumbuzi wa teknolojia yenye makao yake makuu jijini Dar es Salaam, Tanzania. Ilianzishwa mwaka 2019
                                yenye nambari ya usajili 139372131, kampuni yetu ilianzishwa ikiwa na maono ya msingi ya kutatua baadhi ya makampuni mashuhuri zaidi barani Afrika.
                                matatizo kupitia nguvu ya teknolojia na ubunifu.

                            </br>
                            Dhamira yetu ni kuleta matokeo chanya duniani kwa kutoa huduma za kisasa na bidhaa zinazochochea ukuaji, ufanisi,
                            na mafanikio kwa biashara na mashirika barani Afrika na kwingineko.
                            </p>
<br>
                            <h5>
                                Timu ya usimamizi:
                            </h5>
                            <div style="display: flex; flex-direction: row-reverse;">
                                <div style="flex: 1;">
                                    <ul>
                                        <li>
                                            Shilton Anaeli Ulomi, Mkurugenzi Mkuu, Kiongozi wa Biashara na Mikakati
                                        </li>
                                        <li>
                                            Justine John Shumbi, Mkurugenzi Uendeshaji, Ubunifu na Kiongozi wa Masoko
                                        </li>
                                        <li>
                                            Gideon Kiangu, Mkurugenzi wa Teknolojia, Usalama wa Mtandao na Usimamizi wa IT
                                        </li>
                                        <li>
                                            Halilu Bazicha. Mkurugenzi Teknolojia, Usimamizi wa Bidhaa & Agile
                                        </li>
                                    </ul>
                                </div>
                                <div style="flex: 1;">
                                <img src="{{ asset('static/uploads/innovasie/shirton.jpg')}}" alt="shirton image" style="width: 100%;">
                                    <!-- <img src="{{ asset('static/asset/images/logo.jpg')}}" alt="TIRDO Logo" class="img-fluid client-logo"> -->
                                </div>
                            </div>
                            <br>
                            <h5>
                                Huduma zetu:
                                </h5>
                                <p>
                                    <h5>
                                        1. Ufumbuzi wa Teknolojia
                                    </h5>
                                    Timu yetu ya wataalamu wenye talanta inachanganya utaalam wao katika teknolojia, ukuzaji wa programu,
                                    na ujuzi wa sekta ili kutoa suluhu za ubora wa juu zinazolingana na mahitaji ya kipekee ya wateja wetu.
                                    Huduma zetu za teknolojia ni pamoja na:
                                    <ul>
                                        <li>
                                            Ukuzaji wa Programu Maalum:
                                        </li>
                                        <li>
                                            Ufumbuzi wa biashara
                                        </li>
                                        <li>
                                            Maendeleo ya Mchezo:
                                        </li>
                                        <li>
                                            Matengenezo ya Programu
                                    </li>
                                    <li>
                                        Usaidizi wa Mifumo na Utawala
                                    </li>
                                    <li>
                                        Ushauri wa Teknolojia ya Habari
                                    </li>
                                    <li>
                                        Huduma na Matengenezo ya Vifaa vya TEHAMA
                                    </li>
                                </ul>
                            </p>
                            <p>
                                <h5>2. Usalama wa mtandao wa viwandani au ICS (Mifumo ya Udhibiti wa Viwanda) </h5>
                                Tunazingatia kulinda mifumo muhimu na miundombinu inayotumika katika tasnia mbalimbali
                                kutoka kwa vitisho na mashambulizi ya mtandao. Sekta hizi zinaweza kujumuisha viwanda, nishati, usafirishaji,
                                huduma za afya, huduma, na zaidi. Huduma zetu za usalama wa mtandao ni pamoja na:
                                <ul>
                                    <li> Utambuzi na Kinga ya Tishio: </li>
                                    <li> Tathmini ya Athari na Usimamizi wa Viraka: </li>
                                    <li> Udhibiti wa Ufikiaji na Uthibitishaji: </li>
                                    <li> Ulinzi wa Data na Usimbaji fiche: </li>
                                    <li> Sehemu ya Mtandao: </li>
                                    <li> Mwitikio wa Tukio na Urejeshaji: </li>
                                    <li> Mafunzo na Uhamasishaji wa Wafanyakazi: </li>
                                    <li> Uzingatiaji wa Udhibiti: </li>
                                </ul>
                            </p>
                            <p>
                                <h5>3. Uuzaji 360</h5>
                                Huduma zetu za uuzaji zinajumuisha mbinu za kidijitali na za kitamaduni, zinazotuwezesha kufikia a
                                hadhira pana na kuongeza mwonekano wa chapa. Huduma zetu za uuzaji ni pamoja na:
                                <ul>
                                    <li> Uuzaji wa Kidijitali</li>
                                    <li> Uzalishaji wa Maudhui</li>
                                    <li> Masoko Mseto</li>
                                </ul>
                            </p>
                            <p>
                                <h5>4. Bidhaa Zetu</h5>
                                <h6>A. MyHI (<a href="#">www.myhi.co.tz</a>)</h6>
                                Jukwaa la kimapinduzi la bima ya afya iliyoundwa ili kurahisisha mchakato wa kununua na kutumia bima, na kuifanya iweze kufikiwa na wote.
                            <br>
                            <br>
                                <h6>B. Sheria365 (<a href="#">www.sheria365.com</a>) </h6>
                                Mfumo mpana wa sheria wa CRM unaozipa mamlaka kampuni za sheria na wataalamu wa sheria ili kurahisisha usimamizi wa kesi na kuimarisha mawasiliano ya mteja.
                            <br>
                            <br>
                                <h6>C. SmartSMS</h6>
                                huwezesha mashirika kutuma ujumbe kwa wakati na wa kibinafsi kwa wateja, wateja, na washikadau, kukuza uhusiano wenye nguvu na
                                kuendesha mawasiliano kwa ufanisi.
                        
                            </p>
                            <p>
                                <h5>5. Mashirika ambayo tumefanya kazi nayo: </ h5>
                                TIRDO, TANTRADE, Vodacom Tanzania, Smartlab, Centric, GIZ,
                            </p>
                            <p>
                                <h5>6. Wasiliana Nasi: </h5>
                                Ikiwa unatafuta mshirika unayeaminika wa suluhisho za teknolojia, Innovasie yuko hapa kukusaidia. Wasiliana nasi leo ili kugundua jinsi huduma zetu na
                                bidhaa zinaweza kuwezesha biashara yako kustawi katika enzi ya kidijitali.
                            </br>
                            Tovuti: <a href="#">www.innovasie.co.tz</a> 
                            <br>
                            Barua pepe: <a href="#">shilton@innovasie.co.tz </a>
                            <br>
                            Simu: +255 743 293 400 / +255 688 085 517
                            <br>
                            Whatsapp link: <a href="https://wa.me/message/LJDO4WFMDB7BL1.">https://wa.me/message/LJDO4WFMDB7BL1.</a>

                            </p>
                        </div>
                        <div class="col-12 mt-4 text-center">
                            <img src="/uploads/innovasie/innovasie.png" alt="Innovasie" style="max-width: 100%;">
                        </div>
                    </div>



                    {{-- {% include 'en/new_section.html' %} --}}
                </div>
            </div>
        </div>

    </div>

<!-- /contents -->
@endsection