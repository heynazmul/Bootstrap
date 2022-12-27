<?php 

if (isset($_POST['submit'])) {
  $skill_1 = $_POST['skill_1'];
  $skill_2 = $_POST['skill_2'];
  $skill_3 = $_POST['skill_3'];
  $skill_4 = $_POST['skill_4'];
  $skill_5 = $_POST['skill_5'];
  $skill_6 = $_POST['skill_6'];


  $sql = "INSERT INTO `skills`(`skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `skill_6`)
   VALUES ('$skill_1','$skill_2','$skill_3','$skill_4','$skill_5','$skill_6')";

  $result = $conn->query($sql);
  if ($result == TRUE) {

  }else{
    echo "Error:". $sql . "<br>". $conn->error;
  } 
  $conn->close();
}
?>
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Skills elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Input Your Skills</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" action="" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">skill_1</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Input About Section Title" name="skill_1">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">skill_2</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input about Section Welcome" name="skill_2">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">skill_3</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input about Section Welcome" name="skill_3">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">skill_4</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input about Section Welcome" name="skill_4">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">skill_5</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input about Section Welcome" name="skill_5">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">skill_6</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input about Section Welcome" name="skill_6">
                      </div>
                      <button type="submit" class="btn btn-primary me-2" name="submit">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->