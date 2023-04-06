<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <style>
     body, html{
      background: url(img/tec2.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      height: 100
     }
     .nav-link {
        font-size: larger;
        background-color: rgb(255, 220, 178);
        color: black;
        transition: 500ms;
        border-radius: 10px;
        margin-left: 10px;

}
.nav-link:hover{
        font-size: x-large;
        border-radius: 10px;

}
#ABC{
  background-color: rgb(255, 220, 178);
  margin-left: 10px;


}
#ABC a{
  
        text-decoration: none;
        transition: 500ms;
        font-size: larger;
        background-color: rgb(255, 220, 178);
        color: black;
        border-radius: 10px;

}
#ABC a:hover{
  
  font-size: x-large;
        border-radius: 10px;
}
    </style>
</head>
<body>
  <header>
    <center style="font-size: 40px;">RISHTON ACADEMY PRIMARY SCHOOL</center>
  </header>
  <div>
    
    <ul class="nav  justify-content-center pt-5 pb-5  navbar">
      
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="home.html">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Students</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="students.php">Students</a></li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="ViewStudents.php">View Students </a>
        </li>
          
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="UpdateStudents.php"> Update Students</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="DeleteStudents.php">Delete Students</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Parents</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="parents.php">Parents</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="viewParents.php">View Parents</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          </li>
          <li><a class="dropdown-item" href="UpdateParents.php">Update Parents</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="DeleteParents.php">Delete Parents</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Teachers</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="teacher.php">Teachers</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="ViewTeachers.php">View Teachers</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="UpdateTeachers.php">Update Teachers</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="DeleteTeachers.php">Delete Teachers</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Classes</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="classes.php">Classes</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="ViewClasses.php">View Classes</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="UpdateClasses.php">Update Classes</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="Deleteclasses.php">Delete Classes</a></li>
        </ul>
      </li>


      <li>
        <button class="btn" id="ABC" type="submit"><a href="index.php">LOGOUT</a></button>
      </li>





      
  </div>

<section class="container my-2 bg-dark w-50 text-light p-2 studentsform">
 <form class="row g-3 p-3" action="teacher.php" method="POST">
     <div class="col-md-6">
         <label for="TeachersFName" class="form-label">First name</label>
         <input type="text" class="form-control" name="TeachersFName">
       </div>
       <div class="col-md-6">
         <label for="TeachersLName" class="form-label">Last name</label>
         <input type="text" class="form-control" name="TeachersLName">
       </div>
     <div class="col-12">
       <label for="TeachersSalary" class="form-label"> Annual Salary</label>
       <input type="text" class="form-control" name="TeachersSalary">
     </div>
     <div class="col-12">
      <label for="TeachersPhone" class="form-label">Phone Number</label>
      <input type="text" class="form-control" name="TeachersPhone" placeholder="+44">
    </div>
    <div class="col-12">
      <label for="TeachersBack" class="form-label">Background Check</label>
      <input type="text" class="form-control" name="TeachersBack" placeholder="Y OR N">
    </div>
     <div class="col-12">
       <label for="TeachersAddress" class="form-label">Address</label>
       <input type="text" class="form-control" name="TeachersAddress" placeholder="1234 Main St">
    </div>
    <div class="col-12">
       <label for="ClassID" class="form-label">ClassID</label>
       <input type="text" class="form-control" name="ClassID" placeholder="1,2,3,4,5,6,7">
    </div>
    <input type="submit" class="btn btn-warning" name="submit">
     </div>
   </form>
</section>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$link = mysqli_connect("localhost", "root", "", "school");
// Check connection
if($link === false){
    die("Connection failed: ");
}

if(isset($_POST['submit'])){
    $tFname = $_POST['TeachersFName'];
    $tLname = $_POST['TeachersLName'];
    $tsalary = $_POST['TeachersSalary'];
    $tphone = $_POST['TeachersPhone'];
    $tback = $_POST['TeachersBack'];
    $taddress = $_POST['TeachersAddress'];
    $tClassID = $_POST['ClassID'];

    $sql = "INSERT INTO Teachers (Teachers_fname, Teachers_lname, Teachers_salary,  Teachers_phonenumber, Teachers_backgroundcheck, Teachers_address , ClassesID) VALUES ('$tFname','$tLname','$tsalary', '$tphone', '$tback', '$taddress', '$tClassID')";
    if(mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo " Error adding record";
    }
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
</body>
</html>