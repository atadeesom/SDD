<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lecturer | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="styles/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="styles/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="styles/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="teacher_dash.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>LC</b>V</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Lecturer</b>View</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new students joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Aj. John R. created assignment
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> Gooddie Team submited assigment
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-aqua"></i> Noraset N. submited assigment
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-aqua"></i> Charnon C. submited assigment
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="styles/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Alexander Noraset</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="styles/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Alexander Noraset - Lecturer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="styles/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Noraset</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i><span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i><span>Report</span><i class="fa fa-angle-left pull-right"></i>
                  <ul class="treeview-menu">
                    <li><a href="styles/pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Each Student</a></li>
                    <li><a href="styles/pages/charts/morris.html"><i class="fa fa-circle-o"></i> Each Section</a></li>
                    <li><a href="styles/pages/charts/flot.html"><i class="fa fa-circle-o"></i> Each Class</a></li>
                  </ul>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i><span>Event Log</span>
              </a>
            </li>
            <li><a href="styles/documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content Dashboard -->
        <section class="content">
        <div class="row">
            <div class="col-md-12">
                  <!-- Application buttons -->
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Actions</h3>
                    </div>
                    <div class="box-body">
                      <a class="btn btn-app">
                        <i class="fa fa-plus"></i> New Class
                      </a>
                      <a class="btn btn-app">
                        <i class="fa  fa-upload"></i> Upload
                      </a>
                      <a class="btn btn-app">
                        <i class="fa fa-play"></i> Run
                      </a>
                      </a>
                    </div>
                  </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Class Info boxes -->
            <div class="col-md-4">
              <!-- Widget: Class widget style 1 -->
              <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-yellow">
                  <h3 class="widget-user-username">Fundamental Programming 1</h3>
                  <h5 class="widget-user-desc">Section 1</h5>
                  <h5 class="widget-user-desc">Semester 1/2016</h5>
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="#">Students <span class="pull-right badge bg-maroon">15/30</span></a></li>
                    <li><a href="#">Lessons <span class="pull-right badge bg-blue">9</span></a></li>
                    <li><a href="#">Documents <span class="pull-right badge bg-yellor">19</span></a></li>
                    <li><a href="#">Assignments <span class="pull-right badge bg-aqua">5</span></a></li>
                    <li><a href="#">Projects <span class="pull-right badge bg-green">2</span></a></li>
                    <li><a href="#">Exams <span class="pull-right badge bg-red">1</span></a></li>
                  </ul>
                </div>
              </div><!-- /.widget-Class -->
            </div><!-- /.col -->
            <div class="col-md-4">
              <!-- Widget: Class widget style 1 -->
              <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-blue">
                  <h3 class="widget-user-username">Fundamental Programming 1</h3>
                  <h5 class="widget-user-desc">Section 5</h5>
                  <h5 class="widget-user-desc">Semester 1/2016</h5>
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="#">Students <span class="pull-right badge bg-maroon">15/30</span></a></li>
                    <li><a href="#">Lessons <span class="pull-right badge bg-blue">9</span></a></li>
                    <li><a href="#">Documents <span class="pull-right badge bg-yellor">19</span></a></li>
                    <li><a href="#">Assignments <span class="pull-right badge bg-aqua">5</span></a></li>
                    <li><a href="#">Projects <span class="pull-right badge bg-green">2</span></a></li>
                    <li><a href="#">Exams <span class="pull-right badge bg-red">1</span></a></li>
                  </ul>
                </div>
              </div><!-- /.widget-Class -->
            </div><!-- /.col -->
            <div class="col-md-4">
              <!-- Widget: Class widget style 1 -->
              <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-orange">
                  <h3 class="widget-user-username">Fundamental Programming 1</h3>
                  <h5 class="widget-user-desc">Section 1</h5>
                  <h5 class="widget-user-desc">Semester 1/2015</h5>
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="#">Students <span class="pull-right badge bg-maroon">15/30</span></a></li>
                    <li><a href="#">Lessons <span class="pull-right badge bg-blue">9</span></a></li>
                    <li><a href="#">Documents <span class="pull-right badge bg-yellor">19</span></a></li>
                    <li><a href="#">Assignments <span class="pull-right badge bg-aqua">5</span></a></li>
                    <li><a href="#">Projects <span class="pull-right badge bg-green">2</span></a></li>
                    <li><a href="#">Exams <span class="pull-right badge bg-red">1</span></a></li>
                  </ul>
                </div>
              </div><!-- /.widget-Class -->
            </div><!-- /.col -->
            <div class="col-md-4">
              <!-- Widget: Class widget style 1 -->
              <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-green">
                  <h3 class="widget-user-username">Fundamental Programming 1</h3>
                  <h5 class="widget-user-desc">Section 1</h5>
                  <h5 class="widget-user-desc">Semester 1/2015</h5>
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="#">Students <span class="pull-right badge bg-maroon">15/30</span></a></li>
                    <li><a href="#">Lessons <span class="pull-right badge bg-blue">9</span></a></li>
                    <li><a href="#">Documents <span class="pull-right badge bg-yellor">19</span></a></li>
                    <li><a href="#">Assignments <span class="pull-right badge bg-aqua">5</span></a></li>
                    <li><a href="#">Projects <span class="pull-right badge bg-green">2</span></a></li>
                    <li><a href="#">Exams <span class="pull-right badge bg-red">1</span></a></li>
                  </ul>
                </div>
              </div><!-- /.widget-Class -->
            </div><!-- /.col -->
            <div class="col-md-4">
              <!-- Widget: Class widget style 1 -->
              <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-teal">
                  <h3 class="widget-user-username">Fundamental Programming 1</h3>
                  <h5 class="widget-user-desc">Section 1</h5>
                  <h5 class="widget-user-desc">Semester 1/2015</h5>
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="#">Students <span class="pull-right badge bg-maroon">15/30</span></a></li>
                    <li><a href="#">Lessons <span class="pull-right badge bg-blue">9</span></a></li>
                    <li><a href="#">Documents <span class="pull-right badge bg-yellor">19</span></a></li>
                    <li><a href="#">Assignments <span class="pull-right badge bg-aqua">5</span></a></li>
                    <li><a href="#">Projects <span class="pull-right badge bg-green">2</span></a></li>
                    <li><a href="#">Exams <span class="pull-right badge bg-red">1</span></a></li>
                  </ul>
                </div>
              </div><!-- /.widget-Class -->
            </div><!-- /.col -->
            <div class="col-md-4">
              <!-- Widget: Class widget style 1 -->
              <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-maroon">
                  <h3 class="widget-user-username">Fundamental Programming 1</h3>
                  <h5 class="widget-user-desc">Section 1</h5>
                  <h5 class="widget-user-desc">Semester 1/2015</h5>
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="#">Students <span class="pull-right badge bg-maroon">15/30</span></a></li>
                    <li><a href="#">Lessons <span class="pull-right badge bg-blue">9</span></a></li>
                    <li><a href="#">Documents <span class="pull-right badge bg-yellor">19</span></a></li>
                    <li><a href="#">Assignments <span class="pull-right badge bg-aqua">5</span></a></li>
                    <li><a href="#">Projects <span class="pull-right badge bg-green">2</span></a></li>
                    <li><a href="#">Exams <span class="pull-right badge bg-red">1</span></a></li>
                  </ul>
                </div>
              </div><!-- /.widget-Class -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        </section><!-- /.content -->
        <section class="content">
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
              <!-- MAP & BOX PANE -->
              <div class="row">
                <div class="col-md-6">
                  <!-- DIRECT CHAT -->
                  <div class="box box-warning direct-chat direct-chat-warning">
                    <div class="box-header with-border">
                      <h3 class="box-title">Direct Chat</h3>
                      <div class="box-tools pull-right">
                        <span data-toggle="tooltip" title="3 New Messages" class="badge bg-yellow">3</span>
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <!-- Conversations are loaded here -->
                      <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                          <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-left">Alexander Noraset</span>
                            <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                          </div><!-- /.direct-chat-info -->
                          <img class="direct-chat-img" src="styles/dist/img/user2-160x160.jpg" alt="message user image"><!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            Is this template really for free? That's unbelievable!
                          </div><!-- /.direct-chat-text -->
                        </div><!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                          <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-right">Sarah Bullock</span>
                            <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                          </div><!-- /.direct-chat-info -->
                          <img class="direct-chat-img" src="styles/dist/img/user3-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            You better believe it!
                          </div><!-- /.direct-chat-text -->
                        </div><!-- /.direct-chat-msg -->

                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                          <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-left">Alexander Noraset</span>
                            <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                          </div><!-- /.direct-chat-info -->
                          <img class="direct-chat-img" src="styles/dist/img/user2-160x160.jpg" alt="message user image"><!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            Working with AdminLTE on a great new app! Wanna join?
                          </div><!-- /.direct-chat-text -->
                        </div><!-- /.direct-chat-msg -->

                        <!-- Message to the right -->
                        <div class="direct-chat-msg right">
                          <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-right">Sarah Bullock</span>
                            <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                          </div><!-- /.direct-chat-info -->
                          <img class="direct-chat-img" src="styles/dist/img/user3-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            I would love to.
                          </div><!-- /.direct-chat-text -->
                        </div><!-- /.direct-chat-msg -->

                      </div><!--/.direct-chat-messages-->

                      <!-- Contacts are loaded here -->
                      <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="styles/dist/img/user1-128x128.jpg">
                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Count Dracula
                                  <small class="contacts-list-date pull-right">2/28/2015</small>
                                </span>
                                <span class="contacts-list-msg">How have you been? I was...</span>
                              </div><!-- /.contacts-list-info -->
                            </a>
                          </li><!-- End Contact Item -->
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="styles/dist/img/user7-128x128.jpg">
                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Sarah Doe
                                  <small class="contacts-list-date pull-right">2/23/2015</small>
                                </span>
                                <span class="contacts-list-msg">I will be waiting for...</span>
                              </div><!-- /.contacts-list-info -->
                            </a>
                          </li><!-- End Contact Item -->
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="styles/dist/img/user3-128x128.jpg">
                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nadia Jolie
                                  <small class="contacts-list-date pull-right">2/20/2015</small>
                                </span>
                                <span class="contacts-list-msg">I'll call you back at...</span>
                              </div><!-- /.contacts-list-info -->
                            </a>
                          </li><!-- End Contact Item -->
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="styles/dist/img/user5-128x128.jpg">
                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nora S. Vans
                                  <small class="contacts-list-date pull-right">2/10/2015</small>
                                </span>
                                <span class="contacts-list-msg">Where is your new...</span>
                              </div><!-- /.contacts-list-info -->
                            </a>
                          </li><!-- End Contact Item -->
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="styles/dist/img/user6-128x128.jpg">
                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  John K.
                                  <small class="contacts-list-date pull-right">1/27/2015</small>
                                </span>
                                <span class="contacts-list-msg">Can I take a look at...</span>
                              </div><!-- /.contacts-list-info -->
                            </a>
                          </li><!-- End Contact Item -->
                          <li>
                            <a href="#">
                              <img class="contacts-list-img" src="styles/dist/img/user8-128x128.jpg">
                              <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Kenneth M.
                                  <small class="contacts-list-date pull-right">1/4/2015</small>
                                </span>
                                <span class="contacts-list-msg">Never mind I found...</span>
                              </div><!-- /.contacts-list-info -->
                            </a>
                          </li><!-- End Contact Item -->
                        </ul><!-- /.contatcts-list -->
                      </div><!-- /.direct-chat-pane -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                      <form action="#" method="post">
                        <div class="input-group">
                          <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-warning btn-flat">Send</button>
                          </span>
                        </div>
                      </form>
                    </div><!-- /.box-footer-->
                  </div><!--/.direct-chat -->
                </div><!-- /.col -->

                <div class="col-md-6">
                  <!-- USERS LIST -->
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Connects</h3>
                      <div class="box-tools pull-right">
                        <span class="label label-danger">8 New Connects</span>
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">
                      <ul class="users-list clearfix">
                        <li>
                          <img src="styles/dist/img/user1-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Alexander Pierce</a>
                          <span class="users-list-date">Today</span>
                        </li>
                        <li>
                          <img src="styles/dist/img/user8-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Norman</a>
                          <span class="users-list-date">Yesterday</span>
                        </li>
                        <li>
                          <img src="styles/dist/img/user7-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Jane</a>
                          <span class="users-list-date">12 Jan</span>
                        </li>
                        <li>
                          <img src="styles/dist/img/user6-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">John</a>
                          <span class="users-list-date">12 Jan</span>
                        </li>
                        <li>
                          <img src="styles/dist/img/user2-160x160.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Alexander Noraset</a>
                          <span class="users-list-date">13 Jan</span>
                        </li>
                        <li>
                          <img src="styles/dist/img/user5-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Sarah</a>
                          <span class="users-list-date">14 Jan</span>
                        </li>
                        <li>
                          <img src="styles/dist/img/user4-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Nora</a>
                          <span class="users-list-date">15 Jan</span>
                        </li>
                        <li>
                          <img src="styles/dist/img/user3-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Nadia</a>
                          <span class="users-list-date">15 Jan</span>
                        </li>
                      </ul><!-- /.users-list -->
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                      <a href="javascript::" class="uppercase">View All Connects</a>
                    </div><!-- /.box-footer -->
                  </div><!--/.box -->
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- PRODUCT LIST -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Recently Actions</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    <li class="item">
                      <div class="product-img">
                        <img src="styles/dist/img/default-50x50.gif" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Project <span class="label label-warning pull-right">Submit</span></a>
                        <span class="product-description">
                          Python project from Goodies Groups.
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="styles/dist/img/default-50x50.gif" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Project <span class="label label-info pull-right">Reviewed</span></a>
                        <span class="product-description">
                          Aj. AA R. reviewed Python project from Goodies Groups.
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="styles/dist/img/default-50x50.gif" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Project <span class="label label-danger pull-right">Not Pass</span></a>
                        <span class="product-description">
                          Python project from Goodies Groups does not pass.
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="styles/dist/img/default-50x50.gif" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Project <span class="label label-success pull-right">Resend</span></a>
                        <span class="product-description">
                          Goodies Groups resened Python project
                        </span>
                      </div>
                    </li><!-- /.item -->
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript::;" class="uppercase">View All Actions</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="#">Alexander Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="styles/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="styles/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="styles/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="styles/dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="styles/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="styles/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="styles/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="styles/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="styles/plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="styles/dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="styles/dist/js/demo.js"></script>
  </body>
</html>
