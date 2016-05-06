     <script type="text/javascript">
					function submitform(){
						document.getElementById("reportStudentForm").submit();
						
					}

					function errorMSG(){
						alert("Search not found!!");
					}
				</script>
     
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Student Report
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-files-o"></i> Report</a></li>
            <li class="active">Each Student</li>
          </ol>
        </section>

        <!-- Main content Dashboard -->
        <section class="content">
        <div class="row">
            <div class="col-md-6">
              <!-- general Quick Search form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Search</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form id="reportStudentForm" action="display_student_report" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="StudentID">Student ID</label>
                      <input type="text" class="form-control" name="studentId" placeholder="Enter Student ID" >
                    </div>
                    <div>
                    	<label for="coursetxt">Course</label>
                    	<select class="form-control" name="courseId">
                    		<?php foreach ($classes_list as &$class) {?>
   							<option value="<?php echo $class[0]; ?>"><?php echo $class[1]; ?></option>
   							<?php } ?>
						</select>   	
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                  	<input type="hidden" name="chk">
                    <button class="btn bg-blue btn-flat btn-block" onclick ="submitform();">Search</button>
                    <button class="btn bg-maroon btn-flat btn-block" >Clear</button>
                  </div>
                </form>
                
              </div><!-- /.box -->
            </div><!-- /.col -->
            
            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Student Info</h3>
                </div>
                <div class="box-body">
                
       			 
        
                
                  <label for="StudentIDtxt">Student ID : </label>
                  <label for="StudentIDtxt"><?php echo $studentID; ?></label>
                  <br>
                  <!--<label for="StudentNametxt">Student Name : <?php echo $studentName; ?></label>
                   <br> -->
                  <label for="coursetxt">Course : <?php echo $courseName; ?> </label>
                  
           
                  
                </div>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Actions</h3>
                </div>
                <div class="box-body">
                  <a class="btn btn-app">
                    <i class="fa fa-save"></i> Save
                  </a>
                  <a class="btn btn-app">
                    <i class="fa fa-file-pdf-o"></i> Export PDF
                  </a>
                  <a class="btn btn-app">
                    <i class="fa fa-file-excel-o"></i> Export Excel
                  </a>
                  <a class="btn btn-app">
                    <i class="fa fa-file-photo-o "></i> Export Image
                  </a>
                </div>
              </div>
            </div>
        </div><!-- /.row -->
        </section><!-- /.content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-6">
              <!-- Assignment chart -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">Assignment Score</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div id="ass-chart" style="height: 300px;"></div>
                </div><!-- /.box-body-->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-6">
              <!-- Exam chart -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">Exam Score</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div id="exam-chart" style="height: 300px;"></div>
                </div><!-- /.box-body-->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Data -->
      <script>
        /*
         * BAR CHART
         * ---------
         */
//          var a = parseInt("7");

         
        var assignment_data = {
          data: [["Ass1", 9], ["Ass2", 8], ["Ass3", 4], ["Ass4", 13], ["Ass5", 17], ["Ass6", 9]],
          color: "#3c8dbc"
        };
        var exam_data = {
          data: [["Exam1", 90], ["Exam2", 84], ["Exam3", 45], ["Exam4", 31], ["Exam5", 60], ["Exam6", 90]],
          color: "#3c8dbc"
        };

        /* ASSINMENT SCORE */
        $.plot("#ass-chart", [assignment_data], {
          grid: {
            hoverable: true,
            borderWidth: 1,
            borderColor: "#f3f3f3",
            tickColor: "#f3f3f3"
          },
          series: {
            bars: {
              show: true,
              barWidth: 0.5,
              align: "center"
            }
          },
          xaxis: {
            mode: "categories",
            tickLength: 0
          }
        });


        /* Exam SCORE */
        $.plot("#exam-chart", [exam_data], {
          grid: {
            hoverable: true,
            borderWidth: 1,
            borderColor: "#f3f3f3",
            tickColor: "#f3f3f3"
          },
          series: {
            bars: {
              show: true,
              barWidth: 0.5,
              align: "center"
            }
          },
          xaxis: {
            mode: "categories",
            tickLength: 0
          },
        });
        /* END BAR CHART */

        //Initialize tooltip on hover
        $('<div class="tooltip-inner" id="bar-chart-tooltip"></div>').css({
          position: "absolute",
          display: "none",
          opacity: 0.8
        }).appendTo("body");
        $("#ass-chart").bind("plothover", function (event, pos, item) {

          if (item) {
            var y = item.datapoint[1].toFixed(2);

            $("#bar-chart-tooltip").html(y)
                    .css({top: item.pageY + 5, left: item.pageX + 5})
                    .fadeIn(200);
          } else {
            $("#bar-chart-tooltip").hide();
          }
        });
        $("#exam-chart").bind("plothover", function (event, pos, item) {

          if (item) {
            var y = item.datapoint[1].toFixed(2);

            $("#bar-chart-tooltip").html(y)
                    .css({top: item.pageY + 5, left: item.pageX + 5})
                    .fadeIn(200);
          } else {
            $("#bar-chart-tooltip").hide();
          }
        });

      /*
       * Custom Label formatter
       * ----------------------
       */
      function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
                + label
                + "<br>"
                + Math.round(series.percent) + "%</div>";
      }
    </script>
    <!-- /.Data -->