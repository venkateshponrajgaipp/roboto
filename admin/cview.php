<?php include ('doc/db.php');
session_start();
if($_SESSION['login'] == ""){
    header("Location: login.php");
	die();

    echo $_SESSION['login'];
}
if($_GET['id']){
    $contact = $_GET['id'];
$sql = "SELECT * FROM contact_us where id = $contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Roboto360 Admin Dashboard</title>
</head>

<body>
    
        
        <?php include('doc/topnav.php');  ?> 
        
        <?php include('doc/leftsidebar.php');  ?> 
        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Roboto360 Dashboard</h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Contact US View</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Name:</label>
                                <input type="text" class="form-control" value="<?php echo $row['name'];?>" disabled>
                            </div>
                            <div class="col-md-4">
                                <label>Email:</label>
                                <input type="text" class="form-control" value="<?php echo $row['email'];?>" disabled>
                            </div>
                            <div class="col-md-4">
                                <label>Phone No:</label>
                                <input type="text" class="form-control" value="<?php echo $row['contact_no'];?>" disabled>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-4">
                            <label>Country:</label>
                                <input type="text" class="form-control" value="<?php echo $row['country'];?>" disabled>
                            </div>
                            <div class="col-md-8">
                                <label>Message:</label>
                                <input type="text" class="form-control" value="<?php echo $row['message'];?>" disabled>
                            </div>
                            
                        </div><br>
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-2">
                                <button class="form-control btn-danger" onclick="location.href = 'contact.php';">BACK</button>
                            </div>
                            <div class="col-md-5"></div>
                        </div>  

<?php 

  }
} 
$conn->close();

}
?>

                    </div>
            </div>
        </div>
    
        <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>

    
</body>
 
</html>