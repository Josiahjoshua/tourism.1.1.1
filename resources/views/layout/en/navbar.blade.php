<div class="container max-1920 px-0 rangi-nyuma" >

    <!-- HEADER -->
    <header class="col-12 px-0 bg-img">

        <!-- top navbar -->
        <div class="col-12 bg-white">
            <div class="container-fluid px-0">
                <div class="row top_nav px-0">
                    <div class="col-5 sm-hide pl-0 pl-xs-2">
                        <ul class="list-inline mx-auto float-left">
                            <li class="list-inline-item sm-hide pr-2">
                                <div class="search-form">
                                    {{-- <form class="form-inline py-0 mr-auto" action="{% url 'search' language=current_language %}" method="post">

                                        <input class="form-control mr-sm-2" type="text" name="search"
                                            placeholder="Search" aria-label="Search">
                                        <button type="submit" class="search-icon" name="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form> --}}
                                </div>
                            </li>
                            <li class="list-inline-item sm-hide pr-2">
                                <div class="footer-media">
                                    <a href="https://www.facebook.com/tirdotz" target="_blank"><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAjVJREFUSEvdlU1IFHEYxn/vjLFGkZc6CEYW2miURARB4e5CIRRBH6QUQoc6RImwG1EURXvPnC0wuoQIXrp4CAIJwd0VL1LQF7a7QZIRRRJhIZS688YUbrkfoyt48X+c932f3zzvzDwjLPORZdZnhQEami6tefmkY8prbTV72teVlZs3FTkMbAZmgK5Kqbj2wfleucrQI8mY3QWoq/NvRc3NpvWl6rUoLcmE/aoYxPKHBxD2F6iPAxtV5VQ60flwrp4F1AVD1aoyBkxg6LHUYHQ4V6S+MbTLMeSZh8OnKsQV7X0biz6f56A6GCn36eQPoOyPgPDAyOiNN0PRT3OClj/UikivB2BKlLZkwu7Jc+BesAJh96735ggMieijjKMjhpg7Qe94ALpTcfvM//XsirYFL6x1ZLWljtMPrF/i93ErFbcvFwTUBNurTC17D3wFNiwFoNCWjtv3CgIgYliByXfApqWIuzMqRn06djtZBAB1/tBxFXFfsb8PurQzlorbW3JH8qLC8odbEK4DO0rSF86nYvb9BQFb/RcPiejjksRh3JyoqB0djUwvCHAb6gKhHkVOLxIyqw770kP2SKH+ImkaMazGb9vFMK4qnPQAuXlzNhW3u4v15AHcwJueyexWhyvAQQ/xn6LamkxE+7ycZgG1wfABQ+kAGuaFYOHpfnM2c250+K4bcJ5nngM3ik2feQKRo0AT4AN+AZ+BjwIDjiF96cHOFwsJz9VX2B9tsbZL6Vv2Ff0GpDGuGbbFsMYAAAAASUVORK5CYII=" /></a>

                                    <a href="https://www.instagram.com/tirdo_official" target="_blank"><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAodJREFUSEvFlT1oFEEUx/9v9+4kREQJIljYGG/VGD+4WMa9CJZKiigIsbGwSIg6CYqFSMRCMHC70VjZRoxFkFiJhcncIYg2MUjM5KMICIJpDIkgd3vzZNU79jZ7kkOOTLfzPn77f+/NDKHOi+qcH1sDaD59Y79Z9PoBtAM4AlT9EQbwCUDO4KL7OftwIVyRDQqStughwAUQr7F8BQb1zsvMk2BcBeBgx0CKtX4PwKgxecndY4Pa5iczH0sbFQDL7n8BcGcNyb95BbPVjHnniWjkdxxjXGWdrioAsQxgXwTgCwP3DeJZkNEEzRYDtwBaVjLTaqVFGxgf/sTxkpJuczXAOoDGEOA1vHiXevtgrbm9b7dvW8w9WjncIVqKGq8A/GBgJwF7/satKensiAAMGpa9WgwlXynEEwcS+UILE7oJbGuACZAEHtVkmsQ6F4rxlHTKA1LuQSp1Jb6+vTEfch5S0rlp2eIxgJ6K6WCMzGWdPssWLwGcDdiKSjqxDQrS6cHYV14thACXY3lMeAmWAPnnIbB4Rkn3WNIWdwi4GzBoJR0zqgdk2UJXpAB643mMeQlMAjgagk8r6Zyw0uI2GPeCNiWdcmVCYyr8kxlco0o6lyxbDAO4WimAXZV1hWVfnwDoXMAW3QPfwbI3ADQxjmtGAxFdBPEp389vsoZ+Bopti2jyTyWdhlrGdFkTdy5MudNBBUlbtBN4DKC9IdXflXR2RQKStlggoHxIgo0DeJzImNWam0BsEehMKHHpc05J51A1Bc8BXKgSuLltoqdqKtNdRcG1kwTj3f9cdtA6pXLDM5EAf7Ou13WJGnpwWv9Rm/KDUzRjmcU3Q0th3615MjfXzc151V3BL7dV9RkzbUS1AAAAAElFTkSuQmCC" /></a>

                                    <a href="https://www.twitter.com/tirdo_official" target="_blank"><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAjVJREFUSEvdlU1IFHEYxn/vjLFGkZc6CEYW2miURARB4e5CIRRBH6QUQoc6RImwG1EURXvPnC0wuoQIXrp4CAIJwd0VL1LQF7a7QZIRRRJhIZS688YUbrkfoyt48X+c932f3zzvzDwjLPORZdZnhQEami6tefmkY8prbTV72teVlZs3FTkMbAZmgK5Kqbj2wfleucrQI8mY3QWoq/NvRc3NpvWl6rUoLcmE/aoYxPKHBxD2F6iPAxtV5VQ60flwrp4F1AVD1aoyBkxg6LHUYHQ4V6S+MbTLMeSZh8OnKsQV7X0biz6f56A6GCn36eQPoOyPgPDAyOiNN0PRT3OClj/UikivB2BKlLZkwu7Jc+BesAJh96735ggMieijjKMjhpg7Qe94ALpTcfvM//XsirYFL6x1ZLWljtMPrF/i93ErFbcvFwTUBNurTC17D3wFNiwFoNCWjtv3CgIgYliByXfApqWIuzMqRn06djtZBAB1/tBxFXFfsb8PurQzlorbW3JH8qLC8odbEK4DO0rSF86nYvb9BQFb/RcPiejjksRh3JyoqB0djUwvCHAb6gKhHkVOLxIyqw770kP2SKH+ImkaMazGb9vFMK4qnPQAuXlzNhW3u4v15AHcwJueyexWhyvAQQ/xn6LamkxE+7ycZgG1wfABQ+kAGuaFYOHpfnM2c250+K4bcJ5nngM3ik2feQKRo0AT4AN+AZ+BjwIDjiF96cHOFwsJz9VX2B9tsbZL6Vv2Ff0GpDGuGbbFsMYAAAAASUVORK5CYII=" /></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-7 sm-hide px-0">
                        <ul class="list-inline mx-auto justify-content-end">
                            <li class="list-inline-item">
                                <a id="english-link" title="Switch Language to English" href="{% url 'home' 'en' %}">
                                    <object data="{{asset('static/asset/images/Flag_of_the_United_Kingdom.svg')}}" type="image/svg+xml" width="20px"></object>
                                    English
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="swahili-link" title="Switch Language to Swahili" href="{% url 'home' 'sw' %}">
                                    <object data="{{asset('static/asset/images/Flag_of_Tanzania.svg')}}" type="image/svg+xml" width="18px"></object>
                                    Kiswahili
                                </a>
                            </li>

                            <li class='nav-item'><a class='nav-link' target='_black'
                                    href='https://mail.tirdo.or.tz'>Staff Mail</a></li>
                            </li>
                            <li class='nav-item'><a class='nav-link' target='_black'
                                    href='https://eoffice.gov.go.tz/users/login'>e-Office</a></li>
                            </li>
                            <li class='nav-item'><a class='nav-link' href="{% url 'faq' current_language %}">FAQs</a></li>
                            </li>
                            <li class='nav-item'><a class='nav-link' href='#'>help@tirdo.or.tz</a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /top navbar -->

        <!-- top middle -->
        <div class="col-md-12 mt-0 top-middle">
            <div class="container-fluid px-0">
                <div class="row ">
                    <div class="col-md-2 col-sm-2 col-xs-2 float-left text-left pt-1 logo-container">
                        <a href="#"><img src="https://www.ega.go.tz/site/images/emblem.png" alt="emblem"
                                class="mx-auto img-fluid emblem"></a>
                    </div>

                    <div class="col-md-8 col-sm-8 col-xs-8 text-center pt-3 pt-xs-0">
                        <h2 class="mb-0 title title-main">TANZANIA INDUSTRIAL RESEARCH AND DEVELOPMENT ORGANIZATION </h2>
                        <h6 class="title-desc pt-2"><b><i>TIRDO for sustainable industrial development</i></b></h6>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-2 text-right pt-1 pr-0 logo-container"><img
                            src="{{ asset('static/asset/images/logo.jpg')}}" alt="TIRDO Logo" class="img-fluid client-logo"></div>
                </div>
            </div>
        </div>

        <!-- /top middle -->

        <!-- top bottom -->
        <div class="col-12 px-0">
            <div class="col-md-12 col-xs-12 px-0 top-fixed top-bottom">

                <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
                    <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#middleNavbarMenu"
                        aria-controls="middleNavbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse col-12 px-0" id="middleNavbarMenu">
                        <ul class="navbar-nav mr-auto nav-bottom-header justify-content-center d-flex col-12">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('home', ['language' => $current_language]) }}">
                                    <span class="mt-0 pt-0"><i class="fa fa-home"></i> Home</span>
                                </a>
                            </li>

                            <li class='nav-item dropdown'><a href='#' class='nav-link dropdown-toggle'
                                    data-toggle='dropdown'>About Us</a>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item' href="{{ route('missionvission', ['language' => $current_language]) }}">Mission and vision</a></li>

                                    <li><a class='dropdown-item' href="{{ route('organizationstructure', ['language' => $current_language]) }}">Organization Structure</a>
                                    </li>
                                    <li><a class='dropdown-item' href="{{ route('boarddirectors', ['language' => $current_language]) }}">Board of Directors</a>
                                    </li>
                                    <li><a class='dropdown-item' href="{{ route('administration', ['language' => $current_language]) }}">Administration</a></li>
                                    <li><a class='dropdown-item' href="{{ route('successstory', ['language' => $current_language]) }}">Success story</a>

                                    <li><a class='dropdown-item' href="{{ route('ongoingresearch', ['language' => $current_language]) }}">Ongoing Research Projects</a></li>
                                    </li>

                                </ul>
                            </li>
                            <li class='nav-item dropdown'><a href='#' class='nav-link dropdown-toggle'data-toggle='dropdown'>Departments</a>
                                <ul class='dropdown-menu'>
                                    <li class='nav-item dropdown-submenu'>
                                        <a class='dropdown-item dropdown-toggle' data-toggle='dropdown'
                                            href='#'>Industry and Research </a>
                                        <ul class='dropdown-menu'>
                                            <li><a class='dropdown-item' href="{{ route('environment', ['language' => $current_language]) }}">Environment</a></li>
                                            <li><a class='dropdown-item' href="{{ route('foodbiotechnology', ['language' => $current_language]) }}">Food and Biotechnology</a></li>
                                            <li><a class='dropdown-item' href="{{ route('industrialchemistry', ['language' => $current_language]) }}">Industrial Chemistry</a></li>
                                        </ul>
                                    </li>
                                    <li class='nav-item dropdown-submenu'>
                                        <a class='dropdown-item dropdown-toggle' data-toggle='dropdown' href='#'>Engineering Development</a>
                                        <ul class='dropdown-menu'>
                                            <li><a class='dropdown-item' href="{{ route('energy', ['language' => $current_language]) }}">Energy</a></li>
                                            <li><a class='dropdown-item' href="{{ route('materialsciencetech', ['language' => $current_language]) }}">Material Science & Technology</a></li>
                                            <li><a class='dropdown-item' href="{{ route('textilelatherchemistry', ['language' => $current_language]) }}">Textile & Leather Chemistry</a></li>
                                        </ul>
                                    </li>
                                    <li class='nav-item dropdown-submenu'>
                                        <a class='dropdown-item dropdown-toggle mr-2' data-toggle='dropdown' href='#'>ICT and Technology Development</a>
                                        <ul class='dropdown-menu'>
                                            <li><a class='dropdown-item' href="{{ route('ict', ['language' => $current_language]) }}">ICT</a></li>
                                            <li><a class='dropdown-item' href="{{ route('instrumentation', ['language' => $current_language]) }}">Instrumentation</a></li>
                                            <li><a class='dropdown-item' href="{{ route('technology', ['language' => $current_language]) }}">Technology Transfer</i></a></li>
                                        </ul>
                                    </li>
                                    <li class='nav-item dropdown-submenu'>
                                        <a class='dropdown-item dropdown-toggle' data-toggle='dropdown'
                                            href='#'>Finance </a>
                                        <ul class='dropdown-menu'>
                                            <li><a class='dropdown-item' href="{{ route('finance', ['language' => $current_language]) }}">Finance</a></li>
                                        </ul>
                                    </li>
                                    <li class='nav-item dropdown-submenu'>
                                        <a class='dropdown-item dropdown-toggle' data-toggle='dropdown'
                                            href='#'>Human Resource </a>
                                        <ul class='dropdown-menu'>
                                            <li><a class='dropdown-item' href='#'>Human resource division <i class="fas fa-lock"></i></a></li>
                                            <li><a class='dropdown-item' href='#'>Administration division <i class="fas fa-lock"></i></a></li>
                                            <li><a class='dropdown-item' href='#'>Estate division <i class="fas fa-lock"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class='nav-item dropdown'><a href='#' class='nav-link dropdown-toggle'
                                    data-toggle='dropdown'>COMSATS Center</a>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item' href="{{ route('background', ['language' => $current_language]) }}">Background</a></li>
                                    <li><a class='dropdown-item' href="{{ route('centreobjectives', ['language' => $current_language]) }}">Center Objectives</a></li>
                                    <li><a class='dropdown-item' href="{{ route('centreactivities', ['language' => $current_language]) }}">Center Activities</a></li>
                                </ul>
                            </li>
                            <li class='nav-item dropdown'><a href='#' class='nav-link dropdown-toggle'
                                    data-toggle='dropdown'>Services</a>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item' href="{{ route('research', ['language' => $current_language]) }}">Research</a></li>
                                    <li><a class='dropdown-item' href="{{ route('feasibility', ['language' => $current_language]) }}">Feasibility Studies</a></li>
                                    <li><a class='dropdown-item' href="{{ route('consultancysupport', ['language' => $current_language]) }}">Consultancy & Technical Services</a></li>
                                    <li><a class='dropdown-item' href="{{ route('industrialaudits', ['language' => $current_language]) }}">Industrial Technical Audits</a></li>
                                    <li><a class='dropdown-item' href="{{ route('lan', ['language' => $current_language]) }}">LAN Installation and Configuration</a></li>
                                    <li><a class='dropdown-item' href="{{ route('cyber', ['language' => $current_language]) }}">Cybersecurity and Software Development</a></li>
                                    <li><a class='dropdown-item' href="#">Laboratory analytical Services <i class="fas fa-lock"></i></a></li>
                                    <li><a class='dropdown-item' href="#">Equipment Repair and maintenance <i class="fas fa-lock"></i></a></li>
                                    <li><a class='dropdown-item' href="#">Training and skill development services <i class="fas fa-lock"></i></a></li>

                                </ul>
                            </li>

                            <li class='nav-item dropdown'><a href='#' class='nav-link dropdown-toggle'
                                data-toggle='dropdown'>T-Hub</a>
                            <ul class='dropdown-menu'>
                                <li><a class='dropdown-item' href="{{ route('about_T_hub', ['language' => $current_language]) }}">About T-Hub</a></li>
                                <li><a class='dropdown-item' href="{{ route('thubservices', ['language' => $current_language]) }}">T-Hub Services</a></li>
                                <li><a class='dropdown-item' href="{{ route('whythub', ['language' => $current_language]) }}">Why T-Hub</a></li>
                                <li class="nav-item dropdown-submenu">
                                    <a class='dropdown-item dropdown-toggle mr-2' data-toggle='dropdown' href='#'>Companies under T-hub</a>
                                    <ul class='dropdown-menu'>
                                        <li><a class='dropdown-item' href="{{ route('innovasie', ['language' => $current_language]) }}">Innovasie</a></li>
                                        <li><a class='dropdown-item' href="{{ route('awamupay', ['language' => $current_language]) }}">Ammacom</a>
                                        </li>
                                        <li><a class='dropdown-item' href="{{ route('albetus', ['language' => $current_language]) }}">Albetus Technologies</a></li>
                                        <li><a class='dropdown-item' href="{{ route('bivatekafrica', ['language' => $current_language]) }}">Bivatek Africa</a></li>
                                        <li><a class='dropdown-item' href="{{ route('amanisolar', ['language' => $current_language]) }}">Amani Solar</a></li>
                                        <li><a class='dropdown-item' href="{{ route('olas', ['language' => $current_language]) }}">Olas</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class='nav-item dropdown'><a href='#' class='nav-link dropdown-toggle'
                            data-toggle='dropdown'>Industrial Information Center</a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href="{{ route('industrialbackground', ['language' => $current_language]) }}">Center Background</a></li>
                            <li><a class='dropdown-item' href="{{ route('industrialobjectives', ['language' => $current_language]) }}">Center Objectives</a></li>
                            <li><a class='dropdown-item' href="{{ route('industrial_activities', ['language' => $current_language]) }}">Center Activities</a></li>
                        </ul>
                        </li>

                        <li class='nav-item dropdown'><a href='#' class='nav-link dropdown-toggle'
                            data-toggle='dropdown'>e-Services</a>
                            <ul class='dropdown-menu'>
                                <li><a class='dropdown-item' href='https://eoffice.gov.go.tz/users/login' target="_blank">e-Office</a></li>
                                <li><a class='dropdown-item' href='https://mail.tirdo.or.tz' target="_blank">Staff Mail</a></li>
                                <li><a class='dropdown-item' href='https://emrejesho.gov.go.tz/tenganisha_aina_za_walalamikaji?PQI70xlXGIGpQajIcg16EMX74XYFJZf9NV6nrjnzNiHgtt6Iqhlm6VYeXW2vhplQ&to_this_inst=415$PQI70xlXGIGpQajIcg16EMX74XYFJZf9NV6nrjnzNiHgtt6Iqhlm6VYeXW2vhplQ' target="_blank">e-Mrejesho</a></li>
                                <li><a class='dropdown-item' href='https://safari.gov.go.tz/index.php/user/auth/login' target="_blank">e-Vibali</a></li>
                            </ul>
                        </li>

                        <li class='nav-item dropdown'><a href='#' class='nav-link dropdown-toggle'
                            data-toggle='dropdown'>Documents</a>
                            <ul class='dropdown-menu'>
                                <li><a class="dropdown-item" href="{{ route('publications', ['language' => $current_language]) }}">Publications</a></li>
                            </ul>
                        </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- /top bottom -->
        <!-- </div> -->
    </header>
    <!-- /HEADER -->
</div>
