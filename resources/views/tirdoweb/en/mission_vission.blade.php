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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">ABOUT TIRDO</li><li class="breadcrumb-item list-inline-item active">Mission and Vision</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Establishment ,Mission and Vision</h4>
                        <div class="col-12 px-0 mt-4">
                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#000000"><strong>Establishment</strong></span></span></span></p>

                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif">
    Tanzania Industrial Research and Development Organization (TIRDO) is a
    multi-disciplinary research and development organization established
    by an Act of Parliament No. 5 of 1979 and it became operational on 1st April,
    1979. It is a Government owned institution under the Ministry of Industry,
    Trade and Investment.<br>
    Its mandate is to assist the industrial sector of
	Tanzania by providing technical expertise and support services to upgrade their
	technology base. Furthermore, TIRDO mandate is to carry out applied research for the
	development of suitable technologies, and value addition to indigenous resources through
	industrial processing.
                            </span></span>
                            </p>

                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#000000"><strong>FUNCTIONS OF ORGANISATON </strong></span></span></span></p>

                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif">
    a)	Carry out and promote the carrying out of applied research designed to facilitate
	the evaluation, development and use of local materials in industrial processes.<br>
    b)	Research into local and foreign industrial techniques and technologies and evaluate
	their suitability for adoption and use in industrial production.<br>
    c) Promote and provide facilities for training personnel for carrying out applied
	scientific and industrial research.<br>
    d)	Operate documentation system to disseminate information on applied research.<br>
    e)	Provide technical services for industrial development.<br>
    f)	Provide technical capacity to mitigate industrial pollution.
                            </span></span></p>

                            <p><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#000000"><strong>&nbsp;VISION</strong></span></span></span></p>

                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif">
    “An institution which conducts high quality, environmentally friendly and demand driven research, with outputs resulting into competitive industry”.
                            </span></span></p>

                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#000000"><strong>MISSION</strong></span></span></span></p>

                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif">
     “To conduct research, development and technical services on industrial
     processes and products while utilizing local materials in partnership with the industries”.
                            </span></span></p>

                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif">
        <span style="color:#000000"><strong>TIRDO’S EXPERIENCE IN ASSESSMENT OF INDUSTRIAL PLANT</strong></span>
                            </span></span></p>

                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif">
    TIRDO has wide experience in undertaking industrial studies for new establishments
	and for technical evaluations of existing factories. In the recent past,
	some of similar work that has been done include, among others:<br><br>

    <ul style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 16px;text-decoration: none;">
        <li>Technical audit to General Tyre East Africa (GTEA) factory.</li>
        <li>Technical Audit to Mponde Tea Factory, Lushoto.</li>
        <li>Technical Audit to Mwanza Tanneries, Mwanza.</li>
        <li>	Viability study on upgrading or replacement of the installed technology at the Kilimanjaro Machine Tools Manufacturing Plant (KMTC) in Moshi.</li>
        <li>	Feasibility Study into a Public-Private Partnership (PPP) model for the Kilombero river ferry.</li>
        <li>	Technical appraisal of the New Northern Creameries in Arusha.</li>
        <li>	Technical assessment of the Bellaview Juice Processing Plant in Kilimanjaro.</li>
        <li>	Technical assessment of Kibuye Instant Coffee processing plant project.</li>
        <li>	Technical evaluation of North Mead Water Bottling Plant project.</li>
        <li>	Technical assessment of automotive air filter manufacturing factory project.</li>
        <li>	Technical assessment for expansion of milk processing plant.</li>
        <li>	Technical audit to National Bank of Commerce (NBC) Printing Press at Mbagala.</li>
        </ul>
                            </span></span>
                            <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 16px;text-align: justify;">
        TIRDO is currently offering technical support to a local investor on establishment of an industry.
                            </p>
                            </p>

                            <p style="text-align:justify">&nbsp;</p>

                        </div>
                    </div>
                    {{-- {% include 'en/new_section.html' %} --}}
                </div>
            </div>
        </div>

    </div>

       <!-- /contents -->
@endsection
