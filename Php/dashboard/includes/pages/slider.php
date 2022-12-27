 <?php 

  if (isset($_POST['submit'])) {
    $slider_title = $_POST['slider_title'];
    $slider_info = $_POST['slider_info'];
    $slider_promo = $_POST['slider_promo'];
    //Query for Image
    $slider_image_name =$_FILES['slider_image']['name'];
    $slider_image_tem_name =$_FILES['slider_image']['tmp_name'];
    $slider_image_directory = "includes/upload/".$slider_image_name;
    move_uploaded_file($slider_image_tem_name, $slider_image_directory);

    $sql = "INSERT INTO `slider`(`slider_title`, `slider_info`, `slider_promo`, `slider_image`) VALUES ('$slider_title','$slider_info','$slider_promo','$slider_image_name')";

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
              <h3 class="page-title"> Slider elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Slider elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Input Your Slider Details</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Slider title</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="slider_title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Slider Information</label>
                        <textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Input your slider Information" name="slider_info"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Slider Promo</label>
                        <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Insert your Slider Promo" name="slider_promo"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Slider Image</label>
                        <input type="file" class="form-control" id="exampleInputUsername1"  name="slider_image">
                      </div>
                      <button type="submit" class="btn btn-primary me-2" name="submit">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->