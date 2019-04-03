<?php
  require('config/config.php');
  require('config/db.php');
  
  if(isset($_POST['submit'])){
    
    //get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $fixed = mysqli_real_escape_string($conn, $_POST['fixstatus']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $chip_status = mysqli_real_escape_string($conn, $_POST['chipstatus']);
    $client_first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
    $client_last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);

    $query_client = "INSERT INTO clients(Firstname, LastName, State) VALUES ('$client_first_name', '$client_last_name', '$state')";
    
    $query_dog = "INSERT INTO testpet(petname, fixstatus, age, chipstatus, img_path, ClientID) VALUES('$name', '$fixed', '$age', '$chip_status', NULL, (SELECT clientID FROM clients WHERE Firstname = '$client_first_name' and Lastname = '$client_last_name'))";

    if(mysqli_query($conn, $query_client)){
        echo 'successful';
    } else {
        echo 'Error: '.mysqli_error($conn);
    }
    if(mysqli_query($conn, $query_dog)){
      echo 'successful';

    //TESTING REDIRECT
    //redirect to page
    header("Location: http://localhost/prodogmom/dog.php?petname=".$name);

    } else {
        echo 'Error: '.mysqli_error($conn);
    }
  }
  
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Data Dog Page</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Add New</h1>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?> ">
            <a href="<?php echo ROOT_URL; ?> ">Back</a>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Fixed?</label> <br>
                <input type="radio" name="fixstatus" value="yes" class="form-check-input" checked> Yes <br> 
                <input type="radio" name="fixstatus" value="no" class="form-check-input"> No
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="text" name="age" class="form-control">
            </div>
            <div class="form-group">
                <label>Chip Status</label><br>
                <input type="radio" name="chipstatus"
                value="1" class="form-check-input"> 1 <br>
                <input type="radio" name="chipstatus" value="2" class="form-check-input"> 2
            </div>
            <div class="form-group">
                <label>Client First Name</label>
                <input type="text" name="firstname" class="form-control">
            </div>
            <div class="form-group">
                <label>Client Last Name</label>
                <input type="text" name="lastname" class="form-control">
            </div>
            <div class="form-group">
                <label>State</label>
                <input type="text" name="state" class="form-control">
            </div>
            <input type="submit" name="submit" value="submit" class="btn-submit">
        </form>
    </div>
  </body>
  </html>