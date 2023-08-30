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
                              <li class="breadcrumb-item list-inline-item active">Bivatek africa</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <img src="{{asset('static/uploads/icon/bivatek.png')}}" alt="innovasive">
                        <p>Bivatek africa: "Kuwezesha Maendeleo Kupitia Masuluhisho ya Kibunifu"</p>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <h5>Kuhusu Sisi: </h5>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            BIVATEK AFRICA ni kampuni ya ubunifu ya kuzalisha mawazo na utafiti yenye makao yake makuu Afrika Mashariki, hasa nchini Tanzania.
                            Ikiwa na eneo kuu la Msasani TIRDO Complex na kujitolea kwa ubora, BIVATEK AFRICA inataalam katika kuendeleza mageuzi.
                            ufumbuzi wa kiteknolojia wa kushughulikia changamoto mbalimbali katika sekta mbalimbali.
                            Dhamira ya kampuni inahusu kutumia nguvu za teknolojia ili kuleta mabadiliko chanya, kuongeza ufanisi, na kukuza maendeleo ya kiuchumi na kijamii.
                            </p>
<br>

                            <div style="display: flex; flex-direction: row-reverse;">
                                <div style="flex: 1;">
                                    <h5>
                                        Bidhaa na Huduma:
                                        </h5>
                                <ul>
                                    <li>
                                    BIVA CHUO:
                                    </li>
                                        <p>BIVA CHUO ni teknolojia ya kidijitali ambayo inalenga kuleta mapinduzi katika huduma za mikopo kwa wanafunzi wa elimu ya juu.
                                             Programu hii ya kibunifu ya rununu inachukua nafasi ya makaratasi ya kitamaduni na jukwaa bora kwa wanafunzi kutuma ombi
                                             mikopo na kukamilisha mchakato wa mkopo kwa kutumia simu zao za mkononi.
                                             BIVA CHUO huboresha mchakato wa kutuma maombi ya mkopo, kwa kutoa usahihi, kasi na ufikiaji.</p>
                                    <li>
                                    BIVA VOCHA:
                                    </li>
                                        <p>BIVA VOCHA inashughulikia changamoto katika usambazaji wa vocha za mawasiliano katika enzi ya kisasa ya kidijitali. Programu hii ya rununu hutoa a
                                            ufumbuzi rahisi kwa uhaba wa vocha za karatasi katika maduka ya kimwili.
                                             BIVA VOCHA inahakikisha upatikanaji usiokatizwa wa huduma za mawasiliano kwa kuwapa wateja njia rahisi ya kununua na kubadilishana vocha.</p>
                                    <li>
                                    BIVA UMBRELLA:
                                    </li>
                                    <p>BIVA UMBRELLA inaleta dhana ya kimapinduzi katika mijadala ya elimu ya juu. Mwavuli huu wa hali ya juu umeundwa ili kupunguza
                                        athari za mabadiliko ya tabianchi katika shughuli za kitaaluma za wanafunzi. Inatoa ustahimilivu wa hali ya hewa, vyanzo vya nishati ya umeme vilivyojumuishwa,
                                        Uunganisho wa Wi-Fi, na hata jokofu ndogo. BIVA UMBRELLA inalenga kuunda mazingira mazuri ya kujifunza bila kujali hali ya hewa.</p>
                                    <li>
                                BIVA GUEST:
                                    </li>
                                    <p>BIVA GUEST inashughulikia changamoto zinazokabili nyumba ya kulala wageni na sekta ya nyumba ya wageni katika kufuatilia na kudhibiti kwa usahihi mahudhurio ya wageni.
                                        Suluhisho hili linaloendeshwa na teknolojia hutoa ufuatiliaji wa wakati halisi na usimamizi wa data kwa wageni wanaowasili.
                                         BIVA GUEST inalenga kurejesha uwazi, kuzuia vitendo vya ulaghai na kuboresha ufanisi wa jumla katika sekta hii.</p>
                                </ul>
                            </div>
                                <div style="flex: 1;">
                                    <h5>
                                        Meet the Founder:
                                        </h5>
                                        <img src="{{asset('static/uploads/bivatek/biva.png')}}" alt="Picha" style="width: 100%;">
                                </div>
                            </div>
                            <br>
                            <h5>
                            Misheni
                            </h5>
                            <p>Ili kuendeleza uvumbuzi wa kiteknolojia, kutatua changamoto changamano, na kuwezesha biashara na
                                jamii zilizo na suluhu za mageuzi ambazo huongeza ufanisi, uendelevu na ukuaji.
                            </p>

                            <h5>
                            Maono
                            </h5>
                            <p>Kuwa kampuni inayoongoza katika teknolojia barani Afrika, inayotambuliwa kwa kujitolea kwetu katika uvumbuzi, athari za kijamii na ubora katika utafiti na maendeleo.
                            </p>

                            <br>
                            <h5>
                            Huduma za Kampuni:
                            </h5>
                            <p>
                               BIVATEK AFRICA inatoa huduma mbalimbali zinazolenga kuendesha uvumbuzi, kutatua changamoto, na kukuza ukuaji:
                                <ul>
                                    <li>
                                    1. Huduma za IT za Dawati la Usaidizi:
                                    </li>
                                    Kutoa msaada wa kina wa IT kwa vifaa na vifaa mbalimbali katika ofisi, kuhakikisha uendeshaji na matengenezo laini.
                                    <li>
                                    2. Usalama wa Mtandao:
                                    </li>
                                    Kutoa hatua za usalama wa mtandao ili kulinda data muhimu na kulinda biashara dhidi ya vitisho vya dijiti.
                                    <li>
                                    3. Uhifadhi na Usimamizi wa Data:
                                    </li>
                                    Kuunda suluhisho salama na bora za kuhifadhi data, kuruhusu biashara kufikia na kudhibiti data kwa ufanisi.
                                    <li>
                                    4. Huduma za Wingu:
                                    </li>
                                    Kuweka miundombinu inayotegemea wingu kwa ufikiaji wa data na huduma kwa mbali, kuongeza ufanisi na usalama.
                                    <li>
                                    5. Huduma za Hifadhi Nakala ya Data:
                                    </li>
                                    Utekelezaji wa mikakati ya kuhifadhi na kurejesha data ili kuhakikisha uadilifu wa data na kuzuia upotevu.
                                    <li>
                                    6. Ushauri wa IT:
                                    </li>
                                    Kuongoza biashara katika kupitisha mikakati na teknolojia sahihi za TEHAMA ili kuboresha utendakazi na tija.
                                    <li>
                                    7. Ushauri wa Mitandao ya Kijamii:
                                    </li>
                                    Kusimamia na kupanga mikakati ya uwepo wa mitandao ya kijamii ili kuwashirikisha wateja na kukuza ukuaji.
                                    <li>
                                    8. Huduma za Ukarabati:
                                    </li>
                                    Kutoa huduma za utatuzi, matengenezo, na ukarabati wa vifaa na mifumo ya IT.
                                    <li>
                                    9. Huduma za Usanifu Wavuti:
                                    </li>
                                    Kubuni, kutengeneza, kutengeneza programu na kudumisha tovuti ili kuboresha uwepo wa mtandaoni na matumizi ya mtumiaji.
                                    <li>
                                    10. Huduma za Uuzaji wa Barua pepe:
                                    </li>
                                    Kuunda kampeni bora za uuzaji za barua pepe ili kuungana na wateja na kukuza bidhaa au huduma.
                                </ul>
                            </p>
                            <p>
                            <h5>Maadili: </h5>
                                <ul>
                                    <li> Ubunifu: </li>
                                    Tunastawi kwa ubunifu na uvumbuzi, tukitafuta kila mara njia mpya za kutatua matatizo na kuboresha maisha.
                                    <li> Ushirikiano: </li>
                                    Tunaamini katika nguvu ya ushirikiano, kufanya kazi kwa karibu na wateja na washirika kufikia malengo ya pamoja.
                                    <li> Ubora: </li>
                                    Tumejitolea kutoa masuluhisho na huduma za hali ya juu zinazozidi matarajio.
                                    <li> Wajibu: </li>
                                    Tumejitolea kutoa masuluhisho na huduma za hali ya juu zinazozidi matarajio.
                                    <li> Wajibu: </li>
                                    Tumejitolea kwa mazoea ya kimaadili ya biashara, uwajibikaji wa kijamii na ukuaji endelevu.
                                    <li> Kubadilika: </li>
                                    Tunakumbatia mabadiliko na kukabiliana na teknolojia zinazobadilika na mitindo ya soko.
                                </ul>
                            </p>
                            <p>
                                <h5>Wasiliana Nasi: </h5>
                            </br>
                            Tovuti: <a href="#">www.bivatekafrica.com</a>
                            <br>
                            Barua pepe: <a href="#">contact@bivatekafrica.com </a>
                            <br>
                            Simu: +255 685 049 025
                            <br>
                            <!-- Whatsapp link: <a href="https://wa.me/message/LJDO4WFMDB7BL1.">https://wa.me/message/LJDO4WFMDB7BL1.</a> -->
                            <br>
                            BIVATEK AFRICA ni mshirika wako katika kuendeleza uvumbuzi, kubadilisha changamoto kuwa fursa, na kuunda maisha bora ya baadaye kupitia teknolojia.
                            </p>
                        </div>
                        <div class="col-12 mt-4 text-center">
                            <img src="/uploads/innovasie/innovasie.png" alt="Innovasie" style="max-width: 100%;">
                        </div>
                    </div>

                    @include('tirdoweb.sw.newsection')

                 </div>
                </div>
                </div>

            </div>

@endsection
