<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    body {
      background-color: #e9ecef;
    }
    .login-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      margin-top: 80px;
    }
    .form-control, .input-group-text {
      border-radius: 30px;
    }
    .btn-primary {
      background-color: #4a69bd;
      border-radius: 30px;
      border-color: #4a69bd;
    }
    .btn-primary:hover {
      background-color: #3b5998;
      border-color: #3b5998;
    }
    a {
      color: #4a69bd;
      text-decoration: none;
    }
    a:hover {
      color: #3b5998;
    }
    .input-group-text {
      background-color: #f0f2f5;
      border: none;
    }
  </style>
</head>
<body>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="login-container">
          <?php flash_alert(); ?>
          <h3 class="text-center mb-4">Login</h3>
          <form action="<?= site_url('/login') ?>" method="post">
            <!-- Username Field -->
            <div class="form-group mb-3">
              <label for="username" class="form-label">Username</label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-user"></i>
                </span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
              </div>
            </div>

            <!-- Password Field -->
            <div class="form-group mb-3">
              <label for="password" class="form-label">Password</label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-lock"></i>
                </span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
              </div>
            </div>

            <!-- Login Button -->
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>

          <!-- "Don't have an account yet?" message -->
          <div class="text-center mt-3">
            <p>Don't have an account yet? 
              <a href="<?= site_url('/register') ?>">Register here</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
