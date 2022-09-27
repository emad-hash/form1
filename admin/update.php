<?php
session_start();
require '../config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>users Edit</title>
</head>
<body>
    <div class="container mt-5">
    <?php include('message.php'); ?>
    <div class="row">
    <div class="col-md-12">
    <div class="card">
    <div class="card-header">
        <h4>users Edit 
        <a href="admin.php" class="btn btn-danger float-end">BACK</a></h4>
    </div>
    <div class="card-body">
<?php
 if(isset($_GET['id']))
                        {
 $Admin_id = mysqli_real_escape_string($conn, $_GET['id']);
 $query = "SELECT * FROM users WHERE id='$Admin_id' ";
$query_run = mysqli_query($conn, $query);

if(mysqli_num_rows($query_run) > 0)
{
$Admin = mysqli_fetch_array($query_run);
?>
<form action="./php.php" method="POST">
<input type="text" name="username" value="<?=$Admin['username'];?>">
<div class="mb-3">
<input type="email" name="email" value="<?=$Admin['email'];?>" class="form-control">
</div>
<div class="mb-3">
<input type="password" name="password" value="<?=$Admin['password'];?>" class="form-control">
</div>
<div class="mb-3">
<input type="number" name="mobile" value="<?=$Admin['mobile'];?>" class="form-control">
</div>
<div class="mb-3">
<input type="text" name="DateofBirth" value="<?=$Admin['DateofBirth'];?>" class="form-control">
</div>
<div class="mb-3">
<button type="submit" name="update" class="btn btn-primary">Update</button>
</div>
</form>
<?php
} else
{
    echo "<h4>No Such Id Found</h4>";
}
}                          
?>                      
 </div>                       
 </div>                  
 </div>               
 </div>           
 </div>       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>