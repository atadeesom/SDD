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
                  <h3 class="box-title">SDD1111C</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <p class="lead"><h4>Software Design and Develop</h4></p>
                  <p class="text-aqua">Semester 1/2016</p>
                </div>
              </div>
            </div>
        </div>
        </section><!-- /.content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-6">
              <!-- Assignment chart -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">My Assignment Score</h3>
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
                  <h3 class="box-title">My Exam Score</h3>
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

        var assignment_data = {
          data: [["Ass1", 10], ["Ass2", 8], ["Ass3", 4], ["Ass4", 13], ["Ass5", 17], ["Ass6", 9]],
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