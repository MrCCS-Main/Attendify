
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">
    <link rel="stylesheet" href="assets/css/admin-style.css">
    <script src="https://kit.fontawesome.com/baad1239a1.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <div class="item">
                <div class="img-fill">
                    <img src="assets/images/cmubackground.png" alt="">
                    <div class="text-content">
                        <div class="container h-100 mt-5">
                            <div class="d-flex justify-content-center h-70">
                                <div class="user_card">
                                    <div class="d-flex justify-content-center">
                                        <div class="brand_logo_container">
                                            <img src="assets/images/logo.jfif" class="brand_logo">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center form_container">
                                        <form action="admin-login.php" method="POST">
                                            <h2 style="text-align:center;color: ">Admin</h2>
                                            <br>
                                            <div class="input-group mb-3">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" placeholder="Username" name="username" id="username" class="form-control input_user" required>
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                </div>
                                                <input type="password" name="password" id="password" placeholder="Password" class="form-control input_pass" required>
                                            </div>
                                            <div class="d-flex justify-content-center mt-5 login_container">
                                                <button type="submit" name="button" id="login" class="btn login_btn">Login</button>
                                            </div>
                                            <div class="d-flex justify-content-center forget_password">
                                                <p><a href="#" data-toggle="modal" data-target="#forgotPasswordModal" style="text-decoration: none;">Forgot Password</a></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                          <div class="modal fade" id="forgotPasswordModal" tabindex="-1" role="dialog" aria-labelledby="forgotPasswordModal" aria-hidden="true" data-backdrop = "false">
                              <div class="modal-dialog modal-dialog-centered modal-dialog-sm " role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="forgotPasswordModal">Forgot Password</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="send_code.php" method="POST">
                                      <div class="form-group">
                                        <label for="inputEmailAddress">We will send a code into your Email Address:</label>
                                        <input type="email" class="form-control" name="email" id="inputEmailAddress" placeholder="Enter your Email Address" required>
                                      </div>
                                      <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary mt-3" name="submit_email">Send Code</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>

        <div class="legal">
            <a class="text text--small text--border-right" href="#">Terms</a>
            <a class="text text--small text--border-right" href="#">Privacy</a>
            <a class="text text--small" href="#">Password help</a>
        </div>
    </div>
    <div class="fullscreen-bg"></div>
    <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src=""></script>


