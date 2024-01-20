<?php
session_start();
include('includes/config.php');
// Establish your database connection here


if (isset($_POST['stream']) && isset($_POST['course_cat'])) {
	$selectedStream = $_POST['stream'];
	$selectedCourseCat = $_POST['course_cat'];

	// Assuming $mysqli is your database connection
	$query = "SELECT course_fn FROM course WHERE stream = ? AND course_cat = ?";
	$stmt = $mysqli->prepare($query);

	if ($stmt) {
		$stmt->bind_param('ss', $selectedStream, $selectedCourseCat);
		$stmt->execute();
		$result = $stmt->get_result();

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo '<option value="' . $row['course_fn'] . '">' . $row['course_fn'] . '</option>';
			}
		} else {
			echo '<option value="">No Courses Found</option>';
		}

		$stmt->close();
	} else {
		echo '<option value="">Error in query execution</option>';
	}
}
?>
<!-- First Dropdown -->
<div class="form-group">
	<label class="col-sm-2 control-label">Course</label>
	<div class="col-sm-8">
		<select name="course1" id="course1" class="form-control" required>
			<option value="">Select Course</option>
			<?php
			$query1 = "SELECT DISTINCT stream FROM course";
			$stmt1 = $mysqli->prepare($query1);
			$stmt1->execute();
			$res1 = $stmt1->get_result();
			while ($row1 = $res1->fetch_object()) {
			?>
				<option value="<?php echo $row1->stream; ?>"><?php echo $row1->stream; ?></option>
			<?php } ?>
		</select>
	</div>
</div>

<!-- Second Dropdown -->
<div class="form-group">
	<label class="col-sm-2 control-label">Course</label>
	<div class="col-sm-8">
		<select name="course2" id="course2" class="form-control" required>
			<option value="">Select Course</option>
			<?php
			$query2 = "SELECT DISTINCT course_cat FROM course";
			$stmt2 = $mysqli->prepare($query2);
			$stmt2->execute();
			$res2 = $stmt2->get_result();
			while ($row2 = $res2->fetch_object()) {
			?>
				<option value="<?php echo $row2->course_cat; ?>"><?php echo $row2->course_cat; ?></option>
			<?php } ?>
		</select>
	</div>
</div>

<!-- Third Dropdown (working) -->
<div class="form-group">
	<label class="col-sm-2 control-label">Course</label>
	<div class="col-sm-8">
		<select name="course3" id="course3" class="form-control" required>
			<option value="">Select Course</option>
			<?php
			$query3 = "SELECT * FROM course";
			$stmt3 = $mysqli->prepare($query3);
			$stmt3->execute();
			$res3 = $stmt3->get_result();
			while ($row3 = $res3->fetch_object()) {
			?>
				<option value="<?php echo $row3->course_fn; ?>"><?php echo $row3->course_fn; ?></option>
			<?php } ?>
		</select>
	</div>
</div>