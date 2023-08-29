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
															<li class="breadcrumb-item "><a href="{% url 'home' current_language %}"><span class="fas fa-home"></span></a></li>
                              <li class="breadcrumb-item list-inline-item font-weight-bold">Company under T-Hub</li>
                              <li class="breadcrumb-item list-inline-item active">Innovasie</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <img src="/uploads/icon/innovasi.png" alt="innovasive">
                        <p>Innovasie Company Limited: Empowering the Future with Technology and Innovation</p>
                        <div class="col-12 px-0 mt-4 justify-content-center align-items-center">
                            <h5>About Us:</h5>
                            <p style="text-align:justify; color: black; font-size: 15px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                Innovasie is a dynamic and innovative technology solutions company based in Dar es Salaam, Tanzania. Established in 2019
                                with a registration number 139372131, our company was founded with a core vision of solving some of Africa's most prominent
                                problems through the power of technology and creativity.  

                            </br>
                            Our mission is to make a positive impact in the world by offering cutting-edge services and products that drive growth, efficiency,
                            and success for businesses and organizations in Africa and Beyond.
                            </p> 
<br>
                            <h5>
                                Management team:
                            </h5>
                            <div style="display: flex; flex-direction: row-reverse;">
                                <div style="flex: 1;">
                                <ul>
                                    <li>
                                        Shilton Anaeli Ulomi, Managing Director, Business & Strategy Lead 
                                    </li>
                                    <li>
                                        Justine John Shumbi, Director Operations, Creative and Marketing Lead
                                    </li>
                                    <li>
                                        Gideon Kiangu, Director Technology, Cyber security & IT Management
                                    </li>
                                    <li>
                                        Halilu Bazicha. Director Technology, Product Management & Agile 
                                    </li>
                                </ul>
                            </div>
                                <div style="flex: 1;">
                                    <img src="/uploads/innovasie/shirton.JPG" alt="Picha" style="width: 100%;">
                                </div>
                            </div>
                
                                
                            <br>
                            <h5>
                                Our Services:
                            </h5>
                            <p>
                                <h5>
                                    1.	Technology Solutions
                                </h5>
                                Our team of talented professionals combines their expertise in technology, software development, 
                                and industry knowledge to deliver high-quality solutions that match the unique requirements of our clients. 
                                Our technology services include:
                                <ul>
                                    <li>
                                        	Custom Software Development: 
                                    </li>
                                    <li>
                                        	Enteprise solutions
                                    </li>
                                    <li>
                                        	Game Development: 
                                    </li>
                                    <li>
                                        	Software Maintenance
                                    </li>
                                    <li>
                                        	Systems Supports and Administration
                                    </li>
                                    <li>
                                        	Information Technology Consultancy
                                    </li>
                                    <li>
                                        	Service and Maintenance of ICT Equipment
                                    </li>
                                </ul>
                            </p>
                            <p>
                                <h5>2.	Industrial cybersecurity or ICS (Industrial Control Systems) </h5>
                                We focus on protecting the critical systems and infrastructure used in various industries 
                                from cyber threats and attacks. These industries can include manufacturing, energy, transport, 
                                healthcare, utilities, and more. Our cybersecurity services include:
                                <ul>
                                    <li>	Threat Detection and Prevention: </li>
                                    <li>	Vulnerability Assessment and Patch Management: </li>
                                    <li>	Access Control and Authentication: </li>
                                    <li>	Data Protection and Encryption: </li>
                                    <li>	Network Segmentation: </li>
                                    <li>	Incident Response and Recovery: </li>
                                    <li>	Employee Training and Awareness: </li>
                                    <li>	Regulatory Compliance: </li>
                                </ul>
                            </p>
                            <p>
                                <h5>3.	Marketing 360</h5>
                                Our marketing services encompass both digital and traditional approaches, enabling us to reach a
                                wider audience and maximize brand visibility. Our marketing services include:
                                <ul>
                                    <li>	Digital Marketing</li>
                                    <li>	Content Production</li>
                                    <li>	Hybrid Marketing</li>
                                </ul>
                            </p>
                            <p>
                                <h5>4.	Our Products</h5>
                                <h6>A.	MyHI (<a href="#">www.myhi.co.tz</a>)</h6>
                                A revolutionary health insurance platform designed to simplify the process of buying and using insurance, making it accessible to all.
                            <br>
                            <br>
                                <h6>B.	Sheria365 (<a href="#">www.sheria365.com</a>) </h6>
                                A comprehensive legal CRM system that empowers law firms and legal professionals to streamline case management and enhance client communication.
                            <br>
                            <br>
                                <h6>C.	SmartSMS</h6>
                                enables organizations to send timely and personalized messages to customers, clients, and stakeholders, fostering stronger relationships and 
                                driving efficient communication.
                        
                            </p>
                            <p>
                                <h5>5.	Organisations we have worked with:</h5>
                                TIRDO, TANTRADE, Vodacom Tanzania, Smartlab, Centric, GIZ, 
                            </p>
                            <p>
                                <h5>6.	Contact Us: </h5>
                                If you are looking for a trusted technology solutions partner, Innovasie is here to assist you. Contact us today to explore how our services and 
                                products can empower your business to thrive in the digital era.
                            </br>
                            Website: <a href="#">www.innovasie.co.tz</a> 
                            <br>
                            Email: <a href="#">shilton@innovasie.co.tz </a>
                            <br>
                            Phone: +255 743 293 400 / +255 688 085 517
                            <br>
                            Whatsapp link: <a href="https://wa.me/message/LJDO4WFMDB7BL1.">https://wa.me/message/LJDO4WFMDB7BL1.</a>

                            </p>
                        </div>
                        <div class="col-12 mt-4 text-center">
                            <img src="/uploads/innovasie/innovasie.png" alt="Innovasie" style="max-width: 100%;">
                        </div>
                    </div>
                            {% include 'sw/new_section.html' %}
                        </div>
                    </div>
                </div>
        
            </div>
        
@endsection