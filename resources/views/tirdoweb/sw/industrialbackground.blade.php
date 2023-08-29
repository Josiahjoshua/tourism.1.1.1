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
                          <li class="breadcrumb-item list-inline-item font-weight-bold">Kituo cha Habari za Viwanda</li><li class="breadcrumb-item list-inline-item active">Historia</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">

                <div class="col-md-9 bg-white py-3 page-content">
                    <h4>Historia</h4>
    
                    <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                        <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                
                            Serikali ya awamu ya tano imeanza mchakato wa uanzishaji wa viwanda kwa kasi ili kuhakikisha ukuaji wa haraka wa uchumi shirikishi na wakati huo huo kuhakikisha maendeleo ya watu.
                            Hii inaendana na Dira ya Maendeleo ya Tanzania, 2025; Ilani ya Chama Cha Mapinduzi (CCM), 2015-2020; na Mpango wa Maendeleo wa Miaka Mitano, 2016/17-2020/21.
                            Kwa ajili ya uendelevu wa viwanda vinavyoanzishwa pamoja na vilivyopo, kuna haja ya miundombinu yenye nguvu ya Utafiti na Maendeleo (R&D).</br></br>
                            Katika jitihada za kukabiliana na azma ya Serikali ya sasa kuhusu uanzishaji wa viwanda,
                            Shirika la Utafiti na Maendeleo ya Viwanda Tanzania (TIRDO) kama taasisi ya R&D iliyopewa jukumu la kusaidia sekta ya viwanda
                            imeainisha maeneo kadhaa muhimu ya athari za kiuchumi na kijamii zinazohitaji kushughulikiwa ili kufikia haraka na
                                maendeleo endelevu ya viwanda. Masuala makuu yaliyoainishwa ni uwezo wa uratibu, ufuatiliaji wa teknolojia za viwanda
                                zote zimeendelezwa ndani ya nchi na kuagizwa kutoka nje pamoja na maonyesho ya teknolojia hizo. Ili kuongeza uwezo huu,
                                TIRDO inakusudia kuanzisha kituo cha habari cha viwanda, ambacho kitatoa miongoni mwa mengine; habari ya viwanda iliyosasishwa,
                                huduma za kliniki za viwandani na huduma za incubation viwandani.</br></br>
                            Kituo cha Habari za Viwanda ni kituo maalum ambacho hutumika kama hazina ya habari kamili na ya kisasa.
                            kuhusiana na sekta mbalimbali za viwanda. Kusudi lake kuu ni kutoa data muhimu, nyenzo za utafiti, maarifa ya kiufundi,
                            na maarifa ya soko ili kusaidia na kukuza ukuaji wa viwanda, uvumbuzi na maendeleo. Kituo hiki hufanya kazi kama kitovu cha maarifa,kukidhi mahitaji ya watafiti, wajasiriamali, viwanda, watunga sera, na washikadau wengine katika mfumo ikolojia wa viwanda ili kufanya maamuzi sahihi.</br></br>
                            Zaidi ya hayo, kituo kitakuza mazingira ya uvumbuzi na ubunifu kupitia ufikiaji wa anuwai ya karatasi za utafiti,
                            hati miliki, na ujuzi wa kiufundi. Watafiti na wajasiriamali watajenga juu ya ujuzi uliopo, na kusababisha maendeleo ya bidhaa za riwaya,
                            michakato, na teknolojia zinazoshughulikia changamoto mahususi za sekta.</br></br>

                            Inatarajiwa kuwa kituo hicho kitaongeza ushindani wa viwanda kwa kuwapa wafanyabiashara maarifa muhimu kuhusu fursa zinazojitokeza,
                            mahitaji ya soko, na vitisho vinavyowezekana. Kwa kutumia habari hii, tasnia zinaweza kuboresha shughuli zao, kukuza mikakati iliyoundwa,
                            na kukabiliana na mienendo ya soko kwa ufanisi. Zaidi ya hayo kama njia ya kuunda mazingira ya ushirikiano kituo kitaimarisha ushirikiano kati ya wasomi,
                            viwanda, na serikali. </br></br>
                            Hivyo basi, kuanzisha Kituo cha Taarifa za Viwanda nchini Tanzania ni hatua ya kimkakati itakayowanufaisha wadau mbalimbali vikiwemo viwanda,
                            watafiti, watunga sera, na wajasiriamali. Kwa kutoa jukwaa la usambazaji wa maarifa, uvumbuzi, na ushirikiano,
                            kituo hicho kitakuwa na mchango mkubwa katika kukuza ukuaji wa viwanda na ustawi wa uchumi wa Tanzania katika muda mrefu.

                      </p>
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