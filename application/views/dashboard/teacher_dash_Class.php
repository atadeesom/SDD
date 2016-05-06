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
              <div class="box box-solid">
                <div class="box-header with-border">
                  <i class="fa fa-group"></i>
                  <h3 class="box-title"><?php echo $course['cid'];?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <p class="lead"><h4><?php echo $course['course_name']; ?></h4></p>
                  <p class="text-aqua"><?php echo $course['lecturer']; ?></p>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo count($assignment_list);?></h3>
                  <p>Assignments</p>
                </div>
                <div class="icon">
                  <i class="fa fa-tumblr"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo count($assignment_list);?></h3>
                  <p>Exams</p>
                </div>
                <div class="icon">
                  <i class="fa fa-paper-plane-o"></i>
                </div>
              </div>
            </div><!-- ./col -->
          </div>
        <div class="row">
        	<!-- Assignment  -->
        	<?php foreach ($assignment_list as $assignment) {?>
          <div class="col-md-6">
            <a href="<?php echo site_url('Dashboard/assignment/'.$cid.'/'.$assignment['ass_id']); ?>">
            <div class="callout callout-success">
                    <h4><?php echo $assignment['ass_name']?></h4>
                    <p><?php echo $assignment['ass_detail']?></p>
            </div>
            </a>
          </div>
          <?php }?>
          <!--  End of Assignment -->
          <!--  Exam -->
          <?php foreach ($exam_list as $exam) {?>
          <div class="col-md-6">
            <a href="<?php echo site_url('Dashboard/exam/'.$cid.'/'.$exam['exam_id']); ?>">
            <div class="callout callout-danger">
                    <h4><?php echo $exam['exam_name'];?></h4>
                    <p><?php echo $exam['exam_detail'];?></p>
            </div>
            </a>
          </div>
          <?php }?>
        </div>
        <div class="row">
            <div class="col-md-12">
                  <!-- Application buttons -->
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Actions</h3>
                    </div>
                    <div class="box-body">
                      <a class="btn btn-app">
                        <i class="fa fa-plus"></i> New Assignments
                      </a>
                      <a class="btn btn-app">
                        <i class="fa fa-edit"></i> Edit Assignments
                      </a>
                      <a class="btn btn-app">
                        <i class="fa fa-minus"></i> Delete Assignments
                      </a>
                      <a class="btn btn-app">
                        <i class="fa fa-plus"></i> New Exams
                      </a>
                      <a class="btn btn-app">
                        <i class="fa fa-edit"></i> Edit Exams
                      </a>
                      <a class="btn btn-app">
                        <i class="fa fa-minus"></i> Delete Exams
                      </a>
                    </div>
                  </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->