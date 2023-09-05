@extends('tirdoweb.sw.base_layout')
        <!-- /HEADER -->

        <!-- contents -->
@section('content')
        <!-- contents -->
        <div class="home-page ">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="10000">
                <ol class="carousel-indicators">
                    @foreach($carousel_items as $key => $item)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" {{ $loop->first ? 'class=active' : '' }}></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($carousel_items as $key => $item)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img class="d-block w-100" alt="{{ $item->text }}" src="{{ asset('storage/'.$item->image) }}">
                        <div class="mask flex-center">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 order-md-1 order-2 text-center">
                                        <p class="text-primary" style="font-size: 10px;">{{ $item->text }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="wave-svg max-1920 container sm-hide">
                                    <svg width="2000" height="128" x="2000" y="128" viewBox="0 0 2000 128"
                                        enable-background="new 0 0 2000 128" xml:space="preserve">
                                        <path opacity="0.2" fill="#f7f7f7"
                                            d="M1999.5,22.2c-346-0.6-524.6-4.7-878.8,4.4c-286.6,7.4-442.3,54-608.1,51.2C307.3,74.3,202.5,5-0.5,28.1v100.4l2000-0.5V22.2z">
                                        </path>
                                        <path opacity="0.2" fill="#f7f7f7"
                                            d="M-0.3,46.1C251,15.3,440.9,84.7,499.6,98.4c54.7,12.8,122.5,12,186.7-5.3c154.2-41.6,315.5-70.9,475.2-67.5s324.6,22.4,484.3,19.7c133-2.3,302.8,1.7,352.8,3.7c0,21.3,0,80,0,80H-0.5L-0.3,46.1z">
                                        </path>
                                        <path opacity="0.4" fill="#f7f7f7"
                                            d="M2000,41.2c-139.8-12.7-219.9-10.8-360.2-11.2c-285.5-0.8-487.5,18-736.2,51.1C647,115.4,546.7,116.4,199.2,53.6C140.3,43,59.5,45.6-0.5,52.3V130h2000L2000,41.2z">
                                        </path>
                                        <path fill="#EDEEF0"
                                            d="M1634.6,50.1c-193.8,11.9-366.9,24.9-569,50c-110.2,13.7-221.2,21.5-332.3,19.6c-187-3.3-344.5-29.7-560.9-69.8c-122.2-22.6-172.8-4-172.8-4V130h1998V46C1997.5,46,1831,38.1,1634.6,50.1z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                    </div>

                    @endforeach
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>


            </div>

            <div class="container-fluid mb-3">
                <div class="col-md-12 bg-white py-3 page-content">
                    <div class="col-12 px-0 mt-4">

                      <div class="row">
                        <div class="col-md-2 col-xs-12">
                          <div class="img-frame p-3 border rounded d-flex justify-content-center align-items-center img-fluid">
                            <img src="/uploads/administration/1. Prof. Mkumbukwa M. A. message.png" alt="Prof. Mkumbukwa M. A." class="img-fluid">
                          </div>

                        </div>

                        <div class="col-md-5 vertical-line">
                          <div class="">
                            <h5 class="title mb-2"><br>Prof. Mkumbukwa M. A.</h5>
                            <small><i>Director General</i></small>
                          </div>
                          <div class="col-12 px-0 my-2">
                            <p class="card-text" class="text-justify">
                                Mgeni mpendwa,</br>
                                Ni furaha na heshima yangu kuwakaribisha nyote katika Shirika la Utafiti na Maendeleo ya Viwanda Tanzania.
                                TIRDO ni shirika la kitaifa la utafiti wa viwanda ambalo mamlaka yake ni kufanya utafiti wa viwanda, kutoa huduma za teknolojia, na,
                                kusambaza matokeo ya utafiti ambayo yatakuwa na athari katika shughuli za kijamii na kiuchumi nchini.
                            </p>
                          </div>
                        </div>

                        <!-- <div class="d-none d-md-block col-md-1 border-right vertical-line"></div> -->

                        <div class="col-md-5">
                            <div class="card-body">
                            <div class="">
                              <h5 class="title mb-2"><br>Karibu TIRDO</h5>
                              <small><i></i></small>
                            </div>
                            <div class="col-12 px-0 my-2">
                              <p class="card-text" class="text-justify">
                                Shirika la Utafiti na Maendeleo ya Viwanda Tanzania (TIRDO) ni shirika la utafiti na maendeleo la taaluma mbalimbali lililoanzishwa
                                kwa Sheria ya Bunge Na. 5 ya 1979 na ilianza kufanya kazi tarehe 1 Aprili 1979.
                              </br>
                              Jukumu lake ni kusaidia sekta ya viwanda ya Tanzania kwa kutoa utaalamu wa kiufundi na huduma za usaidizi ili kuboresha msingi wao wa teknolojia. Aidha,
                               TIRDO inafanya utafiti uliotumika...<a href="{{ route('aboutus', ['language' => $current_language]) }}
                                " class="">Soma zaidi</a>
                              </p>
                              <!-- <a href="aboutus" class="link-no-underline">Read more</a> -->
                            </div>
                            </div>
                        </div>


                      </div>

                    </div>
                  </div>

                <div class="col-12 my-3 px-0">
                    <h5 class="my-xs-2 text-center text-xs-center section-title mb-md-5"><b>Shughuli zetu za Msingi</b> </h5>

                    <div class="row core-home-section justify-content-center">

                        <div class="col-md-3 core-activity ">
                            <div class="div-link" href=""
                                style="background-image: url(/uploads/services/ind_rese.jpg);">
                                <div class="core-activity-inside">
                                    <div class="category-text-wrap">
                                        <h3>INDUSTRIAL RESEARCH</h3>
                                    </div>
                                    <button class="btn p-2">
                                        <p>Kufanya utafiti ili kuendeleza michakato ya viwanda</p>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 core-activity ">
                            <div class="div-link" href=""
                                style="background-image: url(/uploads/services/ind_eng.jpg);">
                                <div class="core-activity-inside">
                                    <div class="category-text-wrap">
                                        <h3>INDUSTRIAL ENGINEERING</h3>
                                    </div>
                                    <button class="btn p-2">
                                        <p>Kuhakikisha uboreshaji wa mifumo na michakato</p>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 core-activity ">
                            <div class="div-link" style="background-image: url(/uploads/services/MPAF.jpg);">
                                <div class="core-activity-inside">
                                    <div class="category-text-wrap">
                                        <h3>ICT & TECHNOLOGY TRANSFER</h3>
                                    </div>
                                    <button class="btn p-2">
                                        <p>Kuwezesha uhamisho wa teknolojia na uvumbuzi</p>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 core-activity ">
                            <div class="div-link" href=""
                                style="background-image: url(/uploads/services/ict.jpg);">
                                <div class="core-activity-inside">
                                    <div class="category-text-wrap">
                                        <h3>TECHNOLOGY FORECASTING</h3>
                                    </div>
                                    <button class="btn p-2">
                                        <p>Kuendesha teknolojia ili kuendeleza michakato ya viwanda</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row px-xs-3">
                    <div class="col-md-8 my-3">
                        <h5 class="my-xs-2 text-center text-xs-center section-title"> <b>Bidhaa za Utafiti za Tirdo</b> </h5>

                        <div class="row mt-4">

                            @foreach($resources_products as $product)
                            <div class="col-md-6 pb-3 mb-3">
                                <img src="{{ asset('storage/'.$product->img) }}" class="w-100" alt="Thumbnail">
                                <div class="col-12 bg-light px-xs-2 p-3">
                                    <div>
                                        <p class="text-justify mb-2">
                                            <b><h6 class="article-h2">{{ $product->name }}</h6></b>
                                            <i class="fa fa-calendar" style="color: #006f8b;"></i> {{ $product->created_at }}
                                            <p class="mt-2">{!! Str::limit($product->preview_desc, 100) !!}</p>
                                            <a href="{{ route('product.product_detail', ['language' => $current_language, 'product_id' => $product->id]) }}" class="read ml-2">Soma zaidi<i class="fa fa-angle-right"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                        <div class="row justify-content-center mt-3">
                            <a href="{{ route('product.all_products', ['language' => $current_language]) }}"class="link-no-underline"><i>Tazama zote <i class="far fa-arrow-alt-circle-right"></i></i></a>
                        </div>

                    </div>


                    <div class="col-md-4 my-3">
                        <h5 class="my-xs-2 text-center text-xs-center section-title"><b>Habari/Matangazo</b></h5>
                        <div class="row mt-4">
                            <div class="col-md-12 pb-2 mb-2">
                            <div class="col-12 px-xs-2 p-4">
                                @foreach($news_articles as $article)
                                <div href="#" target="_blank">
                                    <div class="row align-items-center bg-light1">
                                        <div class="col-2 col-md-3">
                                            <img src="{{ asset('storage/'.$article->img) }}" alt="Thumbnail" class="img-thumbnail">
                                        </div>
                                        <div class="col-10 col-md-9">
                                            <p class="text-justify mb-2">
                                                <b><h6 class="article-h2">{{ $article->name }}</h6></b>
                                            </p>
                                            <p><i class="fa fa-calendar" style="color: #006f8b;"></i> {{ $article->created_at }}</p>
                                            <p>{!! Str::limit($article->preview_desc, 60)  !!}
                                            </p>
                                            <a href="{{ route('news.article_detail', ['language' => $current_language, 'article_id' => $article->id]) }}" class="read ml-2">Soma zaidi<i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <hr class="hr">
                                @endforeach
                                 <!-- Add a link for "Tazama Zote" -->
                                 <div class="row justify-content-center mt-3">
                                    <a href="{{ route('news.all_articles', ['language' => $current_language]) }}" class="link-no-underline"><i>Tazama zote <i class="far fa-arrow-alt-circle-right"></i></i></a>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-12 my-3">
            <h5 class="my-xs-2 text-center text-xs-center section-title"><b>Huduma za Mtandaoni katika Sekta za Viwanda</b> </h5>

            <div class="row px-xs-2 online-services">

                  <div class="service-item col-md-2">
                    <div class="service-icon">
                        <img src="/uploads/icon/contract.png" alt="">
                    </div>
                      <div class="service-title">Usajili wa Kampuni</div>
                      <div class="service-btn-wrapper">
                            <a target="_blank" href="https://ors.brela.go.tz/ors/start?returnUrl=%2fbrela%2fprod%2fors" class="serv-btn orange">Pata Huduma</a>
                      </div>
                  </div>

                  <div class="service-item col-md-2">
                    <div class="service-icon">
                        <img src="/uploads/icon/contract.png" alt="">
                    </div>
                      <div class="service-title">Usajili wa Biashara</div>
                      <div class="service-btn-wrapper">
                            <a target="_blank" href="https://ors.brela.go.tz/ors/start?returnUrl=%2fbrela%2fprod%2fors" class="serv-btn orange">Pata Huduma</a>
                      </div>
                  </div>

                  <div class="service-item col-md-2">
                    <div class="service-icon">
                        <img src="/uploads/icon/contract.png" alt="">
                    </div>
                      <div class="service-title">Alama za Biashara/Usajili wa Huduma</div>
                      <div class="service-btn-wrapper">
                            <a target="_blank" href="https://ors.brela.go.tz/ors/start?returnUrl=%2fbrela%2fprod%2fors" class="serv-btn orange">Pata Huduma</a>
                      </div>
                  </div>

                  <div class="service-item col-md-2">
                    <div class="service-icon">
                        <img src="/uploads/icon/contract.png" alt="">
                    </div>
                      <div class="service-title">Mfumo wa Maombi wa Mtandao wa TBS</div>
                      <div class="service-btn-wrapper">
                            <a target="_blank" href="https://oas.tbs.go.tz/" class="serv-btn orange">Pata Huduma</a>
                      </div>
                  </div>

                  <div class="service-item col-md-2">
                    <div class="service-icon">
                        <img src="/uploads/icon/contract.png" alt="">
                    </div>
                      <div class="service-title">Usajili wa Hati miliki</div>
                      <div class="service-btn-wrapper">
                            <a target="_blank" href="https://ors.brela.go.tz/ors/start?returnUrl=%2fbrela%2fprod%2fors" class="serv-btn orange">Pata Huduma</a>
                      </div>
                  </div>

                  <div class="service-item col-md-2">
                    <div class="service-icon">
                        <img src="/uploads/icon/contract.png" alt="">
                    </div>
                      <div class="service-title">Tovuti ya TBS</div>
                      <div class="service-btn-wrapper">
                            <a target="_blank" href="https://portal.tbs.go.tz/isqmt/tz/co/infowise/amis4t/web/home/home.jsf" class="serv-btn orange">Pata Huduma</a>
                      </div>
                  </div>

                  <div class="service-item col-md-2">
                    <div class="service-icon">
                        <img src="/uploads/icon/contract.png" alt="">
                    </div>
                      <div class="service-title">Huduma za Mtandaoni za TBS</div>
                      <div class="service-btn-wrapper">
                            <a target="_blank" href="https://standards.tbs.go.tz/" class="serv-btn orange">Pata Huduma</a>
                      </div>
                  </div>

                  <div class="service-item col-md-2">
                    <div class="service-icon">
                        <img src="/uploads/icon/contract.png" alt="">
                    </div>
                      <div class="service-title">Taarifa za Biashara</div>
                      <div class="service-btn-wrapper">
                            <a target="_blank" href="https://trade.business.go.tz/" class="serv-btn orange">Pata Huduma</a>
                      </div>
                  </div>

                  <div class="service-item col-md-2">
                    <div class="service-icon">
                        <img src="/uploads/icon/contract.png" alt="">
                    </div>
                      <div class="service-title">TIC: Taratibu za Uwekezaji</div>
                      <div class="service-btn-wrapper">
                            <a target="_blank" href="https://procedures.tic.go.tz/" class="serv-btn orange">Pata Huduma</a>
                      </div>
                  </div>

                  <div class="service-item col-md-2">
                    <div class="service-icon">
                        <img src="/uploads/icon/contract.png" alt="">
                    </div>
                      <div class="service-title">Umiliki wa Manufaa</div>
                      <div class="service-btn-wrapper">
                            <a target="_blank" href="https://bo.brela.go.tz/" class="serv-btn orange">Pata Huduma</a>
                      </div>
                  </div>

                  <div class="service-item col-md-2">
                    <div class="service-icon">
                        <img src="/uploads/icon/contract.png" alt="">
                    </div>
                      <div class="service-title">CTI: Shirikisho la Viwanda Tanzania</div>
                      <div class="service-btn-wrapper">
                            <a target="_blank" href="https://cti.co.tz/" class="serv-btn orange">Pata Huduma</a>
                      </div>
                  </div>

                  <div class="service-item col-md-2">
                    <div class="service-icon">
                        <img src="/uploads/icon/contract.png" alt="">
                    </div>
                      <div class="service-title">eMrejesho</div>
                      <div class="service-btn-wrapper">
                            <a target="_blank" href="https://emrejesho.gov.go.tz/tenganisha_aina_za_walalamikaji?PQI70xlXGIGpQajIcg16EMX74XYFJZf9NV6nrjnzNiHgtt6Iqhlm6VYeXW2vhplQ&to_this_inst=415$PQI70xlXGIGpQajIcg16EMX74XYFJZf9NV6nrjnzNiHgtt6Iqhlm6VYeXW2vhplQ" class="serv-btn orange">Pata Huduma</a>
                      </div>
                  </div>


            </div>
        </div>



        <div class="container mb-5">
            <div class="col-md-10 mt-5 mb-3">

                <h5 class="my-xs-2 text-center text-xs-center section-title"><b>Washiriki Wetu</b></h5>

                <div class="row mt-4 slick-slide1">
                    <a class="col-md-2 justify-content-center text-center slick-slide" href=""
                        target="_blank">
                        <img src="/uploads/patners/partners-pic9.jpg"
                            class="w-50" alt="UNITED REPUBLIC OF TANZANIA">
                    </a>
                    <a class="col-md-2 justify-content-center text-center slick-slide" href="https://comsats.org/" target="_blank">
                        <img src="/uploads/patners/partners-pic1.jpg"
                            class="w-50" alt="Commission on Science and Technology for Sustainable Development in the South(COMSATS)">
                    </a>
                    <a class="col-md-2 justify-content-center text-center slick-slide" href="https://costechanalytical.com/"
                        target="_blank">
                        <img src="/uploads/patners/partners-pic2.jpg"
                            class="w-50" alt="Costech Analytical Technologies">
                    </a>
                    <a class="col-md-2 justify-content-center text-center slick-slide" href=""
                        target="_blank">
                        <img src="/uploads/patners/partners-pic4.jpg"
                            class="w-50" alt="The Small and Medium Enterprise Competitive Facility">
                    </a>
                    <a class="col-md-2 justify-content-center text-center slick-slide" href="https://tpsftz.org/"
                        target="_blank">
                        <img src="/uploads/patners/partners-pic7.jpg"
                            class="w-50" alt="Tanzania Private Sector Foundation">
                    </a>
                    <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.sirim.my/"
                        target="_blank">
                        <img src="/uploads/patners/partners-pic5.jpg"
                            class="w-50" alt="Standards and Industrial Research Institute of Malaysia (SIRIM)">
                    </a>
                    <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.tib.co.tz/"
                        target="_blank">
                        <img src="/uploads/patners/partners-pic6.jpg"
                            class="w-50" alt="Tanzania Investment Bank (TIB)">
                    </a>
                    <a class="col-md-2 justify-content-center text-center slick-slide" href="https://cti.co.tz/"
                        target="_blank">
                        <img src="/uploads/patners/partners-pic10.jpg"
                            class="w-50" alt="Confederation of Tanzania Industries">
                    </a>

                    <a class="col-md-2 justify-content-center text-center slick-slide" href="https://waitro.org/"
                    target="_blank">
                    <img src="/uploads/patners/partners-pic8.jpg"
                        class="w-50" alt="World Association of Industrial and Technological Research Organizations (WAITRO)">
                    </a>

                    <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.undp.org"
                    target="_blank">
                    <img src="/uploads/patners/partners-pic12.png"
                        class="w-50" alt="UNDP">
                    </a>

                    <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.european-union.europa.eu/"
                    target="_blank">
                    <img src="/uploads/patners/partners-pic11.jpg"
                        class="w-50" alt="european union">
                    </a>
                    <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.iaea.org/"
                        target="_blank">
                        <img src="/uploads/patners/partners-pic3.jpg"
                            class="w-50" alt="International Atomic Energy Agency (IAEA)">
                    </a>
                    <a class="col-md-2 justify-content-center text-center slick-slide" href="http://www.sido.go.tz/" target="_blank" style="width: 101px;" tabindex="-1" data-slick-index="0" aria-hidden="true">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/bb54e0f99d18c766e962076b504d90c9.jpeg" class="w-50" alt="SHIRIKA LA KUHUDUMIA VIWANDA VIDOGO (SIDO)">
                      </a>
                      <a class="col-md-2 justify-content-center text-center slick-slide" href="https://ndc.go.tz/" target="_blank" style="width: 101px;" tabindex="-1" data-slick-index="1" aria-hidden="true">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/e5a80978d0a0a78629782212f6c660a1.jpeg" class="w-50" alt="Shirika la Maendeleo la Taifa">
                      </a>
                      <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.wma.go.tz/" target="_blank" style="width: 101px;" tabindex="-1" data-slick-index="2" aria-hidden="true">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/a6deeddfc54ae5089fad690528347876.jpeg" class="w-50" alt="Wakala wa Vipimo">
                      </a>
                      <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.tantrade.go.tz/" target="_blank" style="width: 101px;" tabindex="-1" data-slick-index="3" aria-hidden="true">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/1ca8e18928f6df79de599c9b546ee585.jpeg" class="w-50" alt="Mamlaka ya Maendeleo ya Biashara Tanzania (TanTrade)">
                      </a>
                      <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.competition.or.tz/" target="_blank" style="width: 101px;" tabindex="-1" data-slick-index="4" aria-hidden="true">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/9b995fa32f92228202cbafa8d7d4539f.jpeg" class="w-50" alt="Tume ya Ushindani">
                      </a>
                      <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.brela.go.tz/" target="_blank" style="width: 101px;" tabindex="-1" data-slick-index="5" aria-hidden="true">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/f580af64eb8b3a62519858191152fe5b.jpeg" class="w-50" alt="Wakala ya Usajili wa Biashara na Leseni (BRELA)">
                      </a>
                      <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.tbs.go.tz/" target="_blank" style="width: 101px;" tabindex="-1" data-slick-index="6" aria-hidden="true">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/0950ad25fa4507cfd233d9cd6dbb7d7e.jpeg" class="w-50" alt="Shirika la Viwango Tanzania">
                      </a>
                      <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.cbe.ac.tz/" target="_blank" style="width: 101px;" tabindex="-1" data-slick-index="7" aria-hidden="true">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/1e0ff3a8cc446a81e033a76fe7f651af.jpeg" class="w-50" alt="Chuo cha Biashara">
                      </a>
                      <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.tirdo.or.tz/" target="_blank" style="width: 101px;" tabindex="-1" data-slick-index="8" aria-hidden="true">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/38c5c640c1d8d75633b3f4ec9760d3ce.jpeg" class="w-50" alt="Shirika la Utafiti na Maendeleo ya Viwanda Tanzania (TIRDO)">
                      </a>
                      <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.temdo.or.tz/" target="_blank" style="width: 101px;" tabindex="-1" data-slick-index="9" aria-hidden="true">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/728164dafa89398128befaf194b1df2b.jpeg" class="w-50" alt="Shirika la Uhandisi na Usanifu Mitambo Tanzania (TEMDO)">
                      </a>
                      <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.epza.go.tz/" target="_blank" style="width: 101px;" tabindex="-1" data-slick-index="10" aria-hidden="true">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/b37babc68675b66ba4febfa5706e638f.jpeg" class="w-50" alt="Mamlaka  ya Maeneo Maalum yaKuzalisha Bidhaa za Kuuza Nje( EPZA)">
                      </a>
                      <a class="col-md-2 justify-content-center text-center slick-slide slick-current slick-active" href="https://www.wrrb.go.tz/" target="_blank" style="width: 101px;" tabindex="0" data-slick-index="11" aria-hidden="false">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/5726e8ab1fea2aaf506fa6d41b522388.jpeg" class="w-50" alt="Bodi ya Usimamizi wa Stakabadhi za Ghala (WRRB)">
                      </a>
                      <a class="col-md-2 justify-content-center text-center slick-slide slick-active" href="http://tic.go.tz/" target="_blank" style="width: 101px;" tabindex="0" data-slick-index="12" aria-hidden="false">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/57f52310ef7992817c9b28a38ff92f42.jpeg" class="w-50" alt="Kituo cha Uwekezaji Tanzania">
                      </a>
                      <a class="col-md-2 justify-content-center text-center slick-slide slick-active" href="https://www.uwezeshaji.go.tz/" target="_blank" style="width: 101px;" tabindex="0" data-slick-index="13" aria-hidden="false">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/1aba239b3817f9f4169476a5109a91d9.png" class="w-50" alt="Baraza la Taifa la Uwezeshaji Wananchi Kiuchumi">
                      </a>
                      <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.camartec.go.tz/" target="_blank" style="width: 101px;" tabindex="-1" data-slick-index="14" aria-hidden="true">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/3b35cdc3950e8b71db613fec06c7287b.png" class="w-50" alt="Kituo cha Zana za. Kilimo na Teknolojia Vijijini (CAMARTEC)">
                      </a>
                      <a class="col-md-2 justify-content-center text-center slick-slide" href="https://www.fct.or.tz/" target="_blank" style="width: 101px;" tabindex="-1" data-slick-index="15" aria-hidden="true">
                        <img src="https://www.viwanda.go.tz/uploads/institutions/2b631839c6acf0b04fe8b8fe30cedcd5.png" class="w-50" alt="Baraza la Ushindani (FCT)">
                      </a>
                </div>
            </div>

        </div>
    </div>

    <!-- /contents -->
@endsection
