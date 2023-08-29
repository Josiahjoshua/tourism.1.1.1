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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Fedha</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Fedha</h4>
                        <div class="col-12 px-0 mt-4">
                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#000000"><strong>Lengo</strong></span></span></span></p>

                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif">
                                Kutoa utaalamu na huduma za fedha na hesabu kwa taasisi.
                            </span></span>
                            </p>

                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#000000"><strong>KAZI</strong></span></span></span></p>

                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif">
                                Idara itafanya kazi zifuatazo:<br><br>
                                • Kuratibu maandalizi, mapitio na utekelezaji wa Mpango Mkakati wa Biashara, Mpango Kazi na Bajeti ya Mwaka;<br>
                                • Kupitia zana za usimamizi kama vile kanuni za fedha, sera ya uhasibu, mwongozo na nyinginezo, kumbukumbu, taarifa na data kama inavyothibitishwa katika sera na kanuni za utumishi wa umma;<br>
                                • Kutayarisha, kuchunguza na kutathmini mifumo na taratibu za fedha na sahihi za uhasibu ikijumuisha kanuni bora za fedha ili kuhakikisha utegemezi na uadilifu wa mfumo;<br>
                                • Kuhakikisha uhasibu na udhibiti sahihi wa mapato na matumizi na kuratibu utayarishaji wa taarifa za fedha za mwaka;<br>
                                • Kutoa ushauri juu ya ufanisi wa shirika na uboreshaji wa mchakato wa biashara, na kukuza programu na shughuli mbalimbali za maendeleo.<br>
                                • Kutoa ushauri wa kiufundi kuhusu fedha na akaunti, teknolojia ya mawasiliano ya habari, usimamizi wa mali na masoko.<br>
                                • Kuanzisha na kutekeleza mfumo wa usimamizi wa rasilimali fedha na mali; <br>
                                • Kuhakikisha usimamizi mzuri wa mtiririko wa fedha wa taasisi;<br>
                                • Kuratibu wahusika wote wa kifedha karibu na taasisi: wasambazaji, washauri wa sheria na utawala, huduma za kodi; na<br>

                                • Kuhakikisha masuala mtambuka yanashughulikiwa katika Mipango Mkakati na mipango kazi ya Mwaka.<br>
                                
                            </span></span></p>
                            
                        </div>
                    </div>
                    {{-- {% include 'en/new_section.html' %} --}}
                </div>
            </div>
        </div>

    </div>

<!-- /contents -->
@endsection