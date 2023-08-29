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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO T-Hub</li><li class="breadcrumb-item list-inline-item active">Kwanini T-Hub</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>KWANINI T-HUB</h4>

                        <div class="col-12 px-0 mt-4  justify-content-center align-items-center">
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">

                                Tunakusaidia kukuza programu na matumizi ambayo yanasisimua na kuwashirikisha wateja wako. tunakuhitaji uongoze njia ya kufungua mpya
                                soko na fursa nne biashara yako .basi tuweke mikakati pamoja

                               <h5>Huduma na suluhu zilizotengenezwa kwa urekebishaji</h5>
                               Tunawapa wateja wetu huduma zisizo na upendeleo, zenye lengo. sisi si tu kuuza bidhaa au ufumbuzi. tunashirikiana nawe, mteja wetu kwa utaratibu
                                kukuza uelewa wa kina wa malengo na malengo ya biashara yako, kuunda mikakati na suluhisho za kibinafsi, tekeleza kwa uangalifu
                                kuandaa mipango na kutoa msaada unaoendelea na uangalizi. mbinu yetu ya kibinafsi na iliyobinafsishwa inaruhusu wateja wetu kuwa na udhibiti
                                 na kujiamini katika uhusiano wa ushirikiano.

                               <h5>Kina na Kiunganishwa</h5>
                               Kwa uzoefu wetu mkubwa katika biashara, tunaelewa uhusiano kati ya nyanja tofauti za shirika. Bila ushirikiano
                                kati ya mteja wako na sisi, hata uwekezaji mkubwa au suluhisho linaweza kukosa uwezo wake. Kwa kuunganisha kazi za wenginetaaluma kulingana na mahitaji ya suluhisho la biashara yako, tunaweza kutengeneza suluhisho bora ili kuhakikisha faida kubwa kwako na kwa biashara yako.

                                <h5>Kuaminika kulingana na umahiri na uwasilishaji kwa wakati unaofaa</h5>
                                Suluhu zinazofaa zinahitaji uaminifu mkubwa, kwa mbinu yetu ya ushirikiano, tunajitahidi kujenga kuaminiana na wateja wetu. Mipango na
                                 usimamizi tunaofanya na wateja wetu unalenga kujenga uaminifu huo; hii itaruhusu mpito usio na mshono kutoka kwa shida hadi suluhisho na
                                 msaada unaoendelea. Lengo letu ni kujenga uhusiano wa muda mrefu na wa kudumu ambao ni mtihani wa muda, mabadiliko ya kiteknolojia ana kupanda na kushuka kwa soko.

                                <h5>Usalama</h5>
                                Katika ulimwengu wetu uliounganishwa sana, biashara zinakabiliwa na changamoto zinazoenea zaidi ya kuta zao nne, na zinahitaji usalama haswa.
                                iliyoundwa kwa madhumuni haya. miundombinu ya leo inaenea kwa vifaa vya wingu na simu, pamoja na wafanyakazi wa mbali, wauzaji na wateja.
                                 T-hub inatoa masuluhisho yaliyothibitishwa, ushauri na huduma zinazosimamiwa ambazo huandaa biashara ili kukabiliana na changamoto za leo za mwisho hadi mwisho.
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
