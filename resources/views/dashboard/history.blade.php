@extends('dashboard.layout.app')
@section('content')

<div class="main-panel bg-dark">
    <div class="content bg-dark">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-light">Transactions on your account</h1>
            </div>

            <div class="row mb-5">
                <div class="col text-center card p-4 bg-dark">

                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

                            <h4 class="nav-item nav-link pt-3 active show" id="nav-home-tab" data-toggle="tab" href="#1" role="tab" aria-controls="nav-home" aria-selected="true"> Deposits</h4>

                            <h4 class="nav-item nav-link pt-3" id="nav-profile-tab" data-toggle="tab" href="#2" role="tab" aria-controls="nav-profile" aria-selected="false">Withdrawals</h4>

                            <h4 class="nav-item nav-link pt-3" id="nav-contact-tab" data-toggle="tab" href="#3" role="tab" aria-controls="nav-contact" aria-selected="false">Others</h4>
                        </div>
                    </nav>

                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">


                        <div class="tab-pane fade bg-dark card p-3 active show" id="1" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                                <div id="UserTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="UserTable_length"><label>Show <select name="UserTable_length" aria-controls="UserTable" class="custom-select custom-select-sm form-control form-control-sm bg-dark text-light"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="UserTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm bg-dark text-light" placeholder="" aria-controls="UserTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="UserTable" class="UserTable table table-hover text-light dataTable no-footer" role="grid" aria-describedby="UserTable_info">
                                                <thead>
                                                <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-sort="descending" aria-label="ID: activate to sort column ascending" style="width: 76.75px;">ID</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 153.75px;">Amount</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Payment mode: activate to sort column ascending" style="width: 246.25px;">Payment mode</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 133.766px;">Status</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Date created: activate to sort column ascending" style="width: 215.484px;">Date created</th></tr>
                                                </thead>
                                                <tbody>
                                                <tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">No data available in table</td></tr></tbody>
                                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="UserTable_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="UserTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="UserTable_previous"><a href="#" aria-controls="UserTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item next disabled" id="UserTable_next"><a href="#" aria-controls="UserTable" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                        </div>


                        <div class="tab-pane fade p-3 bg-dark" id="2" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                                <div id="UserTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="UserTable_length"><label>Show <select name="UserTable_length" aria-controls="UserTable" class="custom-select custom-select-sm form-control form-control-sm bg-dark text-light"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="UserTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm bg-dark text-light" placeholder="" aria-controls="UserTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="UserTable" class="UserTable table table-hover text-light dataTable no-footer" role="grid" aria-describedby="UserTable_info">
                                                <thead>
                                                <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-sort="descending" aria-label="ID: activate to sort column ascending" style="width: 0px;">ID</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Amount requested: activate to sort column ascending" style="width: 0px;">Amount requested</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Amount + charges: activate to sort column ascending" style="width: 0px;">Amount + charges</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Recieving mode: activate to sort column ascending" style="width: 0px;">Recieving mode</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Date created: activate to sort column ascending" style="width: 0px;">Date created</th></tr>
                                                </thead>
                                                <tbody>
                                                <tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr></tbody>
                                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="UserTable_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="UserTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="UserTable_previous"><a href="#" aria-controls="UserTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item next disabled" id="UserTable_next"><a href="#" aria-controls="UserTable" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                        </div>


                        <div class="tab-pane fade p-3 bg-dark" id="3" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                                <div id="UserTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="UserTable_length"><label>Show <select name="UserTable_length" aria-controls="UserTable" class="custom-select custom-select-sm form-control form-control-sm bg-dark text-light"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="UserTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm bg-dark text-light" placeholder="" aria-controls="UserTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="UserTable" class="UserTable table table-hover text-light dataTable no-footer" role="grid" aria-describedby="UserTable_info">
                                                <thead>
                                                <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-sort="descending" aria-label="ID: activate to sort column ascending" style="width: 0px;">ID</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 0px;">Amount</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" style="width: 0px;">Type</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Plan/Narration: activate to sort column ascending" style="width: 0px;">Plan/Narration</th><th class="sorting" tabindex="0" aria-controls="UserTable" rowspan="1" colspan="1" aria-label="Date created: activate to sort column ascending" style="width: 0px;">Date created</th></tr>
                                                </thead>
                                                <tbody>
                                                <tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">No data available in table</td></tr></tbody>
                                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="UserTable_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="UserTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="UserTable_previous"><a href="#" aria-controls="UserTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item next disabled" id="UserTable_next"><a href="#" aria-controls="UserTable" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>

                            </div>
                        </div>

                    </div>

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
