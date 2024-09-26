<?php
session_start();
if(!isset($_SESSION["user_id"]))
  header("Location:../index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="robots" content="noindex">
  <meta http-equiv="pragma" content="no-cache" />
  <meta http-equiv="expires" content="-1" />
    <title>
    <?=ucfirst(basename($_SERVER['PHP_SELF'], ".php"));?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <!-- <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
  <!-- <link type="text/css" rel="stylesheet" href="http://jqueryte.com/css/jquery-te.css" charset="utf-8"> -->
  <link href="../assets/css/main.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <!-- sidebar -->
    <?php
      include "sidebar.php";
    ?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Thêm lớp / học sinh</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <?php include "navitem.php"; ?>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content" style="min-height: auto;">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Thêm lớp mới</h5>
              </div>
              <div class="card-body">
                  <input type="hidden" name="general_settings">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Tên lớp</label>
                        <input type="text" class="form-control" id = "class_name" name="site_name" placeholder="nhập tên lớp"/>
                        <span id = "class_name_error" class="error text-danger"></span>
                      </div>
                      <div class="form-group">
                        <label>Số bắt đầu</label>
                        <input type="text" class="form-control" id = "starting_roll_number" name="site_name" placeholder="Nhập Số bắt đầu"/>
                        <span id = "starting_roll_error" class="error text-danger"></span>
                      </div>
                      <div class="form-group">
                        <label>Số kết thúc</label>
                        <input type="text" class="form-control" id = "ending_roll_number" name="site_name" placeholder="Nhập số kết thúc"/>
                        <span id = "ending_roll_error" class="error text-danger"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row center-element">
                    <div class="col-md-8">
                      <div class="form-group"><br/>
                        <button class="btn btn-primary btn-block btn-round" onclick = 'createNewClass()'>TẠO MỚI</button>
                      </div>
                    </div>
                  </div>
                <!-- </form> -->
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Thêm học sinh mới</h5>
              </div>
              <div class="card-body">
                  <input type="hidden" name="general_settings">
                  <div class="row">
                    <div class="col-md-12">
                        <select id="options" name="class_option" class="btn-round" required style="width:100%;">
                            <option selected="true" value="" disabled="disabled">Chọn lớp</option>      
                        </select>
                        <span id = "extra_roll_class_error" class="error text-danger"></span>

                        <div class="form-group" style="margin-top:10px;">
                            <label>Số danh sách học sinh / id người dùng</label>
                            <input type="text" class="form-control" id="extra_roll_number" name="site_name" placeholder="Nhập mã số học sinh"/>
                            <span id = "extra_roll_error" class="error text-danger"></span>
                        </div>
                    </div>
                  </div>
                  <div class="row center-element">
                    <div class="col-md-8">
                      <div class="form-group"><br/>
                        <button class="btn btn-primary btn-block" onclick = 'addStudent()'>Thêm</button>
                      </div>
                    </div>
                  </div>
                <!-- </form> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer -->
      <?php
        include "footer.php";
      ?>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript"></script>
  <!-- <script src="http://jqueryte.com/js/jquery-te-1.4.0.min.js"></script> -->

  <script>

    $( document ).ready(function() {
      $.ajax({
						type: 'POST',
						url: 'get_classes.php',
						success: function (response) {
              var opts = $.parseJSON(response);
                $.each(opts, function(i, d) {
                    $('#options').append('<option value="' + d + '">' + d + '</option>');
                });
						}
					});
    });

    function createNewClass(){
      var someValidationFailed = false;

      if(!$('#class_name').val()){
          $('#class_name_error').html("Vui lòng nhập tên lớp");
          someValidationFailed = true;
      }

      if(!$('#starting_roll_number').val()){
        $('#starting_roll_error').html("Vui lòng nhập mã học sinh bắt đầu");
        someValidationFailed = true;
      }

      if($('#starting_roll_number').val() && !$.isNumeric($('#starting_roll_number').val())){
        $('#starting_roll_error').html("Vui lòng nhập số cuộn Bắt đầu hợp lệ");
        someValidationFailed = true;
      }

      if(!$('#ending_roll_number').val()){
        $('#ending_roll_error').html("Vui lòng nhập mã học sinh kết thúc");
        someValidationFailed = true;
      }

      if($('#ending_roll_number').val() && !$.isNumeric($('#ending_roll_number').val())){
        $('#ending_roll_error').html("Vui lòng nhập số cuộn kết thúc hợp lệ");
        someValidationFailed = true;
      }
      
      if(!someValidationFailed){
        
      $.ajax({
          type: 'POST',
          url: 'add_new_class.php',
          data: {
            'class_name': $('#class_name').val(),
            'starting_roll_number': $('#starting_roll_number').val(),
            'ending_roll_number': $('#ending_roll_number').val()
          },
          success: function (response) {
            alert(response);
          }
        });
      }
}

    function addStudent() {
      var someValidationFailed = false;

      if(!$('#options').val()) {
        $('#extra_roll_class_error').html("Vui lòng nhập mã học sinh");
        someValidationFailed = true;
      }

      if(!$('#extra_roll_number').val()){
        $('#extra_roll_error').html("Vui lòng nhập mã học sinh hợp lệ");
        someValidationFailed = true;
      }

      if($('#extra_roll_number').val() && !$.isNumeric($('#extra_roll_number').val())){
        $('#extra_roll_error').html("Vui lòng nhập mã học sinh hợp lệ");
        someValidationFailed = true;
      }
    
    if(!someValidationFailed){
      $.ajax({
        type: 'POST',
        url: 'add_extra_student.php',
        data: {
          'class_name': $('#options').val(),
          'extra_roll_number': $('#extra_roll_number').val(),
        },
        success: function (response) {
          alert(response);
          location.reload();
        }
      }); 
    } 
    }

  </script>
</body>
</html>