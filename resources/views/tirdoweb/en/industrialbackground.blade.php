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
                                                        <li class="breadcrumb-item "><a href="{{ route('home', ['language' => $current_language]) }}"><span class="fas fa-home"></span></a></li>
                          <li class="breadcrumb-item list-inline-item font-weight-bold">Industrial Information Center</li><li class="breadcrumb-item list-inline-item active">Background</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">

                <div class="col-md-9 bg-white py-3 page-content">
                    <h4>Background</h4>

                    <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                        <p class="about_hub">

                            The fifth phase Government has embarked on radical industrialization process so as to ensure rapid inclusive economic growth while at the same time ensuring human development.
                            This is in line with the Tanzania Development Vision, 2025; the Chama Cha Mapinduzi (CCM) Party Manifesto, 2015-2020; and the Five-Year Development Plan, 2016/17-2020/21.
                            For sustainability of the industries being established as well as the existing ones, there is a need of a strong Research and Development (R&D) support infrastructure.</br></br>
                            In an effort to address the quest of the current Government as far as industrialization is concerned,
                            Tanzania Industrial Research and Development Organization (TIRDO) as R&D institution mandated to support the industrial sector
                            has identified a number of important areas of economic and social impacts that need to be addressed in order to achieve fast and
                                sustainable industrialization. The main issues identified are the capacities for coordination, monitoring of industrial technologies
                                both developed within the country and imported as well as performances of those technologies. To enhance this capacity,
                                TIRDO intends to establish an industrial information facility, which will offer among others; updated industrial information,
                                industrial clinic services and industrial incubation services.</br></br>
                            An Industrial Information Centre is a specialized facility that serves as a repository of comprehensive and up-to-date information
                            related to various industrial sectors. Its primary purpose is to provide valuable data, research materials, technical knowledge,
                            and market insights to support and promote industrial growth, innovation, and development. This center acts as a knowledge hub,
                            catering to the needs of researchers, entrepreneurs, industries, policymakers, and other stakeholders in the industrial ecosystem to make informed decisions.</br></br>
                            Further, the centre will foster an environment of innovation and creativity through the access to a diverse range of research papers,
                            patents, and technical know-how. Researchers and entrepreneurs will build upon existing knowledge, leading to the development of novel products,
                            processes, and technologies that address specific industry challenges.</br></br>

                            It is expected that the centre will enhance industrial competitiveness by equiping businesses with valuable insights into emerging opportunities,
                            market demands, and potential threats. Armed with this information, industries could optimize their operations, develop tailored strategies,
                            and adapt to market dynamics effectively. Furthermore as a means to create an environment of collaboration the centre will enhance collaboration between academia,
                            industries, and the government. </br></br>
                            Therefore, establishing an Industrial Information Centre in Tanzania is a strategic move that will benefit various stakeholders, including industries,
                            researchers, policymakers, and entrepreneurs. By providing a platform for knowledge dissemination, innovation, and collaboration,
                            the center will play a pivotal role in driving Tanzania's industrial growth and economic prosperity in the long run.

                      </p>
                </p>

                    </div>
                </div>

                @include('tirdoweb.en.newsection')

            </div>
        </div>
    </div>

</div>

<!-- /contents -->
@endsection

