@extends('dashboard.layout.app')
@section('content')

<div class="content bg-dark">
    <div class="page-inner">
        <div class="mt-2 mb-4">
            <h1 class="text-light">Your packages</h1>
        </div>


        <div class="row mb-3">
            <div class="col-md-4 bg-primary p-2 shadow-lg">
                <h1 class="text-white"> Current Package:</h1>
            </div>
            @foreach($myplans as $item)
            <div class="col-md-8 bg-dark shadow-lg text-light p-3">
                <p style="color:#999;">ACTIVATED ON: {{ date('d M, Y', strtotime($item->created_at)) }} </p>
                <h4 style="text-transform: uppercase"> <strong>PACKAGE NAME:</strong> {{ $item->package->name }} </h4>
                <h4> <strong>AMOUNT:</strong> $@convert($item->amount)</h4>
                <h4><strong>DURATION:</strong> {{ $item->package->term_days }} Day(s)</h4>
                <p style="color:green;">Active! <i class="glyphicon glyphicon-ok"></i></p>
            </div>
            @endforeach
        </div>
{{--        <div class="row shadow-lg p-3 ">--}}
{{--            <div class="col-lg-12 mb-3">--}}
{{--                <a href="https://www.ftfinancetraders.com/dashboard/mplans" class="btn btn-lg btn-light nav-pills"> <i class="fa fa-plus"></i> Add plan</a>--}}
{{--                <h1 class="text-light my-3">Concurrent Packages:</h1>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>

@endsection
