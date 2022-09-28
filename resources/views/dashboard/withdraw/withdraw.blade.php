@extends('dashboard.layout.app')
@section('content')

    <div class="content bg-dark">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-light">Request for Withdrawal</h1>
            </div>

            <div class="mb-5 row">
                <div class="col-lg-4 p-3 rounded card bg-dark">
                    <div class="shadow card-body border-danger">
                        <h2 class="card-title mb-3 text-light"> Crypto</h2>
                        <h4 class="text-light">Minimum amount: <strong style="float:right;"> $100</strong></h4><br>

                        <h4 class="text-light">Maximum amount:<strong style="float:right;"> $100000</strong></h4><br>

                        <h4 class="text-light">Charges (Fixed):<strong style="float:right;"> $10</strong></h4><br>

                        <h4 class="text-light">Charges (%): <strong style="float:right;"> 5%</strong></h4><br>

                        <h4 class="text-light">Duration:<strong style="float:right;"> 1 sec</strong></h4><br>
                        <div class="text-center">
                            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#withdrawalModal1"><i class="fa fa-plus"></i> Request withdrawal</a>
                        </div>

                    </div>
                </div>
                <div class="container">
                    @if(session()->has('success_message'))
                        <div class="text text-success">
                            {{ session()->get('success_message') }}
                        </div>
                    @endif
                        @if(session()->has('declined'))
                        <div class="text text-danger">
                            {{ session()->get('declined') }}
                        </div>
                    @endif
                    @if(session()->has('nop'))
                        <div class="text text-danger">
                            {{ session()->get('nop') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="text text-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li >{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <!-- Withdrawal Modal -->
                <div id="withdrawalModal1" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header bg-dark">
                                <h4 class="modal-title text-light">Payment will be sent through your selected method.</h4>
                                <button type="button" class="close text-light" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body bg-dark">
                                <form style="padding:3px;" role="form" method="post" action="{{ route('user.processWithdraw') }}">
                                    @csrf
                                    <input class="form-control text-light bg-dark" placeholder="Enter amount here" type="text" name="amount" required=""><br>
                                    <select name="withdraw_method_id" id="" class="form-control">
                                        @foreach($wallets as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <br>

                                    <input type="submit" class="btn btn-primary" value="Submit" >
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Withdrawals Modal -->
            </div>

        </div>
    </div>

@endsection
