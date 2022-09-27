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
    <title>Admin Login </title>
  
</head>
<body>
<header>
<div class="container mt-4">
<?php include('message.php'); ?>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4>Admin Login 

<a href="../welcome.php" class="btn btn-dark float-end">BACK</a></h4></div>
<div class="card-body">
<table class="table table-bordered table-striped" >
<thead>
<tr>
<th>ID</th>
<th>Name </th>
<th>EMAIL</th>
<th>password</th>
<th>MOBILE</th>
<th>DateofBirth</th>
<th>date last login</th>
</tr>
</thead>
<tbody>
<?php 
    $query = "SELECT * FROM users";
    $query_run = mysqli_query($conn, $query);
    
if(mysqli_num_rows($query_run) > 0) {
   foreach($query_run as $Admin ){
?>
<tr>
<td><?= $Admin['id']; ?></td>
<td><?= $Admin['username']; ?></td>
<td><?= $Admin['email']; ?></td>
<td><?= $Admin['password']; ?></td>
<td><?= $Admin['mobile']; ?></td>
<td><?= $Admin['DateofBirth']; ?></td>
<td><?= $Admin['DateofBirth']; ?></td>

<td>
<a href="update.php?id=<?= $Admin['id']; ?>" class="btn btn-success btn-sm">Edit</a>
<form action="php.php" method="POST" class="d-inline">
<button type="submit" name="delete" value="<?=$Admin['id'];?>" class="btn btn-danger btn-sm">Delete</button>
</form>
</td>
</tr>
<?php
}
}else
{
    echo "<h5> No Record Found </h5>";
}
?>                                    
 </tbody>                             
 </table>                               
 </div>                           
 </div>                       
 </div>
 </div>                   
 </div>               
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html> 