<?php
	$teacher_data = showTeachersData();
	updateTeacherById();
?>
<?php 
	if(isset($_GET['message']) && $_GET['message'] == "success") {
		echo "<p class='bg-success'>Të dhënat e Arsimtarit u ndryshuan me sukses! <a href='teachers.php'>Shiko të gjithë Arsimtarët</a></p>";
	}
?>
<form action="" method="post" enctype="multipart/form-data">
	<div class="col-md-6">
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" name="teacher_first_name" class="form-control" value="<?php echo $teacher_data['teacher_first_name']; ?>">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="">Ahmad</label>
			<input type="text" name="teacher_last_name" class="form-control" value="<?php echo $teacher_data['teacher_last_name']; ?>">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Designation</label>
			<?php
				$t_id = $_GET['t_id'];
				$query = "SELECT teacher_designation FROM teachers WHERE id=$t_id";
				$result = mysqli_query($conn, $query);
				$row = mysqli_fetch_assoc($result);

				$teacherDesignation = $row['teacher_designation'];
			?>
			<select name="teacher_designation" class="form-control" id="">
				<option value="">Choose one of the options</option>
				<option value="Assistant Teacher" <?php echo $teacherDesignation == "Assistant Teacher"? "selected" : ""; ?>>Assistant</option>
				<option value="Senior Teacher" <?php echo $teacherDesignation == "Senior Teacher"? "selected" : ""; ?>>Senior Teacher</option>
				<option value="Junior Teacher" <?php echo $teacherDesignation == "Junior Teacher"? "selected" : ""; ?>>Intern</option>
				<option value="Headmaster" <?php echo $teacherDesignation == "Headmaster"? "selected" : ""; ?>>Director</option>
				<option value="Assistant Headmaster" <?php echo $teacherDesignation == "Assistant Headmaster"? "selected" : ""; ?>>Assistant Director</option>
				<option value="Sports Teacher" <?php echo $teacherDesignation == "Sports Teacher"? "selected" : ""; ?>>Sports Teacher</option>
				<option value="Proxy Teacher" <?php echo $teacherDesignation == "Proxy Teacher"? "selected" : ""; ?>>Representative Teacher</option>
			</select>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Gender</label>
			<?php
				$t_id = $_GET['t_id'];
				$query = "SELECT teacher_gender FROM teachers WHERE id=$t_id";
				$result = mysqli_query($conn, $query);
				$row = mysqli_fetch_assoc($result);

				$teacherGender = $row['teacher_gender'];
			?>
			<select name="teacher_gender" class="form-control" id="">
				<option value="">Choose the Gender</option>
				<option value="Male" <?php echo $teacherGender == "Male"? "selected" : ""; ?>>Male</option>
				<option value="Female" <?php echo $teacherGender == "Female"? "selected" : ""; ?>>Female</option>
			</select>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label for="">Email</label>
			<input type="email" name="teacher_email" class="form-control" value="<?php echo $teacher_data['teacher_email']; ?>" disabled="disabled">
		</div>
	</div>
	<div class="col-md-12">
		<img src="../assets/images/teacher-images/<?php echo $teacher_data['teacher_image']; ?>" width="100" height="70" alt="">
		<div class="form-group">
			<label for="">Photo</label>
			<input type="file" name="teacher_image" class="form-control">
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="">Qualifications</label>
			<textarea name="teacher_qualification" class="form-control" id="" cols="30" rows="6"><?php echo $teacher_data['teacher_qualification']; ?></textarea>
		</div>
		<div class="form-group">
			<label for="">Address</label>
			<textarea name="teacher_address" class="form-control" id="" cols="30" rows="6"><?php echo $teacher_data['teacher_address']; ?></textarea>
		</div>
		<div class="form-group">
			<label for="">Contact</label>
			<input type="text" name="teacher_contact" class="form-control" value="<?php echo $teacher_data['teacher_contact']; ?>">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" Value="Edit the Data" class="btn btn-info" name="update_teacher_btn">
		</div>
	</div>
</form>