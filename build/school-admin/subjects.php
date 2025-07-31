<?php 
require_once "includes/header.php"; 
require_once "../includes/db.php"; 

// ✅ Enable full PHP error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<h1>Add Course</h1>

<div class="row">
  <div class="col-md-12">
    <div class="col-md-6">
    
<?php
// ✅ Print POST data for debugging
// echo "<pre>POST DATA:\n";
// print_r($_POST);
// echo "</pre>";

// ✅ Handle form submission
if (isset($_POST['course_submit'])) {
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $short_description = mysqli_real_escape_string($conn, $_POST['short_description']);
  $course_overview = mysqli_real_escape_string($conn, $_POST['course_overview']);
  $instructor_name = mysqli_real_escape_string($conn, $_POST['instructor_name']);
  $instructor_position = mysqli_real_escape_string($conn, $_POST['instructor_position']);
  $hours_video = mysqli_real_escape_string($conn, $_POST['hours_video']);
  $articles = mysqli_real_escape_string($conn, $_POST['articles']);
  $resources = mysqli_real_escape_string($conn, $_POST['downloadable_resources']);
  $lifetime_access = mysqli_real_escape_string($conn, $_POST['full_lifetime_access']);
  $device_access = mysqli_real_escape_string($conn, $_POST['access_device']);
  $assignments = mysqli_real_escape_string($conn, $_POST['assignments']);
  $certificate = mysqli_real_escape_string($conn, $_POST['certificate']);
  $what_you_learn = mysqli_real_escape_string($conn, $_POST['what_you_learn']);
  $created_at = date('Y-m-d H:i:s');

  $query = "INSERT INTO courses 
    (title, short_description, course_overview, instructor_name, instructor_position,
     hours_video, articles, downloadable_resources, full_lifetime_access,
     access_device, assignments, certificate, what_you_learn, created_at)
    VALUES (
      '$title', '$short_description', '$course_overview', '$instructor_name', '$instructor_position',
      '$hours_video', '$articles', '$resources', '$lifetime_access',
      '$device_access', '$assignments', '$certificate', '$what_you_learn', '$created_at'
    )";

  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "<div class='alert alert-success'>Course added successfully.</div>";
  } else {
    echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    echo "<pre>SQL Query: $query</pre>"; // ✅ Show the query for debugging
  }
}
?>

      <form action="" method="post">
        <div class="form-group">
          <label>Course Title</label>
          <input type="text" name="title" class="form-control" >
        </div>

        <div class="form-group">
          <label>Short Description</label>
          <textarea name="short_description" class="form-control" ></textarea>
        </div>

        <div class="form-group">
          <label>Course Overview</label>
          <textarea name="course_overview" class="form-control" rows="5" ></textarea>
        </div>

        <div class="form-group">
          <label>Instructor Name</label>
          <input type="text" name="instructor_name" class="form-control" >
        </div>

        <div class="form-group">
          <label>Instructor Position</label>
          <input type="text" name="instructor_position" class="form-control" >
        </div>

        <div class="form-group">
          <label>Hours of Videos</label>
          <input type="text" name="hours_video" class="form-control" >
        </div>

        <div class="form-group">
          <label>Articles</label>
          <input type="text" name="articles" class="form-control" >
        </div>

        <div class="form-group">
          <label>Downloadable Resources</label>
          <input type="text" name="downloadable_resources" class="form-control" >
        </div>

        <div class="form-group">
          <label>Full Lifetime Access</label>
          <input type="text" name="full_lifetime_access" class="form-control" >
        </div>

        <div class="form-group">
          <label>Access On</label>
          <input type="text" name="access_device" class="form-control" >
        </div>

        <div class="form-group">
          <label>Assignments</label>
          <input type="text" name="assignments" class="form-control" >
        </div>

        <div class="form-group">
          <label>Certificate of Completion</label>
          <input type="text" name="certificate" class="form-control" >
        </div>

        <div class="form-group">
          <label>What You Will Learn (comma separated or line-by-line)</label>
          <textarea name="what_you_learn" class="form-control" rows="5" ></textarea>
        </div>

        <div class="form-group">
          <input type="submit" name="course_submit" value="Add Course" class="btn btn-info">
        </div>
      </form>
    </div>
  </div>
</div>

<hr>
<h2>All Courses</h2>
<div class="table-responsive">
  <table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Instructor</th>
        <th>Hours</th>
        <th>Articles</th>
        <th>Resources</th>
        <th>Access</th>
        <th>Device</th>
        <th>Assignments</th>
        <th>Certificate</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $fetch_query = "SELECT * FROM courses ORDER BY id DESC";
      $fetch_result = mysqli_query($conn, $fetch_query);

      if (mysqli_num_rows($fetch_result) > 0) {
        while ($course = mysqli_fetch_assoc($fetch_result)) {
          echo "<tr>";
          echo "<td>" . $course['id'] . "</td>";
          echo "<td>" . htmlspecialchars($course['title']) . "</td>";
          echo "<td>" . htmlspecialchars($course['instructor_name']) . "<br><small>" . htmlspecialchars($course['instructor_position']) . "</small></td>";
          echo "<td>" . $course['hours_video'] . "</td>";
          echo "<td>" . $course['articles'] . "</td>";
          echo "<td>" . $course['downloadable_resources'] . "</td>";
          echo "<td>" . $course['full_lifetime_access'] . "</td>";
          echo "<td>" . $course['access_device'] . "</td>";
          echo "<td>" . $course['assignments'] . "</td>";
          echo "<td>" . $course['certificate'] . "</td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='10' class='text-center'>No courses found.</td></tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<?php require_once "includes/footer.php"; ?>
