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
                        <form method="post" action="{{ route('user.account.store') }}">
                            @csrf
                            <!--............................... collapse one -->
                            <div class="card">
                                <div class="card-header bg-dark" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="span-icon">
                                        <div class="fa fa-clone"></div>
                                    </div>
                                    <div class="span-title text-light">
                                        Withdrawal Details
                                    </div>
                                    <div class="span-mode"></div>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body bg-dark shadow">
                                        <div class="form-group">
                                            <h5 class="text-light">Coin Name</h5>
                                            <input type="text" name="name" value="" class="form-control text-light bg-dark" placeholder="Enter bank name">
                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-light">Coin Address</h5>
                                            <input type="text" name="value" value="" class="form-control  text-light bg-dark" placeholder="Enter Account name">
                                        </div>

                                    </div>
                                </div>
                            </div>



                            <input type="submit" class="btn btn-primary" value="Submit">  &nbsp; &nbsp;
                            <a href="{{ route('user.dashboard') }}" style="color:red;">Skip</a>

                        </form>
                        <br>
                        <div class="card">
                            <table class="table table-dark">
                                <tr>
                                    <th>Coin Name</th>
                                    <th>Coin Address</th>
                                </tr>
                                @foreach($wallets as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->value }}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
