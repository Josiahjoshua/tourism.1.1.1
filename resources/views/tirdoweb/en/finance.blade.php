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
                              <li class="breadcrumb-item list-inline-item font-weight-bold">TIRDO</li><li class="breadcrumb-item list-inline-item active">Finance</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-9 bg-white py-3 page-content">
                        <h4>Finance</h4>
                        <div class="col-12 px-0 mt-4">
                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#000000"><strong>Objective</strong></span></span></span></p>

                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif">
                                To provide expertise and services on finance and accounts to the institution.
                            </span></span>
                            </p>

                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif"><span style="color:#000000"><strong>FUNCTIONS</strong></span></span></span></p>

                            <p style="text-align:justify"><span style="font-size:16px"><span style="font-family:Verdana,Geneva,sans-serif">
                                The department will perform the following functions:<br><br>
                                •	To coordinate preparation, review and implementation of the Corporate Strategic Plan, Action Plan and Annual Budget;<br>
                                •	To review management tools such as financial regulations, accounting policy, manual and others, records, information and data as affirmed in the public service policies and regulations;<br>
                                •	To develop, examine and evaluate financial and appropriate accounting systems and procedures including sound financial regulations to ensure system reliability and integrity;<br>
                                •	To ensure proper accounting and control of revenue and expenditures and coordinate preparation of annual financial statements;<br>
                                •	To provide advice on organizational efficiency and business process improvement, and promote various institution’s development programs and activities.<br>
                                •	To provide technical advice on finance and accounts, information communication technology, estate management and marketing.<br>
                                •	To establish and implement financial and physical resources management system; <br>
                                •	To ensure proper management of the institution’s cash flow;<br>
                                •	To coordination of all the financial actors around the institution: suppliers, legal and administrative advisors, tax services; and<br>

                                •	To ensure cross-cutting issues are addressed in the Strategic Plans and Annual work plans.<br>

                            </span></span></p>

                        </div>
                    </div>
                    @include('tirdoweb.en.newsection')

                </div>
            </div>
        </div>

    </div>

       <!-- /contents -->
@endsection
