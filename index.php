<?php 
  include 'header.php';
?>
        <div class="main-content">
          <div class="h-40"></div>
          <div class="top-card">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-top bg-mustard">
                      <img src="img/user-icon.png" alt="Users">
                    </div>
                    <div class="card-content">
                      <p>all customers</p>
                      <h2>200</h2>
                    </div>
                    <div class="card-bottom text-right">
                      <a href="all-users.php" class="btn btn-default">view</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-top bg-pink">
                    <img src="img/transaction-icon.png" alt="Transactions">
                    </div>
                    <div class="card-content">
                      <p>all transactions</p>
                      <h2>200,000</h2>
                    </div>
                    <div class="card-bottom text-right">
                      <a href="all-payments.php" class="btn btn-default">view</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-top bg-blue">
                      <img src="img/user-icon.png" alt="Transactions">
                    </div>
                    <div class="card-content">
                      <p>all agents</p>
                      <h2>200</h2>
                    </div>
                    <div class="card-bottom text-right">
                      <a href="all-users.php" class="btn btn-default">view</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-top bg-lime">
                      <img src="img/pickup-icon.png" alt="Pickup">
                    </div>
                    <div class="card-content">
                      <p>all pickups</p>
                      <h2>10,0000</h2>
                    </div>
                    <div class="card-bottom text-right">
                      <a href="all-pickups.php" class="btn btn-default">view</a>
                    </div>
                </div>
            </div>
          </div>
          <div class="">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
               <div class="page-content dashboard-table">
                  <div class="page-title">
                    <h3>
                      recent transactions
                    </h3>
                    <hr>
                  </div>
                  <table id="transactions" class="table " style="width:100%">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Amount</th>
                              <th>Location</th>
                              <th>Date</th>
                          </tr>
                      </thead>
                      <tbody>
                          
                          <tr>
                              <td>Jonas Alexander</td>
                              <td>2000</td>
                              <td>awoyaya</td>
                              <td>02.02.19 - 23:59</td>
                          </tr>
                          <tr>
                              <td>Jonas Alexander</td>
                              <td>2000</td>
                              <td>awoyaya</td>
                              <td>02.02.19 - 23:59</td>
                          </tr>
                          <tr>
                              <td>Jonas Alexander</td>
                              <td>2000</td>
                              <td>awoyaya</td>
                              <td>02.02.19 - 23:59</td>
                          </tr>
                          <tr>
                            <td>Jonas Alexander</td>
                            <td>2000</td>
                            <td>awoyaya</td>
                            <td>02.02.19 - 23:59</td>
                        </tr>
                        <tr>
                            <td>Jonas Alexander</td>
                            <td>2000</td>
                            <td>awoyaya</td>
                            <td>02.02.19 - 23:59</td>
                        </tr>
                          
                      </tbody>
                      
                  </table>
                  <div class="text-center">
                    <a href="#" class="btn btn-default">view all</a>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
              <div class="page-content dashboard-table">
                 <div class="page-title">
                   <h3>
                     recent pickups
                   </h3>
                   <hr>
                 </div>
                 <table id="transactions" class="table dashboard-table" style="width:100%">
                     <thead>
                         <tr>
                             <th>Customer Name</th>
                             <th>street</th>
                             <th>Agent</th>
                             <th>date</th>
                         </tr>
                     </thead>
                     <tbody>
                         
                         <tr>
                             <td>Jonas Alexander</td>
                             <td>awoyaya</td>
                             <td>John Doe</td>
                             <td>02.02.19 - 23:59</td>
                         </tr>
                         <tr>
                             <td>Jonas Alexander</td>
                             <td>sangotedo</td>
                             <td>john doe</td>
                             <td>02.02.19 - 23:59</td>
                         </tr>
                         <tr>
                             <td>Jon Alexander</td>
                             <td>alagomeji</td>
                             <td>david</td>
                             <td>02.02.19 - 23:59</td>
                         </tr>
                         <tr>
                          <td>Jonas Alexander</td>
                          <td>sangotedo</td>
                          <td>john doe</td>
                          <td>02.02.19 - 23:59</td>
                      </tr>
                      <tr>
                          <td>Jon Alexander</td>
                          <td>alagomeji</td>
                          <td>david</td>
                          <td>02.02.19 - 23:59</td>
                      </tr>
                         
                     </tbody>
                     
                 </table>
                 <div class="text-center">
                    <a href="#" class="btn btn-default">view all</a>
                  </div>
              </div>
           </div>
          </div>
        </div>
<?php 
  include 'footer.php';
?>