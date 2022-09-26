@extends('dashboard.layout.app')
@section('content')

<div class="main-panel bg-dark">
    <div class="content bg-dark">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-light">Request for Withdrawal</h1>
            </div>

            <div class="mb-5 row">
                <div class="col-lg-4 p-3 rounded card bg-dark">
                    <div class="shadow card-body border-danger">
                        <h2 class="card-title mb-3 text-light"> Bitcoin</h2>
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
                                <form style="padding:3px;" role="form" method="post" action="https://www.ftfinancetraders.com/dashboard/transfer-code">
                                    <input class="form-control text-light bg-dark" placeholder="Enter amount here" type="text" name="amount" required=""><br>
                                    <input class="form-control text-light bg-dark " value="Bitcoin" type="text" disabled=""><br>
                                    <input value="Bitcoin" type="hidden" name="payment_mode">
                                    <input value="1" type="hidden" name="method_id"><br>

                                    <input type="hidden" name="_token" value="QoAj2rXwva9FEVMF5LSH1aPDKVoz5HXlW2FEyXdI">
                                    <input type="submit" class="btn btn-primary" value="Submit" onclick="this.disabled = true; form.submit(); this.value='Please Wait ...';">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Withdrawals Modal -->
            </div>

        </div>
    </div>
    <footer class="footer bg-dark text-light">
        <div class="container-fluid">
            <div class="text-center row copyright text-align-center">
                <p>All Rights Reserved © Ftfinancetrader 2022</p>
            </div>
        </div>
    </footer>
</div>

@endsection
