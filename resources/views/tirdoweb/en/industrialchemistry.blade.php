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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Industry and chemistry</li>
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
                            <p>Head of Industrial Chemistry Section</p>
                          </div>
                        </div>
                      </div>
                        <h4>AGRO PROCESSING INDUSTRIAL CHEMISTRY</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p class="about_hub">

                                    The agro-processing Technologies and industrial chemistry division is under the Industrial Research
                                    Department. It has several sections including; medicinal and synthetic chemistry, nanotechnology and
                                     new materials, analytical and environmental chemistry and natural products chemistry.<br>
                                   Tanzania is growing rapidly in terms of industrialization using raw materials from agricultural produces. The researches
                                   involving green agro-processing and industrial chemistry technologies are necessary. The division deals with research and
                                   consultancies in analytical, physical and chemical processes towards the transformation of agricultural produces and their
                                   by-products into industrial products or value added products which are of beneficial to human life.<br><br>

                    <strong style="font-size: 15px;">
                        The agro-processing and industrial chemistry division was developed purposely to:
                    </strong><br>

                    <ul  class="about_hub">
                    <li>Promote utilization of local raw materials for industrial production through value addition</li>
                    <li>Provide quality, reliable and internationally recognized analytical laboratory services.</li>
                    <li>Document and disseminate knowledge acquired through research.</li>
                    <li>Improve local technologies that will produce products that meet standards/customer specifications.</li>
                    <li>Dissemination of both adopted and adapted technologies from other countries which are deemed to be suitable for the industrial
                         development in the country.
                        </li>
                        </ul>

                    </p>
                    <p class="about_hub">
                        The division has a chemistry laboratory well-equipped to cater for agro-processing and industrial chemistry research and projects.
                        The consultancy services mainly involve physicochemical quality testing of raw materials, industrial products and industrial wastes.
                         These include proximate analysis in food from plants and animals’ origin, micro nutrient determination in food, fertilizers and salt
                        quality determination as well as heavy metals analysis in raw materials, industrial products and industrial wastes. Also the division
                        provides solutions or advice to problems encountered by industries and SMEs in the areas of agro-processing and industrial chemistry.
                            <br>
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
