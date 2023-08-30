@extends('tirdoweb.sw.base_layout')

@section('content')

{{-- content --}}
<div class="container px-0">
    <div class="col-12 special-page">
        <div class="col-12 p-4">
            <div class="row">
                <div class="col-12 px-xs-0">
                    <nav aria-label="breadcrumb" class="mb-0">
                        <ol class="breadcrumb px-0">
                                                        <li class="breadcrumb-item "><a href="{{ route('home', ['language' => $current_language]) }}"><span class="fas fa-home"></span></a></li>
                          <li class="breadcrumb-item list-inline-item font-weight-bold">Company under T-Hub</li>
                          <li class="breadcrumb-item list-inline-item active">HOP Electronic </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">

                <div class="col-md-9 bg-white py-3 page-content">
                    <img src="{{asset('static/uploads/icon/HOP LOGO.jpg')}}" alt="Hop">
                    <h4>HOP Electronic Manufacturing Industry</h4>
                    <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                        <p>
                            <b>HOP Electronic Manufacturing Industry </b> kampuni binafsi iliyosajiliwa chini ya sheria za Jamhuri ya Muungano wa Tanzania.
                            Tuna utaalam katika kutoa huduma na bidhaa za kielektroniki za kibunifu ili kukidhi mahitaji yanayoendelea ya soko la Tanzania.
                            Makao yetu makuu yako Dar es Salaam, Tanzania.
                            na tumejitolea kutoa suluhu za kisasa katika nyanja ya vifaa vya elektroniki vya nyumbani, haswa kupitia uundaji wa mifumo ya kiotomatiki.
                    </br>
                    </p>
                    <h5>MAONO:</h5>
                    <P>Maono yetu ni kuongoza tasnia ya kielektroniki ya Tanzania kwa kutoa anuwai kamili ya suluhisho na huduma mahiri za nyumbani zinazokidhi mahitaji ya kipekee ya soko la Afrika.</P>

                    <h5>MISHENI:</h5>
                    <P>Dhamira yetu ni kujitambulisha kama watengenezaji wa mstari wa mbele wa suluhu za smart home nchini Tanzania na mikoa jirani.
                        Tunalenga kufanikisha hili kwa kutoa uvumbuzi wa kiteknolojia usio na kifani.</P>

                            <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <!-- <div style="flex: 1;">
                                <img src="uploads/icon/AMMACON PICTURE.png" alt="Picha" style="width: 100%;">
                            </div>
                            <div style="flex: 1;"> -->
                                <h5> THAMANI KUU</h5>
                                    <P>
                                        Katika HOP Electronic Manufacturing Industry, tunaongozwa na seti ya maadili ya msingi ambayo yanaunda utamaduni wa kampuni yetu na kuendesha shughuli zetu:
                                    <ul>
                                        <li>UBUNIFU:</li>
                                        Tunajitahidi kukaa mstari wa mbele katika maendeleo ya kiteknolojia na kuendelea kubuni ili kutoa masuluhisho ya msingi kwa wateja wetu.
                                        <li>URAHISI:</li>
                                        Tunaamini katika kufanya teknolojia ipatikane na kila mtu. Bidhaa zetu zimeundwa kwa kuzingatia urafiki wa mtumiaji ili kuhakikisha urahisi wa matumizi kwa wateja wote.
                                        <li>NAFUU:</li>
                                        Tumejitolea kutoa bidhaa za ubora wa juu kwa bei zinazoweza kufikiwa na watu na taasisi mbalimbali.
                                        <li>UBORA:</li>
                                        Tumejitolea kuzalisha bidhaa zinazofikia viwango vya juu zaidi vya ubora na kutegemewa, kuhakikisha kuridhika kwa wateja.
                                        <li>Kazi ya Timu:</li>
                                        Ushirikiano na ushirikiano ndio kiini cha mafanikio yetu. Tunathamini michango ya kila mwanachama wa timu katika kufikia malengo yetu.
                                    </ul>
                                    </P>
                        <!-- </div> -->

                        </div>


                    </br>
                    <h5>SULUHISHO LETU</h5>
                    <p>
                        Sekta ya Utengenezaji wa Kielektroniki ya HOP inashughulikia changamoto hizi kwa kutambulisha balbu mahiri na mfumo angavu wa mtandaoni kupitia programu ya simu.
                        Teknolojia hii huwapa watumiaji uwezo wa kudhibiti balbu zao mahiri za mbali kwa mbali, kuwezesha usimamizi wa umeme kutoka eneo lolote.
                        Suluhisho letu linatoa urahisi usio na kifani, uokoaji wa gharama, na uwajibikaji wa mazingira.
                    </p>

                    <p>
                        <h5>BIdhaa NA HUDUMA</h5>
                        <ol>
                        <li>Malengo ya Msingi</li>
                        Lengo kuu la HOP ni kutoa suluhu mahiri za kielektroniki za nyumbani, kwa msisitizo mkuu wa balbu mahiri.
                        Lengo letu ni kuonyesha uwezo wetu kwa soko la Tanzania, tukiwalenga wateja 8000 imara katika miaka miwili ya kwanza.
                        Msingi huu utasaidia upanuzi wa jalada la bidhaa zetu ili kukidhi mahitaji mbalimbali na kuanzisha uwepo thabiti wa soko.
                        <li>Malengo ya Kimkakati</li>
                        Kwa muda mfupi, tunalenga kujiimarisha kama mchezaji anayeheshimika katika soko la Tanzania na msingi wa wateja waaminifu. Tunapopata mvuto,
                        lengo letu litahamia katika kupata sehemu kubwa ya soko kwa kuwekeza zaidi katika maendeleo ya masoko na biashara.
                        <li>Msururu wa Bidhaa</li>
                        Tunatoa suluhisho mahiri za nyumbani, kuanzia balbu mahiri. Kwingineko ya bidhaa zetu itabadilika ili kujumuisha anuwai ya vifaa vya elektroniki,
                         zote zimeundwa ili kuongeza urahisi, ufanisi wa nishati, na ubora wa maisha kwa ujumla.
                    </p>
                    </br>
                    <p>
                        <h5>Uchambuzi wa Soko</h5>
                        <ol>
                        <li>Ukubwa wa Soko</li>
                        Soko letu tunalolenga ni pamoja na watu binafsi, wamiliki wa nyumba, na wamiliki wa majengo ya umma kote Tanzania.
                         Kwa kuongezeka kwa asilimia ya watu wanaopata umeme na mtandao, kuna uwezekano mkubwa wa kupitishwa.
                         Tunakusudia kuzindua bidhaa zetu mara tu tutakapopata fedha za kutosha kwa ajili ya uzalishaji.
                        <li>Soko Lengwa</li>
                        Mtazamo wetu mwanzoni utakuwa katika maeneo ya mijini, tukilenga watu binafsi wenye ujuzi wa teknolojia, biashara ndogo hadi za kati, na taasisi zinazoweza kufaidika na suluhu za kiotomatiki.
                        Tunapojiimarisha, tunapanga kupanua miji na miji mingine nchini Tanzania.
                        <li>Sehemu za Wateja</li>
                        Bidhaa za HOP zinafaa kwa sehemu ya watumiaji binafsi na sehemu ya taasisi.
                        Teknolojia zetu hutoa urahisi, usimamizi wa nguvu, na suluhisho za udhibiti wa mbali kwa sehemu zote mbili.
                        <li>Pendekezo la Thamani</li>
                        Bidhaa na huduma zetu hutoa urahisi usio na kifani, kuokoa nishati na ufanisi wa uendeshaji. Kwa kutumia teknolojia, tunarahisisha kazi, kuboresha ufikivu,
                        na kutoa zana za kufanya maamuzi sahihi. Uwezo wetu wa kumudu na kuzingatia ubunifu hutuweka tofauti katika soko la Tanzania.
                    </p>
                    <p>
                    </br>
                    <p>
                        <h5>WASILIANA NASI</h5>
                        Anwani <br>
                        TIRDO Complex, <br>
                        Kimweri Avenue, Msasani <br>
                        P.O. BOX 23235 Dar es salaam <br>
                        Mawasiliano <br>
                        +255 684 181 244 <br>
                        Barua pepe :
                        <a href="#">horrancep@gmail.com</a> <br>
                         <br>
                    </p>

                    </div>
                </div>


            </div>
        </div>
    </div>

</div>
@endsection
