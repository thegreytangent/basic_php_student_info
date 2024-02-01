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
    <form action="add-student.php" method="POST">
      <div class="row">

        <div class="col-lg-3"></div>
        <div class="col-lg-4">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Firstname:</label>
            <input name="firstname" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Lastname:</label>
            <input name="lastname" type="text" class="form-control" />
          </div>

          <div class="mb-3">
            <button type="submit" class="btn btn-success">Add Record</button>
          </div>

        </div>

      </div>
    </form>


    <?php
    //create database connection
    $conn = new mysqli("localhost", "dev", "devs", "student_db");

    //construct sql state
    $sql = 'SELECT * FROM students';

    $result = $conn->query($sql);
    ?>

    <div class="row">
      <table class="table table-border">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
              <td><?php echo $row['id'];  ?></td>
              <td><?php echo $row['firstname'];  ?></td>
              <td><?php echo $row['lastname'];  ?></td>
              <td>
                <button class="btn btn-sm btn-info">Update</button>
                <button class="btn btn-sm btn-danger">Delete</button>
              </td>
            </tr>

          <?php endwhile; ?>
        </tbody>
      </table>
    </div>


  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>


</body>

</html>