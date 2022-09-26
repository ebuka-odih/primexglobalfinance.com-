@extends('dashboard.layout.app')
@section('content')

<div class="content bg-dark">
    <div class="page-inner">
        <div class="mt-2 mb-4">
            <h1 class="text-light">Add your withdrawal info</h1>
        </div>

        <div class="row mb-4">
            <div class="col card p-3 shadow-lg bg-dark">
                <div class="accordion accordion-light ">
                    <form method="post" action="{{ route('user.bank') }}">
                        @csrf

                        <!--............................... collapse one -->
                        <div class="card">
                            <div class="card-header bg-dark" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="span-icon">
                                    <div class="fa fa-clone"></div>
                                </div>
                                <div class="span-title text-light">
                                    Bank transfer
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div class="col-md-10">
                                @if(session()->has('bank'))
                                    <div class="alert alert-success">
                                        <strong class="text text-success">{{ session()->get('bank') }}</strong>
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="text text-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body bg-dark shadow">
                                    <div class="form-group">
                                        <h5 class="text-light">Bank Name</h5>
                                        <input type="text" name="bank_name" value="{{ auth()->user()->bank_name }}" class="form-control text-light bg-dark" placeholder="Enter bank name">
                                    </div>
                                    <div class="form-group">
                                        <h5 class="text-light">Account Name</h5>
                                        <input type="text" name="acct_name" value="{{ auth()->user()->acct_name }}" class="form-control  text-light bg-dark" placeholder="Enter Account name">
                                    </div>
                                    <div class="form-group">
                                        <h5 class="text-light">Account Number</h5>
                                        <input type="text" name="acct_number" value="{{ auth()->user()->acct_number }}" class="form-control text-light bg-dark" placeholder="Enter Account Number">
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Submit">  &nbsp; &nbsp;
                                    <a href="{{ route('user.dashboard') }}" style="color:red;">Skip</a>

                                </div>
                            </div>
                        </div>
                    </form>

                    <form action="{{ route('user.crypto') }}" method="POST">
                        @csrf
                        <div class="col-md-10">
                            @if(session()->has('crypto'))
                                <div class="alert alert-success">
                                    <strong class="text text-success">{{ session()->get('crypto') }}</strong>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="text text-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="card">
                            <div class="card-header bg-dark" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <div class="span-icon">
                                    <div class="fa fa-clone"></div>
                                </div>
                                <div class="span-title text-light">
                                    Bitcoin
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body bg-dark shadow">
                                    <div class="form-group">
                                        <h5 class="text-light">BTC ADDRESS</h5>
                                        <input type="text" name="btc_address" value="{{ auth()->user()->btc_address }}" class="form-control text-light bg-dark" placeholder="Enter Bitcoin Address">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header bg-dark" id="headingCash" data-toggle="collapse" data-target="#collapseCash" aria-expanded="true" aria-controls="collapseCash">
                                <div class="span-icon">
                                    <div class="fa fa-clone"></div>
                                </div>
                                <div class="span-title text-light">
                                    BItcoin Cash
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div id="collapseCash" class="collapse show" aria-labelledby="headingCash" data-parent="#accordion">
                                <div class="card-body bg-dark shadow">
                                    <div class="form-group">
                                        <h5 class="text-light">BTC CASH ADDRESS</h5>
                                        <input type="text" name="btc_cash" value="{{ auth()->user()->btc_cash }}" class="form-control text-light bg-dark" placeholder="Enter Bitcoin Cash Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--............................... collapse three -->
                        <div class="card">
                            <div class="card-header bg-dark" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <div class="span-icon">
                                    <div class="fa fa-clone"></div>
                                </div>
                                <div class="span-title text-light">
                                    Ethereum
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body bg-dark shadow">
                                    <div class="form-group">
                                        <h5 class="text-light">ETH ADDRESS</h5>
                                        <input type="text" name="eth_address" value="{{ auth()->user()->eth_address }}" class="form-control text-light bg-dark" placeholder="Enter Etherium Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--............................... collapse four -->
                        <div class="card">
                            <div class="card-header bg-dark" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                <div class="span-icon">
                                    <div class="fa fa-clone"></div>
                                </div>
                                <div class="span-title text-light">
                                    Litcoin
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body bg-dark shadow">
                                    <div class="form-group">
                                        <h5 class="text-light bg-dark">LTC ADDRESS</h5>
                                        <input type="text" name="ltc_address" value="{{ auth()->user()->ltc_address }}" class="form-control text-light bg-dark" placeholder="Enter Litcoin Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--......................... end of collaps four -->
                        <!--............................... collapse five -->
                        <div class="card">
                            <div class="card-header bg-dark" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                <div class="span-icon">
                                    <div class="fa fa-clone"></div>
                                </div>
                                <div class="span-title text-light">
                                    Tron
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="card-body bg-dark shadow">
                                    <div class="form-group">
                                        <h5 class="text-light bg-dark">TRON ADDRESS</h5>
                                        <input type="text" name="tron_address" value="{{ auth()->user()->tron_address }}" class="form-control text-light bg-dark" placeholder="Enter Tron Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--......................... end of collaps five -->

                        <!--............................... collapse six -->
                        <div class="card">
                            <div class="card-header bg-dark" id="headingSix" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                <div class="span-icon">
                                    <div class="fa fa-clone"></div>
                                </div>
                                <div class="span-title text-light">
                                    USDT
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordion">
                                <div class="card-body bg-dark shadow">
                                    <div class="form-group">
                                        <h5 class="text-light bg-dark">USDT ADDRESS</h5>
                                        <input type="text" name="usdt_address" value="{{ auth()->user()->usdt_address }}" class="form-control text-light bg-dark" placeholder="Enter USDT Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--......................... end of collaps five -->

                        <!--............................... collapse six -->
                        <div class="card">
                            <div class="card-header bg-dark" id="headingSvn" data-toggle="collapse" data-target="#collapseSvn" aria-expanded="true" aria-controls="collapseSvn">
                                <div class="span-icon">
                                    <div class="fa fa-clone"></div>
                                </div>
                                <div class="span-title text-light">
                                    Doge
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div id="collapseSvn" class="collapse show" aria-labelledby="headingSvn" data-parent="#accordion">
                                <div class="card-body bg-dark shadow">
                                    <div class="form-group">
                                        <h5 class="text-light bg-dark">DOGE ADDRESS</h5>
                                        <input type="text" name="doge_address" value="{{ auth()->user()->doge_address }}" class="form-control text-light bg-dark" placeholder="Enter DOge Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--......................... end of collaps five -->

                        <!--............................... collapse six -->
                        <div class="card">
                            <div class="card-header bg-dark" id="headingEight" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                <div class="span-icon">
                                    <div class="fa fa-clone"></div>
                                </div>
                                <div class="span-title text-light">
                                    BNB
                                </div>
                                <div class="span-mode"></div>
                            </div>
                            <div id="collapseEight" class="collapse show" aria-labelledby="headingEight" data-parent="#accordion">
                                <div class="card-body bg-dark shadow">
                                    <div class="form-group">
                                        <h5 class="text-light bg-dark">BNB ADDRESS</h5>
                                        <input type="text" name="bnb_address" value="{{ auth()->user()->bnb_address }}" class="form-control text-light bg-dark" placeholder="Enter bnb Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">  &nbsp; &nbsp;
                        <a href="{{ route('user.dashboard') }}" style="color:red;">Skip</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
