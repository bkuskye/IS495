<?php
  require('config/config.php');
  require('config/db.php');
  require('config/function_picture.php');
  
  // get name
  $id = mysqli_real_escape_string($conn, $_GET['name']);
  // get PET_ID
  $pet_id = mysqli_real_escape_string($conn, $_GET['pet_id']);

  // Submit picture of pet 
  if(isset($_POST['submit_picture'])){
    $name = $_FILES['img_dog']['name'];  
    $temp_name = $_FILES['img_dog']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){      
            $location = 'C:/xampp/htdocs/prodogmom/MyUploadImages/';
            $db_location = './MyUploadImages/';
            if(move_uploaded_file($temp_name, $location.$name)){
                //echo 'File uploaded successfully';
                //echo $location.$name;
                $target_path = $db_location.$name;
                correctImageOrientation($target_path);
                $queryInsertImgFile = "UPDATE tblpet SET img_path = '$target_path' WHERE name = '$id'";
                if(mysqli_query($conn, $queryInsertImgFile)){  
                } else {
                    echo 'Error: '.mysqli_error($conn);
                }
            }
        }       
    }  else {
        echo 'You should select a file to upload !!';
    }
  }

  

  // EDIT FIELDS



  //EDIT FIELD BREED
  if(isset($_POST['edit_breed'])){
    //get form data
    $breed = mysqli_real_escape_string($conn, $_POST['breed']);
    //QUERY UPDATE STATEMENT
    $query_update_breed = "UPDATE tblpet SET breed = '$breed' WHERE name = '$id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_breed)){
  } else {
      echo 'Error: '.mysqli_error($conn);
  }
  }
  //EDIT FIELD GENDER
  if(isset($_POST['edit_gender'])){
    //get form data
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    //QUERY UPDATE STATEMENT
    $query_update_gender = "UPDATE tblpet SET gender= '$gender' WHERE name = '$id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_gender)){
  } else {
      echo 'Error: '.mysqli_error($conn);
  }
  }
  //EDIT FIELD AGE
  if(isset($_POST['edit_age'])){
    //get form data
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    //QUERY UPDATE STATEMENT
    $query_update_age = "UPDATE tblpet SET age= '$age' WHERE name = '$id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_age)){
  } else {
      echo 'Error: '.mysqli_error($conn);
  }
  }
  //EDIT FIELD FIX STATUS
  if(isset($_POST['edit_fix_status'])){
    //get form data
    $fix_status = mysqli_real_escape_string($conn, $_POST['fix_status']);
    //QUERY UPDATE STATEMENT
    $query_update_fix_status = "UPDATE tblpet SET fix_status= '$fix_status' WHERE name = '$id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_fix_status)){
  } else {
      echo 'Error: '.mysqli_error($conn);
  }
  }
  //EDIT FIELD MICROCHIP STATUS
  if(isset($_POST['edit_microchip'])){
    //get form data
    $micro_chip_status = mysqli_real_escape_string($conn, $_POST['micro_chip_status']);
    //QUERY UPDATE STATEMENT
    $query_update_micro_chip_status = "UPDATE tblpet SET micro_chip_status= '$micro_chip_status' WHERE name = '$id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_micro_chip_status)){
  } else {
      echo 'Error: '.mysqli_error($conn);
  }
  }
  //EDIT FIELD MICROCHIP STATUS
  if(isset($_POST['edit_house_trained_status'])){
    //get form data
    $house_trained_status = mysqli_real_escape_string($conn, $_POST['house_trained_status']);
    //QUERY UPDATE STATEMENT
    $query_update_house_trained_status = "UPDATE tblpet SET house_trained_status= '$house_trained_status' WHERE name = '$id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_house_trained_status)){
  } else {
      echo 'Error: '.mysqli_error($conn);
  }
  }
  //EDIT FIELD PERSONALITY NOTES
  if(isset($_POST['edit_personality_notes'])){
    //get form data
    $personality_notes = mysqli_real_escape_string($conn, $_POST['personality']);
    //QUERY UPDATE STATEMENT
    $query_update_personality = "UPDATE tblcare SET personality_notes= '$personality_notes' WHERE pet_id = '$pet_id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_personality)){
    } else {
      echo 'Error: '.mysqli_error($conn);
    }
  }
  //EDIT FIELD KENNEL NOTES
  if(isset($_POST['edit_kennel_notes'])){
    //get form data
    $kennel_notes = mysqli_real_escape_string($conn, $_POST['kennel']);
    //QUERY UPDATE STATEMENT
    $query_update_kennel = "UPDATE tblcare SET kennel_notes= '$kennel_notes' WHERE pet_id = '$pet_id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_kennel)){
    } else {
      echo 'Error: '.mysqli_error($conn);
    }
  }
  //EDIT FIELD DAILY ROUTINE NOTES
  if(isset($_POST['edit_daily_routine_notes'])){
    //get form data
    $daily_routine_notes = mysqli_real_escape_string($conn, $_POST['daily_routine']);
    //QUERY UPDATE STATEMENT
    $query_update_daily_routine = "UPDATE tblcare SET daily_routine_notes= '$daily_routine_notes' WHERE pet_id = '$pet_id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_daily_routine)){
    } else {
      echo 'Error: '.mysqli_error($conn);
    }
  }
  //EDIT FIELD FEEDING INSTRUCTIONS
  if(isset($_POST['edit_feeding_instructions'])){
    //get form data
    $feeding_instructions = mysqli_real_escape_string($conn, $_POST['feeding_instructions']);
    //QUERY UPDATE STATEMENT
    $query_update_feeding_instructions = "UPDATE tblcare SET feeding_instructions= '$feeding_instructions' WHERE pet_id = '$pet_id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_feeding_instructions)){
    } else {
      echo 'Error: '.mysqli_error($conn);
    }
  }
  //EDIT FIELD MEDICAL NOTES
  if(isset($_POST['edit_medical_notes'])){
    //get form data
    $medical_notes = mysqli_real_escape_string($conn, $_POST['medical']);
    //QUERY UPDATE STATEMENT
    $query_update_medical = "UPDATE tblcare SET medical_notes= '$medical_notes' WHERE pet_id = '$pet_id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_medical)){
    } else {
      echo 'Error: '.mysqli_error($conn);
    }
  }
  //EDIT FIELD WALKING INSTRUCTIONS
  if(isset($_POST['edit_walking_instructions'])){
    //get form data
    $walking_instructions = mysqli_real_escape_string($conn, $_POST['walking_instructions']);
    //QUERY UPDATE STATEMENT
    $query_update_walking_instructions = "UPDATE tblcare SET walking_instructions= '$walking_instructions' WHERE pet_id = '$pet_id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_walking_instructions)){
    } else {
      echo 'Error: '.mysqli_error($conn);
    }
  }
  //EDIT FIELD LEASH LOCATION
  if(isset($_POST['edit_leash_location'])){
    //get form data
    $leash_location = mysqli_real_escape_string($conn, $_POST['leash_location']);
    //QUERY UPDATE STATEMENT
    $query_update_leash_location = "UPDATE tblcare SET leash_location= '$leash_location' WHERE pet_id = '$pet_id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_leash_location)){
    } else {
      echo 'Error: '.mysqli_error($conn);
    }
  }
  //EDIT FIELD POOP BAG LOCATION
  if(isset($_POST['edit_poop_bag_location'])){
    //get form data
    $poop_bag_location = mysqli_real_escape_string($conn, $_POST['poop_bag_location']);
    //QUERY UPDATE STATEMENT
    $query_update_poop_bag_location = "UPDATE tblcare SET poop_bag_location= '$poop_bag_location' WHERE pet_id = '$pet_id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_poop_bag_location)){
    } else {
      echo 'Error: '.mysqli_error($conn);
    }
  }
  //EDIT FIELD DOG TOWEL LOCATION
  if(isset($_POST['edit_dog_towel_location'])){
    //get form data
    $dog_towel_location = mysqli_real_escape_string($conn, $_POST['dog_towel_location']);
    //QUERY UPDATE STATEMENT
    $query_update_dog_towel_location = "UPDATE tblcare SET dog_towel_location= '$dog_towel_location' WHERE pet_id = '$pet_id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_dog_towel_location)){
    } else {
      echo 'Error: '.mysqli_error($conn);
    }
  }
  //EDIT FIELD COLLAR LOCATION
  if(isset($_POST['edit_collar_location'])){
    //get form data
    $collar_location = mysqli_real_escape_string($conn, $_POST['collar_location']);
    //QUERY UPDATE STATEMENT
    $query_update_collar_location = "UPDATE tblcare SET collar_location= '$collar_location' WHERE pet_id = '$pet_id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_collar_location)){
    } else {
      echo 'Error: '.mysqli_error($conn);
    }
  }
  //EDIT FIELD ADDITIONAL NOTES
  if(isset($_POST['edit_additional_notes'])){
    //get form data
    $additional_notes = mysqli_real_escape_string($conn, $_POST['additional_notes']);
    //QUERY UPDATE STATEMENT
    $query_update_additional_notes = "UPDATE tblcare SET additional_notes= '$additional_notes' WHERE pet_id = '$pet_id'";
    //SUBMIT QUERY AND REDIRECT TO PAGE
    if(mysqli_query($conn, $query_update_additional_notes)){
    } else {
      echo 'Error: '.mysqli_error($conn);
    }
  }




  //Get data from testpet

  //create query
  $query = "SELECT first_name, last_name, tblpet.pet_id, tblpet.name, tblpet.breed, tblpet.gender, tblpet.micro_chip_status, tblpet.house_trained_status, tblpet.age, tblpet.fix_status, tblpet.img_path, tblcare.additional_notes, tblcare.personality_notes, tblcare.kennel_notes, tblcare.walking_instructions, tblcare.leash_location, tblcare.poop_bag_location, tblcare.dog_towel_location, tblcare.collar_location, tblcare.feeding_instructions, tblcare.medical_notes, tblcare.daily_routine_notes, tblcare.pet_id
  FROM tblclient
  INNER JOIN tblpet
  ON tblclient.client_id = tblpet.client_id
  INNER JOIN tblcare
  ON tblpet.pet_id = tblcare.pet_id
  WHERE name = '$id'";
  // Get result
  $result = mysqli_query($conn, $query);
  // Fetch Data
  //$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $post = mysqli_fetch_assoc($result);
  //var_dump($posts);
  // Free Result
  mysqli_free_result($result);
  // Close connection
  mysqli_close($conn);
  //<?php foreach($posts as $post) :
   //<?php endforeach; 
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Data Dog Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  </head>
  <body>
    <header>
      <nav>
        <a href="<?php echo ROOT_URL; ?>">HOME</a>
        <a href="<?php echo LIST_URL; ?>">DOG LIST</a>
      </nav>
      <h1><?php echo $post['name']; ?></h1>
    </header>
    <main>
      <div class="container">
        <ul class="pet-img">
          <img src="<?php echo $post['img_path']; ?>" alt="Dog" width="280" height="500">
        </ul>
        <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" enctype="multipart/form-data">
          <input type="file" class="form-control-file" name="img_dog">
          <button type="submit" value="submit" name="submit_picture" class="btn btn-primary">Submit</button>
        </form>
      </div>  
    <div class="container">
      <div class="list-group" style="text-align-center">
      <li>Owner</li>
          <ul class="list-group-item"><?php echo $post['first_name']; ?>&nbsp;<?php echo $post['last_name']; ?></ul>
        <li>Breed</li>
          <ul class="list-group-item"><?php echo $post['breed']; ?></ul>
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_breed"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_breed">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Breed</h2>
                      <label>Breed:</label>
                      <input type="text" class="form-control" id="breed" name="breed">
                  </div>
                  <div class="modal-footer">
                    <button type="submit"class="btn btn-primary"  value="submit" name="edit_breed">Submit</button>      
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        <li>Gender</li>
          <ul class="list-group-item"><?php echo $post['gender']; ?></ul>
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_gender"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_gender">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Gender</h2>
                      <label>Gender:</label> <br>
                      <input type="radio" name="gender" value="Boy"> Boy <br>
                      <input type="radio" name="gender" value="Girl"> Girl
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" value="submit" name="edit_gender">Submit</button>       
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        <li>Age</li>
          <ul class="list-group-item"><?php echo $post['age']; ?></ul>
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_age"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_age">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Age</h2>
                      <label>Age:</label>
                      <input type="text" class="form-control" id="age" name="age">
                  </div>
                  <div class="modal-footer">
                    <button type="submit"class="btn btn-primary"  value="submit" name="edit_age">Submit</button>    
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        <li>Spayed/Neutered</li>
          <ul class="list-group-item"><?php echo $post['fix_status']; ?></ul>
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_fix_status"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_fix_status">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Fix Status</h2>
                      <label>Spayed/Neutered:</label> <br>
                      <input type="radio" name="fix_status" value="Yes"> Yes <br>
                      <input type="radio" name="fix_status" value="No"> No
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" value="submit" name="edit_fix_status">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        <li>Micro-chip</li>
          <ul class="list-group-item"><?php echo $post['micro_chip_status']; ?></ul>
          <!-- MODAL -->
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_microchip"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_microchip">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Micro-Chip Status</h2>
                      <label>Micro-Chip:</label> <br>
                      <input type="radio" name="micro_chip_status" value="Yes"> Yes <br>
                      <input type="radio" name="micro_chip_status" value="No"> No
                  </div>
                  <div class="modal-footer">
                    <button type="submit"class="btn btn-primary"  value="submit" name="edit_microchip">Submit</button>          
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <!-- END MODAL -->
        <li>House Trained</li>
          <ul class="list-group-item"><?php echo $post['house_trained_status']; ?></ul>
          <!-- MODAL -->
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_house_trained_status"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_house_trained_status">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit House Trained Status</h2>
                      <label>House-Trained:</label> <br>
                      <input type="radio" name="house_trained_status" value="Yes"> Yes <br>
                      <input type="radio" name="house_trained_status" value="No"> No
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" value="submit" name="edit_house_trained_status">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <!-- END MODAL -->
        <li>Personality Notes</li>
          <ul class="list-group-item"><?php echo $post['personality_notes']; ?></ul>
          <!-- MODAL -->
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_personality_notes"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_personality_notes">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Personality Notes</h2>
                      <label>Personality:</label> <br>
                      <textarea name="personality" cols="60" rows="5"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" value="submit" name="edit_personality_notes">Submit</button>                  
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <!-- END MODAL -->
        <li>Kennel Notes</li>
          <ul class="list-group-item"><?php echo $post['kennel_notes']; ?></ul>
          <!-- MODAL -->
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_kennel_notes"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_kennel_notes">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Kennel Notes</h2>
                      <label>Kennel Notes:</label> <br>
                      <textarea name="kennel" cols="60" rows="5"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" value="submit" name="edit_kennel_notes">Submit</button>             
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <!-- END MODAL -->
        <li>Daily Routine</li>
          <ul class="list-group-item"><?php echo $post['daily_routine_notes']; ?></ul>
          <!-- MODAL -->
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_daily_routine_notes"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_daily_routine_notes">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Daily Routine Notes</h2>
                      <label>Daily Routine:</label> <br>
                      <textarea name="daily_routine" cols="60" rows="5"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" value="submit" name="edit_daily_routine_notes">Submit</button>                   
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <!-- END MODAL -->
        <li>Feeding Instructions</li>
          <ul class="list-group-item"><?php echo $post['feeding_instructions']; ?></ul>
          <!-- MODAL -->
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_feeding_instructions"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_feeding_instructions">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Feeding Instructions</h2>
                      <label>Feeding Instructions:</label> <br>
                      <textarea name="feeding_instructions" cols="60" rows="5"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" value="submit" name="edit_feeding_instructions">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <!-- END MODAL -->
        <li>Medical Notes</li>
          <ul class="list-group-item"><?php echo $post['medical_notes']; ?></ul>
          <!-- MODAL -->
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_medical_notes"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_medical_notes">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Medical Notes</h2>
                      <label>Medical:</label> <br>
                      <textarea name="medical" cols="60" rows="5"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="submit"class="btn btn-primary"  value="submit" name="edit_medical_notes">Submit</button>              
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <!-- END MODAL -->
        <li>Walking Instructions</li>
          <ul class="list-group-item"><?php echo $post['walking_instructions']; ?></ul>
          <!-- MODAL -->
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_walking_instructions"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_walking_instructions">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Walking Instructions</h2>
                      <label>Walking Instructions:</label> <br>
                      <textarea name="walking_instructions" cols="60" rows="5"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" value="submit" name="edit_walking_instructions">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <!-- END MODAL -->
        <li>Leash Location</li>
          <ul class="list-group-item"><?php echo $post['leash_location']; ?></ul>
          <!-- MODAL -->
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_leash_location"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_leash_location">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Leash Location</h2>
                      <label>Leash Location:</label> <br>
                      <textarea name="leash_location" cols="60" rows="5"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" value="submit" name="edit_leash_location">Submit</button>               
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <!-- END MODAL -->
        <li>Poop Bag Location</li>
          <ul class="list-group-item"><?php echo $post['poop_bag_location']; ?></ul>
          <!-- MODAL -->
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_poop_bag_location"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_poop_bag_location">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Poop Bag Location</h2>
                      <label>Poop Bag Location:</label> <br>
                      <textarea name="poop_bag_location" cols="60" rows="5"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" value="submit" name="edit_poop_bag_location">Submit</button>                  
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <!-- END MODAL -->
        <li>Dog Towel Location</li>
          <ul class="list-group-item"><?php echo $post['dog_towel_location']; ?></ul>
          <!-- MODAL -->
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_dog_towel_location"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_dog_towel_location">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Dog Towel Location</h2>
                      <label>Dog Towel Location:</label> <br>
                      <textarea name="dog_towel_location" cols="60" rows="5"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" value="submit" name="edit_dog_towel_location">Submit</button>                   
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <!-- END MODAL -->
        <li>Collar Location</li>
          <ul class="list-group-item"><?php echo $post['collar_location']; ?></ul>
          <!-- MODAL -->
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_collar_location"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_collar_location">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Collar Location</h2>
                      <label>Collar Location:</label> <br>
                      <textarea name="collar_location" cols="60" rows="5"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" value="submit" name="edit_collar_location">Submit</button>                
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <!-- END MODAL -->
        <li>Additional Notes</li>
          <ul class="list-group-item"><?php echo $post['additional_notes']; ?></ul>
          <!-- MODAL -->
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_additional_notes"><i class="fas fa-edit"></i>&nbsp;Edit</button>
            <div class="modal" id="edit_additional_notes">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <form method="POST" action="/prodogmom/dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>" class="form-group">
                      <h2>Edit Additional Notes</h2>
                      <label>Additional Notes:</label> <br>
                      <textarea name="additional_notes" cols="60" rows="5"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" value="submit" name="edit_additional_notes">Submit</button>                 
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <!-- END MODAL -->
      </div>
    </div>
    </main>
  </body>
  </html>