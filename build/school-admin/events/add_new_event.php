<?php add_new_event(); ?>
<?php 
	if(isset($_GET['message']) && $_GET['message'] == "success") {
		echo "<p class='bg-success'>Eventi u shtua me sukses! <a href='events.php'>Shiko të gjitha Eventer</a></p>";
	}
?>
<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="">Title</label>
		<input type="text" name="event_title" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Description</label>
		<textarea name="event_desc" id="" cols="30" rows="10" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="">Photo</label>
		<input type="file" name="event_image" class="form-control">
	</div>
	<div class="form-group">
		<input type="submit" Value="Add Event" class="btn btn-info" name="add_event_btn">
	</div>
</form>