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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">Company under T-Hub</li>
                              <li class="breadcrumb-item list-inline-item active">Ammacom</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <img src="/uploads/icon/AMMACOM.png" alt="awamuPay">
                        <h4>WE ARE A TECH SAVVY, CREATIVE GROUP OF INDIVIDUALS
                            WHO ARE VERY PASSIONATE ABOUT EVERYTHING DIGITAL.</h4>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                <b>Ammacom Technology Company Limited</b> is creative and digital
                                agency specialized in advertising, software design and development,
                                and other Internet related services and product.
                            </br>
                                We have assembled a team of the best and brightest minds in software
                                development, marketing, and leadership, giving our clients access to the
                                most cutting-edge technology.
                            </p>
                            <h5>VISION:</h5>
                            <P>To become a bridge between companies and the benefits of technology.</P>

                            <h5>MISSION:</h5>
                            <P>To help the businesses benefit from technology advancement.</P>

                            <div style="display: flex; flex-direction: row-reverse;">
                                <div style="flex: 1;">
                                    <img src="/uploads/icon/AMMACON PICTURE.png" alt="Picha" style="width: 100%;">
                                </div>
                                <div style="flex: 1;">
                            <h5>CORE VALUE</h5>
                            <P>
                            <ul>
                                <li>INTEGRITY</li>
                                <li>ACCOUNTABILITY</li>
                                <li>ACCOUNTABILITY</li>
                                <li>RESPONSIBILITY</li>
                                <li>TRUST-WORTHY</li>
                                <li>TRANSPARENT</li>
                                <li>PROFESSIONALISM</li>
                            </ul>
                            </P>
                            </div>

                            </div>


                        </br>
                        <h5>OUR SOLUTION</h5>
                        <p>
                            <h6> WhatsApp Business Solution</h6>
                            Using WhatsApp business API you can automate up
                            to 70% of your customer service interactions,
                            deliver a better customer service experience, and save money.
                            <ul>
                                <li>Raise customer satisfaction and loyalty with professional,
                                    efficient, and data-protection-compliant communication
                                    on the worldwide leading messaging app, WhatsApp.
                                <ul>
                                    <li>Provide world class customer support with automation</li>
                                    <li>Instant notification to your customer</li>
                                </ul></li>
                            </ul>
                        </br>
                            <h6> Business Process Automation</h6>
                            Become a paperless company by automating repetitive
                            tasks and focus on only what matters
                            <ul><li>
                                We develop the solution heavily on looking inward toward your organization first. Knowing and pinpointing your needs and pain points are key in helping you choose the right
                                solution for you.
                            </li>
                        <li>
                            mating business processes, especially those that are traditionally handled manually, significant benefits can be realized:
                            <ul>
                                <li>Greater Productivity</li>
                                <li> Improved Job Satisfaction</li>
                                <li>Increased Efficiency</li>
                                <li>Full Audibility and Tracking</li>
                                <li>Improved Accuracy </li>
                            </ul>
                        </li></ul>
                        </p>

                        <p>
                            <h5>OUR SERVICES</h5>
                            <ol>
                            <li>Mobile App Development</li>
                                We help create business enhancing mobile applications, that
                                increase both productivity as well as efficiency.
                            <li>Custom Software development</li>
                                Design, development, customization, deployment, and support of
                                enterprise driven custom software applications and solutions as
                                well as brand new software products and services.
                            <li>Digital Marketing</li>
                                We use data-rich social media websites to run different campaigns.
                                These platforms contain millions of users available to almost every
                                industry
                            <li>Website Development</li>
                                Our aim to build eye-catching, appealing responsive website designs that contest our client’s needs as well as their target market.
                            <li>Support & Maintenance</li>
                                We offer a wide range of software support and maintenance services to ensure that the delivered software runs smoothly and in
                                full accordance with its clients’ requirements.
                            <li>Mobile Money Integration</li>
                                integrate your system with mobile money payments
                            <li>IT Consultation</li>
                                Our strategic IT consulting will help you automate and digitalizes
                                operations, optimise the software portfolio, and implement the
                                latest technologies.
                            <li>UX / UI Design </li>
                                Build the product you need on time with an experienced team that
                                uses a clear and effective design process.
                        </ol>
                        </p>
                        </br>
                        <p>
                        <h5>SOME OF OUR CLIENTS</h5>
                        We partner with the best in the industry
                        <img src="/uploads/icon/partners ammacom.png" alt="partners ammacom">
                        </p>
                        </br>
                        <p>
                            <h5>CONTACT US</h5>
                            Address <br>
                            TIRDO Complex, <br>
                            Kimweri Avenue, Msasani <br>
                            P.O. BOX 23235 Dar es salaam <br>
                            Communication <br>
                            +255 743 700 400 | +255 786 503 601 <br>
                            Email <br>
                            <a href="#">info@ammacom.co.tz</a> <br>
                            <a href="https://ammacom.com/">www.ammacom.co.tzbr</a> <br>
                        </p>

                        </div>
                    </div>

                    @include('tirdoweb.en.newsection')

                </div>
            </div>
        </div>

    </div>

@endsection
