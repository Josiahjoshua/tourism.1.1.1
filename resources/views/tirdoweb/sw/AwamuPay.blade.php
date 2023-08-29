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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">Kampuni chini ya T-Hub</li>
                              <li class="breadcrumb-item list-inline-item active">Ammacom</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <img src="/uploads/icon/AMMACOM.png" alt="awamuPay">
                        <h4>SISI NI TECH SAVVY, CREATIVE GROUP YA WATU BINAFSI
                            AMBAO WANA SHAUKU SANA KUHUSU KILA KITU KIDIJITALI.</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                <b>Ammacom Technology Company Limited</b> ni wabunifu na wa kidijitali
                                wakala maalumu katika utangazaji, muundo wa programu na ukuzaji,
                                na huduma na bidhaa zingine zinazohusiana na Mtandao.
                            </br>
                                Tumekusanya timu ya akili bora na angavu zaidi katika programu
                                maendeleo, masoko, na uongozi, kuwapa wateja wetu ufikiaji wa
                                teknolojia ya kisasa zaidi.
                            </p>
                            <h5>MAONO:</h5>
                            <P>Kuwa daraja kati ya makampuni na manufaa ya teknolojia.</P>

                            <h5>MISHENI:</h5>
                            <P>Ili kusaidia biashara kufaidika kutokana na maendeleo ya teknolojia.</P>

                            <div style="display: flex; flex-direction: row-reverse;">
                                <div style="flex: 1;">
                                    <img src="/uploads/icon/AMMACON PICTURE.png" alt="Picha" style="width: 100%;">
                                </div>
                                <div style="flex: 1;">
                            <h5>THAMANI KUU</h5>
                                <P>
                                <ul>
                                    <li>UADILIFU</li>
                                    <li>UWAJIBIKAJI</li>
                                    <li>UWAJIBIKAJI</li>
                                    <li>WAJIBU</li>
                                    <li>ANAYETHAMANI</li>
                                    <li>UWAZI</li>
                                    <li>UTAALAMU</li>
                            </ul>
                            </P>
                            </div>

                            </div>


                        </br>
                        <h5>SULUHISHO LETU</h5>
                        <p>
                            <h6> Suluhisho la Biashara la WhatsApp</h6>
                            Kwa kutumia API ya biashara ya WhatsApp unaweza kujiendesha kiotomatiki
                            hadi 70% ya mwingiliano wako wa huduma kwa wateja,
                            toa hali bora ya huduma kwa wateja, na uokoe pesa.
                            <ul>
                                <li>Kuongeza kuridhika kwa mteja na uaminifu kwa mtaalamu,
                                    mawasiliano yenye ufanisi, na yanayozingatia ulinzi wa data
                                    kwenye programu inayoongoza ulimwenguni ya kutuma ujumbe, WhatsApp.
                                <ul>
                                    <li>Toa usaidizi wa wateja wa kiwango cha kimataifa ukitumia otomatiki</li>
                                    <li>Arifa ya papo hapo kwa mteja wako</li>
                                </ul></li>
                            </ul>
                        </br>
                            <h6> Uendeshaji wa Mchakato wa Biashara</h6>
                            Kuwa kampuni isiyo na karatasi kwa kujirudiarudia kiotomatiki
                            kazi na kuzingatia yale muhimu tu.
                            <ul><li>
                                Tunatengeneza suluhisho kwa kiasi kikubwa kwa kuangalia ndani kuelekea shirika lako kwanza. Kujua na kubainisha mahitaji yako na pointi za maumivu ni muhimu katika kukusaidia kuchagua sahihi
                                suluhisho kwako.
                            </li>
                        <li>
                            michakato ya biashara ya kuoana, haswa zile ambazo jadi hushughulikiwa kwa mikono, faida kubwa zinaweza kupatikana:
                            <ul>
                                <li>Tija Kubwa</li>
                                <li>Kuboresha Kuridhika kwa Kazi </li>
                                <li>Ufanisi ulioongezeka</li>
                                <li>Usikivu na Ufuatiliaji Kamili</li>
                                <li>Usahihi Ulioboreshwa </li>
                            </ul>
                        </li></ul>
                        </p>

                        <p>
                            <h5>HUDUMA ZETU</h5>
                            <ol>
                            <li>Utengenezaji wa Programu ya Simu</li>
                                Tunasaidia kuunda programu za simu za rununu zinazoboresha biashara, hiyo
                                kuongeza tija pamoja na ufanisi.
                            <li>Utengenezaji wa Programu Maalum</li>
                                Ubunifu, ukuzaji, ubinafsishaji, uwekaji na usaidizi wa
                                biashara inaendeshwa na maombi ya programu desturi na ufumbuzi kama
                                pamoja na bidhaa na huduma mpya za programu.
                            <li>Uuzaji wa Kidijitali</li>
                                Tunatumia tovuti za mitandao ya kijamii zenye data ili kuendesha kampeni tofauti.
                                Mifumo hii ina mamilioni ya watumiaji wanaopatikana kwa karibu kila
                                viwanda
                            <li>Ukuzaji wa Tovuti</li>
                                Lengo letu la kujenga miundo ya tovuti inayovutia na inayovutia ambayo inakinza mahitaji ya mteja wetu pamoja na soko wanalolenga.
                            <li>Usaidizi na Matengenezo</li>
                                Tunatoa anuwai ya huduma za usaidizi na matengenezo ya programu ili kuhakikisha kuwa programu iliyowasilishwa inaendeshwa kwa urahisi na ndani
                                kamili kulingana na mahitaji ya wateja wake.
                            <li>Ujumuishaji wa Pesa kwa Simu</li>
                                kuunganisha mfumo wako na malipo ya pesa kwa simu
                            <li>Ushauri wa IT</li>
                                Ushauri wetu wa kimkakati wa TEHAMA utakusaidia kufanya otomatiki na kuweka kidijitali
                                shughuli, boresha kwingineko ya programu, na utekeleze faili ya
                                teknolojia za hivi karibuni.
                                <li>Muundo wa UX / UI </li>
                                Jenga bidhaa unayohitaji kwa wakati na timu yenye uzoefu ambayo
                                hutumia mchakato wa kubuni wazi na ufanisi.
                        </ol>
                        </p>
                        </br>
                        <p>
                        <h5>BAADHI YA WATEJA WETU</h5>
                        Tunashirikiana na bora katika tasnia.
                        <img src="/uploads/icon/partners ammacom.png" alt="partners ammacom">
                        </p>
                        </br>
                        <p>
                            <h5>WASILIANA NASI</h5>
                            Anwani <br>
                            TIRDO Complex, <br>
                            Kimweri Avenue, Msasani <br>
                            P.O. BOX 23235 Dar es salaam <br>
                            Mawasiliano <br>
                            +255 743 700 400 | +255 786 503 601 <br>
                            Barua pepe <br>
                            <a href="#">info@ammacom.co.tz</a> <br>
                            <a href="https://ammacom.com/">www.ammacom.co.tzbr</a> <br>
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
