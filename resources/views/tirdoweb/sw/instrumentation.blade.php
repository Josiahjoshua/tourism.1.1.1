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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Idara ya Teknolojia ya Ala</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                      <div class="row">
                        <div class="col-md-4 col-xs-12">
                          <div class="text-center img-frame custom-img-frame">
                                  <img src="/uploads/administration/Ms. Ester Lazaro.png" alt="Departmental Head" class="img-fluid">
                          </div>
                        </div>

                        <div class="col-md-8">
                          <div class="">
                            <h5 class="title mb-2">Bi. Ester Lazaro</h5>
                            <small><i> </i></small>
                          </div>
                          <div class="col-12 px-0 my-2">
                            <p>Mkuu wa Kitengo cha Teklnolojia ya Electronics na Instrumentation</p>
                          </div>
                        </div>
                      </div>
                        <h4 class="mt-3">TEKNOLOJIA YA ELECTRONICS NA INSTRUMENTATION</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p>

                                <h5>Malengo</h5>
                                  Maendeleo, udhibiti na uhamisho wa utaalamu wa kiufundi katika uwanja wa umeme na vyombo
                                  ili kukidhi mahitaji yanayobadilika ya sekta ya viwanda, ikijumuisha kubuni saketi za kielektroniki, majaribio ya kuiga
                                  urekebishaji na matengenezo ya vifaa vya kielektroniki vilivyopo.
                        </p>

                       <h5>Misheni</h5>
                      <p>Ili kuhakikisha kuwa vipimo vilivyochukuliwa na kifaa ni sahihi na vinategemewa</p>

                      <h5>Maono</h5>
                      <p>Kuwa kitovu cha ubora katika nyanja ya zana na Elektroniki kwa utafiti katika sekta ya viwanda.</p>

                      <p>Kitengo hiki kitafanya shughuli zifuatazo:
                      <br>
                        <b>I. Kubuni</b>
                        <br>
                      Ubunifu wa mzunguko wa kielektroniki unahusisha uteuzi na uunganisho wa vifaa vya kimwili katika aina mbalimbali
                      ya topolojia ili kukidhi vipimo vya utendaji, mahitaji ya mazingira, na vipimo vingine
                      ili kuleta mabadiliko ya kidijitali
                     <br><br>
                      <b>II. Urekebishaji</b>
                      <br>
                      Usanidi wa chombo ili kutoa matokeo ya kiufundi ndani ya masafa yanayokubalika. Kuondoa au
                      kupunguza mambo ambayo yanaweza kusababisha vipimo visivyo sahihi kwa maendeleo ya viwanda mahususi
                      eneo la
                     <br>
                     <ul>
                     <li>Urekebishaji wa mitambo</li>
                     <li>Urekebishaji wa umeme</li>
                     <li>Urekebishaji wa Pipette</li>
                     <li>Urekebishaji wa Mtiririko</li>
                     <li>Urekebishaji wa Halijoto</li>
                     <li>Urekebishaji wa Shinikizo</li>
                     </ul>
                     <br><b>III. Ufungaji na Matengenezo</b>
                     <br>
                     Sehemu inayohusika na ufungaji, matengenezo na ukarabati wa vifaa vya elektroniki, pamoja na
                     saketi, vijenzi na vifaa vinavyohusiana vinavyotumika katika mifumo ya mawasiliano ya kielektroniki,
                     telemetering, mifumo ya nguvu, vifaa vya kupima mita, na vifaa vya udhibiti wa kijijini ili Kudumisha,
                     Kuzuia, Kuboresha na Kusimamia michakato ya maabara na viwanda. Vyombo hivyo ni pamoja na:-
                     <ul><li>Vyombo vya uchanganuzi, HPLC, GCs,</li>
                     <li>Ala za myeyusho, UV-VIS</li>
                     <li>Spectrophotometers,</li>
                     <li>Wachanganuzi wa TOC</li></ul>
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
