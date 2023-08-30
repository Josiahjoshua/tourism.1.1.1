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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Huduma za ushauri na kiufundi</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Ushauri na Huduma za Kiufundi</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                TIRDO kwa sasa inatoa msaada wa kiufundi kwa mwekezaji wa ndani juu ya uanzishwaji
                                ya mchakato au kiwanda.
                          <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            HUDUMA NYINGINE ZA USHAURI NA KITAALAM ZINAZOTOLEWA<br><br>
                                 <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                    1. Uhakikisho wa ubora kwa kutumia Jaribio lisilo la Uharibifu (NDT)</strong><br>
                                    TIRDO ina vifaa mbalimbali vya kufanya tathmini ya ubora wa bidhaa za uhandisi.
                                    Teknolojia ya NDT inaweza kutumika kutoa uhakikisho wa ubora katika maeneo kama matangi ya mafuta yaliyochochewa,
                                     shinikizo na vyombo vya baharini, mabomba ya gesi, mabomba ya mafuta, kupima na ukaguzi wa saruji,
                                      mifumo ya mabomba ya kusafishia, mitambo ya usindikaji wa kemikali, bidhaa za viwandani za kutupwa, tillverkar
                                       vipengele na mitambo ya nguvu. Upimaji uliofanywa ni pamoja na radiographic, Ultrasonic, Magnetic
                                        chembe, kipenyo cha kioevu, ukaguzi wa kuona.
                          </p>
                          <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                             <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                2. Mifumo ya ufanisi wa nishati</strong><br>
                                TIRDO hutoa huduma za ufanisi wa nishati kwa viwanda, vituo vya biashara na kaya.
                                Huduma hizo ni pamoja na ukaguzi wa ufanisi wa nishati ili kubaini matumizi ya nishati kwa gharama nafuu
                                 chaguzi za kupunguza, upimaji wa utendaji wa mifumo ya nishati kama vile oveni, majiko ya kupikia, ghala za tumbaku,
                                  vikaushio vya jua, miongoni mwa mengine.
                           </p>
                           <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                3.Teknolojia za makaa ya mawe</strong><br>
                                Maabara ya makaa ya mawe hutoa uchambuzi wa vifaa vya Makaa ya mawe (tabia ya karibu, ya mwisho, ya coking),
                                lakini pia kuunda hifadhidata ya ubora wa makaa ya mawe kwa ajili ya Tanzania. Shughuli zingine za maabara
                                inajumuisha; maendeleo ya teknolojia ya matumizi ya makaa ya mawe na kutathmini sifa za gesi ya makaa ya mawe
                                amana za  &#128;&#156;coal bed methane  &#128;&#147; CBM&#128;  utumiaji wa teknolojia katika
                                uzalishaji wa nishati.
                          </p>
                          <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                4. Uchunguzi wa Microbiological wa Chakula</strong><br>
                                Uchambuzi unaotolewa na maabara unajumuisha upimaji wa ubora wa kemikali, kimwili na kibiolojia ya
                                asili ya wanyama na mimea inayojumuisha samaki na bidhaa za samaki, nafaka, kunde, nyama na bidhaa za nyama;
                                 mafuta ya kula na mafuta, maziwa na bidhaa za maziwa, asali, matunda na mboga mboga miongoni mwa wengine.
                           Maabara ya Chakula iliyopo TIRDO ndiyo maabara iliyoidhinishwa na yenye vigezo vifuatavyo; utambuzi na kuhesabu
                           ya jumla ya hesabu ya aerobic, kugundua na kuhesabu staphylococcus aureus, kugundua na kuhesabu coli jumla.
                            fomu, kugundua na kuhesabu Escherichia coli na kugundua salmonella.
                           Michanganuo mingine isiyoidhinishwa ni; kugundua kipindupindu vibrio, kugundua na kuhesabu enterobactericeae na
                            kugundua na kuhesabu fomu ya koli ya kinyesi.
                          </p>
                          <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                5.Huduma za mazingira</strong><br>
                                Maabara ya mazingira ina uwezo wa kufanya utafiti na kutoa huduma za ushauri wa kiufundi katika
                                maeneo ya nyongeza ya thamani kwa mito ya maji machafu, mifumo isiyo ya kawaida ya matibabu ya maji machafu, kwenye maji taka ya tovuti.
                                mifumo ya matibabu pamoja na taka ngumu. Pia maabara inatoa huduma za ufuatiliaji wa mazingira kama vile;
                                Ubora wa hewa (utoaji wa chembechembe za chuma na gesi), kiwango cha kelele, mwangaza wa mwanga, mtetemo wa hewa, maji machafu na
                                ufuatiliaji wa ubora wa maji unaobebeka. Huduma nyingine ni Tathmini ya Athari kwa Mazingira na Ukaguzi wa Mazingira.
                          </p>
                          <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                6.Huduma za uchambuzi wa kemikali</strong><br>
                                Maabara ya Kemia hutoa huduma mbalimbali za uchanganuzi ikijumuisha upimaji wa ubora wa kifizikia wa mbichi
                                vifaa, bidhaa za viwandani na taka za viwandani. Haya yanahusisha uchanganuzi wa virutubishi vikubwa na vidogo katika chakula
                                na uchanganuzi wa karibu wa chakula kama vile kubaini kiwango cha majivu, unyevu, maudhui ya nishati/kalori
                                thamani, maudhui ya mafuta, maudhui ya wanga na maudhui ya protini. Mgawanyiko pia una uzoefu mkubwa katika chumvi,
                                uchambuzi wa ubora wa mbolea na chaki. Zaidi ya hayo, maabara ina uwezo wa uchambuzi wa metali nzito
                                katika malighafi za viwandani, bidhaa za viwandani, taka za viwandani na sampuli zingine za mazingira.
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
