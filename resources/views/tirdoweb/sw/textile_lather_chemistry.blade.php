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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Nguo na ngozi</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                      <div class="row">
                        <div class="col-md-4 col-xs-12">
                          <div class="text-center img-frame custom-img-frame">
                                  <img src="/uploads/administration/unknown.png" alt="Departmental Head" class="img-fluid">
                          </div>
                        </div>

                        <div class="col-md-8">
                          <div class="">
                            <h5 class="title mb-2">Eng. Athanas Ntawanga</h5>
                            <small><i>   </i></small>
                          </div>
                          <div class="col-12 px-0 my-2">
                            <p>Mkuu wa Sehemu ya nguo na ngozi</p>
                            </div>
                          </div>
                        </div>
                          <h4>NGUO NA NGOZI</h4>

                          <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                              <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                    Idara ya Teknolojia ya Nguo na Ngozi inashughulika na maendeleo
                                      ya teknolojia safi na ya ushindani ya nguo na uzalishaji wa ngozi, ubora
                                       uhakikisho wa mnyororo wa thamani wa nguo na ngozi na kuongeza thamani kwa ngozi na nguo
                                       mito ya taka<br><br>
                                       <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                           Zaidi katika suala la Utafiti na Maendeleo tunashughulikia:-</strong><br>

                                       a) Utengenezaji wa bidhaa kwa kutumia collagen na nyuzi asili.<br>
                                        b) Ukuzaji wa bidhaa za ngozi na nguo.<br>
                                        c) Teknolojia za utengenezaji wa vitambaa visivyo na kusuka.<br>
                                        d) Usanifu wa Muundo wa Kitambaa kilichofumwa.<br>
                            </p>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">

                                   <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                    Kwa ushauri tunashughulika na:-</strong><br>
                                    a) Uzi, vitambaa na uhakikisho wa ubora wa ngozi.<br>
                                    b) Huduma za maabara kwa vifaa vya nguo na ngozi.<br>
                                    c) Matengenezo ya mashine za kufuma nguo.<br>
                                    d) Mafunzo ya uzalishaji wa ngozi, kusokota na kusuka.<br>
                                    e) Mafunzo ya utumiaji wa kamera ya kuchakata tena ngozi.<br>
                                   f) Uzalishaji wa kitanzi cha mkono.<br>
                             </p>
                             <p>
                              <img src="/uploads/icon/leather1.png" style="padding:7px;float:left;">
                              <img src="/uploads/icon/leather2.png" style="padding:7px;float:left;">
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
