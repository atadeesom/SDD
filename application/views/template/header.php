<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<title><?php echo $title?></title>
    	<!-- Tell the browser to be responsive to screen width -->
    	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    	<!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url('styles/bootstrap/css/bootstrap.min.css')?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo base_url('styles/plugins/jvectormap/jquery-jvectormap-1.2.2.css')?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url('styles/dist/css/AdminLTE.min.css')?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url('styles/dist/css/skins/_all-skins.min.css')?>">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <body class="hold-transition skin-blue sidebar-mini">
        	<div class="wrapper">
        		<header class="main-header">
        		
            		<!-- Logo -->
                    <a href="#" class="logo">
                      <!-- mini logo for sidebar mini 50x50 pixels -->
                      <span class="logo-mini"><b>RE</b>V</span>
                      <!-- logo for regular state and mobile devices -->
                      <span class="logo-lg"><b><?php echo $screenName; ?></b>View</span>
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
                                    	<li class="footer">
                                    		<a href="#">View all</a>
                                    	</li>
                                    </ul>
                  				</li>
                  				<!-- User Account: style can be found in dropdown.less -->
                  				<li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                      <img src="<?php echo base_url('styles/dist/img/user2-160x160.jpg')?>" class="user-image" alt="User Image">
                                      <span class="hidden-xs"><?php echo $user_full_name; ?></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- User image -->
                                        <li class="user-header">
                                            <img src="<?php echo base_url('styles/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">
                                            <p>
                                              <?php echo $user_full_name; ?> - <?php echo $user_role; ?>
                                            </p>
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
                          		<img src="<?php echo base_url('styles/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">
                            </div>
                            <div class="pull-left info">
                            	<p><?php echo $user_full_name; ?></p>
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
                        	<li class="<?php if($nav_deshboard_active) echo 'active';?> treeview">
                                <a href="<?php echo site_url('Dashboard/index')?>">
                                	<i class="fa fa-dashboard"></i>
                                	<span>Dashboard</span>
                                </a>
                            </li>
                            <li class="<?php if($nav_report_active) echo 'active';?> treeview <?php if($this->session->userdata('u_role') != '02') echo 'hide'; ?>">
                                <a href="#">
                                	<i class="fa fa-files-o"></i><span>Report</span><i class="fa fa-angle-left pull-right"></i>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo site_url('Report/display_student_report'); ?>"><i class="fa fa-circle-o"></i>Student</a></li>
                                        <li><a href="<?php echo site_url('Report/display_class_report'); ?>"><i class="fa fa-circle-o"></i>Course</a></li>
                                    </ul>
                                </a>
                            </li>
                            <li class="<?php if($nav_event_active) echo 'active';?> treeview <?php if($this->session->userdata('u_role') != '01') echo 'hide'; ?>">
                            	<a href="#">
                               		<i class="fa fa-laptop"></i>
                               		<span>Event Log</span>
                               		<i class="fa fa-angle-left pull-right"></i>
                               		<ul class="treeview-menu">
                                    	<li class="<?php if($nav_event_application_active) echo 'active'; ?>"><a href="<?php echo site_url('Event/display_application_log')?>"><i class="fa fa-circle-o"></i> Application</a></li>
                                		<li class="<?php if($nav_event_security_active) echo 'active'; ?>"><a href="<?php echo site_url('Event/display_security_log')?>"><i class="fa fa-circle-o"></i> Security</a></li>
                                    </ul>
                              	</a>
                            </li>
                        </ul>
        			</section>
        		</aside>
	