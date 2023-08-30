@extends('tirdoweb.en.base_layout')

@section('content')

{{-- conetent --}}


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
                            <b>HOP Electronic Manufacturing Industry </b> a privately-owned limited company registered under the laws of the United Republic of Tanzania.
                                We specialize in providing innovative electronic services and products to cater to the evolving needs of the Tanzanian market.
                                Our headquarters are located in Dar es Salaam, Tanzania,
                                and we are committed to offering cutting-edge solutions in the realm of smart home electronics, particularly through the development of automated systems.
                        </br>
                        </p>
                        <h5>VISION:</h5>
                        <P>Our vision is to lead the Tanzanian electronics industry by offering a comprehensive range of smart home solutions and services that cater to the unique demands of the African market.</P>

                        <h5>MISSION:</h5>
                        <P>Our mission is to establish ourselves as the forefront manufacturer of smart home solutions in Tanzania and the surrounding regions.
                            We aim to achieve this by delivering unparalleled technological innovations.</P>

                            <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <!-- <div style="flex: 1;">
                                <img src="uploads/icon/AMMACON PICTURE.png" alt="Picha" style="width: 100%;">
                            </div>
                            <div style="flex: 1;"> -->
                        <h5>CORE VALUE</h5>
                        <P>
                            At HOP Electronic Manufacturing Industry, we are guided by a set of core values that shape our company culture and drive our operations:
                        <ul>
                            <li>INNOVATION:</li>
                            We strive to stay at the forefront of technological advancements and continuously innovate to provide groundbreaking solutions to our customers.
                            <li>SIMPLICITY:</li>
                            We believe in making technology accessible to everyone. Our products are designed with user-friendliness in mind to ensure ease of use for all customers.
                            <li>AFFORDABILITY:</li>
                            We are committed to offering high-quality products at prices that are accessible to a wide range of individuals and institutions.
                            <li>QUALITY:</li>
                            We are dedicated to producing products that meet the highest standards of quality and reliability, ensuring customer satisfaction.
                            <li>TEAMWORK:</li>
                            Collaboration and cooperation are at the heart of our success. We value the contributions of every team member in achieving our goals.
                        </ul>
                        </P>
                        <!-- </div> -->

                        </div>


                    </br>
                    <h5>OUR SOLUTION</h5>
                    <p>
                        HOP Electronic Manufacturing Industry addresses these challenges by introducing smart light bulbs and an intuitive online platform through a mobile application.
                        This technology empowers users to remotely control their smart light bulbs, enabling seamless management of electronics from any location.
                        Our solution offers unparalleled convenience, cost savings, and environmental responsibility.
                    </p>

                    <p>
                        <h5>PRODUCTS AND SERVICES</h5>
                        <ol>
                        <li>Primary Goals</li>
                        HOP's core focus is on providing smart home electronic solutions, with a primary emphasis on smart light bulbs.
                        Our goal is to demonstrate our capabilities to the Tanzanian market, initially targeting 8000 stable customers in the first two years.
                        This foundation will support the expansion of our product portfolio to cater to various needs and establish a strong market presence.
                        <li>Strategic Goals</li>
                        In the short term, we aim to establish ourselves as a reputable player in the Tanzanian market with a loyal customer base. As we gain traction,
                        our focus will shift towards gaining a significant market share by investing more in marketing and business development.
                        <li>Product Range</li>
                        We offer an array of smart home solutions, starting with smart light bulbs. Our product portfolio will evolve to encompass a wider range of electronics,
                         all designed to enhance convenience, energy efficiency, and overall quality of living.
                    </p>
                    </br>
                    <p>
                        <h5>Market Analysis</h5>
                        <ol>
                        <li>Market Size</li>
                        Our target market includes individuals, homeowners, and public building owners across Tanzania.
                         With a growing percentage of the population having access to electricity and the internet, there is substantial potential for adoption.
                         We intend to launch our products as soon as we secure sufficient funds for production.
                        <li>Target Market</li>
                        Our focus will initially be on urban areas, targeting tech-savvy individuals, small to medium-sized businesses, and institutions that can benefit from automated solutions.
                        As we establish ourselves, we plan to expand to other cities and towns in Tanzania.
                        <li>Customer Segments</li>
                        HOP's products cater to both the individual consumer segment and the institutional segment.
                        Our technologies offer convenience, power management, and remote control solutions for both segments.
                        <li>Value Proposition</li>
                        Our products and services offer unmatched convenience, power savings, and operational efficiency. By leveraging technology, we simplify tasks, enhance accessibility,
                        and provide tools for informed decision-making. Our affordability and focus on innovation set us apart in the Tanzanian market.
                    </p>
                    <p>
                    </br>
                    <p>
                        <h5>CONTACT US</h5>
                        Address <br>
                        TIRDO Complex, <br>
                        Kimweri Avenue, Msasani <br>
                        P.O. BOX 23235 Dar es salaam <br>
                        Communication <br>
                        +255 684 181 244 <br>
                        Email :
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
