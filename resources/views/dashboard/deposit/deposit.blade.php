@extends('dashboard.layout.app')
@section('content')

    <div class="content bg-dark">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-light">Your deposits</h1>
            </div>
            @if(session()->has('declined'))
                <div class="alert alert-danger">
                    {{ session()->get('declined') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row py-3 mb-4">
                <div class="col">
                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#depositModal"><i class="fa fa-plus"></i> New deposit</a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col text-center card p-4 bg-dark">
                    <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="UserTable table table-hover text-light dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="descending" aria-label="ID: activate to sort column ascending" style="width: 80.5156px;">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 159.812px;">Amount</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Payment mode: activate to sort column ascending" style="width: 255.055px;">Payment Method</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 139.227px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date created: activate to sort column ascending" style="width: 223.391px;">Date created</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date created: activate to sort column ascending" style="width: 123.391px;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($deposits as $item)
                                        <tr>
                                            <td>{{ $item->transId() }}</td>
                                            <td>${{ $item->amount }}</td>
                                            <td>{{ $item->payment_method->name  }}</td>
                                            <td>{!! $item->status() !!}</td>
                                            <td>{{ date('d-M-y', strtotime($item->created_at)) }}</td>
                                            <td>
                                               @if($item->status == 0)
                                                    <a href="{{ route('user.payment', $item->id) }}" class="btn btn-sm btn-primary">Pay</a>
                                                @endif
                                            </td>
                                        </tr>
                                        @empty
                                        <tr class="odd">
                                            <td valign="top" colspan="5" class="dataTables_empty">No data available in table</td>
                                        </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deposit Modal -->
    <div id="depositModal" class="modal fade" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h4 class="modal-title text-light">Make new deposit</h4>
                    <button type="button" class="close text-light" data-dismiss="modal" value="">×</button>
                </div>
                <div class="modal-body bg-dark">
                    <form style="padding:3px;" role="form" method="post" action="{{ route('user.processDeposit') }}">
                        @csrf
                        <label for="">Select Payment Method</label>
                        <select name="payment_method_id" id="" class="form-control" required>
                            <option disabled selected>Choose Payment Method</option>
                            @foreach($payment_m as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <input style="padding:5px;" class="form-control text-light bg-dark" placeholder="Enter amount here" type="text" name="amount" required=""><br>

                        <input type="submit" class="btn btn-light" value="Continue">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /deposit Modal -->

@endsection
