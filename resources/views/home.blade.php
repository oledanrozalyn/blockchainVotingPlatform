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
    <link rel="shortcut icon" type="image/png" href="img/logo/favicon.png" />

    <script>
    	function showPass(){
    		var password = document.getElementById('password');
    		if(password.type === "password"){
    			password.type = 'text';
    		}else{
    			password.type = 'password';
    		}
    	}
    </script>

    <script>
      // If user clicks anywhere outside of the modal, Modal will close

      var modal = document.getElementById('modal-wrapper');
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
    </script>
  </head>

  <body id="page-top">
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
              <strong>Blockchain Voting Platform</strong> <br>
               <hr class="primary my-4">
            </h1>
            <div class="col-lg-8 mx-auto">
              <button class="btn btn-primary" onclick="document.getElementById('login-modal-wrapper').style.display='block'" style="width:200px;">Login</button>
              <button class="btn btn-primary" onclick="document.getElementById('signup-modal-wrapper').style.display='block'" style="width:200px;">Register</button>
            </div>
            <br> <br>
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
            <h2 class="section-heading">At Your Service</h2><br>
            <hr class="primary my-4">
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
              <p class="text-muted mb-0">VotingChain counts the valid votes and provides the result. It keeps the record management organize and allows to access and manage the records easily.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

<!--  Contact  -->

    <section class="bg-primary text-light" id="contact">
      <div class="container">
        {!! Form::open(['url' => '/contactsubmit']) !!}
          <h2 class="section-header text-center mb-0">Contact Me</h2>
          <hr class="light my-4">
          <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label>Name</label>
                <input class="form-control" required="required" name="name" type="text" id="name" placeholder="Enter name">
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
          </div>

          <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label>Message</label>
                <textarea class="form-control" required="required" name="message" rows="5" type="textarea" id="name" placeholder="Enter message"></textarea>
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}  
          </div>

     
            <div>
              {{Form::submit('Submit', ['class' => 'btn btn-light'])}}
            </div>
        {!! Form::close() !!}
      </div>
    </section>

<!--  Log In  -->
    
    <div id="login-modal-wrapper" class="modal">
     <div class="modal-dialog login animated">
      {!! Form::open(['url' => '/loginsubmit']) !!}
        <div class="modal-content animate">
          <div class="modal-header">
            <h1 class="text-center">Login</h1>
            <span onclick="document.getElementById('login-modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
          </div>
          <div class="modal-body" >
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
              <label>Username</label>
                <input class="form-control" required="required" name="username" type="text" id="username" placeholder="Enter username">
                {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
              <label>Password</label>
                <input class="form-control" required="required" name="password" type="password" id="password" placeholder="Enter password">
                {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
            </div>
            <input type="checkbox"  id="check" onclick="showPass()">Show password <br><br>
            <div class="text-center">
              {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            </div>
          </div>
        </div>
       {!! Form::close() !!}
      </div> 
    </div>

<!--  Register  -->

    <div id="signup-modal-wrapper" class="modal">
      <div class="modal-dialog signup animated">
        {!! Form::open(['url' => '/registersubmit']) !!}      
          <div class="modal-content animate">
            <div class="modal-header">
              <h1 style="text-align:center">Register</h1>
              <span onclick="document.getElementById('signup-modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span> 
            </div>
            <div class="modal-body">
              <div class="form-group {{ $errors->has('firstname') ? 'has-error' : ''}}">
                <label>First name</label>
                  <input class="form-control" required="required" name="firstname" type="text" id="firstname" placeholder="Enter firstname">
                  {!! $errors->first('firstname', '<p class="help-block">:message</p>') !!}
              </div>
              <div class="form-group {{ $errors->has('lastname') ? 'has-error' : ''}}">
                <label>Last name</label>
                  <input class="form-control" required="required" name="lastname" type="text" id="lastname" placeholder="Enter lastname">
                  {!! $errors->first('lastname', '<p class="help-block">:message</p>') !!}
              </div>
              <div class="form-group {{ $errors->has('sex') ? 'has-error' : ''}}">
                <label id="sex">Sex</label> <br>
                  <input type="radio" name="sex" value="male" required> Male
                  <input type="radio" name="sex" value="female" required> Female
                  {!! $errors->first('sex', '<p class="help-block">:message</p>') !!}
              </div>
              <div class="form-group {{ $errors->has('birthdate') ? 'has-error' : ''}}">
                <label id="birthdate">Birthdate</label>
                <input class="form-control" type="date" name="birthdate" required>
                {!! $errors->first('birthdate', '<p class="help-block">:message</p>') !!}
              </div>
              <div class="text-center">
                {{Form::submit('Register', ['class' => 'btn btn-primary'])}}
              </div>
            </div>
          </div>
         {!! Form::close() !!}
      </div>
    </div>


  <footer class=" bg-dark copyright py-4 text-center text-white">
    <div class="container">
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

