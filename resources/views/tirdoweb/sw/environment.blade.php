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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Mazingira</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <div class="col-12 px-0 mt-4">
                            <!-- this is to add a picture of the department head -->
                            <div class="row">
                              <div class="col-md-4 col-xs-12">
                                <div class="text-center img-frame custom-img-frame">
                                        <img src="/uploads/administration/Kunda_Sikazwe_-_HoD_Environment.png" alt="Departmental Head" class="img-fluid">
                                </div>
                              </div>

                              <div class="col-md-8">
                                <div class="">
                                    <h5 class="title mb-2">Bi. Kunda Sikazwe</h5>
                                  <small><i>   </i></small>
                                </div>
                                <div class="col-12 px-0 my-2">
                                  <p>Mkuu wa Kitengo cha Mazingira</p>
                                </div>
                              </div>
                            </div>

                          </div>
                          <h4 class="mt-3">TEKNOLOJIA YA MAZINGIRA NA KITENGO CHA USALAMA KAZINI</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                              Mgawanyiko wa Teknolojia ya Mazingira na Usalama Kazini hujihusisha katika masuala yanayohusu utafiti na maendeleo ya viwanda,
                              usimamizi wa mazingira na kuhakikisha usalama wa afya na usalama kazini wa sakafu ya kazi ya viwandani kwa ajili ya kuboresha uzalishaji na
                              ustawi wa wafanyakazi wa viwanda

                            </p>

                            <h4>Tunachofanya bora zaidi </h4>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">

                               <strong>1.Utafiti na Maendeleo</strong><br>
                               Ni shughuli kuu ya mgawanyiko. Programu za utafiti zinazoshughulikiwa ni pamoja na:-</p>
                              <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;text-decoration: none;" >
                                <li>Ongezeko la thamani kwa mikondo ya taka za viwandani.</li>
                                <li>-mfumo wa kawaida wa kutibu maji machafu. </li>
                                <li>Mifumo ya kutibu maji taka kwenye tovuti.</li>
                               <li>Uzalishaji safi katika viwanda vya ngozi na nguo.</li>
                               </ul>
                            </p>

                            <strong style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">2.Ushauri na huduma za kiufundi kwa viwanda</strong><br>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                              Jumuisha ushauri kwa tasnia kuhusu jinsi ya kusimamia rasilimali zao kwa uzalishaji bora huku kikihakikisha uchafuzi mdogo wa mazingira.<br>
                              Kitengo hiki kinatoa huduma za ufuatiliaji wa ubora wa mazingira ndani na nje kwa viwanda, taasisi za serikali na wateja binafsi.<br>
                              Huduma za ufuatiliaji wa ubora wa mazingira ni pamoja na Ubora wa Hewa (Chembechembe za chuma na gesi), kiwango cha kelele, mwangaza wa mwanga, mtetemo wa ardhi, joto, maji machafu na ufuatiliaji wa ubora wa maji ya kunywa.<br>
                              Huduma zingine ni pamoja na tathmini ya Athari za Mazingira na Ukaguzi wa Mazingira.
                          </p>

                           <h4> Mafanikio</h4>
                        <ul style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                          <li>Ufuatiliaji wa ubora wa hewa wa ndani kwa chuma/chuma, usindikaji wa tumbaku, viwanda vya kutengeneza saruji na mgodi.</li>
                          <li>Ufuatiliaji wa maji taka kwa vinywaji, usindikaji wa tumbaku, viwanda vya chuma/chuma, viwanda vya kutengeneza pombe na mgodi.</li>
                          <li>Ufuatiliaji wa kiwango cha kelele katika migodi, saruji, usindikaji wa tumbaku, viwanda vya chuma/chuma.</li>
                          <li>Ufuatiliaji wa gesi ya moshi katika migodi, saruji, usindikaji wa tumbaku, viwanda vya chuma/chuma.</li>
                          <li>Ufuatiliaji wa chembechembe katika migodi, viwanda vya saruji, usindikaji wa tumbaku, viwanda vya chuma/chuma.</li>
                          <li>Ufuatiliaji wa ubora wa kibayolojia na kemikali wa tope kutoka kwa kazi za maji taka za baadhi ya viwanda.</li>
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
