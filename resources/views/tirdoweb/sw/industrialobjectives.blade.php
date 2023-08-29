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
                          <li class="breadcrumb-item list-inline-item font-weight-bold">Kituo cha Habari za Viwanda</li><li class="breadcrumb-item list-inline-item active">Malengo ya Msingi</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">

                <div class="col-md-9 bg-white py-3 page-content">
                    <h4>Malengo Muhimu</h4>

                    <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                      <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                             <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                1. Usambazaji wa Maarifa:</strong></br>
                                Kituo kitafanya kazi kama ghala la habari za kisasa zinazohusiana na tasnia mbalimbali,
                                ikijumuisha michakato ya utengenezaji, mwelekeo wa soko, mifumo ya udhibiti na maendeleo ya kiteknolojia.
                      </p>
                      <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                             <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                2. Usaidizi wa Utafiti:</strong></br>
                                Watafiti wa TIRDO na taasisi nyingine watanufaika na mkusanyiko mkubwa wa majarida ya kitaalamu ya kituo hicho,
                                karatasi za utafiti, na hataza, kuwezesha kazi zao na kukuza uvumbuzi.
                      </p>
                      <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                        <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            3. Maarifa ya Kiwanda:</strong></br>
                            Kituo kitafanya tafiti na uchanganuzi wa mara kwa mara, kutoa tasnia ufahamu muhimu
                            fursa zinazojitokeza na changamoto zinazowezekana, zinazochangia ukuaji wao na ushindani.
                        </p>
                        <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                4. Mafunzo na Warsha:</strong></br>
                                Warsha, semina, na vikao vya mafunzo vitaandaliwa ili kuboresha seti ya ujuzi wa wataalamu na
                                 wajasiriamali, kukuza mazingira ya kujifunza na maendeleo endelevu.
                        </p>
                        <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                        <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            5. Jukwaa la Ushirikiano: </strong></br>
                            Kituo kitahimiza ushirikiano kati ya wasomi, viwanda, na serikali, kukuza kubadilishana maarifa
                            na kuendesha miradi shirikishi ya utafiti na maendeleo.
                </p>

                    </div>
<br>
                    <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                        <h5><b>Vifaa na Huduma:</b></h5>

                        <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            <li>Rasilimali za Maktaba na Dijitali: Kituo kitakuwa na maktaba halisi iliyo na mkusanyiko mkubwa wa vitabu, majarida na ripoti.
                                Zaidi ya hayo, itatoa ufikiaji mtandaoni kwa hifadhidata za kidijitali na zana za utafiti. </li><br>
                            <li>Uchambuzi na Taswira ya Data: Iliyo na programu ya kisasa ya uchanganuzi wa data,
                                kituo kitasaidia sekta katika kutafsiri data na mienendo kwa ufanisi.</li><br>
                            <li>Mitandao na Matukio: Kituo hiki kitaandaa matukio ya mitandao, mikutano na maonyesho ya viwandani,
                                 kuwaleta wadau pamoja ili kujadili changamoto na fursa. </li><br>
                            <li>Ushauri wa Kiufundi: Timu ya wataalam wa mada itapatikana ili kutoa ushauri wa kiufundi na ushauri kwa wajasiriamali na viwanda vinavyotafuta mwongozo.</li>
                         </ul>

                      </div>

                </div>

                
                @include('tirdoweb.sw.newsection')

                </div>
            </div>
        </div>

    </div>

<!-- /contents -->
@endsection
