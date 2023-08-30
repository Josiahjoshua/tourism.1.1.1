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
                              <li class="breadcrumb-item list-inline-item active">Bivatek africa</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <img src="/uploads/icon/innovasi.png" alt="innovasive">
                        <p>Bivatek africa: "Empowering Progress Through Innovative Solutions"</p>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <h5>About Us:</h5>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                            BIVATEK AFRICA is an innovative idea generation and research company based in East Africa, specifically in Tanzania.
                            With a prime location at the Msasani TIRDO Complex and a commitment to excellence, BIVATEK AFRICA specializes in developing transformative
                            technological solutions to address various challenges across different sectors.
                            The company's mission revolves around harnessing the power of technology to drive positive change, enhance efficiency, and foster economic and social progress.
                            </p>
<br>

                            <div style="display: flex; flex-direction: row-reverse;">
                                <div style="flex: 1;">
                                    <h5>
                                        Products and Services:
                                        </h5>
                                <ul>
                                    <li>
                                    BIVA CHUO:
                                    </li>
                                        <p>BIVA CHUO is a pioneering digital technology that aims to revolutionize credit services for higher education students.
                                             This innovative mobile application replaces traditional paperwork with an efficient platform for students to apply for
                                             loans and complete the loan process using their mobile phones.
                                             BIVA CHUO streamlines the loan application process, offering accuracy, speed, and accessibility.</p>
                                    <li>
                                    BIVA VOCHA:
                                    </li>
                                        <p>BIVA VOCHA addresses challenges in the distribution of communication vouchers in today's digital age. This mobile application provides a
                                            convenient solution to the scarcity of paper vouchers in physical stores.
                                             BIVA VOCHA ensures uninterrupted access to communication services by offering customers a seamless way to purchase and exchange vouchers.</p>
                                    <li>
                                    BIVA UMBRELLA:
                                    </li>
                                    <p> BIVA UMBRELLA introduces a revolutionary concept in higher education discussions. This advanced umbrella is designed to mitigate the
                                        impact of climate change on students' academic pursuits. It offers climate resilience, integrated electrical energy sources,
                                        Wi-Fi connectivity, and even a small refrigerator. BIVA UMBRELLA aims to create a conducive learning environment regardless of weather conditions.</p>
                                    <li>
                                	BIVA GUEST
                                    </li>
                                    <p>BIVA GUEST addresses the challenges faced by the lodge and guest house industry in accurately tracking and managing guest attendance.
                                        This technology-driven solution offers real-time monitoring and data management for guest arrivals.
                                         BIVA GUEST aims to restore transparency, prevent fraudulent practices, and improve overall efficiency within the industry.</p>
                                </ul>
                            </div>

                                <div style="flex: 1;">
                                    <h5>
                                        Meet the Founder:
                                        </h5>
                                    <img src="{{asset('static/uploads/bivatek/biva.png')}}" alt="Picha" style="width: 100%;">
                                </div>
                            </div>
                            <br>
                            <h5>
                            Mission
                            </h5>
                            <p>To drive technological innovation, solve complex challenges, and empower businesses and
                                communities with transformative solutions that enhance efficiency, sustainability, and growth.
                            </p>

                            <h5>
                            Vision
                            </h5>
                            <p>To be a leading technology company in Africa, recognized for our commitment to innovation, social impact, and excellence in research and development.
                            </p>

                            <br>
                            <h5>
                            Company Services:
                            </h5>
                            <p>
                               BIVATEK AFRICA offers a range of services aimed at driving innovation, solving challenges, and promoting growth:
                                <ul>
                                    <li>
                                    1.	Help Desk IT Services:
                                    </li>
                                    Offering comprehensive IT support for various equipment and devices in offices, ensuring smooth operation and maintenance.
                                    <li>
                                    2.	Network Security:
                                    </li>
                                    Providing cybersecurity measures to safeguard valuable data and protect businesses from digital threats.
                                    <li>
                                    3.	Data Storage and Management:
                                    </li>
                                    Creating secure and efficient data storage solutions, allowing businesses to access and manage data effectively.
                                    <li>
                                    4.	Cloud Services:
                                    </li>
                                    Setting up cloud-based infrastructure for remote access to data and services, enhancing efficiency and security.
                                    <li>
                                    5.	Data Backup Services:
                                    </li>
                                    Implementing strategies for data backup and recovery to ensure data integrity and prevent loss.
                                    <li>
                                    6.	IT Consulting:
                                    </li>
                                    Guiding businesses in adopting the right IT strategies and technologies to enhance operations and productivity.
                                    <li>
                                    7.	Social Media Consulting:
                                    </li>
                                    Managing and strategizing social media presence to engage customers and drive growth.
                                    <li>
                                    8.	Repair Services:
                                    </li>
                                    Providing troubleshooting, maintenance, and repair services for IT equipment and systems.
                                    <li>
                                    9.	Web Designing Services:
                                    </li>
                                    Designing, developing, App development, and maintaining websites to enhance online presence and user experience.
                                    <li>
                                    10.	Email Marketing Services:
                                    </li>
                                    Crafting effective email marketing campaigns to connect with clients and promote products or services.
                                </ul>
                            </p>
                            <p>
                            <h5>Values:</h5>
                                <ul>
                                    <li>	Innovation: </li>
                                    We thrive on creativity and innovation, constantly seeking new ways to solve problems and improve lives.
                                    <li>	Collaboration: </li>
                                    We believe in the power of collaboration, working closely with clients and partners to achieve shared goals.
                                    <li>	Excellence: </li>
                                    We are dedicated to delivering high-quality solutions and services that exceed expectations.
                                    <li>	Responsibility: </li>
                                    We are dedicated to delivering high-quality solutions and services that exceed expectations.
                                    <li>	Responsibility: </li>
                                    We are committed to ethical business practices, social responsibility, and sustainable growth.
                                    <li>	Adaptability: </li>
                                    We embrace change and adapt to evolving technologies and market trends.
                                </ul>
                            </p>
                            <p>
                                <h5>Contact Us: </h5>
                            </br>
                            Website: <a href="#">www.bivatekafrica.com</a>
                            <br>
                            Email: <a href="#">contact@bivatekafrica.com </a>
                            <br>
                            Phone: +255 685 049 025
                            <br>
                            <!-- Whatsapp link: <a href="https://wa.me/message/LJDO4WFMDB7BL1.">https://wa.me/message/LJDO4WFMDB7BL1.</a> -->
                            <br>
                            BIVATEK AFRICA is your partner in driving innovation, transforming challenges into opportunities, and shaping a brighter future through technology.

                            </p>
                        </div>
                        <div class="col-12 mt-4 text-center">
                            <img src="/uploads/innovasie/innovasie.png" alt="Innovasie" style="max-width: 100%;">
                        </div>
                    </div>
                    @include('tirdoweb.en.newsection')

                 </div>
                </div>
                </div>

            </div>

@endsection
