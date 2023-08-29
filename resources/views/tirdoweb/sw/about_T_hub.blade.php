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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO T-Hub</li><li class="breadcrumb-item list-inline-item active">Kuhusu Sisi T-Hub</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>T-Hub Katika Utafiti na Maendeleo ya Viwanda Tanzania
                            Shirika (TIRDO)</h4>
        
                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                    
                                T-hub imejitokeza ili kusaidia biashara kusawazisha manufaa ya mbinu bora zilizothibitishwa, uvumbuzi, ukuzaji wa programu, hitaji la kasi, ufanisi na kubadilika.
                                Wataalamu wetu wanatumia uzoefu mpana na wa kina ili kukuongoza katika mazingira changamano ya TEHAMA na kusaidia kutoa upatanishi wa kimkakati kati ya malengo ya biashara, sera na taratibu na mifumo ya usalama.
                                 Huduma zetu zinaweza kusaidia kutoa maarifa katika aina mbalimbali za taaluma za IT na jukwaa kwa thamani kubwa iliyoongezwa kwa shughuli zako za kila siku.
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