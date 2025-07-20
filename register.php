<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Popup</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>
  <!-- Registration Modal -->
  <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content registration-card">
        <div class="modal-header">
          <h5 class="modal-title" id="registrationModalLabel">lets know each other</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="registration-form" action="#" method="post">
            <div class="form-group">
              <label for="fullname">Full Name</label>
              <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
            </div>

            <div class="form-group">
              <label for="dob">Date of Birth</label>
              <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
              <label for="experience">Years of Experience</label>
              <input type="number" id="experience" name="experience" min="0" placeholder="e.g. 5" required>
            </div>

            <div class="form-group">
              <label for="interest">Area of Interest</label>
              <select id="interest" name="interest" required>
                <option value="" disabled selected>Select an option</option>
                <option value="technology">Technology</option>
                <option value="business">Business</option>
                <option value="cybersecurity">Cybersecurity</option>
                <option value="cloud">Cloud Solutions</option>
              </select>
            </div>

            <button type="submit" class="btn-register">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Auto Show Modal on Page Load -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var myModal = new bootstrap.Modal(document.getElementById('registrationModal'), {
        keyboard: false,
        backdrop: 'static'
      });
      myModal.show();
    });
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!--css styling-->

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
    }

    .registration-card {
      background: #fff;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      transform-style: preserve-3d;
      transform: perspective(1000px);
      transition: transform 0.3s ease-in-out;
    }

    .registration-card:hover {
      transform: perspective(1000px) rotateX(2deg) rotateY(-2deg);
    }

    .registration-form .form-group {
      margin-bottom: 15px;
    }

    .registration-form label {
      font-weight: 600;
      color: #333;
    }

    .registration-form input,
    .registration-form select {
      width: 100%;
      padding: 12px 15px;
      border-radius: 10px;
      border: 1px solid #ccc;
      transition: all 0.3s ease;
      box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
    }

    .registration-form input:focus,
    .registration-form select:focus {
      border-color: #3a86ff;
      outline: none;
      box-shadow: 0 0 8px rgba(58,134,255,0.3);
    }

    .btn-register {
      display: inline-block;
      background: #3a86ff;
      color: #fff;
      padding: 12px 25px;
      border-radius: 8px;
      font-weight: bold;
      border: none;
      transition: all 0.3s ease;
      width: 100%;
      margin-top: 10px;
      box-shadow: 0 8px 20px rgba(58,134,255,0.2);
    }

    .btn-register:hover {
      background: #265fbe;
      box-shadow: 0 12px 25px rgba(38,95,190,0.3);
      transform: scale(1.02);
    }
  </style>