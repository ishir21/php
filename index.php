<?php include 'send.php';?>

<!DOCTYPE html>
<html>
  <head>
    <title>Table Booking Form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="form-container">
      <h1>Table Booking Form</h1>
      <form action="" method="post">
        <div class="form-group">
          <label for="date">Date:</label>
          <input type="date" id="date" name="date" required />
        </div>
        <div class="form-group">
          <label for="time">Time:</label>
          <input type="time" id="time" name="time" required />
        </div>
        <div class="form-group">
          <label for="guests">Number of Guests:</label>
          <input type="number" id="guests" name="guests" min="1" max="10" required />
        </div>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required />
        </div>
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </body>
</html>
