<!DOCTYPE html>
<html>

<head>
    <title> LOGIN</title>
    <link rel="icon" href="pictures/logo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="styles.css">


    <style>
  body{
    /* background-image: url(img/image.jpg);
    background-repeat: no-repeat;
    background-size: cover; */

}
.back{
    opacity: 80%;
    z-index: -1;
    position: absolute;
    left: 20;
    top: 0;
    width: 100%;
}
.login{
    margin-left: 240px;
}
.form-label{
    font-size: larger;
}
#ABC{
    margin-left: 20%;
    margin-top: 10px;
    width: 100px;
}
</style>


</head>

<body>
<div>
    <img src="img/rs1.jpg" alt="" class="back">
</div>
<?php
$link = mysqli_connect("localhost", "root", "", "school");
if ($link === false) {
    die("Connection failed: ");
}
?>
<div class="login"><section class="container my-2 bg-dark w-50 text-light p-2 loginform">
 <form class="row g-3 p-3" action="index.php" method="POST">
     <div class="col-12">
         <label for="username" class="form-label">USERNAME</label>
         <input type="text" class="form-control" name="username">
       </div>
       <div class="col-12">
         <label for="password" class="form-label">PASSWORD</label>
         <input type="password" class="form-control" name="password" >
       </div>
       <input type="submit" class="btn btn-danger" id="ABC" name="submit">
   </form>
</section></div>
    




<?php
if (isset($_POST['submit'])) {

    $sql = mysqli_query($link, "SELECT Username, Password FROM Login");
    $row = $sql->fetch_assoc();

    $username = $row['Username'];
    $password = $row['Password'];

    if($username == $_POST['username'] && $password == $_POST['password'])
    {
        echo "<script type='text/javascript'>window.top.location='home.html';</script>"; 
        exit;
    }
    else{
        echo '<script type="text/javascript">
      window.onload = function () { alert("ENTERED USERNAME OR PASSWORD IS INCORRECT"); } 
      </script>';
    }

}

?>    

</body>

</html>