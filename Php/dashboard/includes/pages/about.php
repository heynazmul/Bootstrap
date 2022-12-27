 <?php 

  if (isset($_POST['submit'])) {
    $about_section_title = $_POST['about_section_title'];
    $about_section_welcome = $_POST['about_section_welcome'];
    $about_section_details = $_POST['about_section_details'];

    $sql = "INSERT INTO `about`(`about_section_title`, `about_section_welcome`, `about_section_details`) VALUES ('$about_section_title','$about_section_welcome','$about_section_details')";

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
              <h3 class="page-title"> About elements </h3>
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
                    <h4 class="card-title">Input Your About Details</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" action="" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">About Section Title</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Input About Section Title" name="about_section_title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">About Section Welcome</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input about Section Welcome" name="about_section_welcome">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">About Section Details</label>
                        <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Input About Section Details" name="about_section_details"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary me-2" name="submit">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->