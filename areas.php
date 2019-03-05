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
                    <a href="javascript:;" class="active">Areas</a>
                  </li>
                </ul>
              </div>
              <div class="top-card text-right">
                  <a href="new-area.php" class="btn btn-primary">Add New Area</a>
              </div>
          </div>
          <div class="">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
               <div class="page-content">
                  <div class="page-title">
                    <h3>
                      all areas
                    </h3>
                    <hr>
                  </div>
                  <table class="table dt-responsive nowrap" style="width:100%">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Local Government</th>
                              <th>Pickup Days</th>
                              <th>Agent</th>
                              <th class="text-center">Status</th>
                              <th class="text-center">action</th>
                          </tr>
                      </thead>
                      <tbody>
                          
                          <tr>
                              <td>awoyaya </td>
                              <td>ibeju Lekki</td>
                              <td>tuesdays</td>
                              <td>eedris abdulkareem</td>
                              <td class="text-center"><span class="label label-success">pending</span></td>
                              <td class="text-center">
                                <a href="new-area.php" class="btn btn-default">edit</a>
                              </td>
                          </tr>
                          <tr>
                            <td>sangotedo </td>
                            <td>ibeju Lekki</td>
                            <td>mondays</td>
                            <td>eedris abdulkareem</td>
                            <td class="text-center"><span class="label label-primary">active</span></td>
                            <td class="text-center">
                                <a href="new-area.php" class="btn btn-default">edit</a>
                              </td>
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