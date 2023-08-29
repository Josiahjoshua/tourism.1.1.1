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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO-COMSATS</li><li class="breadcrumb-item list-inline-item active">Shughuli za kituo</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Maeneo ya kipaumbele na Shughuli za CCCS</h4>
        
                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                    
                                Kituo cha COMSATS cha Hali ya Hewa na Uendelevu (CCCS-TIRDO) kiko chini ya Teknolojia ya Mazingira.
                                na kitengo cha Afya na Usalama Kazini.
                             Idara inajihusisha na masuala yanayohusu Utafiti na Maendeleo ya Viwanda,
                           usimamizi wa Mazingira na kuhakikisha usalama wa Afya na Usalama Kazini wa viwanda
                            sakafu ya kazi kwa ajili ya kuboresha uzalishaji na ustawi wa wafanyakazi wa viwanda.
                          </p>
                          <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            Tunachofanya:<br><br>
                                 <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                    1. Shughuli za Utafiti na Maendeleo zinazojumuisha:</strong><br>	
                                 <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                    <li>Ongezeko la thamani kwa mikondo ya taka za viwandani.</li>
                                    <li>Teknolojia safi za uzalishaji katika sekta ya viwand</li>
                                    <li>Udhibiti wa taka kioevu na ngumu.</li>
                                 </ul>
                          </p>
                          <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                             <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                2.Ushauri na huduma za kiufundi kwa viwanda.</strong><br>	
                             <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                <li>Usimamizi wa mazingira wa ndani na nje</li>

                                <li>Huduma za ufuatiliaji wa ubora wa hewa wa mazingira hasa: </li>
                                
                                <li>Particulate matter (PM) na utoaji wa gesi chafuzi.</li>
                                <li>Tathmini ya kiwango cha kelele</li>
                                <li>Uzito wa mwanga</li>
                                <li>Kiwango cha joto</li>
                                <li>Mtetemo wa ardhini.</li>
                                <li >Tathmini ya athari za kimazingira na kijamii (ESIA) na ukaguzi wa mazingira (EA).</li>
                        
                             </ul>
                             
	
	
	                              <h4>Mtu wa Kuwasiliana na Kituo cha COMSATS cha Hali ya Hewa na Uendelevu - TIRDO:</h4>
	                              Ms. Jacqueline Godfrey Mwendwa.<br>
	                              Research Officer.<br>
	                              COMSAT Centre for Climate & Sustainability – TIRDO
	                              Kimweri Avenue – Msasani.<br>
	                              P. O. BOX 23235.<br>
	                              Dar es Salaam – Tanzania.<br>
	                              Office: +255 22 2666034/ 2668822.<br>
                                  Fax: +255 22 2666034.<br>
                                  E-mail:info@tirdo.or.tz.	

                                         </br>
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