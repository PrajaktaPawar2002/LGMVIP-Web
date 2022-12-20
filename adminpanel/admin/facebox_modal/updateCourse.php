
<?php 
  include("../../../conn.php");
  $id = $_GET['id'];
 
  $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$id' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<fieldset style="width:543px;" >
	<legend>&nbsp;Edit Course Name ( <?php echo strtoupper($selCourse['cou_name']); ?> )</i></legend>
  <div class="col-md-12 mt-4">
<form method="post" id="updateCourseFrm">
     <div class="form-group">
      <legend>Course Name</legend>
    <input type="hidden" name="course_id" value="<?php echo $id; ?>">
    <input type="" name="newCourseName" class="form-control" required="" value="<?php echo $selCourse['cou_name']; ?>" >
  </div>
  <div class="form-group" align="center">
  <!-- <button type="button" class="btn btn-outline-primary">Primary</button> -->
    <button type="submit" class="btn btn-outline-primary">Edit</button>
  </div>
</form>
  </div>
</fieldset>


<!-- <i class="facebox-header"><i class="edit large icon"></i> -->




