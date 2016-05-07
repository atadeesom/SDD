<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
    	Course Report
    	<small>Version 2.0</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-files-o"></i> Report</a></li>
        <li class="active">Course</li>
    </ol>
    </section>

    <!-- Main content Dashboard -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <!-- general Quick Search form elements -->
                <div class="box box-primary">
                <div class="box-header with-border">
                	<h3 class="box-title">Search Criteria</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form id="courseReportForm" action="display_class_report" method="post" onload="">
                	<input type="hidden" id="methodName" name="methodName" value="init"/>
                    <div class="box-body">
                        <div class="form-group">
                          	<label>Course: </label>
                          	<select class="form-control" name="selectedCourse" id="selectedCourse">
                          		<option value="">----Please Select----</option>
                                <?php foreach ($courseList as $class) {?>
                                	<option value="<?php echo $class[0]; ?>"><?php echo $class[1]; ?></option>
                                <?php } ?>
                            </select>   	
                        </div>
                    </div><!-- /.box-body -->
                  	<div class="box-footer">
                  	    <button class="btn bg-blue btn-flat btn-block" type="submit" onclick ="submitform();">Search</button>
                    	<button class="btn bg-maroon btn-flat btn-block" type="clear" onclick="clear();">Clear</button>
                  	</div>
                </form>
                </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-6">
                <div class="box box-solid">
                    <div class="box-header with-border">
                      <i class="fa fa-child"></i>
                      <h3 class="box-title">Course Detail</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <dl class="dl-horizontal">
                            <dt>Course Name</dt>
                            <dd><?php echo empty($courseDetail[0])?"":$courseDetail[0]; ?></dd>
                            <dt>Lecturer Name</dt>
                            <dd><?php echo empty($courseDetail[1])?"":$courseDetail[1]; ?></dd>
                        </dl>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
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

<script type="text/javascript">
    function submitform(){
    	document.getElementById("methodName").value = "search";
		document.getElementById("courseReportForm").submit();
    }

    function clear(){
    	document.getElementById("methodName").value = "clear";
    	document.getElementById("courseReportForm").submit();
    }
    
    function errorMSG(){
    	alert("Search not found!!");
    }
</script>

<!-- Data -->
<script>

    /*
     * BAR CHART
     * ---------
     */
	var assignment_data  = null;
	var exam_data = null;
    <?php 
        if(isset($assignment_data) and !empty($assignment_data)){ ?>
        	//alert('test');
        	assignment_data = {
            	data: <?php echo '[' . implode(', ', array_map(function ($v, $k) { return sprintf("['%s',%s]", $k, $v); }, $assignment_data, array_keys($assignment_data))) . ']' ?>,
            	color: "#3c8dbc" 
        	}; 
    <?php 
        }
        if(isset($exam_data) and !empty($exam_data)){ ?>
            exam_data = {
            	data: <?php echo '[' . implode(', ', array_map(function ($v, $k) { return sprintf("['%s',%s]", $k, $v); }, $assignment_data, array_keys($exam_data))) . ']' ?>,
    			color: "#3c8dbc"
            }
   <?php 
        }
    ?>

    /* ASSINMENT SCORE */
    if(null != assignment_data){
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
    }

    /* Exam SCORE */
    if(null != exam_data){
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
    }
    
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