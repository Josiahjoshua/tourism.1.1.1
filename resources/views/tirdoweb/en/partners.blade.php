@extends('tirdoweb.en.base_layout')
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
                              <li class="breadcrumb-item list-inline-item active"><b>Our Partners</b></li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>OUR PARTNERS</h4>
        
                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <ul class="list-unstyled px-3 ">
                                <li>
                                    <a href="https://www.jica.go.jp/english/index.html" target="_blank">
                                    <i class="fa fa-angle-double-right"></i>
                                    Shirika la Maendeleo la Kimataifa la Japani (JICA)
                                    </a>
                                    </li>
                                    <br>
                                    <li>
                                    <a href="https://www.trademarkea.com/" target="_blank">
                                    <i class="fa fa-angle-double-right"></i>
                                    Shirika la Kukuza Biashara Afrika Mashariki (TMEA)
                                    </a>
                                    </li>
                                    <br>
                                    <li>
                                    <a href="https://www.intracen.org/" target="_blank">
                                    <i class="fa fa-angle-double-right"></i>
                                    Kituo cha Biashara cha Kimataifa (ITC)
                                    </a>
                                    </li>
                                    <br>
                                    <li>
                                    <a href="https://www.sadc.int/" target="_blank">
                                    <i class="fa fa-angle-double-right"></i>
                                    Jumuiya ya Maendeleo Kusini mwa Afrika (SADC)
                                    </a>
                                    </li>
                                    <br>
                                    <li>
                                    <a href="https://tpsftz.org/" target="_blank">
                                    <i class="fa fa-angle-double-right"></i>
                                    Taasisi ya Sekta Binafsi  Tanzania  (TPSF)
                                    </a>
                                    </li>
                                    <br>
                                    <li>
                                    <a href="https://www.fsdt.or.tz/" target="_blank">
                                    <i class="fa fa-angle-double-right"></i>
                                    Financial Sector Deepening Trust (FSDT)
                                    </a>
                                    </li>
                                    <br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                    <i class="fa fa-angle-double-right"></i>Shirika la Umoja wa Mataifa la Mpango wa Maendeleo(UNDP)
                                    </a></li>
                                    <br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>UNITED REPUBLIC OF TANZANIA
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Commission on Science and Technology for Sustainable Development in the South(COMSATS)
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Costech Analytical Technologies
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>The Small and Medium Enterprise Competitive Facility
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Tanzania Private Sector Foundation
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Standards and Industrial Research Institute of Malaysia (SIRIM)
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Standards and Industrial Research Institute of Malaysia (SIRIM)
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Tanzania Investment Bank (TIB)
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Confederation of Tanzania Industries
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>World Association of Industrial and Technological Research Organizations (WAITRO)
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>International Atomic Energy Agency (IAEA)
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Tume ya Ushindani
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Mamlaka ya Maendeleo ya Biashara Tanzania (TanTrade)
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Wakala wa Vipimo
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Shirika la Maendeleo la Taifa
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>SHIRIKA LA KUHUDUMIA VIWANDA VIDOGO (SIDO)
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Baraza la Ushindani (FCT)
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Baraza la Taifa la Uwezeshaji Wananchi Kiuchumi
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Bodi ya Usimamizi wa Stakabadhi za Ghala (WRRB)
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Mamlaka  ya Maeneo Maalum yaKuzalisha Bidhaa za Kuuza Nje( EPZA)
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Shirika la Uhandisi na Usanifu Mitambo Tanzania (TEMDO)
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Chuo cha Biashara
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Shirika la Viwango Tanzania
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Wakala ya Usajili wa Biashara na Leseni (BRELA)
                                        </a>
                                    </li><br>
                                    
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Kituo cha Uwekezaji Tanzania
                                        </a>
                                    </li><br>
                                    <li><a href="https://www.tz.undp.org/content/tanzania/en/home.html" target="_blank">
                                        <i class="fa fa-angle-double-right"></i>Kituo cha Zana za. Kilimo na Teknolojia Vijijini (CAMARTEC)
                                        </a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                    {% include 'en/new_section.html' %}
                </div>
            </div>
        </div>

    </div>
     <!-- /contents -->
{% endblock %}