<?php
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <title>Welcome</title>
</head>
<body>
<header>
        <nav class="navbar">
            <h3 class="logo">emad hashash</h3>
            <input type="checkbox"  id="click">
            <label for="click" class="menubar">
                <span class="fa fa-bars"></span>
            </label>
                <ul>
                    <a href="./admin/admin.php"><li>admin users</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                    
                </ul>
        </nav>
                
    </header>
    <!-- end header/ navbar -->
    <main >
           <!-- start -->
        <section class="cent"> 
            <div class="content">
              <h1><?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?></h1>
            </div>
          </section>


























    
</body>
</html>
