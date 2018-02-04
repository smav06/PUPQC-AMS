
<?php
session_start();

if (!isset($_SESSION['mysesi']) && !isset($_SESSION['mytype'])=='Property Officer')
{
<<<<<<< HEAD
  echo "<script>window.location.assign('index.php')</script>";
=======
  echo "<script>window.location.assign('login.php')</script>";
>>>>>>> 2af72c71ba6e4c55cd73852e5c8fbec8665bf0d5
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Dashboard</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/PUPLogo-32-32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/PUPLogo-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/PUPLogo-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/fullcalendar/css/fullcalendar.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="po-dashboard.php" class="brand-logo darken-1"><img src="images/pupqc-logo-with-name.png" alt="PUPQC Logo"></a> <span class="logo-text">PUPQC AMS</span></h1></li>
                    </ul>
                    
                    <ul class="right hide-on-med-and-down">                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>
                        
                        </a>
                        </li>                        
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>
                    </ul>

                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                      <li>
                        <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                      </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="po-profile.php"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        <li><a href="logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $_SESSION['mysesi'] ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal"><?php echo $_SESSION['mytype'] ?></p>
                </div>
            </div>
            </li>
            <li class="bold active"><a href="po-dashboard.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-assignment-ind"></i> Assets</a>
                        <div class="collapsible-body">
                            <ul>
                              <li><a href="po-list-of-asset.php">List of Asset</a>
                              </li>
                              <li><a href="po-assign-asset.php">Assign Asset</a>
                              </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-speaker-notes"></i> Requisition</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="po-purchase-request.php">Purchase Request</a>
                                </li>
                                <li><a href="po-ppmp-request.php">PPMP Request</a>
                                </li>
                                <li><a href="po-request-in-main.php">Requests In Main</a>
                                </li>
                                <li><a href="po-availability-of-asset.php">Availability of Asset</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-get-app"></i> Acquisition </a>
                        <div class="collapsible-body">
                            <ul>                                    
                                <li><a href="po-from-donation.php">From Donation</a>
                                </li>
                                <li><a href="po-from-requests.php">From Requests</a>
                                </li>
                                <li><a href="po-from-transfer.php">From Transfer</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a href="transfer.php" class="waves-effect waves-cyan"><i class="mdi-maps-directions-car"></i> Transfer</a>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-settings-applications"></i> Maintenance</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="maintenance-yearly.php">Yearly Maintenance</a>
                                    </li>
                                    <li><a href="maintenance-report.php">Report of Damage</a>
                                    </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-delete"></i> Disposal</a>
                        <div class="collapsible-body">
                            <ul>                                        
                                <li><a href="po-view-disposed-asset.php">View Disposed Asset</a>
                                </li>
                                <li><a href="dispose-an-asset.php">Dispose An Asset</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <ol class="breadcrumbs">
                  <li class="active"><a href="po-dashboard.php">Dashboard</a>
                  </li>
                  <li></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">

          <div id="chart-dashboard">
              <div class="row">
                  <div class="col s12 m8 l8">
                      <div class="card">
                          <div class="card-move-up waves-effect waves-block waves-light">
                              <div class="move-up cyan darken-1">
                                  <div>
                                      <span class="chart-title white-text">Revenue</span>
                                      <div class="chart-revenue cyan darken-2 white-text">
                                          <p class="chart-revenue-total">$4,500.85</p>
                                          <p class="chart-revenue-per"><i class="mdi-navigation-arrow-drop-up"></i> 21.80 %</p>
                                      </div>
                                      <div class="switch chart-revenue-switch right">
                                          <label class="cyan-text text-lighten-5">
                                            Month
                                            <input type="checkbox">
                                            <span class="lever"></span> Year
                                          </label>
                                      </div>
                                  </div>
                                  <div class="trending-line-chart-wrapper">
                                      <canvas id="trending-line-chart" height="70"></canvas>
                                  </div>
                              </div>
                          </div>
                          <div class="card-content">
                              <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
                              <div class="col s12 m3 l3">
                                  <div id="doughnut-chart-wrapper">
                                      <canvas id="doughnut-chart" height="200"></canvas>
                                      <div class="doughnut-chart-status">4500
                                          <p class="ultra-small center-align">Sold</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col s12 m2 l2">
                                  <ul class="doughnut-chart-legend">
                                      <li class="mobile ultra-small"><span class="legend-color"></span>Mobile</li>
                                      <li class="kitchen ultra-small"><span class="legend-color"></span> Kitchen</li>
                                      <li class="home ultra-small"><span class="legend-color"></span> Home</li>
                                  </ul>
                              </div>
                              <div class="col s12 m5 l6">
                                  <div class="trending-bar-chart-wrapper">
                                      <canvas id="trending-bar-chart" height="90"></canvas>                                                
                                  </div>
                              </div>
                          </div>

                          <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">Revenue by Month <i class="mdi-navigation-close right"></i></span>
                              <table class="responsive-table">
                                  <thead>
                                      <tr>
                                          <th data-field="id">ID</th>
                                          <th data-field="month">Month</th>
                                          <th data-field="item-sold">Item Sold</th>
                                          <th data-field="item-price">Item Price</th>
                                          <th data-field="total-profit">Total Profit</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>1</td>
                                          <td>January</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                      </tr>
                                      <tr>
                                          <td>2</td>
                                          <td>February</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                      </tr>
                                      <tr>
                                          <td>3</td>
                                          <td>March</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                      </tr>
                                      <tr>
                                          <td>4</td>
                                          <td>April</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                      </tr>
                                      <tr>
                                          <td>5</td>
                                          <td>May</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                      </tr>
                                      <tr>
                                          <td>6</td>
                                          <td>June</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                      </tr>
                                      <tr>
                                          <td>7</td>
                                          <td>July</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                      </tr>
                                      <tr>
                                          <td>8</td>
                                          <td>August</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                      </tr>
                                      <tr>
                                          <td>9</td>
                                          <td>Septmber</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                      </tr>
                                      <tr>
                                          <td>10</td>
                                          <td>Octomber</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                      </tr>
                                      <tr>
                                          <td>11</td>
                                          <td>November</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                      </tr>
                                      <tr>
                                          <td>12</td>
                                          <td>December</td>
                                          <td>122</td>
                                          <td>100</td>
                                          <td>$122,00.00</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>


                      </div>
                  </div>

                  <div class="col s12 m4 l4">
                      <div class="card">
                          <div class="card-move-up teal waves-effect waves-block waves-light">
                              <div class="move-up">
                                  <p class="margin white-text">Browser Stats</p>
                                  <canvas id="trending-radar-chart" height="114"></canvas>
                              </div>
                          </div>
                          <div class="card-content  teal darken-2">
                              <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
                              <div class="line-chart-wrapper">
                                  <p class="margin white-text">Revenue by country</p>
                                  <canvas id="line-chart" height="114"></canvas>
                              </div>
                          </div>
                          <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">Revenue by country <i class="mdi-navigation-close right"></i></span>
                              <table class="responsive-table">
                                  <thead>
                                      <tr>
                                          <th data-field="country-name">Country Name</th>
                                          <th data-field="item-sold">Item Sold</th>
                                          <th data-field="total-profit">Total Profit</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>USA</td>
                                          <td>65</td>
                                          <td>$452.55</td>
                                      </tr>
                                      <tr>
                                          <td>UK</td>
                                          <td>76</td>
                                          <td>$452.55</td>
                                      </tr>
                                      <tr>
                                          <td>Canada</td>
                                          <td>65</td>
                                          <td>$452.55</td>
                                      </tr>
                                      <tr>
                                          <td>Brazil</td>
                                          <td>76</td>
                                          <td>$452.55</td>
                                      </tr>
                                      <tr>

                                          <td>India</td>
                                          <td>65</td>
                                          <td>$452.55</td>
                                      </tr>
                                      <tr>
                                          <td>France</td>
                                          <td>76</td>
                                          <td>$452.55</td>
                                      </tr>
                                      <tr>
                                          <td>Austrelia</td>
                                          <td>65</td>
                                          <td>$452.55</td>
                                      </tr>
                                      <tr>
                                          <td>Russia</td>
                                          <td>76</td>
                                          <td>$452.55</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>


          <div class="section">

            <div id="card-stats">

                <div class="row">
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content  green white-text">
                                <p class="card-stats-title"><i class="mdi-social-group-add"></i> New Clients</p>
                                <h4 class="card-stats-number">566</h4>
                                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                </p>
                            </div>
                            <div class="card-action  green darken-2">
                                <div id="clients-bar" class="center-align"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content pink lighten-1 white-text">
                                <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> New Invoice</p>
                                <h4 class="card-stats-number">1806</h4>
                                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                                </p>
                            </div>
                            <div class="card-action  pink darken-2">
                                <div id="invoice-line" class="center-align"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content blue-grey white-text">
                                <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Today Profit</p>
                                <h4 class="card-stats-number">$806.52</h4>
                                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                                </p>
                            </div>
                            <div class="card-action blue-grey darken-2">
                                <div id="profit-tristate" class="center-align"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-content purple white-text">
                                <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Sales</p>
                                <h4 class="card-stats-number">$8990.63</h4>
                                <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                </p>
                            </div>
                            <div class="card-action purple darken-2">
                                <div id="sales-compositebar" class="center-align"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  dsaldskladsa -->

            </div>

          </div>
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->

      <!-- START RIGHT SIDEBAR NAV-->
      <aside id="right-sidebar-nav">
        <ul id="chat-out" class="side-nav rightside-navigation">
            <li class="li-hover">
            <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
            <div id="right-search" class="row">
                <form class="col s12">
                    <div class="input-field">
                        <i class="mdi-action-search prefix"></i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Search</label>
                    </div>
                </form>
            </div>
            </li>
            <li class="li-hover">
                <ul class="chat-collapsible" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                    <div class="collapsible-body recent-activity">
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">just now</a>
                                <p>Jim Doe Purchased new equipments for zonal office.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Yesterday</a>
                                <p>Your Next flight for USA will be on 15th August 2015.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Last Week</a>
                                <p>Jessy Jay open a new store at S.G Road.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                    <div class="collapsible-body sales-repoart">
                        <div class="sales-repoart-list  chat-out-list row">
                            <div class="col s8">Target Salse</div>
                            <div class="col s4"><span id="sales-line-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Payment Due</div>
                            <div class="col s4"><span id="sales-bar-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Delivery</div>
                            <div class="col s4"><span id="sales-line-2"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Progress</div>
                            <div class="col s4"><span id="sales-bar-2"></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                    <div class="collapsible-body favorite-associates">
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Eileen Sideways</p>
                                <p class="place">Los Angeles, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Zaham Sindil</p>
                                <p class="place">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Renov Leongal</p>
                                <p class="place">Cebu City, Philippines</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Weno Carasbong</p>
                                <p>Tokyo, Japan</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Nusja Nawancali</p>
                                <p class="place">Bangkok, Thailand</p>
                            </div>
                        </div>
                    </div>
                </li>
                </ul>
            </li>
        </ul>
      </aside>
      <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2018 <a class="grey-text text-lighten-4" href="http://pup.edu.ph" target="_blank">Polytechnic University of the Philippines</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://facebook.com/">Team Asset Management System</a></span>
      </div>
    </div>
  </footer>
    <!-- END FOOTER -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
    
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>
    
    <!-- google map api -->
    <script type="text/javascript" src="js/maps.js"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/vectormap-script.js"></script>
    
</body>

</html>