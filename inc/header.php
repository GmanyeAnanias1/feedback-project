
<?php include 'feedback/config/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


  <title>Leave Feedback</title>

  <style>
    .nav-link:hover {
      text-decoration: underline;
    color: blue !important; 
}




.text-justify {
    text-align: justify;
}

.fixed-width {
    max-width: 800px; 
    margin: auto;
    font-family: 'Times New Roman', Times, serif;
}


  </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
    <div class="container">
      <!-- <Logo images"> -->
   
      <a href="index.php">
    <img src="<?php echo 'images/legacy.jpg'; ?>" 
     style="width: 60px; height: auto; border-radius: 50%; margin-left: -15px;" 
     alt="No Image Available">
    </a>

      <a class="navbar-brand fw-bold text-warning" href="#">Legacy I.T Solutions</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon border-danger"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
         
        <li class="nav-item">
          <a class="nav-link text-dark hover:text-danger" href="homepage.php">Home</a>

          </li>
        <li class="nav-item">
          <a class="nav-link text-dark hover:text-danger" href="index.php">Add Feedback</a>

          </li>
          <li class="nav-item">
            <a class="nav-link text-dark hover:text-danger" href="feedback.php">Past Feedback</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-dark hover:text-danger" href="about.php">About</a>
          </li>
        </ul>
      </div>
  </div>
</nav>

<main>
  <div class="container d-flex flex-column align-items-center">