<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Template For Waste Management</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Import Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/useful.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-fixed-top">
        <div class="navbar-left align-items-center">
          <!-- logo -->
          <img src="img/vuitton.png" alt="Company Logo" class="logo" width="80px">
            <div class="hidden-md">
                <div class="toggle-wrap">
                    <span class="toggle-bar"><hr></span>
                </div>
            </div>
      </div>
      <div class="navbar-right mt-15">
          <!-- notifications -->
          <div class="btn-group notifications navbar-heading">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell fa-2x"></i><span class="badge">3</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="#">
                      New User Signup
                      <span>02.09.19 - 12:40pm</span>
                    </a>
                  </li>
                  <li>
                      <a href="#">
                        New Agent Pickup
                        <span>02.09.19 - 12:40pm</span>
                      </a>
                  </li>
                  <li>
                      <a href="#">
                        New User Transaction
                        <span>02.09.19 - 12:40pm</span>
                      </a>
                  </li>
                  
              </ul>
          </div>
          <!-- profile name -->
          <div class="navbar-heading profile-name">
              <p>
                  jane doe
              </p>
          </div>
          <!-- user avatar -->
          <div class="navbar-heading user-avatar">
              <img src="img/myavatar.png" alt="User Profile Picture">
          </div>
      </div>
    </nav>

    <div class="page-body">
        <div class="sidebar" id="sidebarnav">
            <div class="main-menu">
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="index.php">
                            <div>
                                <img src="img/home-icon.png" alt="Home Icon">
                            </div>
                            <span>dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="all-users.php">
                            <div>
                                <img src="img/user-icon.png" alt="User Icon">
                            </div>
                            <span>users</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="all-payments.php">
                            <div>
                                <img src="img/transaction-icon.png" alt="Transaction Icon">
                            </div>
                            <span>Payments</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="all-pickups.php">
                            <div>
                                <img src="img/pickup-icon.png" alt="Pickup Icon">
                            </div>
                            <span>Pickups</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="areas.php">
                            <div>
                                <img src="img/areas-icon.png" alt="Area Icon">
                            </div>
                            <span>Areas</span>
                        </a>
                    </li>
                    <!-- <li class="">
                        <a href="send-mail.php">
                            <div>
                                <img src="img/message-icon.png" alt="Message Icon">
                            </div>
                            <span>send mail</span>
                        </a>
                    </li> -->
                    <li class="">
                        <a href="settings.php">
                            <div>
                                <img src="img/settings-icon.png" alt="Settings Icon">
                            </div>
                            <span>settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>