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
                        <form method="post" action="https://www.ftfinancetraders.com/dashboard/updateacct">
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
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body bg-dark shadow">
                                        <div class="form-group">
                                            <h5 class="text-light">Bank Name</h5>
                                            <input type="text" name="bank_name" value="" class="form-control text-light bg-dark" placeholder="Enter bank name">
                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-light">Account Name</h5>
                                            <input type="text" name="account_name" value="" class="form-control  text-light bg-dark" placeholder="Enter Account name">
                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-light">Account Number</h5>
                                            <input type="text" name="account_no" value="" class="form-control text-light bg-dark" placeholder="Enter Account Number">
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                            <input type="text" name="doge_address" value="" class="form-control text-light bg-dark" placeholder="Enter DOge Address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--......................... end of collaps five -->


                            <input type="submit" class="btn btn-primary" value="Submit">  &nbsp; &nbsp;
                            <a href="https://www.ftfinancetraders.com/dashboard/skip_account" style="color:red;">Skip</a>
                            <input type="hidden" name="id" value="196">
                            <input type="hidden" name="_token" value="QoAj2rXwva9FEVMF5LSH1aPDKVoz5HXlW2FEyXdI">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
