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
                            <a href="javascript:;" class="active">Add New User</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="page-content" style="overflow:hidden;">
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
                            <div class="row">
                                <label for="" class="col-md-3">Enable</label>
                                <div class="col-md-6">
                                    <input type="checkbox" name="status"> Activate Agent
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
<?php 
    include 'footer.php';
?>