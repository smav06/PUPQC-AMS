
<?php
session_start();

if (!isset($_SESSION['mysesi']) && !isset($_SESSION['mytype'])=='Departmental User')
{
  echo "<script>window.location.assign('index.php')</script>";
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
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="du-dashboard.php" class="brand-logo darken-1"><img src="images/pupqc-logo-with-name.png" alt="PUPQC Logo"></a> <span class="logo-text">PUPQC AMS</span></h1></li>
                    </ul>
                    
                    <ul class="right hide-on-med-and-down">                        
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>
                        
                        </a>
                        </li>                        
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-action-settings"></i></a>
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

  <!-- //////////////////////////////////////////////////////////////////////////// -->

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
                        <li><a href="du-profile.php"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        <li><a href="logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $_SESSION['mysesi'] ?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal"><?php echo $_SESSION['mytype'] ?></p>
                </div>
            </div>
            </li>
            <li class="bold active"><a href="du-dashboard.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-speaker-notes"></i>Requisition</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="du-purchase-request.php">Purchase Request</a>
                                </li>
                                <li><a href="du-ppmp-request.php">PPMP Request</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="bold"><a href="du-department-asset.php" class="waves-effect waves-cyan"><i class="mdi-hardware-laptop-chromebook"></i>Department Assets</a>
                    </li>
                    
                    <li class="bold"><a href="du-report-damaged-asset.php" class="waves-effect waves-cyan"><i class="mdi-action-report-problem"></i>Report Damaged Asset</a>
                    </li>

                    <li class="bold"><a href="du-report-for-transfer-asset.php" class="waves-effect waves-cyan"><i class="mdi-maps-directions-car"></i>Report For Transfer Asset</a>
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
                  <li class="active"><a href="du-dashboard.php">Dashboard</a>
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

          <div class="section">
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
          </div>

          <div class="section">            
            <!--DataTables example-->
            <div id="table-datatables">
              
              <div class="row">
                <div class="col s12 m12 l12">
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                        </tr>                        
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
            <br>
            
          </div>
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

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



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script>


    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript">
        /*Show entries on click hide*/
        $(document).ready(function(){
            $(".dropdown-content.select-dropdown li").on( "click", function() {
                var that = this;
                setTimeout(function(){
                if($(that).parent().hasClass('active')){
                        $(that).parent().removeClass('active');
                        $(that).parent().hide();
                }
                },100);
            });
        });
    </script>
</body>

</html>