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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Ukaguzi wa Nishati</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Ukaguzi wa Nishati</h4>
                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">

                            <p class="about_hub">
                                <b>Ukaguzi wa Nishati </b><p>Usimamizi wa Nishati(EM) ni ufuatiliaji, udhibiti na ufuatiliaji makini na wa kimfumo.
                                    uboreshaji wa matumizi ya nishati ya shirika ili kuhifadhi nishati na kupungua
                                    gharama za nishati. Ukaguzi wa nishati, kama kipengele cha kwanza muhimu katika EM, ni ukaguzi wa kimfumo
                                    na uchambuzi wa matumizi ya nishati na matumizi ya tovuti, jengo, mfumo, au
                                    shirika kwa lengo la kutambua mtiririko wa nishati na uwezekano wa nishati
                                    uboreshaji wa ufanisi na kuziripoti</p></p>

                                <p>
                                    TIRDO hutoa huduma za Ukaguzi wa Nishati kwa viwanda, majengo ya biashara, na
                                    kaya. Huduma hii ina jukumu kubwa katika usimamizi wa nishati, ambayo ni muhimu kwa
                                    viwanda na biashara kuendelea kuwa na ushindani. Katika kusaidia maendeleo ya viwanda,
                                    tunaelewa jinsi nishati ni muhimu kama ingizo la sharti ambalo linahitaji kuwa sawa
                                    imeweza kudumisha ubora wa biashara. Huduma ya kitaalam ya ukaguzi wa nishati
                                    zinazotolewa na TIRDO inalenga kusimamia na kuziba pengo lililopo katika nishati
                                    usimamizi. Pamoja na mgogoro wa sasa wa nishati duniani na mipango ya kushughulikia hali ya hewa
                                    mabadiliko, ukaguzi wa nishati husaidia kuamua nyayo za kaboni na kuweka malengo ya kupunguza
                                    huku ukitoa chaguzi mbalimbali za kubadili kati ya vyanzo tofauti vya nishati safi.
                                    Kuwa na msingi imara wa kimazingira, kijamii, na utawala (ESG) husaidia
                                    makampuni huokoa nishati, kuongeza uwazi, na kufanya kazi kuelekea bora
                                    malengo endelevu.
                                </p>
                                <p>
                                    Maabara ya kisasa ya Ufanisi wa Nishati na Wakaguzi wa Nishati Walioidhinishwa na
                                    Wasimamizi (CEA na CEM) huweka huduma ya TIRDO kwa kiwango cha kimataifa zaidi
                                    Tanzania, yaani, EAC, n.k. Ili kuzingatia matakwa ya soko la kimataifa, ASHRAE zote mbili
                                    na mahitaji na taratibu za viwango vya ISO zinafuatwa wakati wa utekelezaji
                                    ukaguzi wa nishati kuhusiana na utendaji wa nishati. Miongoni mwa huduma zingine zinazotolewa na
                                    maabara ni upimaji wa utendaji wa mifumo ya nishati kama vile oveni, majiko ya kupikia, boilers, tumbaku
                                    ghala, na vikaushio vya jua, miongoni mwa mengine.
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
