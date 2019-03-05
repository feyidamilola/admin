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
                            <a href="all-users.php">Users</a>
                        </li>
                        <li>
                            <a href="javascript:;" class="active">Single User</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div>
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
                            <li><a data-toggle="tab" href="#transactions">Transactions</a></li>
                            <li><a data-toggle="tab" href="#address">Address</a></li>
                            <li><a data-toggle="tab" href="#pickups">Pickups</a></li>
                        </ul>
                    </div>
                    <div class="page-content">
                        <div class="tab-content">
                            <div id="profile" class="tab-pane fade in active">
                                <div class="user-details">
                                    <p>
                                        First Name: <span class="pull-right" style="text-transform:capitalize">jane</span>
                                    </p>
                                </div>
                                <div class="user-details">
                                    <p>
                                        Last Name: <span class="pull-right" style="text-transform:capitalize">jane</span>
                                    </p>
                                </div>
                                <div class="user-details">
                                    <p>
                                        Phone Number: <span class="pull-right">0123456789</span>
                                    </p>
                                </div>
                                <div class="user-details">
                                    <p>
                                        Email: <span class="pull-right">jane@gmail.com</span>
                                    </p>
                                </div>
                            </div>
                            <div id="address" class="tab-pane fade">
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
                            </div>
                            <div id="pickups" class="tab-pane fade">
                                <table class="table dashboard-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Agent</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>23-01-19</td>
                                            <td>Jonas </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="transactions" class="tab-pane fade">
                                <table class="table dashboard-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Amount(₦)</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>23-02-19 </td>
                                            <td>5000</td>
                                            <td><span class="label label-warning">Cancelled</span></td>
                                        </tr>
                                        <tr>
                                            <td>23-02-19 </td>
                                            <td>5000</td>
                                            <td><span class="label label-success">Successful</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
<?php
    include 'footer.php';
?>