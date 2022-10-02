@extends('admin.layout.app')
@section('content')

<main id="main-container">

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Deposits</h1>

            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Full Table -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">All Deposits</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-settings"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th class="text-center" style="width: 100px;">
                                <i class="far fa-user"></i>
                            </th>
                            <th>Amount</th>
                            <th style="width: 30%;">Status</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deposits as $item)
                        <tr>
                            <td>{{ date('d-M-y', strtotime($item->created_at)) }}</td>
                            <td class="text-center">
                                {{ $item->user->name }} (@convert( $item->user->balance))
                            </td>
                            <td class="fw-semibold">
                                $ {{ $item->amount }}
                            </td>
                            <td>
                                {!! $item->adminStatus() !!}
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    @if($item->status == 0)
                                        <a href="{{ route('admin.view_deposit', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="View Deposit" data-bs-original-title="View">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.approve_deposit', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="Approve Deposit" data-bs-original-title="Approve">
                                            <i class="fa fa-check"></i>
                                        </a>
                                        {{--                                                    <a href="{{ route('admin.approve_deposit', $item->id) }}" class="btn btn-sm btn-success mb-1">Approve</a>--}}
                                    @else
                                    @endif
                                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Full Table -->


    </div>
    <!-- END Page Content -->
</main>

@endsection
