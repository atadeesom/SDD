<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Event</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>

	<form action="display_application_log" method="post">
	   <input type="text" name="date" value="<?php echo $dateCriteria ?>">
	   <input type="submit" name="search" value="Search!">
	</form>
	
	
	<?php 
		if(isset($searchResult)){
			echo "<b>Date:</b>\n"; echo $dateCriteria;
			echo "<br/>\n";
			echo "<table border='1'>\n";
			echo "<tr>\n";
			echo "<td>Date</td>\n";
			echo "<td>User ID</td>\n";
			echo "<td>User IP</td>\n";
			echo "<td>Session ID</td>\n";
			echo "<td>Detail</td>\n";
			echo "</tr>\n";
			if(isset($logs)) { 
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
			}else { 
				echo "<tr>\n";
				echo "<td colspan ='5'>Search not found!!!</td>\n";
				echo "</tr>\n";
			} 
			echo "</table>";
		}
	?>
  </body>
</html>