@extends('dashboard.layout.app')
@section('content')

<div class="main-panel bg-dark">
    <div class="content bg-dark">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-light">Available packages</h1>
            </div>

            <div class="row mb-5">
                <div class="col-lg-4 p-4 card bg-dark shadow-lg">
                    <div class="pricing-table purple border bg-dark shadow-lg">
                        <!-- Table Head -->
                        <div class="pricing-label d-inline">Fixed Price</div>
                        <h2 class="text-light">STANDARD PLAN</h2>
                        <!-- Price -->
                        <div class="price-tag">
                            <span class="symbol text-light">$</span>
                            <span class="amount text-light">500.00</span>
                        </div>
                        <!-- Features -->
                        <div class="pricing-features">
                            <div class="feature text-light">Minimum Possible Deposit:<span class="text-light">$500.00</span></div>
                            <div class="feature text-light">Maximum Possible Deposit:<span class="text-light">$UNLIMITED</span></div>
                            <div class="feature text-light">Minimum Return:<span class="text-light">$2,500.00</span></div>
                            <div class="feature text-light">Maximum Return:<span class="text-light">$UNLIMITED</span></div>
                            <div class="feature text-light">Gift Bonus:<span class="text-light">$300.00</span></div>
                            <div class="feature text-light">Duration:<span class="text-light">24 hours</span></div>
                        </div> <br>
                        <!-- Button -->
                        <div class="">
                            <form style="padding:3px;" role="form" method="post" action="https://www.ftfinancetraders.com/dashboard/joinplan">
                                <h5 class="text-light">Amount to invest: ($500.00 default)</h5>
                                <input type="number" min="500.00" max="UNLIMITED" name="iamount" placeholder="$500.00" class="form-control text-light bg-dark"> <br>
                                <input type="hidden" name="duration" value="24 hours">
                                <input type="hidden" name="id" value="29">
                                <input type="hidden" name="_token" value="QoAj2rXwva9FEVMF5LSH1aPDKVoz5HXlW2FEyXdI">
                                <input type="submit" class="btn btn-block pricing-action btn-primary nav-pills" value="Join plan" style=" border-radius: 40px;">
                            </form>
                        </div>

                    </div>
                    <!-- Deposit for a plan Modal -->
                    <div id="depositModal29" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header bg-dark">
                                    <h4 class="modal-title" style="text-align:center;">Make a deposit of <strong>$500.00 to join this plan</strong></h4>
                                    <button type="button" class="close text-white" data-dismiss="modal">×</button>
                                </div>
                                <div class="modal-body bg-dark">
                                    <form style="padding:3px;" role="form" method="post" action="https://www.ftfinancetraders.com/dashboard/deposit">
                                        <input style="padding:5px;" class="form-control" value="500.00" type="text" name="amount" required=""><br>

                                        <input type="hidden" name="_token" value="QoAj2rXwva9FEVMF5LSH1aPDKVoz5HXlW2FEyXdI">
                                        <input type="hidden" name="pay_type" value="plandeposit">
                                        <input type="hidden" name="plan_id" value="29">
                                        <input type="submit" class="btn btn-default" value="Continue">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /deposit for a plan Modal -->
                </div>
                <div class="col-lg-4 p-4 card bg-dark shadow-lg">
                    <div class="pricing-table purple border bg-dark shadow-lg">
                        <!-- Table Head -->
                        <div class="pricing-label d-inline">Fixed Price</div>
                        <h2 class="text-light">PREMIUM PLAN</h2>
                        <!-- Price -->
                        <div class="price-tag">
                            <span class="symbol text-light">$</span>
                            <span class="amount text-light">1,000.00</span>
                        </div>
                        <!-- Features -->
                        <div class="pricing-features">
                            <div class="feature text-light">Minimum Possible Deposit:<span class="text-light">$1,000.00</span></div>
                            <div class="feature text-light">Maximum Possible Deposit:<span class="text-light">$UNLIMITED</span></div>
                            <div class="feature text-light">Minimum Return:<span class="text-light">$6,000.00</span></div>
                            <div class="feature text-light">Maximum Return:<span class="text-light">$UNLIMITED</span></div>
                            <div class="feature text-light">Gift Bonus:<span class="text-light">$900</span></div>
                            <div class="feature text-light">Duration:<span class="text-light">12 hour's</span></div>
                        </div> <br>
                        <!-- Button -->
                        <div class="">
                            <form style="padding:3px;" role="form" method="post" action="https://www.ftfinancetraders.com/dashboard/joinplan">
                                <h5 class="text-light">Amount to invest: ($1,000.00 default)</h5>
                                <input type="number" min="1,000.00" max="UNLIMITED" name="iamount" placeholder="$1,000.00" class="form-control text-light bg-dark"> <br>
                                <input type="hidden" name="duration" value="12 hour's">
                                <input type="hidden" name="id" value="31">
                                <input type="hidden" name="_token" value="QoAj2rXwva9FEVMF5LSH1aPDKVoz5HXlW2FEyXdI">
                                <input type="submit" class="btn btn-block pricing-action btn-primary nav-pills" value="Join plan" style=" border-radius: 40px;">
                            </form>
                        </div>

                    </div>
                    <!-- Deposit for a plan Modal -->
                    <div id="depositModal31" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header bg-dark">
                                    <h4 class="modal-title" style="text-align:center;">Make a deposit of <strong>$1,000.00 to join this plan</strong></h4>
                                    <button type="button" class="close text-white" data-dismiss="modal">×</button>
                                </div>
                                <div class="modal-body bg-dark">
                                    <form style="padding:3px;" role="form" method="post" action="https://www.ftfinancetraders.com/dashboard/deposit">
                                        <input style="padding:5px;" class="form-control" value="1,000.00" type="text" name="amount" required=""><br>

                                        <input type="hidden" name="_token" value="QoAj2rXwva9FEVMF5LSH1aPDKVoz5HXlW2FEyXdI">
                                        <input type="hidden" name="pay_type" value="plandeposit">
                                        <input type="hidden" name="plan_id" value="31">
                                        <input type="submit" class="btn btn-default" value="Continue">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /deposit for a plan Modal -->
                </div>
            </div>
        </div>
    </div>

    <!-- Deposit Modal -->
    <div id="depositModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Make new deposit</h4>
                    <button type="button" class="close text-light" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body bg-dark">
                    <form style="padding:3px;" role="form" method="post" action="https://www.ftfinancetraders.com/dashboard/deposit">
                        <input style="padding:5px;" class="form-control text-light bg-dark" placeholder="Enter amount here" type="text" name="amount" required=""><br>

                        <input type="hidden" name="_token" value="QoAj2rXwva9FEVMF5LSH1aPDKVoz5HXlW2FEyXdI">
                        <input type="submit" class="btn btn-light" value="Continue">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /deposit Modal -->


    <!-- Delete Subscription Modal -->
    <div id="delsubmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Delete MT4 Details</h4>
                    <button type="button" class="close text-light" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body bg-dark p-3">
                    <h5 class="text-light">Your subscription has already started, send an Email to support@ftfinancetraders.com to have your MT4 Details Deleted.</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- /deposit Modal -->




    <!-- Withdrawal Modal -->
    <div id="withdrawalModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Payment will be sent to your recieving address.</h4>
                    <button type="button" class="close text-white" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body bg-dark">
                    <form style="padding:3px;" role="form" method="post" action="https://www.ftfinancetraders.com/dashboard/withdrawal">
                        <input style="padding:5px;" class="form-control bg-dark text-light" placeholder="Enter amount here" type="text" name="amount" required=""><br>

                        <input type="hidden" name="_token" value="QoAj2rXwva9FEVMF5LSH1aPDKVoz5HXlW2FEyXdI">
                        <input type="submit" class="btn btn-light" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Withdrawals Modal -->





    <!-- Subscription Payment modal -->
    <div class="modal fade" id="SubpayModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">

                    <h4 class="modal-title text-light">Subscription Payment</h4>
                    <button type="button" class="close text-light" data-dismiss="modal">×</button>
                </div>

                <form role="form" method="post" action="https://www.ftfinancetraders.com/dashboard/deposit" id="priceform">
                    <div class="modal-body bg-dark">

                        <h5 class="text-light">Duration</h5>
                        <select class="form-control bg-dark text-light" onchange="calcAmount(this)" name="duration" id="duratn">
                            <option value="default">Select duration</option>
                            <option>Monthly</option>
                            <option>Quaterly</option>
                            <option>Yearly</option>
                        </select><br>
                        <h5 class="text-light">Amount to Pay</h5>
                        <input class="form-control subamount bg-dark text-light" type="text" id="amount" disabled=""><br>
                        <input id="amountpay" type="hidden" name="amount">
                        <input type="hidden" value="Subscription Trading" name="pay_type">
                        <input type="hidden" name="_token" value="QoAj2rXwva9FEVMF5LSH1aPDKVoz5HXlW2FEyXdI">
                    </div>
                    <div class="modal-footer bg-dark">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Pay Now</button>
                    </div>
                </form></div>


            <script type="text/javascript">
                function calcAmount(sub) {
                    if(sub.value=="Quaterly"){
                        var amount = document.getElementById('amount');
                        var amountpay = document.getElementById('amountpay');
                        amount.value = '&#36;30';
                        amountpay.value = '30';
                    }if(sub.value=="Yearly"){
                        var amount = document.getElementById('amount');
                        var amountpay = document.getElementById('amountpay');
                        amount.value = '&#36;50';
                        amountpay.value = '50';
                    }if(sub.value=="Monthly"){
                        var amount = document.getElementById('amount');
                        var amountpay = document.getElementById('amountpay');
                        amount.value = '&#36;20';
                        amountpay.value = '20';
                    }
                }
            </script>
        </div>
    </div>
    <!-- Subscription Payment modal -->


    <!-- Submit MT4 MODAL modal -->
    <div id="submitmt4modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Submit your MT4 Login Details</h4>
                    <button type="button" class="close text-light" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body bg-dark">
                    <form role="form" method="post" action="https://www.ftfinancetraders.com/dashboard/savemt4details">

                        <h5 class="text-light ">MT4 ID*:</h5>
                        <input class="form-control bg-dark text-light" type="text" name="userid" required=""><br>
                        <h5 class="text-light ">MT4 Password*:</h5>
                        <input style="padding:5px;" class="form-control bg-dark text-light" type="text" name="pswrd" required=""><br>
                        <h5 class="text-light ">Account Type:</h5>
                        <input class="form-control bg-dark text-light" placeholder="E.g. Standard" type="text" name="acntype" required=""><br>
                        <h5 class="text-light ">Currency*:</h5>
                        <input class="form-control bg-dark text-light" placeholder="E.g. USD" type="text" name="currency" required=""><br>
                        <h5 class="text-light ">Leverage*:</h5>
                        <input class="form-control bg-dark text-light" placeholder="E.g. 1:500" type="text" name="leverage" required=""><br>
                        <h5 class="text-light ">Server*:</h5>
                        <input class="form-control bg-dark text-light" placeholder="E.g. HantecGlobal-live" type="text" name="server" required=""><br>
                        <h5 class="text-light ">Subscription Duration:</h5>
                        <select class="form-control bg-dark text-light" name="duration">
                            <option value="default">Select duration</option>
                            <option>Monthly</option>
                            <option>Quaterly</option>
                            <option>Yearly</option>
                        </select><br>

                        <input type="hidden" name="_token" value="QoAj2rXwva9FEVMF5LSH1aPDKVoz5HXlW2FEyXdI">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /plans Modal -->
   @include('dashboard.layout.footer')
</div>

@endsection
