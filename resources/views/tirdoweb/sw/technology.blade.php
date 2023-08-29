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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Idara ya Uhamisho wa Teknolojia</li>
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
                            <h5 class="title mb-2">Bi. Martha Mhongole</h5>
                            <small><i> </i></small>
                          </div>
                          <div class="col-12 px-0 my-2">
                            <p>Mkuu wa Sehemu ya Uhawilishaji Teknolojia na Mimea ya Majaribio</p>
                          </div>
                        </div>
                      </div>
                        <h4>Idara ya Uhamisho wa Teknolojia na Mimea ya Majaribio</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p class="about_hub">

                                <strong class="about_hub">
                                    Malengo</strong><br>
                                    Kutoa utaalam na huduma juu ya matumizi ya TEHAMA kwa Shirika na pia, kutoa kiufundi
                                    ushauri na usaidizi kwa viwanda na wadau wengine kuhusu masuala ya ICT.
                          </p>
                          <p class="about_hub">
                                Kitengo hiki kitafanya shughuli zifuatazo:<br><br>
                                 <strong class="about_hub">
                                    1. Utafiti na waendelezaji</strong><br>
                                 <ul class="about_hub">
                                  <li>Usalama wa Mtandao na Uchunguzi wa Uchunguzi</li>
                                 <li>Programu za vitambuzi </li>
                                  <li>Programu za rununu</li>
                                  <li>Udhibiti wa taka za mtandaoni</li>

                                 </ul>
                          </p>
                          <p class="about_hub">
                             <strong class="about_hub">
                                2. Ushauri</strong><br>
                             <ul class="about_hub">
                                <li>Utafiti wa viwanda, Ubunifu na hifadhidata ya teknolojia</li>
                                <li>Matumizi ya ICT katika shughuli za SME </li>
                                <li>Matumizi ya kina ya kompyuta katika ufundishaji</li>
                                <li>Lango la wazo</li>

                             </ul>
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
