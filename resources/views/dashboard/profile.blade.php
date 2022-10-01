@extends('dashboard.layout.app')
@section('content')

<div class="content bg-dark">
    <div class="page-inner">
        <div class="mt-2 mb-4">
            <h1 class="title1 text-light">Account Profile Information</h1>
        </div>

        <div class="row profile">
            <div class="col-lg-3 col-sm-12 bg-dark p-3">
                <div class="profile-sidebar card bg-dark shadow rounded pb-5 pt-5">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="https://toppng.com//public/uploads/preview/avatar-png-11554021819gij72acuim.png" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            {{ $user->name }}
                        </div>
                        <div class="profile-usertitle-job">
                            Username: {{ $user->username }}
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <button type="button" data-toggle="modal" data-target="#ppix" class="btn btn-success btn-sm">Update Picture</button>


                        <div id="ppix" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header .modal-dialog-centered bg-dark">
                                        Update Profile Picture
                                        <button type="button" class="close text-light" data-dismiss="modal">×</button>
                                    </div>
                                    <div class="modal-body bg-dark">
                                        <form role="form" method="post" action="https://www.ftfinancetraders.com/dashboard/profilepix" enctype="multipart/form-data">
                                            <input type="file" name="ppix" class="form-control bg-dark text-light" required=""> <br>
                                            <input type="hidden" name="user_id" value="196">
                                            <input type="hidden" name="_token" value="6QzWLflHs4u6uEuCGOutmC6NFJJGam4frQbaE2uR">
                                            <input type="submit" class="btn btn-primary" value="Update">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->

                </div>
            </div>
            <div class="col-lg-9 p-2">
                <div class="card p-5 shadow-lg bg-dark">
                    <h2> <span class="fa fa-user"></span> &nbsp; {{ $user->name }}</h2>
                    <h5> <span class="fa fa-location-arrow"></span> &nbsp; {{ $user->country }}</h5>
                    <h5> <span class="fa fa-envelope"></span> &nbsp; {{ $user->email }}  </h5>
                    <h5> <span class="fa fa-mobile"></span> &nbsp; +{{ $user->phone }}  </h5>
                    <h5> <span class="fa fa-calendar-alt"></span> &nbsp; {{ date('M d, Y', strtotime($user->created_at)) }} </h5>

                    <div>
                        <input type="submit" data-toggle="modal" data-target="#edit" value="Update Info" class="btn btn-primary">
                    </div>

                    <div id="edit" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header .modal-dialog-centered bg-dark">
                                    Edit my Profile
                                    <button type="button" class="close text-light" data-dismiss="modal">×</button>
                                </div>
                                <div class="modal-body bg-dark">
                                    <form role="form" method="post" action="https://www.ftfinancetraders.com/dashboard/profileinfo">
                                        <input type="hidden" name="user_id" value="196">

                                        <h5 class="text-light">Firstname</h5>
                                        <input type="text" name="firstname" value="Nancy" class="form-control bg-dark text-light"> <br>
                                        <h5 class="text-light">Surname</h5>
                                        <input type="text" name="surname" value="John" class="form-control bg-dark text-light"> <br>
                                        <h5 class="text-light">Date of Birth</h5>
                                        <input type="date" name="dob" class="form-control bg-dark text-light" value=""> <br>
                                        <h5 class="text-light">Phone Number</h5>
                                        <input type="text" name="phone" class="form-control bg-dark text-light" value="+2348165626483"> <br>
                                        <h5 class="text-light">Address</h5>
                                        <textarea class="form-control bg-dark text-light" placeholder="Full Address" name="address" row="3" value=""></textarea><br>
                                        <input type="hidden" name="user_id" value="">
                                        <input type="hidden" name="_token" value="6QzWLflHs4u6uEuCGOutmC6NFJJGam4frQbaE2uR">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript">
                            $("#styleform").on('change',function(){
                                $.ajax({
                                    url: "https://www.ftfinancetraders.com/dashboard/changetheme",
                                    type: 'POST',
                                    data:$("#styleform").serialize(),
                                    success: function (data) {
                                        location.reload(true);
                                    },
                                    error: function (data) {
                                        console.log('Something went wrong');
                                    },

                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
