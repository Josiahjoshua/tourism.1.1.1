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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Huduma za Utafiti </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Huduma za Utafiti</h4>
                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
        
                          <p class="about_hub">
                            TIRDO hufanya utafiti uliotumika kwa ajili ya <strong>Matumizi ya Nyenzo za Ndani:</strong> hii inahusisha kufanya utafiti uliotumika unaozingatia tathmini,
                            maendeleo, na matumizi ya nyenzo za ndani ndani ya michakato ya viwanda. Hii inajumuisha uchunguzi wa kimfumo wa jinsi anuwai za ndani
                            vifaa vinavyopatikana vinaweza kuunganishwa kwa ufanisi katika viwanda na uzalishaji wa viwanda. Huduma zinaweza kuwa katika mojawapo ya vipengele vifuatavyo;
                            <ul>
                                <li>
                                    Tathmini ya Nyenzo: TIRDO huchanganua sifa, sifa, na matumizi yanayowezekana ya nyenzo tofauti za ndani.
                                    Tathmini hii husaidia kuamua kufaa kwao kwa matumizi katika tasnia na michakato mbalimbali.
                                </li>
                                <li>
                                    Uendelezaji Nyenzo: Mara nyenzo za kuahidi zinapotambuliwa, TIRDO pia hushirikiana na washikadau watarajiwa katika
                                    kuboresha sifa za nyenzo au kuzirekebisha ili kuzifanya ziendane zaidi na michakato mahususi ya viwanda.
                                </li>
                                <li>
                                    Ushirikiano wa Viwanda: Kwa kushirikiana na wadau wa viwanda TIRDO hufanya majaribio, majaribio, na
                                    prototyping ili kuona jinsi nyenzo hizi zinaweza kuingizwa kivitendo katika michakato iliyopo au mpya ya kiviwanda
                                </li>
                            </ul>
                            Mbali na matumizi ya vifaa vya ndani, TIRDO pia inafanya Utafiti wa Mbinu na Teknolojia za Viwanda kwa lengo la kutoa ushauri kwa
                            Wadau wa Serikali au Viwanda kuhusu masuala mbalimbali ya mbinu na teknolojia za viwanda vya ndani na nje ya nchi. Kusudi
                             ya utafiti huu ni kutathmini uwezekano na ufaafu wa kutumia mbinu hizi ndani ya muktadha wa viwanda vya ndani.</br>
                            Kwa kujihusisha na shughuli hizi za utafiti, TIRDO inalenga kuziba pengo kati ya maarifa ya kisayansi na matumizi ya viwandani.
                            Shirika linajitahidi kuimarisha viwanda vya ndani kwa kutumia uwezo wa nyenzo za ndani na kutathmini uwezekano wa kufanikiwa.
                            ya kupitisha mbinu na teknolojia za nje. Kupitia juhudi hizi, TIRDO inachangia ukuaji na maendeleo ya Tanzania
                             sekta ya viwanda na uchumi.     
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