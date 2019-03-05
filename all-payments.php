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
                            <a href="javascript:;" class="active">Transactions</a>
                        </li>
                    </ul>
                </div>
                <div class="top-card text-right">
                  <a href="#" class="btn btn-primary">New Transaction</a>
                </div>
            </div>
            <div class="">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="page-content">
                        <table class="table dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Customer Name</th>
                                    <th>Amount(₦)</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>23-02-19 </td>
                                    <td>Jane Doe </td>
                                    <td>5000</td>
                                    <td><span class="label label-warning">Cancelled</span></td>
                                </tr>
                                <tr>
                                    <td>23-02-19 </td>
                                    <td>John Doe </td>
                                    <td>5000</td>
                                    <td><span class="label label-success">Successful</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            
            </div>
        </div>
<?php
    include 'footer.php';
?>
   