<?php require_once "includes/header.php"; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="conainer">
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<i class="fa fa-home fa-5x"></i>
						</div>
						<div class="col-xs-6 text-right">
							<p class="announcement-heading">
								<?php echo total_class(); ?>
							</p>
							<p class="announcement-text">Classes</p>
						</div>
					</div>
				</div>
				<a href="class.php">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">
								View Classes
							</div>
							<div class="col-xs-6 text-right">
								<i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div> <!-- cold-md-3 -->
		<div class="col-md-3">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<i class="fa fa-tasks fa-5x"></i>
						</div>
						<div class="col-xs-6 text-right">
							<p class="announcement-heading">
								<?php echo total_section(); ?>
							</p>
							<p class="announcement-text">Section</p>
						</div>
					</div>
				</div>
				<a href="sections.php">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">
								View Section
							</div>
							<div class="col-xs-6 text-right">
								<i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div> <!-- cold-md-3 -->
		<div class="col-md-3">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<i class="fa fa-book fa-5x"></i>
						</div>
						<div class="col-xs-6 text-right">
							<p class="announcement-heading">
								<?php echo total_subject(); ?>
							</p>
							<p class="announcement-text">Subjects</p>
						</div>
					</div>
				</div>
				<a href="subjects.php">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">
								View Subjects
							</div>
							<div class="col-xs-6 text-right">
								<i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div> <!-- cold-md-3 -->
		<div class="col-md-3">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<i class="fa fa-user fa-5x"></i>
						</div>
						<div class="col-xs-6 text-right">
							<p class="announcement-heading">
								<?php echo total_teacher(); ?>
							</p>
							<p class="announcement-text">Teachers</p>
						</div>
					</div>
				</div>
				<a href="teachers.php">
					<div class="panel-footer announcement-bottom">
						<div class="row">
							<div class="col-xs-6">
								View Teachers
							</div>
							<div class="col-xs-6 text-right">
								<i class="fa fa-arrow-circle-right"></i>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div> <!-- cold-md-3 -->
	</div>
</div>
<div class="container-full">
	<div class="row">
		<div class="col-md-12">
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Classes', 'Total Students', 'Attendance today'],
      ['Class 5', <?php echo total_students_by_class(5); ?>, <?php echo total_attendance_today_by_class(5); ?>],
      ['Class 6', <?php echo total_students_by_class(6); ?>, <?php echo total_attendance_today_by_class(6); ?>],
      ['Class 7', <?php echo total_students_by_class(7); ?>, <?php echo total_attendance_today_by_class(7); ?>],
      ['Class 8', <?php echo total_students_by_class(8); ?>, <?php echo total_attendance_today_by_class(8); ?>],
      ['Class 9', <?php echo total_students_by_class(9); ?>, <?php echo total_attendance_today_by_class(9); ?>]
    ]);

    var options = {
      chart: {
        title: 'Student statistics today:',
         }
    };

    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>

<div id="columnchart_material" style="height: 500px; width: 100%;"></div>

		</div>
	</div>
</div>
						
<?php require_once "includes/footer.php"; ?>