<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VotingChain</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <span class="span-logo ">
            <img src="img/logo/logo.jpg">
          </span>
          
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            

          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Blockchain Voting Platform</strong>
            </h1>
              <a class="btn btn-primary" data-target="#loginModal" data-toggle="modal" href="">Log in</a>
              <a class="btn btn-primary" data-target="#registerModal"data-toggle="modal" href="">Sign Up</a>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">VotingChain provides a secure and transparent voting platform for different organizations using Blockchain technology.</p>

            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="col-lg-12 mx-auto text-center">
          <h2 class="section-heading text-white">About Us</h2>
          <hr class="light my-4">
          <h3  class="mb-4 text-white">Bringing Voting Systems into the Digital Age</h3>
          <p class="text-faded mb-4">VotingChain is a Blockchain-based Voting Platform that enables delivery of a superior technical solution for a secure, transparent and private voting. It provides a transparent and distributed database that makes it hard to tamper and can be achieved without sacrificing the privacy of the voters.</p>
       </div>
      </div>
    </section>

     <section id="services">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading">At Your Service</h2>
                <hr class="my-4">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-sm-4 text-center mb-4">
                <div class="service-box mt-5 mx-auto">
                  <i class="fas fa-4x fa-lock text-primary mb-4 sr-icon-1"></i>
                  <h3 class="mb-3">Transparency and Security</h3>
                  <p class="text-muted mb-0">VotingChain provides a transparent and decentralized database in a way that it is easy for the others to see what actions are performed. It also keeps your personal private information safe and protected.</p>
                </div>
              </div>
              <div class="col-lg-4 col-sm-4 text-center mb-4">
                <div class="service-box mt-5 mx-auto">
                  <i class="fas fa-4x fa-poll text-primary mb-4 sr-icon-2"></i>
                  <h3 class="mb-3">Create Elecions and Polls</h3>
                  <p class="text-muted mb-0">VotingChain can create a personalize poll and election that anyone can vote on.</p>
                </div>
              </div>
              <div class="col-lg-4 col-sm-4 text-center mb-4">
                <div class="service-box mt-5 mx-auto">
                  <i class="fas fa-4x fa-tasks text-primary mb-4 sr-icon-3"></i>
                  <h3 class="mb-3">Automated Counts</h3>
                  <p class="text-muted mb-0">VotingChain can count the valid votes and provides the result. It keeps the record management organize and allows to access and manage the records easily.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
       
        <section class="bg-primary text-light" id="contact">
          <div class="container">
            <h2 class="section-header text-center mb-0">Contact Me</h2>
            <hr class="light my-4">            
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                      <label>Name</label>
                      <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                      <label>Email Address</label>
                      <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                      <label>Phone Number</label>
                      <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                      <label>Message</label>
                      <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <br>
                  <div id="success"></div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-light btn-xl" id="sendMessageButton">Send</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        
       <div class="modal fade login" id="loginModal">
            <div class="modal-dialog login animated">
                <div class="modal-content text-center">
                   <div class="modal-header">
                      <h4 class="modal-title">Login</h4> 
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">  
                      <div class="box">
                         <div class="content">
                            <div class="error"></div>
                            <div class="form loginBox">
                              <form method="post" action="/login" accept-charset="UTF-8">
                              <input id="email" class="form-control" type="text" placeholder="Email" name="email" required="">
                              <br>
                              <input id="password" class="form-control" type="password" placeholder="Password" name="password" required="">
                              <br>
                              <input class="btn btn-default btn-primary" type="button" value="Login" onclick="">
                              </form>
                            </div>
                         </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to 
                                 <a href="#registerModal">create an account</a>
                            ?</span>
                        </div>
                        
                    </div>        
                </div>
            </div>
        </div>

        <div class="modal fade register" id="registerModal">
          <div class="modal-dialog register animated">
            <div class="modal-content text-center">
             <div class="modal-header">
                <h4 class="modal-title">Register</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">  
                <div class="box">
                 <div class="content">
                    <div class="error"></div>
                    <div class="form registerBox">
                      <form method="post" action="/register" accept-charset="UTF-8">
                        <input id="firstname" class="form-control" type="text" placeholder="Firstname" name="firstname" maxlength="40" required=""><br>
                        <input id="middlename" class="form-control" type="text" placeholder="Middlename" name="middlename" maxlength="40" required=""><br>
                        <input id="lastname" class="form-control" type="text" placeholder="Lastname" name="lastname" max="40" required=""><br>
                        <label id="birthdate">Birthdate</label>
                        <input class="form-control" type="date" name="birthdate" required=""><br>
                        <label id="sex">Sex</label> <br>
                        <input type="radio" name="male" required="">Male
                        <input type="radio" name="female" required="">Female<br><br>
                        <input class="btn btn-default btn-primary" type="button" value="Register" onclick="">
                      </form>
                    </div>
                 </div>
                </div>
              </div> 
              <div class="modal-footer">
                <div class="forgot register-footer">
                 <span>Already have an account?</span>
                 <a href="javascript: showLoginForm();">Login</a>
                </div>       
              </div>
            </div>
          </div>
        </div>





        <footer class=" bg-dark copyright py-4 text-center text-white">
          <div class="container">
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-primary btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-primary btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-primary btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
            </ul>
            <small>Copyright &copy; VotingChain 2018. All rights reserved.</small>
          </div>
        </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>

