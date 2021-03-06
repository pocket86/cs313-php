<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sign Up Page</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular&subset=Latin,Cyrillic">
    <link rel="stylesheet" type="text/css" href="login.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    
    <script>
    
        function newUser(){
            
            
            
        }
    
    
    </script>
    
    
    
</head>

<body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    
    
    
    <!-- NAVIGATION -->
    <nav>
        <div class="nav-wrapper blue lighten-4"> <a href="hello.html" class="brand-logo">Weston Clark</a>
            <ul id="nav-mobile" class="right">
                <li class="navLink"><a class="navLinkText" href="../hello.html">Home</a></li>
                <li class="navLink"><a class="navLinkText" href="../assignments.html">Assignments</a></li>
            </ul>
        </div>
    </nav>
    
    
    
    <!-- SIGN UP -->
    <div class="col s12 m6">
        <div class="card  blue-grey ">
            <div class="card-content white-text"> <span class="card-title">Create An Account</span>
                <div class="row">
                    <form class="col s12" action="register.php" method="post">
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="First Name" name="first_name" type="text" class="validate"> </div>
                            <div class="input-field col s6">
                                <input placeholder="Last Name" name="last_name" type="text" class="validate"> </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Email" name="email" type="email" class="validate"> </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Password" name="password" type="password" class="validate"> </div>
                        </div>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit<i class="material-icons right">send</i> </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="alreadyMember">
            Already have an account? Click here to sign in!
            <a href="register.php">SIGN IN!</a>
        </div>
</body>

</html>