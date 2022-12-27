<?php 

if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $sub_title = $_POST['sub_title'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $sql = "INSERT INTO `contact`(`title`, `sub_title`, `name`, `email`, `phone`, `message`) 
  VALUES ('$title','$sub_title','$name','$email','$phone','$message')";

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
              <h3 class="page-title"> contact elements </h3>
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
                    <h4 class="card-title">Input Your About contact</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" action="" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Contact Section Title</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Input About Section Title" name="title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Sub title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input about Section Welcome" name="sub_title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input about Section Welcome" name="name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">E=mail</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input about Section Welcome" name="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Input about Section Welcome" name="phone">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">message</label>
                        <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Input About Section Details" name="message"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary me-2" name="submit">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->