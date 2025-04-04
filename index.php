<?php include 'inc/header.php'; ?>


<?php
// Set variables to empty values
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

// Form submit
if (isset($_POST['submit'])) {
  // Validate name
  if (empty($_POST['name'])) {
    $nameErr = 'Name is required';
  } else {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  // Validate email
  if (empty($_POST['email'])) {
    $emailErr = 'Email is required';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }

  // Validate body
  if (empty($_POST['body'])) {
    $bodyErr = 'Body is required';
  } else {
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
    // add to database
    $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";
    if (mysqli_query($conn, $sql)) {
      // success
      echo 'Feedback submitted successfully';
      header('Location: feedback.php');
      exit(); // Ensure no further code is executed after redirection
    } else {
      // error
      echo 'Error: ' . mysqli_error($conn);
    }
  }
}
?>

<img src="<?php echo 'images/legacy.jpg'; ?>" 
     style="width: 70px; height: auto; border-radius: 50%;" 
     alt="No Image Available">


    <h2>Feedback</h2>
    <?php echo isset($name) ? $name : ''; ?>
    <p class="lead text-center">Leave feedback for Legacy I.T Solutions</p>

    <form method="POST" action="<?php echo htmlspecialchars(
      $_SERVER['PHP_SELF']
    ); ?>" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo !$nameErr ?:
          'is-invalid'; ?>" id="name" name="name" placeholder="Enter your name" value="<?php echo $name; ?>">
        <div id="validationServerFeedback" class="invalid-feedback">
          Please provide a valid name.
        </div>
      </div>
      
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo !$emailErr ?:
          'is-invalid'; ?>" id="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo !$bodyErr ?:
          'is-invalid'; ?>" id="body" name="body" placeholder="Enter your feedback"><?php echo $body; ?></textarea>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>

<?php include 'inc/footer.php'; ?>
