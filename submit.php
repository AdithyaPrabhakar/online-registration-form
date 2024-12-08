<?php
header('Content-Type: text/html; charset=utf-8'); // Set content type for clarity

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'], $_POST['phone'])) {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);

  $response = "<h3>Thank you for registering!</h3>
               <p><strong>Name:</strong> $name</p>
               <p><strong>Email:</strong> $email</p>
               <p><strong>Phone:</strong> $phone</p>";

  echo $response;
} else {
  echo "<p style='color:red;'>No data was received from the form. Please try again.</p>";
}
?>
