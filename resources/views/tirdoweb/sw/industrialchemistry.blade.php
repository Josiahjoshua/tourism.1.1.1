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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Viwanda na kemia</li>
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
                            <h5 class="title mb-2">Ms.Jacqueline Mwendwa</h5>
                            <small><i>   </i></small>
                          </div>
                          <div class="col-12 px-0 my-2">
                            <p>Mkuu wa Sehemu ya Kemia ya Viwanda</p>
                          </div>
                        </div>
                      </div>
                        <h4>KEMIA YA VIWANDA YA USAKANYAJI WA KILIMO</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                    
                              Idara ya Teknolojia ya usindikaji wa mazao ya kilimo na kemia ya viwanda iko chini ya Utafiti wa Viwanda
                              Idara. Ina sehemu kadhaa zikiwemo; kemia ya dawa na sintetiki, nanoteknolojia na
                               nyenzo mpya, kemia ya uchanganuzi na mazingira na bidhaa asilia kemia.<br>
                             Tanzania inakua kwa kasi katika ukuaji wa viwanda kwa kutumia malighafi ya mazao ya kilimo. Tafiti hizo
                             kuhusisha teknolojia ya usindikaji wa kijani kibichi na kemia ya viwandani ni muhimu. Kitengo hicho kinajishughulisha na utafiti na
                             ushauri katika michakato ya uchambuzi, kimwili na kemikali kuelekea mabadiliko ya mazao ya kilimo na yao
                             bidhaa za ndani ya bidhaa za viwandani au bidhaa zilizoongezwa thamani ambazo zina manufaa kwa maisha ya binadamu.<br><br>

                    <strong style="font-size: 15px;">
                      Kitengo cha usindikaji wa mazao ya kilimo na kemia ya viwanda kiliundwa kwa makusudi ili:
                    </strong><br>
                    
                    <ul  style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                      <li>Kukuza matumizi ya malighafi za ndani kwa ajili ya uzalishaji viwandani kupitia uongezaji wa thamani</li>
                      <li>Toa huduma za maabara za ubora, zinazotegemewa na zinazotambulika kimataifa.</li>
                      <li>Weka hati na usambaze ujuzi uliopatikana kupitia utafiti.</li>
                      <li>Boresha teknolojia za ndani ambazo zitazalisha bidhaa zinazokidhi viwango/maagizo ya mteja.</li>
                      <li>Usambazaji wa teknolojia zilizopitishwa na kubadilishwa kutoka nchi zingine ambazo zinachukuliwa kuwa zinafaa kwa viwanda.
                           maendeleo nchini.
                          </li>
                        </ul>
                        
                    </p> 
                    <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                      Kitengo hiki kina maabara ya kemia iliyo na vifaa vya kutosha kuhudumia usindikaji wa kilimo na utafiti na miradi ya kemia ya viwanda.
                      Huduma za ushauri zinahusisha upimaji wa ubora wa kifizikia wa malighafi, bidhaa za viwandani na taka za viwandani.
                       Hizi ni pamoja na uchanganuzi wa karibu wa chakula kutoka asili ya mimea na wanyama, uamuzi wa virutubishi vidogo katika chakula, mbolea na chumvi.
                      uamuzi wa ubora pamoja na uchambuzi wa metali nzito katika malighafi, bidhaa za viwandani na taka za viwandani. Pia mgawanyiko
                      hutoa suluhu au ushauri kwa matatizo yanayokumba viwanda na SMEs katika maeneo ya usindikaji wa mazao ya kilimo na kemia ya viwanda.
                          <br>
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