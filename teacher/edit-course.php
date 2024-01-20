<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if (isset($_POST['submit'])) {
	$coursecode = $_POST['cc'];
	$coursefn = $_POST['cnf'];
	$courseStrem = $_POST['stream'];
	$coursecat = $_POST['CC'];
	$coursedue = $_POST['duration'];
	$courseamt = $_POST['ca'];
	$id = $_GET['id'];
	$query = "update course set course_code=?,course_fn=?,stream=?,course_cat=?,duration=?,course_amt=? where id=?";
	$stmt = $mysqli->prepare($query);

	$rc = $stmt->bind_param('ssssssi', $coursecode, $coursefn, $courseStrem, $coursecat, $coursedue, $courseamt, $id);
	$stmt->execute();
	if ($stmt->affected_rows > 0) {
		// Update successful
		$stmt->close();
		echo "<script>alert('Course has been Updated successfully');</script>";
		header("Location: manage-courses.php");
		exit(); // Ensure no further code execution after redirection
	} else {
		// No rows were affected - update might not have happened
		echo "<script>alert('No changes were made or update failed');</script>";
	}
}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Edit Course</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
	<script type="text/javascript" src="js/validation.min.js"></script>
</head>

<body>
	<?php include('includes/header.php'); ?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Edit Course </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Edit courses</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">
											<?php
											$id = $_GET['id'];
											$ret = "select * from course where id=?";
											$stmt = $mysqli->prepare($ret);
											$stmt->bind_param('i', $id);
											$stmt->execute(); //ok
											$res = $stmt->get_result();
											//$cnt=1;
											while ($row = $res->fetch_object()) {
											?>
												<div class="hr-dashed"></div>

												<div class="form-group">
													<label class="col-sm-2 control-label">Course Code </label>
													<div class="col-sm-8">
														<input type="text" value="<?php echo $row->course_code; ?>" name="cc" class="form-control">
													</div>
												</div>


												<div class="form-group">
													<label class="col-sm-2 control-label">Stream</label>
													<div class="col-sm-8">
														<select name="stream" id="CC" class="form-control" required>
															<option value="">Select Stream</option>
															<option value="B.Sc.IT" <?php if ($row->stream === "B.Sc.IT") ?>>B.Sc.IT</option>
															<option value="B.Sc.CS" <?php if ($row->stream === "B.Sc.CS") ?>>B.Sc.CS</option>
															<option value="B.com" <?php if ($row->stream === "B.com") ?>>B.com</option>
															<option value="BMS" <?php if ($row->stream === "BMS") ?>>BMS</option>
														</select>
													</div>
												</div>


												<div class="form-group">
													<label class="col-sm-2 control-label">Course Name(Full)</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" name="cnf" value="<?php echo $row->course_fn; ?>" placeholder="course-name">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">Course-Category</label>
													<div class="col-sm-8">
														<select name="CC" id="CC" class="form-control" required>
															<option value="">Select Course-Category</option>
															<option value="Sem-I" <?php if ($row->course_cat === "Sem-I") ?>>Sem-I</option>
															<option value="Sem-II" <?php if ($row->course_cat === "Sem-II") ?>>Sem-II</option>
															<option value="Sem-III" <?php if ($row->course_cat === "Sem-III") ?>>Sem-III</option>
															<option value="Sem-IV" <?php if ($row->course_cat === "Sem-IV") ?>>Sem-IV</option>
															<option value="Sem-V" <?php if ($row->course_cat === "Sem-V") ?>>Sem-V</option>
															<option value="Sem-VI" <?php if ($row->course_cat === "Sem-VI") ?>>Sem-VI</option>
														</select>
													</div>
												</div>



												<div class="form-group">
													<label class="col-sm-2 control-label">Duration</label>
													<div class="col-sm-8">
														<input type="text" value="<?php echo $row->duration; ?>" name="duration" class="form-control">

													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">course ammount</label>
													<div class="col-sm-8">
														<input type="text" value="<?php echo $row->course_amt; ?>" name="ca" class="form-control">
													</div>
												</div>

											<?php } ?>
											<div class="col-sm-8 col-sm-offset-2">

												<input class="btn btn-primary" type="submit" name="submit" value="Update Course">
											</div>
									</div>

									</form>

								</div>
							</div>


						</div>




					</div>
				</div>

			</div>
		</div>


	</div>
	</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

	</script>
</body>

</html>