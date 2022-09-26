@extends('dashboard.layout.app')
@section('content')

<div class="main-panel bg-dark">
    <div class="content bg-dark">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-light">Make Payment</h1>
            </div>
            @if(session()->has('success'))
                <div class="alert alert-success">
                    <strong class="text text-success">{{ session()->get('success') }}</strong>
                </div>
            @endif
            <div class="row">
                <div class="col card bg-dark shadow-lg p-4">


                    <div class="mb-3 text-light">
                        <h4 style="font-size: 24px;">You are to make payment of
                            <strong>${{ $deposit->amount }}</strong>
                        </h4>
                        <h4 class="text-light" style="font-size: 21px;">
                            Kindly make payment to the <span class="text text-info ">{{ $deposit->payment_method->name }}</span> wallet below
                        </h4>
                        <hr>
                        <hr>
                        <form action="" class="mb-3">
                            <style>
                                .form-control:disabled, .form-control[readonly] {
                                    background: #121111 !important;
                                    border-color: #e8e8e8 !important;
                                }
                            </style>
                            <input id="foo" style="color: white" type="text" value="{{ $deposit->payment_method->value }}" class="form-control col-md-6" readonly>
                            <a href="#" class="btn" data-clipboard-target="#foo">Copy Address</a>
                        </form>
                        <div>
                            {!! QrCode::size(200)->generate($deposit->payment_method->value); !!}
                        </div>
                        <br>
                        <a href="" class="btn btn-info" data-toggle="modal" data-target="#paymentModal">Paid</a>


                    </div>
                    <br> <br>


                </div>
            </div>
        </div>
    </div>
    @include('dashboard.layout.footer')
</div>

<!-- Deposit Modal -->
<div id="paymentModal" class="modal fade" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title text-light">Upload Payment Screenshot</h4>
                <button type="button" class="close text-light" data-dismiss="modal" value="">×</button>
            </div>
            <div class="modal-body bg-dark">
                <form style="padding:3px;" role="form" method="post" action="{{ route('user.processPayment') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $deposit->id }}" name="deposit_id">
                    <input style="padding:5px;" class="form-control-file text-light bg-dark" type="file" name="reference" required=""><br>

                    <input type="submit" class="btn btn-light" value="Continue">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /deposit Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
<script>
    new ClipboardJS('.btn');
</script>
@endsection
