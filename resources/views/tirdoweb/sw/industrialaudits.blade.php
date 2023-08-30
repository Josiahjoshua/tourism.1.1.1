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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Ukaguzi wa Kiufundi wa Kiwanda</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                   <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Ukaguzi wa Kiufundi wa Kiwanda</h4>
                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">

                          <p class="about_hub">
                            Ukaguzi wa Kiufundi wa Kiwanda wa TIRDO hutathmini kwa kina utendaji kazi wa taasisi za viwanda, ikiwa ni pamoja na zile ambazo hazifanyi kazi ipasavyo.
                            kwa lengo la kutoa mapendekezo sahihi ya uamsho au matumizi mbadala. Kupitia ukusanyaji wa data kwa uangalifu, uchambuzi wa mchakato, na
                            tathmini ya miundombinu, wataalam wa TIRDO hutathmini vipengele kama vile ufanisi, matumizi ya rasilimali, udhibiti wa ubora, uzingatiaji na hatari. Maoni yanayotokana
                            kuunda msingi wa ripoti ya kina ambayo inatoa mikakati inayoweza kutekelezeka ya kuboresha shughuli, ikijumuisha teknolojia mpya,
                            kuboresha ugawaji wa rasilimali, na kuchunguza njia mbadala za matumizi, kukuza ukuaji endelevu na ustahimilivu ndani ya mazingira ya viwanda nchini Tanzania.
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
