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
                        <i class="fa fa-plus"></i> Export Score
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
          <?php foreach ($course_list as $course){?>
            <div class="col-md-4">
              <!-- Widget: Class widget style 1 -->
              <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-yellow">
                  <h3 class="widget-user-username"><?php echo $course['course_name']; ?></h3>
                  <h5 class="widget-user-desc">Code: <?php echo $course['cid']; ?></h5>
                  <h5 class="widget-user-desc"><?php echo $course['lecturer']; ?></h5>
                </div>
                <div class="box-footer no-padding">
                  <ul class="nav nav-stacked">
                    <li><a href="<?php echo site_url('Dashboard/course/'.$course['cid'].'/'.$sid)?>">Details</a></li>
                  </ul>
                </div>
              </div><!-- /.widget-Class -->
            </div><!-- /.col -->
           <?php }?>
        </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->