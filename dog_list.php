<?php
  require('config/config.php');
  require('config/db.php');
  //create query
  $query = "SELECT * FROM tblpet";
  // Get result
  $result = mysqli_query($conn, $query);
  // Fetch Data
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //$post = mysqli_fetch_assoc($result);
  //var_dump($posts);
  // Free Result
  mysqli_free_result($result);
  // Close connection
  mysqli_close($conn);
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dog List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <h1>Dogs</h1>
    </header>
    <main>
      <?php foreach($posts as $post) : ?>
        <ul><a href="dog.php?name=<?php echo $post['name']; ?>&pet_id=<?php echo $post['pet_id']; ?>"><?php echo $post['name']; ?></a></ul>        
      <?php endforeach; ?>
    </main>
  </body>
  </html>