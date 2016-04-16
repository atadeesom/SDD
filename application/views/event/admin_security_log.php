      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Security Event Logs
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-laptop"></i>Event Logs</a></li>
            <li class="active">Security Event Logs</li>
          </ol>
        </section>
		
		<form id="securityEventLogForm" action="display_security_log.html" method="post">
			
			<input name="initailFlag" type="hidden" value="<?php echo !empty($initailFlag) ? $initailFlag : "" ?>"/>
			<!-- Main content Dashboard -->
			<section class="content">
			  <div class="row">
				<div class="col-xs-12">
				  <div class="box">
					<div class="box-header">
					  <h3 class="box-title">Security Event Logs</h3>
					  <div class="box-tools">
						<div class="input-group" style="width: 200px;">
						  <input type="text" name="date" class="form-control input-sm pull-right" placeholder="Search Date-(YYYYMMDD)" value="<? echo $dateTerm; ?>">
						  <div class="input-group-btn">
							<button class="btn btn-sm btn-default" onclick ="submitform();">
								<i class="fa fa-search"></i>
							</button>
						  </div>
						</div>
						
					  </div>
					</div><!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
							  <th>Date</th>
							  <th>User ID</th>
							  <th>User IP</th>
							  <th>Session ID</th>
							  <th>Details</th>
							</tr>
						
						<!-- echo "<b>Date:</b>\n"; echo $dateCriteria; -->
						
						<?php 
							if(isset($searchResult)){
								if(isset($logs)){ 
									$row = count($logs[0]);
									for ($i = 0; $i <= ($row - 1); $i++){
										echo "<tr>\n";
										echo "<td>".$logs[0][$i][0]."</td>\n";
										echo "<td>".$logs[0][$i][1]."</td>\n";
										echo "<td>".$logs[0][$i][2]."</td>\n";
										echo "<td>".$logs[0][$i][3]."</td>\n";
										echo "<td>".$logs[0][$i][4]."</td>\n";
										echo "</tr>\n";
									}
								}else{ 
									echo "<tr>\n";
									echo "<td colspan ='5' style='text-align:center;color:red;'>Search not found!!!</td>\n";
									echo "</tr>\n";
								} 
							}
						?>
					  </table>
					</div><!-- /.box-body -->
					
					
					
					<!-- <div class="box-tools">
						<ul class="pagination pagination-sm no-margin pull-right">
						  <li><a href="#">&laquo;</a></li>
						  <li><a href="#">1</a></li>
						  <li><a href="#">2</a></li>
						  <li><a href="#">3</a></li>
						  <li><a href="#">&raquo;</a></li>
						</ul>
					</div> -->
					
					
					
				  </div><!-- /.box -->
				</div><!-- /.col -->
			  </div><!-- /.row -->
			</section><!-- /.content -->
		</form>
      </div><!-- /.content-wrapper -->
	  
	  <script type="text/javascript">
		function submitform(){
			document.getElementById("securityEventLogForm").submit();
		}
	</script>