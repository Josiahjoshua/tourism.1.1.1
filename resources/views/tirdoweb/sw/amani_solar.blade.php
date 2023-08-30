@extends('tirdoweb.sw.base_layout')

@section('content')
{{-- contentt --}}
<div class="container px-0">
    <div class="col-12 special-page">
        <div class="col-12 p-4">
            <div class="row">
                <div class="col-12 px-xs-0">
                    <nav aria-label="breadcrumb" class="mb-0">
                        <ol class="breadcrumb px-0">
                                                        <li class="breadcrumb-item "><a href="{{ route('home', ['language' => $current_language]) }}"><span class="fas fa-home"></span></a></li>
                          <li class="breadcrumb-item list-inline-item font-weight-bold">Kampuni iliyo chini ya T-Hub</li>
                          <li class="breadcrumb-item list-inline-item active">Amani Solar</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">

                <div class="col-md-9 bg-white py-3 page-content">
                    <img src="{{asset('static/uploads/icon/AMANI SOLAR LOGO.png')}}" alt="awamuPay">
                    <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                        <p style="text-align:justify;">
                            <b>Amani Solar </b> ni kampuni tangulizi inayojitolea kushughulikia suala muhimu la ufikiaji duni wa kuaminika na kwa bei nafuu
                            taa katika maeneo yasiyo na umeme. Suluhisho letu la ubunifu, taa ya kaya inayotumia nishati ya jua ya Amani, inatoa a
                            mbadala endelevu na rafiki wa mazingira kwa vyanzo vya taa vya kitamaduni kama vile mishumaa na taa za mafuta ya taa. Kwa kutumia
                             nguvu ya jua, taa zetu za jua hutoa taa safi, salama, na ya kuaminika, kuboresha maisha ya watu binafsi na
                             kaya zisizo kwenye gridi ya taifa au jumuiya za kipato cha chini.
                   </br>
                   </p>
                   <h5>MAONO:</h5>
                   <P>Maono yetu ni kuangazia maisha na kubadilisha jamii kwa kutoa masuluhisho endelevu ya taa ambayo
                        kuimarisha ustawi, tija, na utunzaji wa mazingira.</P>

                   <h5>MISHENI:</h5>
                   <P>Dhamira yetu ni kuunda athari chanya ya kijamii kwa kutoa taa za kaya zinazotumia nishati ya jua ambazo hushughulikia
                       umaskini wa nishati, hupunguza uchafuzi wa hewa ndani ya nyumba, na kukuza maisha endelevu.</P>
                            <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                                <!-- <div style="flex: 1;">
                                    <img src="uploads/icon/AMMACON PICTURE.png" alt="Picha" style="width: 100%;">
                                </div>
                                <div style="flex: 1;"> -->
                                    <h5> THAMANI KUU</h5>
                                        <P>
                                            Katika HOP Electronic Manufacturing Industry, tunaongozwa na seti ya maadili ya msingi ambayo yanaunda utamaduni wa kampuni yetu na kuendesha shughuli zetu:
                                        <ul>
                                            <li>UWEZESHAJI:</li>
                                            Tunaamini katika kuwawezesha watu binafsi na jamii kupata mwanga safi na wa bei nafuu unaobadilisha ubora wa maisha yao.
                                            <li>UBUNIFU:</li>
                                            Tumejitolea kuendeleza uvumbuzi katika teknolojia ya nishati ya jua ili kutoa masuluhisho yenye ufanisi, yanayotegemeka na yanayofaa watumiaji.
                                            <li>UENDELEVU:</li>
                                            Tunatanguliza uendelevu wa mazingira kwa kutumia nishati mbadala na kupunguza utegemezi kwa vyanzo visivyoweza kurejeshwa.
                                            <li>ATHARI ZA KIJAMII:</li>
                                            Lengo letu ni kuleta mabadiliko ya maana katika maisha ya wale ambao hawajahudumiwa na suluhu za kawaida za nishati.
                            </ul>
                            </P>
                            <!-- </div> -->

                            </div>
                            <h5>TAMKO LA TATIZO:</h5>
                            <ul>
                                <li>Tatizo/Inahitaji </li>
                                Watu wengi na kaya katika nchi zinazoendelea wanakabiliwa na hitaji kubwa la suluhu za taa zinazotegemewa na za bei nafuu.
                                Vyanzo vya taa vya jadi, kama vile mishumaa na taa za mafuta ya taa, ni ghali, ni hatari, na hutoa uchafuzi unaodhuru afya na mazingira.
                                Ukosefu wa upatikanaji wa umeme huathiri maisha ya kila siku, elimu, na tija, hasa katika maeneo ya nje ya gridi ya taifa au maeneo ya kipato cha chini.
                                <li>Uthibitishaji</li>
                                Uthibitishaji wa hitaji letu unatokana na utafiti wa kina wa soko, tafiti na majaribio ya nyanjani.
                                Tumetathmini mahitaji ya nishati, vyanzo vya taa vilivyopo, na changamoto zinazokabili kaya katika maeneo yasiyo na umeme wa gridi ya taifa.
                                Zaidi ya hayo, tumekusanya data kuhusu gharama za kiuchumi na kiafya zinazohusiana na mwanga wa jadi.
                                Majaribio ya uga na watumiaji watarajiwa yamethibitisha ufanisi, utumiaji, na ukubalifu wa taa zetu zinazotumia nishati ya jua.
                            </ul>

                        </br>
                        <h5>SULUHISHO LETU</h5>
                        <p>
                            Taa ya kaya inayotumia nishati ya jua ya Amani inatoa mbadala endelevu kwa taa za kitamaduni.
                            Taa zetu za miale ya jua hutumia paneli za jua kuchaji betri zinazoweza kuchajiwa wakati wa mchana, na kutoa mwanga kupitia taa za LED zisizotumia nishati wakati wa usiku.
                            Suluhisho huhakikisha taa safi, ya kuaminika, na ya bei nafuu bila kutegemea gridi ya taifa, na kuifanya kuwa muhimu wakati wa kukatika kwa umeme au katika maeneo yenye usambazaji wa umeme usioaminika.
                        </p>

                        <p>
                            <h5>Vipengele Tofauti</h5>
                            <ol>
                            <li>Kumudu:</li>
                            Taa za Amani Solar hutoa mbadala wa gharama nafuu kwa ufumbuzi wa taa wa gharama kubwa wa mafuta.
                            <li>Inayofaa kwa Mazingira: </li>
                            Suluhisho letu halitoi uchafuzi wa hewa ndani ya nyumba na hupunguza utegemezi wa nishati ya kisukuku.
                            <li>Kuegemea:</li>
                            Bila kujali gridi ya taifa, taa zetu hutoa mwanga thabiti wakati wa kukatika kwa umeme.
                            <li>Urahisi wa Kutumia: </li>
                            Inabebeka na inadumu, taa zetu zina mpini uliojengewa ndani na mlango wa kuchaji wa USB.
                            <li>Athari za Jumuiya: </li>
                            Taa za jua za Amani huongeza tija, elimu, na afya ndani ya kaya.
                            </ol>
                        </p>
                        </br>
                        <p>
                            <h5>Uchambuzi wa Soko</h5>
                            <ol>
                            <li>Ukubwa wa Soko</li>
                            Soko letu tunalolenga linajumuisha jumuiya za vijijini, kaya za kipato cha chini, wanamazingira, wapanda kambi, wapanda farasi, na mashirika ya kibinadamu katika maeneo yasiyo na gridi ya umeme ya kuaminika.
                            <li>Washindani </li>
                            Ingawa masuluhisho mengine ya mwanga wa jua yapo, Amani Solar inajitofautisha kupitia uwezo wa kumudu, utumiaji, na athari kubwa ya jamii. Msisitizo wetu katika muundo unaomfaa mtumiaji,
                            viwanda vya ndani, na ushirikiano na NGOs hutuweka tofauti.
                            </ol>
                        </p>
                        <p>
                        </br>
                        <p>
                        <h5>Njia hadi Soko</h5>

                        <h6>Vituo</h6>
                        <ul>
                            <li>Maduka ya Rejareja ya Ndani: </li>
                            Kushirikiana na wauzaji reja reja ili kufikia kaya na biashara ndogo ndogo zinazohitaji.
                            <li>NGOs na Mashirika ya Msaada: </li>
                            Kushirikiana kusambaza taa katika maeneo yaliyoathiriwa na maafa au yasiyo na huduma.
                            <li>Mifumo ya Mtandaoni: </li>
                            Kutumia mifumo ya kidijitali kutangaza na kuuza suluhisho letu kwa hadhira ya kimataifa.
                        </ul>
                         </p>
                         Kwa kumalizia, Amani Solar imejitolea kubadilisha maisha kupitia suluhisho endelevu za taa.
                         Kwa kushughulikia hitaji kubwa la mwanga wa kuaminika na wa bei nafuu, tunawawezesha watu binafsi, kukuza utunzaji wa mazingira, na kuchangia mabadiliko chanya ya kijamii.
                        <p>
                            <h5>WASILIANA NASI:</h5>
                            Address <br>
                            TIRDO Complex, <br>
                            Kimweri Avenue, Msasani <br>
                            P.O. BOX 23235 Dar es salaam <br>
                            Mawasiliano<br>
                            +255 755 722 540 <br>
                            Email :
                            <a href="#">manamba3@gmail.com</a> <br>
                             <br>
                        </p>

                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>

@endsection
