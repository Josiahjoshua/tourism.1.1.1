@extends('tirdoweb.en.base_layout')
        <!-- /HEADER -->

        <!-- contents -->
@section('content')

    <div class="container px-0">
        <div class="col-12 special-page">
            <div class="col-12 p-4">

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>INDUSTRIAL MAPPING</h4>
                        <br>
                        <p>
                            The Ministry of Investment Industry and Trade in collabora- tion with Tanzania Industrial Research and
                             Development Organization (TIRDO) and National Bureau of Statistics (NBS)
                             conducted an industrial mapping survey project at the Eastern zone involving Coast Region, Morogoro and Dar es Salaam.
                        </p>
                        <h5>
                            Benefits of Industrial Mapping
                        </h5>

                            </br>

                                <ul class="about_hub">
                                    <li>To enhancing development of strategic industrial informa- tion that will guide policy makers and
                                        other industrial sector stakeholder’s decisions on investment and resource utiliza- tion.</li> <br>
                                    <li>The provide information on the availability and reliability of raw materials but also the needed synergy of industrial sector with other sectors
                                        such as Agriculture, Livestock, forestry, fishery, energy, mining, water, infrastructure and labor market.</li>
                                    <li>Enable Identification of investment opportunities that are available in the country over difference regions.</li>

                                </ul>
                          </p>


                        </div>
                    </div>

                    {% include 'en/new_section.html' %}
                </div>
            </div>
        </div>

    </div>
     <!-- /contents -->
@endsection
