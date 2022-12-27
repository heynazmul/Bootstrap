<?php 

if (isset($_POST['submit'])) {
  $service_title = $_POST['service_title'];
  $service_sub_title = $_POST['service_sub_title'];
  $service_1 = $_POST['service_1'];
  $service_2 = $_POST['service_2'];
  $service_3 = $_POST['service_3'];
  $service_4 = $_POST['service_4'];
  $service_5 = $_POST['service_5'];
  $service_6 = $_POST['service_6'];
  
  $description_1 = $_POST['description_1'];
  $description_2 = $_POST['description_2'];
  $description_3 = $_POST['description_3'];
  $description_4 = $_POST['description_4'];
  $description_5 = $_POST['description_5'];
  $description_6 = $_POST['description_6'];

  $sql = "INSERT INTO `service`(`service_title`, `service_sub_title`, `service_1`, `service_2`, `service_3`, `service_4`, `service_5`, `service_6`,`description_1`, `description_2`, `description_3`, `description_4`, `description_5`, `description_6`)
  VALUES ('$service_title','$service_sub_title','$service_1','$service_2','$service_3','$service_4','$service_5','$service_6',$description_1','$description_2','$description_3','$description_4','$description_5','$description_6')";

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
              <h3 class="page-title">Service elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Service elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Input Your Service</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Service Title</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Input About Section Title" name="service_title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Service sub title</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Input About Section Title" name="service_sub_title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">service_1</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Input About Section Title" name="service_1">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">description_1</label>
                        <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Insert your Slider Promo" name="description_1"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">service_2</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input about Section Welcome" name="service_2">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">description_2</label>
                        <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Insert your Slider Promo" name="description_2"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">service_3</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input about Section Welcome" name="service_3">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">description_3</label>
                        <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Insert your Slider Promo" name="description_3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">service_4</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input about Section Welcome" name="service_4">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">description_4</label>
                        <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Insert your Slider Promo" name="description_4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">service_5</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input about Section Welcome" name="service_5">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">description_5</label>
                        <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Insert your Slider Promo" name="description_5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">service_6</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input about Section Welcome" name="service_6">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">description_6</label>
                        <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Insert your Slider Promo" name="description_6"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary me-2" name="submit">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->