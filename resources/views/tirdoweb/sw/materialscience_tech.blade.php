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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Material science and technology</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                      <div class="row">
                        <div class="col-md-4 col-xs-12">
                          <div class="text-center img-frame custom-img-frame">                                    
                                  <img src="/uploads/administration/Eng.Liberatus Chizuzu.png" alt="Departmental Head" class="img-fluid">
                          </div>
                        </div>
      
                        <div class="col-md-8">
                          <div class="">
                            <h5 class="title mb-2">Eng.Liberatus Chizuzu</h5>
                            <small><i>   </i></small>
                          </div>
                          <div class="col-12 px-0 my-2">
                            <p>Mkuu wa Sehemu ya Sayansi ya Nyenzo na Teknolojia</p>
                          </div>
                        </div>
                      </div>
                        <h4>MATERIAL SCIENCE AND TECHNOLOGIES</h4>
        
                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                              Kushtakiwa kwa jukumu la kuunda na kubainisha matumizi ya vifaa kulingana na gharama na utendaji,
                              kuelewa mipaka ya nyenzo na mabadiliko katika mali na kuunda nyenzo mpya na mali bora.
                              Nyenzo zinazoshughulikiwa ni pamoja na metali, keramik, polima, biomaterials na composites.
        
                            </p>
                            <h4>Utafiti na Maendeleo</h4>
                            <P style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                1) Utafiti wa metallurgiska<br>
                            <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                <li>Utangulizi wa mbinu za upili za madini katika vinu/vyanzo vya kusokota chuma.</li>
                                 <li>Uendelezaji wa chuma cha sifongo kwa ajili ya kusaga na viwanda vya kuviringisha</li>
                                </ul>

                            </P>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                              2) Coke kwa chuma na chuma
                              <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                <li>Tabia ya makaa ya kupikia</li>
                                <li>Uchanganyaji wa Makaa ya Mawe</li>
                                <li>Makaa ya mawe kwa teknolojia ya coke</li>
                                  </ul>
                            </p>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                              3)Huduma za Ukaguzi/Ushauri<br>
                              Kitengo hiki kina vifaa vya kubebeka na vyombo vya kutekeleza Visivyoharibu
                                  Shughuli za majaribio. Uwezo uliopo unawezesha kitengo kufanya huduma zifuatazo<br>
                              i).Jaribio la uharibifu (DT)<br>
                              Majaribio ya uharibifu (DT) ni njia ya majaribio inayofanywa ili kupata uhakika halisi wa kushindwa kwa nyenzo, vipengele au mashine. Wakati wa mchakato huo,
                               bidhaa iliyojaribiwa hupitia mkazo ambao hatimaye
                              huharibu au kuharibu nyenzo. Kwa kawaida, sehemu zilizojaribiwa na nyenzo haziwezi kutumika tena mara kwa mara
                              operesheni baada ya kupitia taratibu mbovu za majaribio.<br>
                              <h6>Huduma</h6>
                              <ul>
                                <li>Jaribio la ugumu (HT)</li>
                                <li>Jaribio la Tensile (elongation)</li>
                                <li>Jaribio la torsion</li>
                                </ul>


                                ii).Jaribio Lisiloharibu (NDT)<br>
                                Jaribio lisiloharibu (NDT) linajumuisha safu kubwa ya mbinu za uchanganuzi ambazo zinatumika kwa anuwai ya tasnia.
                                Mbinu hizi zinaweza kutambua na kutathmini kasoro na kuchunguza mali ya kila aina ya vifaa na miundo bila kusababisha uharibifu.
                                Kwa kuwa NDT haibadilishi sehemu au muundo unaokaguliwa, ni mbinu muhimu sana ambayo inaweza kusababisha uokoaji wa gharama na wakati.
                                inatumika kwa tathmini za bidhaa, usimamizi wa mali na utambuzi wa makosa na ukarabati.
 
                                Mbinu za NDT kama vile upimaji wa ultrasonic (UT), ukaguzi wa chembe za sumaku (MPI), upimaji wa kipenyo cha kioevu (LPT), upimaji wa radiografia (RT),
                                ukaguzi wa kuona wa mbali na upimaji wa sasa wa eddy sasa unatumika katika uhandisi wa kiraia, angani na mifumo. <br>

                                <h6>Huduma</h6>

                                     <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                        <li>Jaribio la Sasa la Eddy</li>
                                        <li>Ukaguzi wa Sasa wa Eddy</li>
                                        
                                        </ul>
                            
                            </p>
                            <p>
                              <img src="/uploads/icon/UT1.png" style="padding:7px;float:left;"> 
                              <img src="/uploads/icon/UT2.png" style="padding:7px;float:left;">
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