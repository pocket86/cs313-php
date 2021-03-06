<html>

<head>
    <meta charset="utf-8">
    <title>Welcome Page</title>
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
</head>

<body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    <!-- DB ACCESS -->
        <?php
        // default Heroku Postgres configuration URL
        $dbUrl = getenv('DATABASE_URL');

        if (empty($dbUrl)) {
         // example localhost configuration URL with postgres username and a database called cs313db
         $dbUrl = "postgres://hdghgzswtmkufg:zG8qDA8ZElYXvqeGbhvYJwhMMs@ec2-54-235-155-172.compute-1.amazonaws.com:5432/d5pf61j61flag6";
        }

        $dbopts = parse_url($dbUrl);

        $dbHost = $dbopts["host"]; 
        $dbPort = $dbopts["port"]; 
        $dbUser = $dbopts["user"]; 
        $dbPassword = $dbopts["pass"];
        $dbName = ltrim($dbopts["path"],'/');

       if ($_SERVER['REQUEST_METHOD'] == "POST") {
           
            try{
                
                $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
                
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                $q = "SELECT * FROM users WHERE email='$email'";
                
                foreach ($db->query($q) as $row) {
                    
                    if ($password == $row['password']) {
                        $user = $row['first_name'];
                    } else {
                        header("Location: login.php");
                        exit;
                    }
                }
            } catch (PDOException $ex) {
                  print "<p>error: $ex->getMessage() </p>\n\n";
                  die();
            }
       }
       ?>
        <!-- NAVIGATION -->
        <nav>
            <div class="nav-wrapper blue lighten-4"> <a href="hello.html" class="brand-logo">Weston Clark</a>
                <ul id="nav-mobile" class="right">
                    <li class="navLink"><a class="navLinkText" href="../hello.html">Home</a></li>
                    <li class="navLink"><a class="navLinkText" href="../assignments.html">Assignments</a></li>
                </ul>
            </div>
        </nav>
    <?php
        echo '<h2 class="headerText">Welcome '. $user . '!</h2>';
    ?>
        
    
</body>

</html>