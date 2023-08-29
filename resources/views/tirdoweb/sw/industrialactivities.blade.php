@extends('tirdoweb.sw.base_layout')
        <!-- /HEADER -->

        <!-- contents -->
@section('content')
        <!-- contents -->

<!-- contents -->

<div class="container px-0">
    <div class="col-12 special-page">
        <div class="col-12 p-4">
            <div class="row">
                <div class="col-12 px-xs-0">
                    <nav aria-label="breadcrumb" class="mb-0">
                        <ol class="breadcrumb px-0">
                                                        <li class="breadcrumb-item "><a href="{{ route('home', ['language' => $current_language]) }}"><span class="fas fa-home"></span></a></li>
                          <li class="breadcrumb-item list-inline-item font-weight-bold">Kituo cha Habari za Viwanda</li><li class="breadcrumb-item list-inline-item active">shughuli za kituo</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">

                <div class="col-md-9 bg-white py-3 page-content">
                    <h4>Shughuli za Kituo cha Habari za Viwanda:</h4>

                    <div class="col-12 px-0 mt-4  justify-content-center align-items-center">

                        <h5>1. Ukusanyaji na Utunzaji wa Taarifa.</h5>
                        <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            Shughuli ya msingi ya kituo hiki inahusisha kukusanya, kuorodhesha, na kutunza taarifa mbalimbali za viwanda,
                            ikiwa ni pamoja na karatasi za utafiti, ripoti za kiufundi, uchambuzi wa soko, mwelekeo wa sekta, masasisho ya udhibiti na mbinu bora. Hii inahakikisha kwamba kituo kinadumisha
                            hazina pana na ya kisasa ya maarifa husika.
                         </p>

                           <h5>2. Usambazaji wa Maarifa.</h5>
                        <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            Kituo kinapaswa kuhamasisha kikamilifu usambazaji wa taarifa kwa wadau mbalimbali.
                            Hili linaweza kupatikana kupitia machapisho ya kawaida, majarida, tovuti za mtandaoni, na matukio ya kubadilishana ujuzi. Kusudi ni kutengeneza habari muhimu
                            kupatikana kwa urahisi kwa watafiti, viwanda, watunga sera, na umma.
                      </p>

                        <h5>3. Kituo kiendeleze kikamilifu usambazaji wa taarifa kwa wadau mbalimbali.</h5>
                        <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            Hii inaweza kupatikana kupitia machapisho ya kawaida, majarida, tovuti za mtandaoni,
                            na matukio ya kubadilishana maarifa. Lengo ni kufanya taarifa muhimu kupatikana kwa urahisi kwa watafiti, viwanda, watunga sera, na umma.
                        </p>

                       <h5>4. Usaidizi wa Utafiti. </h5>
                        <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                        Kituo kinaweza kutoa usaidizi wa utafiti kwa wasomi, watafiti, na wanafunzi kwa kutoa ufikiaji wa majarida ya kitaaluma, hifadhidata na zana za utafiti.
                              Zaidi ya hayo, inaweza kushirikiana na taasisi za utafiti na vyuo vikuu kwenye miradi ya pamoja ya utafiti.
                         </p>
                         <h5>5. Akili na Uchambuzi wa Soko.</h5>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            Kufanya mara kwa mara masomo ya akili ya soko na kuchambua mwelekeo wa tasnia kunaweza
                                 kutoa maarifa muhimu kwa wafanyabiashara na watunga sera.
                                 Kituo kinaweza kuchapisha ripoti na kuchanganua juu ya fursa za soko, tabia ya watumiaji, na matarajio ya ukuaji wa tasnia.
                            </p>

                            <h5>6. Huduma za Ushauri wa Kiufundi/zahanati ya viwanda. </h5>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            Kuanzisha timu ya wataalam wa masuala ambayo wanaweza kutoa ushauri wa kiufundi na mashauriano kwa viwanda na
                                wajasiriamali itakuwa shughuli muhimu. Sekta zinazotafuta mwongozo kuhusu ukuzaji wa bidhaa, uboreshaji wa mchakato na upitishaji wa teknolojia zinaweza kunufaika na huduma hizi.
                            </p>

                            <h5>7. Matukio na Mikutano ya Mitandao.</h5>
                                <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                    Kituo kiandae matukio ya mitandao na makongamano yanayowakutanisha wadau kutoka vyuoni, viwandani,
                                    mashirika ya serikali, na mashirika ya kimataifa. Matukio kama haya hukuza ushirikiano, ushirikiano, na kubadilishana mawazo.
                                </p>

                                 <h5>8. Maonyesho ya Sekta.</h5>
                                 <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                  Maonyesho ya tasnia ya upangishaji yanaweza kuonyesha bidhaa bunifu, teknolojia na suluhisho zinazotengenezwa na tasnia za ndani.
                                    Hii inatoa jukwaa kwa viwanda kuonyesha uwezo wao na kuwezesha ushirikiano na uwekezaji unaowezekana.
                                </p>

                                 <h5>9. Mipango ya Kujenga Uwezo.</h5>
                                  <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                 Kituo kinaweza kubuni programu za kujenga uwezo kulingana na mahitaji ya tasnia maalum au vikundi vinavyolengwa.
                                    Programu hizi zinaweza kuzingatia ukuzaji wa ujuzi, mafunzo ya ujasiriamali, na kuwawezesha wafanyabiashara wadogo na wa kati.
                                </p>
                                <h5>10. Kusaidia Uundaji wa Sera. </h5>
                                    <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                    Utafiti na uchanganuzi wa kituo hiki unaweza kuchangia katika uundaji wa sera unaotegemea ushahidi.
                                     Inaweza kushirikiana na mashirika ya serikali ili kutoa maarifa yanayotokana na data ambayo yanafahamisha sera za viwanda, kanuni na motisha.
                                </p>

                                   <h5> 11. Ufikiaji wa Rasilimali Dijitali. </h5>
                                   <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                    Kuhakikisha ufikiaji rahisi na usio na mshono wa rasilimali za kidijitali kupitia jukwaa la mtandaoni au hifadhidata ni muhimu.
                                     Hii inaruhusu washikadau kupata taarifa kwa mbali, na kuongeza ufikiaji wa kituo na athari.
                                </p>

                                   <h5> 12. Ushirikiano wa Kimataifa.</h5>
                                   <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                    Kushiriki katika ushirikiano na ushirikiano na vituo vya habari vya viwanda na utafiti
                                    taasisi duniani kote inaruhusu kubadilishana maarifa na mazoea bora. Ushirikiano huu wa kimataifa unaweza kuboresha matoleo ya kituo na kupanua mtazamo wake.
                                </p>

                                   <h5> 13. Msaada wa Incubation.</h5>
                                   <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                    Kituo kinaweza kutoa msaada wa incubation kwa wanaoanza na wajasiriamali kwa kutoa ufikiaji wa rasilimali, ushauri,
                                     na mwongozo katika hatua zao za awali za maendeleo ya biashara.
                        </p>

                        <h5>14. Usaidizi na Usaidizi wa Mtumiaji. </h5>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            Kituo kinapaswa kuwa na timu sikivu na yenye usaidizi ya watumiaji ambayo husaidia wageni katika kutafuta taarifa muhimu,
                             kupata rasilimali, na kutumia huduma za kituo kwa ufanisi.</p>

                    </div>
                <br>
                </div>

                @include('tirdoweb.sw.newsection')

                </div>
            </div>
        </div>

    </div>

<!-- /contents -->
@endsection
