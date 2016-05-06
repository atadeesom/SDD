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
                  <p class="text-aqua"><?php echo $exam_detail['exam_name'];?></p>
                  <p class="text-green"><?php echo $exam_detail['exam_detail'];?></p>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Exam Status</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input name="table_search" class="form-control input-sm pull-right" type="text" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>Student ID</th>
                      <th>Student Name</th>
                      <th>Score</th>
                      <th>Status</th>
                    </tr>
                    <?php foreach ($exams as $exam){?>
                    <tr>
                      <td><?php echo $exam['sid']; ?></td>
                      <td><?php echo $exam['s_name'];?></td>
                      <td><?php echo $exam['score'];?></td>
                      <td><span class="label label-success">Pass</span></td>
                    </tr>
                    <?php }?>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        <div class="row">
            <div class="col-md-12">
                  <!-- Application buttons -->
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Actions</h3>
                    </div>
                    <div class="box-body">
                      <a class="btn btn-app" href="<?php echo site_url('Dashboard')?>">
                        <i class="fa fa-slack"></i> See Assignment
                      </a>
                      <a class="btn btn-app" href="<?php echo site_url('Dashboard/course/'.$course['cid']);?>">
                        <i class="fa fa-chevron-circle-left"></i> Back to Course
                      </a>
                      </a>
                    </div>
                  </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->