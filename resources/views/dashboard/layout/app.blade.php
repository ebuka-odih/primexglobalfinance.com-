
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="aPjwT7hwl3eyYGYL1YbZNrYKxzGwHL906MbQl3nR">

    <title>Primexglobalfinance | User panel</title>
    <link rel="icon" href="https://ftfinancetraders.com/cloud/app/images/fxfav.png" type="image/png"/>

    <!-- Fonts and icons -->
    <script src="https://www.ftfinancetraders.com/dash/js/plugin/webfont/webfont.min.js"></script>
    <!-- Sweet Alert -->
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/atlantis.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://use.fontawesome.com/8a81da5351.js"></script>
</head>
<body data-background-color="dark">
<div id="app">
    <!--PayPal-->
    <script>

        // Add your client ID and secret
        var PAYPAL_CLIENT = '';
        var PAYPAL_SECRET = '';

        // Point your server to the PayPal API
        var PAYPAL_ORDER_API = 'https://api.paypal.com/v2/checkout/orders/';

    </script>

    <script
        src="https://www.paypal.com/sdk/js?client-id=">
    </script>

    <!--/PayPal-->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        {hbhlhahihlhlhuAJHO347T8UGQ0U[I9ghp}

    </script>





    <!--End of Tawk.to Script-->
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
                <a href="/" class="logo" style="font-size: 27px; color:#fff;">
                    <small>Primexglobalfinance</small>
                </a>
                <button class="ml-auto navbar-toggler sidenav-toggler" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">

                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item hidden-caret">
                            <div id="google_translate_element"></div>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>

                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">

                                <li>
                                    <a class="see-all" href="https://www.ftfinancetraders.com/dashboard/notification">See all notifications<i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fas fa-layer-group"></i><strong style="font-size:8px;">KYC</strong>
                            </a>
                            <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                <div class="quick-actions-header">
                                    <span class="mb-1 title">KYC verification</span>
                                    <span class="subtitle op-8"><a>KYC status: </a></span>
                                </div>
                                <div class="quick-actions-scroll scrollbar-outer">
                                    <div class="quick-actions-items">
                                        <div class="m-0 row">
                                            <a href="#" data-toggle="modal" data-target="#verifyModal" class="btn btn-success">Verify Account </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <a class="dropdown-item" href="https://www.ftfinancetraders.com/dashboard/changepassword">Change Password</a>
                                        <a class="dropdown-item" href="https://www.ftfinancetraders.com/dashboard/profile">Update Account</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="https://www.ftfinancetraders.com/logout"
                                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="https://www.ftfinancetraders.com/logout" method="POST" style="display: none;">
                                            <input type="hidden" name="_token" value="aPjwT7hwl3eyYGYL1YbZNrYKxzGwHL906MbQl3nR">
                                        </form>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>        <!-- Stored in resources/views/child.blade.php -->

        <!-- Sidebar -->

        <div class="sidebar sidebar-style-2" data-background-color="dark">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ auth()->user()->username }}

                            <span class="caret"></span>
                        </span>
                            </a>
                            <div class="clearfix"></div>
                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="https://www.ftfinancetraders.com/dashboard/profile">
                                            <span class="link-collapse">Account Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a href="{{ route('user.dashboard') }}">
                                <i class="fa fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li><br />
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#bases">
                                <i class="fa fa-user"></i>
                                <p>Account</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="bases">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ route('user.account') }}">
                                            <span class="sub-item">Withdrawal Info</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </li>
                        <!--<li class="nav-item">-->
                        <!--    <a href="https://www.ftfinancetraders.com/dashboard/support">-->
                        <!--        <i class="fa fa-life-ring" aria-hidden="true"></i>-->
                        <!--        <p>Support</p>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--    <a href="https://www.ftfinancetraders.com/dashboard/tradinghistory">-->
                        <!--        <i class="fa fa-signal " aria-hidden="true"></i>-->
                        <!--        <p>P/L record</p>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <li class="nav-item">
                            <a href="{{ route('user.transactions') }}">
                                <i class="fa fa-history " aria-hidden="true"></i>
{{--                                <i class="fa-solid fa-rectangle-history"></i>--}}
                                <p>Transactions history</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#dept">
                                <i class="fa fa-credit-card"></i>
                                <p>Deposit/Withdrawal</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="dept">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ route('user.deposit') }}">
                                            <span class="sub-item">Deposits</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('user.withdraw') }}">
                                            <span class="sub-item">Withdrawal</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="collapse" href="#mpack">
                                <i class="fa fa-cubes"></i>
                                <p>Investment</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="mpack">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ route('user.plans') }}">
                                            <span class="sub-item">Investment Plans</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('user.investmentDetails') }}">
                                            <span class="sub-item">My Investments</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a href="https://www.ftfinancetraders.com/dashboard/referuser">--}}
{{--                                <i class="fa fa-recycle " aria-hidden="true"></i>--}}
{{--                                <p>Refer Users</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

                        <!--<li class="nav-item">-->
                        <!--    <a href="https://www.ftfinancetraders.com/dashboard/changepassword">-->
                        <!--        <i class="fa fa-key " aria-hidden="true"></i>-->
                        <!--        <p>Change Password</p>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--   <a href="https://www.ftfinancetraders.com/dashboard/profile">-->
                        <!--        <i class="fa fa-edit " aria-hidden="true"></i>-->
                        <!--        <p>Update Account</p>-->
                        <!--    </a>-->
                        <!--</li>-->
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" data-toggle="modal" data-target="#verifyModal">--}}
{{--                                <i class="fa fa-user-plus " aria-hidden="true"></i>--}}
{{--                                <i class="fa-solid fa-user-plus"></i>--}}
{{--                                <p>KYC Verification</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

                        <li class="nav-item">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out " aria-hidden="true"></i>
                                <p>Logout</p>

                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
        <!-- Verify Modal -->

        <div class="modal fade" id="verifyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h5 class="modal-title text-light" style="text-align:center;">KYC verification - Upload documents below to get verified.</h5>
                        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body bg-dark">
                        <form style="padding:3px;" role="form" method="post" action="https://www.ftfinancetraders.com/dashboard/savevdocs"  enctype="multipart/form-data">
                            <label class="text-light">Valid identity card. (e.g. Drivers licence, international passport or any government approved document).</label>
                            <input type="file" class="form-control bg-dark text-light" name="id" required><br>
                            <label class="text-light">Passport photogragh</label>
                            <input type="file" class="form-control bg-dark text-light" name="passport" required><br>
                            <input type="hidden" name="_token" value="aPjwT7hwl3eyYGYL1YbZNrYKxzGwHL906MbQl3nR">
                            <input type="submit" class="btn btn-light" value="Submit documents">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Verify Modal -->
        <div class="main-panel bg-dark">

      @yield('content')
        @include('dashboard.layout.footer')

        </div>

    </div>
</div>




<script type="text/javascript">

    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }

    (function(){var gtConstEvalStartTime = new Date();function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
        function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
        if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk=eval('((function(){var a\x3d814543065;var b\x3d2873925779;return 414629+\x27.\x27+(a+b)})())');var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();

</script>
<!--   Core JS Files   -->
<script src="{{ asset('js/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
{{--<script src="{{ asset('js/customs.js') }}"></script>--}}
<script src="https://www.ftfinancetraders.com/dash/js/customs.js"></script>


<!-- jQuery UI -->
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/jquery.ui.touch-punch.min.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('js/jquery.scrollbar.min.js') }}"></script>

<!-- jQuery Sparkline -->
<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<!-- Bootstrap Notify -->
<script src="{{ asset('js/bootstrap-notify.min.js') }}"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js"></script>

<!-- Atlantis JS -->
<script src="{{ asset('js/atlantis.min.js') }}"></script>
<script src="{{ asset('js/atlantis.js') }}"></script>

<script>
    $(document).ready( function () {
        $('#ShipTable').DataTable({
            order: [ [0, 'desc'] ],
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'print', 'excel','pdf'
            ]
        });


        $(".dataTables_length select").addClass("bg-dark text-light");
        $(".dataTables_filter input").addClass("bg-dark text-light");
    } );
</script>
<script>
    $(document).ready( function () {
        $('.UserTable').DataTable({
            order: [ [0, 'desc'] ]
        });
        $(".dataTables_length select").addClass("bg-dark text-light");
        $(".dataTables_filter input").addClass("bg-dark text-light");
    } );
</script>


</body>
</html>

