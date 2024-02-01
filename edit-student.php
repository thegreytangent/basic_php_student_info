<?php 
   //create database connection

   $id = $_GET['id'];

   $conn = new mysqli("localhost", "dev", "devs", "student_db");
   $sql = "SELECT * FROM students WHERE id=".$id."";
   $result = $conn->query($sql); 

   $data = $result->fetch_assoc();
 

   
    




  
  ?>


<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Information</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <div class="container">

  <br>


  
    <form action="add-student.php" method="POST">
      <div class="row">

        <div class="col-lg-3"></div>
        <div class="col-lg-4">
        <h3>Update Information</h3>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Firstname:</label>
            <input value="<?php echo $data['firstname']; ?>" name="firstname" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Lastname:</label>
            <input value="<?php echo $data['lastname']; ?>" name="lastname" type="text" class="form-control" />
          </div>

          <div class="mb-3">
            <button type="submit" class="btn btn-info">Update Record</button>
          </div>

        </div>

      </div>
    </form>

  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>


</body>

</html>