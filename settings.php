<?php
    include 'header.php';
?>
        <div class="main-content">
            <div class="h-20"></div>
            <div class="col-md-12 mb-20">
                <div>
                    <ul class="breadcrumb pull-left">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="active">Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div>
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a data-toggle="tab" href="#profile">Update Profile</a></li>
                            <li><a data-toggle="tab" href="#password">Change Password</a></li>
                            <!-- <li><a data-toggle="tab" href="#address">Change Address</a></li> -->
                        </ul>
                    </div>
                    <div class="page-content">
                        <div class="tab-content">
                            <div id="profile" class="tab-pane fade in active">
                                <form action="#" method="post">
                                    <div class="row">
                                        <label for="" class="col-md-3">First Name</label>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="First Name" name="first_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-md-3">Last Name</label>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Last Name" name="last_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-md-3">Phone Number</label>
                                        <div class="col-md-6">
                                            <input type="tel" placeholder="Phone Number" name="tel" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-md-3">Email</label>
                                        <div class="col-md-6">
                                            <input type="email" placeholder="Email Address" name="email" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="row text-center mt-15">
                                        <input type="submit" value="submit" class="btn btn-default">
                                    </div>
                                </form>
                            </div>
                            <!-- <div id="address" class="tab-pane fade">
                                <div class="user-details">
                                    <p>
                                        House Unit: <span class="pull-right">Unknown</span>
                                    </p>
                                </div>
                                <div class="user-details">
                                    <p>
                                        House Type: <span class="pull-right">Detached</span>
                                    </p>
                                </div>
                                <div class="user-details">
                                    <p>
                                        Street Number: <span class="pull-right">33</span>
                                    </p>
                                </div>
                                <div class="user-details">
                                    <p>
                                        Street Name: <span class="pull-right">Queens</span>
                                    </p>
                                </div>
                                <div class="user-details">
                                    <p>
                                        Property Type: <span class="pull-right">Residential</span>
                                    </p>
                                </div>
                                <div class="user-details">
                                    <p>
                                        Commercial Property Type: <span class="pull-right">N/A</span>
                                    </p>
                                </div>
                                <div class="user-details">
                                    <p>
                                        Landmark: <span class="pull-right">Alagomeji</span>
                                    </p>
                                </div>
                                <div class="user-details">
                                    <p>
                                        Area: <span class="pull-right">Awoyaya</span>
                                    </p>
                                </div>
                                <div class="user-details">
                                    <p>
                                        Local Government: <span class="pull-right">Ibeju Lekki</span>
                                    </p>
                                </div>
                            </div> -->
                            <div id="password" class="tab-pane fade">
                                <form action="#" method="post">
                                    <div class="row">
                                        <label for="" class="col-md-3">Current Password</label>
                                        <div class="col-md-6">
                                            <input type="password" placeholder="Current Password" name="current_password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-md-3">New Password</label>
                                        <div class="col-md-6">
                                            <input type="password" placeholder="New Password" name="new_password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row text-center mt-15">
                                        <input type="submit" value="submit" class="btn btn-default">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
<?php
    include 'footer.php';
?>