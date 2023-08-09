<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .nav-item{
      font-size: 16px;
    }

    
  </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin_page.php">Home</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="admin_products.php">products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_orders.php">orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_users.php">users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_contacts.php">messages</a>
        </li>
        
       
      </ul>
     
      

   <p  class="nav-item">username : <span class="btn btn-success nav-item"><?php echo $_SESSION['admin_name']; ?></span></p>
   <p   class="nav-item">email : <span  class="btn btn-success  nav-item"><?php echo $_SESSION['admin_email']; ?></span></p>

   <a href="logout.php" class="delete-btn   btn btn-danger   ms-2">logout</a>
      <div> <a href="login.php"  class="btn btn-primary ms-3">login</a>  <a href="register.php"   class="btn btn-primary">register</a></div>
   
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>