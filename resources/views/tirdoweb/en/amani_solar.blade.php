@extends('tirdoweb.en.base_layout')

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
                            <b>Amani Solar </b> is a pioneering company dedicated to addressing the critical issue of inadequate access to reliable and affordable
                                 lighting in areas without access to electricity. Our innovative solution, Amani Solar-powered household lighting, offers a
                                 sustainable and eco-friendly alternative to traditional lighting sources like candles and kerosene lamps. By harnessing the
                                  power of the sun, our solar lamps provide clean, safe, and reliable lighting, improving the lives of individuals and
                                  households in off-grid or low-income communities.
                        </br>
                        </p>
                        <h5>VISION:</h5>
                        <P>Our vision is to illuminate lives and transform communities by providing sustainable lighting solutions that
                             enhance well-being, productivity, and environmental stewardship.</P>

                        <h5>MISSION:</h5>
                        <P>Our mission is to create positive social impact by offering solar-powered household lighting that addresses
                            energy poverty, reduces indoor air pollution, and promotes sustainable living.</P>

                            <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                                <!-- <div style="flex: 1;">
                                    <img src="uploads/icon/AMMACON PICTURE.png" alt="Picha" style="width: 100%;">
                                </div>
                                <div style="flex: 1;"> -->
                            <h5>CORE VALUE</h5>
                            <P>
                                At HOP Electronic Manufacturing Industry, we are guided by a set of core values that shape our company culture and drive our operations:
                            <ul>
                                <li>EMPOWERMENT:</li>
                                We believe in empowering individuals and communities with access to clean and affordable lighting that transforms their quality of life.
                                <li>INNOVATION:</li>
                                We are committed to continuous innovation in solar technology to provide efficient, reliable, and user-friendly solutions.
                                <li>SUSTAINABILITY:</li>
                                We prioritize environmental sustainability by harnessing renewable energy and reducing dependence on non-renewable sources.
                                <li>SOCIAL IMPACT:</li>
                                Our focus is on making a meaningful difference in the lives of those underserved by conventional energy solutions.
                            </ul>
                            </P>
                            <!-- </div> -->

                            </div>
                        <h5>PROBLEM STATEMENT:</h5>
                        <ul>
                            <li>Problem/Need </li>
                            Many individuals and households in developing countries face a dire need for reliable and affordable lighting solutions.
                            Traditional lighting sources, such as candles and kerosene lamps, are expensive, hazardous, and emit pollutants that harm health and the environment.
                            Lack of access to electricity affects daily life, education, and productivity, particularly in off-grid or low-income areas.
                            <li>Validation</li>
                            Our need validation is grounded in extensive market research, surveys, and field trials.
                            We have assessed energy needs, existing lighting sources, and challenges faced by households in areas without reliable grid power.
                            Additionally, we have gathered data on economic and health costs associated with traditional lighting.
                            Field trials with potential users have affirmed the effectiveness, usability, and acceptance of our solar-powered lamps.
                        </ul>

                        </br>
                        <h5>OUR SOLUTION</h5>
                        <p>
                            Amani Solar-powered household lighting offers a sustainable alternative to traditional lighting.
                            Our solar lamps utilize solar panels to charge rechargeable batteries during the day, providing light through energy-efficient LED lamps at night.
                            The solution ensures clean, reliable, and affordable lighting without relying on the grid, making it essential during blackouts or in areas with unreliable power supply.
                        </p>

                        <p>
                            <h5>Differentiating Features</h5>
                            <ol>
                            <li>Affordability:</li>
                            Amani Solar lamps offer a cost-effective alternative to expensive fuel-based lighting solutions.
                            <li>Environmentally Friendly: </li>
                            Our solution produces no indoor air pollution and reduces reliance on fossil fuels.
                            <li>Reliability:</li>
                            Independent of the grid, our lamps provide consistent lighting during power outages.
                            <li>Ease of Use: </li>
                            Portable and durable, our lamps feature a built-in handle and USB charging port.
                            <li>Community Impact: </li>
                            Amani Solar lamps enhance productivity, education, and health within households.
                            </ol>
                        </p>
                        </br>
                        <p>
                            <h5>Market Analysis</h5>
                            <ol>
                            <li>Market Size</li>
                            Our target market encompasses rural communities, low-income households, environmentalists, campers, hikers, and humanitarian organizations in areas without reliable grid power.
                            <li>Competitors </li>
                            While other solar lighting solutions exist, Amani Solar differentiates itself through affordability, usability, and strong community impact. Our emphasis on user-friendly design,
                            local manufacturing, and partnerships with NGOs sets us apart.
                            </ol>
                        </p>
                        <p>
                        </br>
                        <p>
                        <h5>Route to Market</h5>

                        <h6>Channels</h6>
                        <ul>
                            <li>Local Retail Stores: </li>
                            Partnering with local retailers to reach households and small businesses in need.
                            <li>NGOs and Aid Organizations: </li>
                            Collaborating to distribute lamps in disaster-affected or underserved areas.
                            <li>Online Platforms: </li>
                            Utilizing digital platforms to promote and sell our solution to a global audience.
                        </ul>
                         </p>
                         In conclusion, Amani Solar is dedicated to transforming lives through sustainable lighting solutions.
                         By addressing the pressing need for reliable and affordable lighting, we empower individuals, promote environmental stewardship, and contribute to positive social change.
                        <p>
                            <h5>CONTACT US</h5>
                            Address <br>
                            TIRDO Complex, <br>
                            Kimweri Avenue, Msasani <br>
                            P.O. BOX 23235 Dar es salaam <br>
                            Communication <br>
                            +255 755 722 540 <br>
                            Email :
                            <a href="#">manamba3@gmail.com</a> <br>
                             <br>
                        </p>

                        </div>
                    </div>

                        <aside class="col-12 sticky side-bar px-0 sm-hide">
                            <ul class="nav nav-tabs row pl-3" role="tablist" id="myTab">
                                <li class="nav-item col-4 float-left px-0 text-left"> <a class="nav-link active px-0" data-toggle="tab"
                                        href="#home" role="tab">Habari Mpya</a> </li>
                                <li class="nav-item col-8"> <a class="nav-link px-0" data-toggle="tab" href="#profile"
                                        role="tab">Matangazo</a> </li>
                            </ul>

                            <!-- Tab panes -->
                        </aside>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
