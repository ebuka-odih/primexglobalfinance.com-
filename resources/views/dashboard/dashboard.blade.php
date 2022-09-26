@extends('dashboard.layout.app')
@section('content')

    <div class="content bg-dark">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h2 class="text-light pb-2">Welcome, {{ auth()->user()->name }}!</h2>
                <p>Welcome to Primexglobalfinance. Grow and multiply your money with us securedly</p>
                <div class="button__holder" style="padding-top: 0rem; padding-bottom: .4rem">
                    <a href="{{ route('user.deposit') }}" class="deposits" style="background: #FFAD46 !important; margin-right: 1rem">Fund Your Account</a>
                    <a href="/dashboard/withdrawals" class="deposits" style="background: #F25961 !important;">Withdraw Funds</a>
                </div>
                <h5 id="ann" class="text-lightop-7 mb-4">It can only get better! Welcome to Primexglobalfinance. Hope you are amazed.</h5>
                <script type="text/javascript">
                    var announment = $("#ann").html();
                    console.log(announment);
                    swal({
                        title: "Annoucement!",
                        text: announment,
                        icon: "info",
                        buttons: {
                            confirm: {
                                text: "Okay",
                                value: true,
                                visible: true,
                                className: "btn btn-info",
                                closeModal: true
                            }
                        }
                    });
                </script>


            </div>

            <!-- Beginning of  Dashboard Stats  -->
            <div class="row">

                <div class="col-sm-6 col-lg-3">
                    <div class="p-3 card bg-dark shadow">
                        <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-secondary">
                                        <i class="fa fa-download"></i>
                                    </span>
                            <div>
                                <h5 class="mb-1 text-light"><b>
                                        &#36;0.00
                                    </b></h5>
                                <small class="text-muted">Deposited</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="p-3 card bg-dark shadow">
                        <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-success">
                                        <i class="fa fa-coins"></i>
                                    </span>
                            <div>
                                <h5 class="mb-1 text-light"><b>&#36;0.00</b></h5>
                                <small class="text-muted text-light">Profit</small>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-3">
                    <div class="p-3 card bg-dark shadow">
                        <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-info">
                                        <i class="fa fa-gift"></i>
                                    </span>
                            <div>
                                <h5 class="mb-1 text-light"><b>&#36;0.00</b></h5>
                                <small class="text-muted text-light">Bonus</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="p-3 card bg-dark shadow">
                        <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-primary">
                                        <i class="fa fa-retweet"></i>
                                    </span>
                            <div>
                                <h5 class="mb-1 text-light"><b>&#36;0.00</b></h5>
                                <small class="text-muted text-light">Referral Bonus</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="p-3 card bg-dark shadow">
                        <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-danger">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                            <div>
                                <h5 class="mb-1 text-light"><b>0</b></h5>
                                <small class="text-muted text-light">Investment Plans</small>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-3">
                    <div class="p-3 card bg-dark shadow">
                        <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-success">
                                        <i class="fa fa-dollar-sign"></i>
                                    </span>
                            <div>
                                <h5 class="mb-1 text-light"><b>&#36;0.00</b></h5>
                                <small class="text-muted">Balance</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="p-3 card bg-dark shadow">
                        <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-default">
                                        <i class="fa fa-coins"></i>
                                    </span>
                            <div>
                                <h5 class="mb-1 text-light"><b></b></h5>
                                <small class="text-muted text-light">Earned BTC</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="p-3 card bg-dark shadow">
                        <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-success">
                                        <i class="fa fa-envelope-open"></i>
                                    </span>
                            <div>
                                <h5 class="mb-1 text-light"><b>
                                        No active plan
                                    </b></h5>
                                <small class="text-muted text-light">Active Investment Plans</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Beginning of chart -->
            <div class="row">
                <div class="col-12">
                    <div id="chart-page">
                        <div class="tradingview-widget-container" style="margin:30px 0px 10px 0px;">
                            <div id="tradingview_f933e"></div>
                            <div class="tradingview-widget-copyright"><a href="#" rel="noopener" target="_blank"><span class="blue-text"></span> <span class="blue-text">Personal trading chart</span></a></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                            <script type="text/javascript">
                                new TradingView.widget(
                                    {
                                        "width": "100%",
                                        "height": "550",
                                        "symbol": "COINBASE:BTCUSD",
                                        "interval": "1",
                                        "timezone": "Etc/UTC",
                                        "theme": 'dark',
                                        "style": "9",
                                        "locale": "en",
                                        "toolbar_bg": "#f1f3f6",
                                        "enable_publishing": false,
                                        "hide_side_toolbar": false,
                                        "allow_symbol_change": true,
                                        "calendar": false,
                                        "studies": [
                                            "BB@tv-basicstudies"
                                        ],
                                        "container_id": "tradingview_f933e"
                                    }
                                );
                            </script>
                        </div>

                    </div>



                    <div class="white-box" style="height: 450px;">
                        <h4 style="margin-bottom:5px;"> Forex Market Fundamental Data</h4>
                        <!-- TradingView Widget BEGIN -->

                        <span id="tradingview-copyright"><a ref="nofollow noopener" target="_blank" href="http://www.tradingview.com" style="color: rgb(173, 174, 176); font-family: &quot;Trebuchet MS&quot;, Tahoma, Arial, sans-serif; font-size: 13px;"></a></span>
                        <script src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js">{
                                "currencies": [
                                    "EUR",
                                    "USD",
                                    "JPY",
                                    "BTC",
                                    "ETH",
                                    "LTC",
                                    "GBP",
                                    "CHF",
                                    "AUD",
                                    "CAD",
                                    "NZD",
                                    "CNY"
                                ],
                                    "isTransparent": false,
                                    "colorTheme": "dark",
                                    "width": "100%",
                                    "height": "100%",
                                    "locale": "en"
                            }</script>

                    </div>
                </div>
            </div>
        </div>
        <!-- end of chart -->
    </div>

@endsection
