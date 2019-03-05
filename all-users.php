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
                    <a href="javascript:;" class="active">Users</a>
                  </li>
                </ul>
              </div>
              <div class="top-card text-right">
                  <a href="add-new-agent.php" class="btn btn-primary">Add New Agent</a>
              </div>
          </div>
          <div class="">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
               <div class="page-content">
                  <div class="page-title">
                    <h3>
                      all users
                    </h3>
                    <hr>
                  </div>
                  <table class="table dt-responsive nowrap" style="width:100%">
                      <thead>
                          <tr>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Email</th>
                              <th>Phone Number</th>
                              <th class="text-center">User Type</th>
                              <th class="text-center">action</th>
                          </tr>
                      </thead>
                      <tbody>
                          
                          <tr>
                              <td>Jonas </td>
                              <td>Alexander</td>
                              <td style="text-transform:lowercase;">jane@email.com</td>
                              <td>08123456789</td>
                              <td class="text-center"><span class="label label-success">Customer</span></td>
                              <td class="text-center">
                                  <div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">action
                                      <span class="caret"></span></button>
                                      <ul class="dropdown-menu">
                                        <li><a href="single-user.php">view</a></li>
                                        <li><a href="add-new-agent.php">edit</a></li>
                                      </ul>
                                    </div>
                              </td>
                          </tr>
                          <tr>
                              <td>jade </td>
                              <td>sola</td>
                              <td style="text-transform:lowercase;">jade@email.com</td>
                              <td>08123456790</td>
                              <td class="text-center"><span class="label label-primary">agent</span></td>
                              <td class="text-center">
                                  <div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">action
                                      <span class="caret"></span></button>
                                      <ul class="dropdown-menu">
                                        <li><a href="single-user.php">view</a></li>
                                        <li><a href="add-new-agent.php">edit</a></li>
                                      </ul>
                                    </div>
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