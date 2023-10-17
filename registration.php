<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <title> Registration form</Form></title>
  </head>
  <body>
    <div class="menu-bar">
      <h1 class="logo">Indian<span>Shark</span></h1>
  <nav>
    
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="viewcontent.php">View content</a></li>
    </div>

    <div class="hero">
      &nbsp;
     
      <div class="container">
        <h1 class="form-title">Registration</h1>
         <form action="upload.php" method="POST" id = "registration_id">
          <div class="main-user-info">
            <div class="user-input-box">
              <label for="fullName">Full Name</label>
               <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="user-input-box">
              <label for="username">Username</label>
              <input type="text" id="username" name="username" required>
            </div>
            <div class="user-input-box">
              <label for="email">Email</label>
              <input type="text" id="email" name="email" required>
            </div>
            <div class="user-input-box">
              <label for="phoneNumber">Phone Number</label>
              <input type="text" id="phoneNumber" name="phoneNumber" required>
            </div>
            <div class="user-input-box">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" required>
            
            </div>
          </div>
          <div class="gender-details-box">
            <span class="gender-title">Gender</span>
            <div class="gender-category">
              <input type="radio" name="gender" id="male" required>
              <label for="male">Male</label>
              <input type="radio" name="gender" id="female" required>
              <label for="female">Female</label>
              <input type="radio" name="gender" id="other"  required>
              <label for="other">Other</label>
            </div>
          </div>
          <div class="form-submit-btn">
            <button type="submit" value="Register">
          </div>
        </form>
      </div>
  <footer>
      <p>&copy; For Testing Purpose And I Am Doing Hard work For this Site.</p>
  </footer>
</body>
</html>