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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Nishati</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                      <div class="row">
                        <div class="col-md-4 col-xs-12">
                          <div class="text-center img-frame custom-img-frame">                                    
                                  <img src="/uploads/administration/Eng.Hossen Iddi Kayumba.png" alt="Departmental Head" class="img-fluid">
                          </div>
                        </div>
      
                        <div class="col-md-8">
                          <div class="">
                            <h5 class="title mb-2">Eng.Hossen Iddi Kayumba</h5>
                            <small><i>   </i></small>
                          </div>
                          <div class="col-12 px-0 my-2">
                            <p>Mkuu wa Sehemu ya Nishati</p>
                          </div>
                        </div>
                      </div>
                        <h4>MANDATE</h4>
        
                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                
                              Kuongeza upatikanaji wa nishati safi kwa Watanzania wote kwa kufanya utafiti na maendeleo
                              katika teknolojia ya nishati na kwa kutoa huduma za usimamizi wa nishati.
        
                            </p>
                            <h4>HUDUMA ZETU</h4>
                            <P style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                1) Utafiti na maendeleo <br><br>
                               <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                Makaa ya mawe Tabia kwa</strong><br>
                            <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                              <li>Migodi ya makaa ya mawe iliyopo</li>
                              <li>Viwanja vipya vya makaa ya mawe</li>
                              <li>Utengenezaji wa hifadhidata ya makaa ya mawe</li>
                              </ul>

                            </P>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                2) Maendeleo ya teknolojia ya makaa ya mawe kwa Viwanda, kilimo na matumizi ya kaya
                              <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                <li>Methane ya kitanda cha makaa ya mawe</li>
                                <li>Mwako wa makaa ya mawe</li>
                                 <li>Uwekaji gesi wa makaa ya mawe</li>
                                 <li>Kuweka briquet ya makaa ya mawe</li>
                                 <li>Makaa hadi kimiminika</li>
                                  </ul>
                            </p>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                3) Maendeleo ya teknolojia ya nishati mbadala
                              <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                <li>Biomas</li>
                                <li>Upepo</li>
                                <li>Jua</li>
                                <li>Hydro(mini)</li>
                                  </ul>
                            </p>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                4) Washauri	
                              <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                <li>Ukaguzi wa nishati</li>
                                 <li>Tathmini ya ubora wa rasilimali ya makaa ya mawe (RQA) inapohitajika.</li>
                                  </ul>
                            </p>
                            <p>
                              <img src="/uploads/icon/energylab.png" style="padding:7px;float:left;"> 
                              <img src="/uploads/icon/energy-coal.jpg" style="padding:7px;float:left;">
                              <img src="/uploads/icon/energy1.png" style="padding:7px;float:left;">
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