@extends('tirdoweb.en.base_layout')
        <!-- /HEADER -->

        <!-- contents -->
@section('content')

    <div class="container px-0">
        <div class="col-12 special-page">
            <div class="col-12 p-4">
                <div class="row">
                    <div class="col-12 px-xs-0">
                        <nav aria-label="breadcrumb" class="mb-0">
                            <ol class="breadcrumb px-0">
															<li class="breadcrumb-item "><a href="{{ route('home', ['language' => $current_language]) }}"><span class="fas fa-home"></span></a></li>
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Textile and leather</li>
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
                            <p>Head of Textile and Leather Technologies Division</p>
                          </div>
                        </div>
                      </div>
                        <h4>TEXTILE AND LEATHER</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p class="about_hub">
                                  The Division of Textile and Leather Technologies is dealing with the development
                                    of cleaner and competitive technologies of textiles and leather production, quality
                                     assurance of textile and leather value chain and value addition to leather and textiles
                                     waste streams<br><br>
                                     <strong class="about_hub">
                                         Further in the issue of Research and Development we are dealing with:-</strong><br>

                                     a) Product development  for using collagen and natural fibres.<br>
                                      b) Leather and textiles product development.<br>
                                      c) Non-woven fabrics production technologies.<br>
                                      d) Woven fabric Structure Designing.<br>
                                      e) Development of Organic Materials for Textile and Leather Industries<br>
                                     f)Production optimization for Textile and Leather Industries<br>

                            </p>
                            <p class="about_hub">

                                   <strong class="about_hub">
                                    For consultancies we are dealing with:-</strong><br>
                                 a) Yarn, fabrics and leather quality assurance.<br>
                                 b) Laboratory services for textile and leather materials.<br>
                                 c) Research on latest Textile Machines Technologies.<br>
                                 d) Training in leather, spinning and weaving production.<br>
                                 e) Training in use of semi leather recycling cam.<br>
                                f) Hand loom production.<br>
                                g)Turn-Key Consaltuncy for textile and Leather Industries,example <b>Karanga Leather Industries</b>
                          </p>
                          <p>
                            <img src="/uploads/icon/leather1.png" style="padding:7px;float:left;">
                            <img src="/uploads/icon/leather2.png" style="padding:7px;float:left;">
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
