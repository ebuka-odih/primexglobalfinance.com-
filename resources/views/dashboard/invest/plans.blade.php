@extends('dashboard.layout.app')
@section('content')

<div class="content bg-dark">
    <div class="page-inner">
        <div class="mt-2 mb-4">
            <h1 class="title1 text-light">Available packages</h1>
        </div>

        <div class="row mb-5">
            @foreach($plans as $item)
            <div class="col-lg-4 p-4 card bg-dark shadow-lg">
                <div class="pricing-table purple border bg-dark shadow-lg">
                    <!-- Table Head -->
                    <div class="pricing-label d-inline">Fixed Price</div>
                    <h2 class="text-light">{{ $item->name }}</h2>
                    <!-- Price -->
                    <div class="price-tag">
                        <span class="symbol text-light">$</span>
                        <span class="amount text-light">@convert($item->min_deposit)</span>
                    </div>
                    <!-- Features -->
                    <div class="pricing-features">
                        <div class="feature text-light">Minimum Possible Deposit:<span class="text-light">$@convert($item->min_deposit)</span></div>
                        <div class="feature text-light">Maximum Possible Deposit:<span class="text-light">${{ $item->max() }}</span></div>
                        <div class="feature text-light">Minimum Return:<span class="text-light">$@convert($item->profit())</span></div>
                        <div class="feature text-light">Maximum Return:<span class="text-light">$UNLIMITED</span></div>
                        <div class="feature text-light">Gift Bonus:<span class="text-light">$@convert($item->gift)</span></div>
                        <div class="feature text-light">Daily Interest:<span class="text-light">{{ $item->daily_interest }}%</span></div>
                        <div class="feature text-light">Duration:<span class="text-light">{{ $item->term_days }} Day(s)</span></div>
                    </div> <br>
                    <!-- Button -->
                    <div class="">
                        <form style="padding:3px;" role="form" method="post" action="{{ route('user.processInvest') }}">
                            @csrf
                            @if ($errors->any())
                                <div class="text text-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(session()->has('declined'))
                                <div class="text text-danger">
                                    {{ session()->get('declined') }}
                                </div>
                            @endif
                            @if(session()->has('insufficient'))
                                <div class="text text-danger">
                                    {{ session()->get('insufficient') }}
                                </div>
                            @endif

                            <input type="hidden" value="{{ $item->id }}" name="package_id">
                            <h5 class="text-light">Amount to invest: ($500.00 default)</h5>
                            <input type="number" min="{{ $item->min_deposit }}" max="UNLIMITED" name="amount" placeholder="$500.00" class="form-control text-light bg-dark"> <br>
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

                                    <input type="hidden" name="_token" value="Hn04KxYqvEzyHaUqjsdIiDytCwJKHbfIXIVYsrh0">
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
            @endforeach

        </div>
    </div>
</div>

@endsection
