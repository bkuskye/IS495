<?php
  require('config/db.php');

  // get ID
  $id = mysqli_real_escape_string($conn, $_GET['petname']);

  //create query
  $query = "SELECT * FROM testpet WHERE petname = '$id'";

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
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <h1><?php echo $post['petname']; ?></h1>
    </header>
    <main>
      <li>PetID</li>
        <ul><?php echo $post['petID']; ?></ul>
      <li>Name</li>
        <ul><?php echo $post['petname']; ?></ul>
      <li>Fixed</li>
        <ul><?php echo $post['fixstatus']; ?></ul>
      <li>Age</li>
        <ul><?php echo $post['age']; ?></ul>
      <li>Chip Status</li>
        <ul><?php echo $post['chipstatus']; ?></ul>
      <li>Owner</li>
        <ul><?php echo $post['ClientID']; ?></ul>
    </main>
  </body>
  </html>