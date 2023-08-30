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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO COMSATS</li><li class="breadcrumb-item list-inline-item active">COMSATS-Background</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>COMSATS Kituo cha Hali ya Hewa na Uendelevu (CCCS) KATIKA Shirika la Utafiti na Maendeleo ya Viwanda Tanzania
                            Organization (TIRDO)</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">

                                Tarehe 10 Oktoba 2018, idhini ilitolewa ili kuanzisha Kituo cha COMSATS cha Hali ya Hewa na Uendelevu.
                                (CCCS) nchini Tanzania katika TIRDO.<br><br>
                       Ajenda ya Maendeleo ya Dunia ya 2030 ina Malengo 17 ya Maendeleo Endelevu (SDGs) na Hali ya Hewa ya Paris.
                            Makubaliano yanatoa msingi wa maendeleo endelevu ya kaboni ya chini na ustahimilivu. Viungo kati ya
                             mabadiliko ya tabianchi na maendeleo endelevu yana nguvu.

                   Mabadiliko ya hali ya hewa ni tishio kubwa kwa maendeleo endelevu. Ajenda ya Maendeleo ya 2030 inabainisha hali ya hewa
                        mabadiliko kama "moja ya changamoto kubwa ya wakati wetu" na inasema kwamba "athari zake mbaya hudhoofisha uwezo wa nchi zote kupata maendeleo endelevu".

                   Kusimamia na kukabiliana na hatari ya hali ya hewa ya muda mrefu ni muhimu kwa maendeleo endelevu. Kwa hivyo mazingira
                       uendelevu ndio mada kuu inayounganisha SDGs. Sio tu kwamba mabadiliko ya hali ya hewa yamepewa kujitolea kwake
                       lengo (Lengo la 13), lakini pia limeunganishwa katika takriban SDGs nyingine zote.

                   Tume ya Sayansi na Teknolojia ya Maendeleo Endelevu Kusini (COMSATS) imeamua kuunda
                       mtandao wa Kituo cha COMSATS cha Hali ya Hewa na Uendelevu (CCCS).<br><br>
                       COMSATS ni shirika baina ya serikali
                       ya nchi 27 zinazoendelea kama wanachama walioko Islamabad, Pakistan. Ina Mtandao wa 22 International S&T
                       Vituo vya Ubora. Shirika la Utafiti na Maendeleo ya Viwanda Tanzania (TIRDO) ni Kituo cha
                       Ubora wa COMSATS. Taarifa kuhusu COMSATS inaweza kupatikana kwenye www.comsats.org.

                       Nchi wanachama wa COMSATS zinazovutiwa zitafanya kazi katika mfumo wa CCCS kuhusu ahadi na madhumuni ya pamoja katika
                       kushughulikia changamoto mbili za mabadiliko ya tabianchi na maendeleo endelevu.

                   Mfumo wa kitaasisi utakuwa kwenye kanuni ya manufaa ya pande zote chini ya Ushirikiano wa Kusini-Kusini na Utatu
                        na kwa kuzingatia umuhimu wa ushirikiano kama njia muhimu chini ya SDG 17.

                   Kituo cha COMSATS cha Hali ya Hewa na Uendelevu kitakuwa taasisi ya wadau mbalimbali inayofanya kazi katika mfumo wa

                       Ushirikiano wa Kusini-Kusini na Utatu kuleta mbinu bunifu za kupanga, kufadhili na kukabiliana na mabadiliko ya hali ya hewa
                       changamoto zinazoendana na sera na desturi za nchi zinazoendelea na wajibu wao wa kimataifa.
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
