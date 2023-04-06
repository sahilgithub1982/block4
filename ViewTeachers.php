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
    body,
    html {
      background: url(img/tec4.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      height: 100%;
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
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$link = mysqli_connect("localhost", "root", "", "school");
// Check connection
if($link === false){
    die("Connection failed: ");
}
?>
<center><h3>All Teachers</h3></center>
	
    <table>
    
        <tr>
            <th width="150px">Teachers ID<br><hr></th>
            <th width="250px">TFName<br><hr></th>
            <th width="250px">TLName<br><hr></th>
            <th width="250px">TPHONE<br><hr></th>
            <th width="250px">TSALARY<br><hr></th>
            <th width="250px">TBACK<br><hr></th>
            <th width="250px">TADDRESS<br><hr></th>
            <th width="250px">SGender<br><hr></th>
            <th width="250px">TClassID<br><hr></th>
            
        </tr>
            

<?php
$sql = mysqli_query($link, "SELECT * FROM Teachers");
while ($row = $sql->fetch_assoc()){
echo "
<tr>
    <th>{$row['TeacherID']}</th>
    <th>{$row['Teachers_fname']}</th>
    <th>{$row['Teachers_lname']}</th>
    <th>{$row['Teachers_phonenumber']}</th>
    <th>{$row['Teachers_salary']}</th>
    <th>{$row['Teachers_backgroundcheck']}</th>
    <th>{$row['Teachers_address']}</th>
    <th>{$row['ClassesID']}</th>
</tr>";
}
?>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>