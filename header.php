<head>
    <title>
        <?PHP echo($title) ?>
    </title>
    <link rel="stylesheet" href="css/basestyle.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <nav id="page-navigation">
        <?PHP
            session_start();

            // Menu to be displayed to authed users
            function echoNav(){
                // Need to decide what to put in nav
                echo("<a href='index.php'><li>Home</li></a>");
                echo("<a href='search.php'><li>Search</li></a>");
                echo("<a href='account.php'><li>Account</li></a>");
                echo("<a href='logout.php'><li>Logout</li></a>");
            }

            // Menu to be displayed to unauthed users
            function echoLogInMenu(){
                echo("<li><a href='login.php'>Login</a></li>");
                echo("<li><a href='register.php'>Register</a></li>");
            }

            // To display to the users where they are on the site
            function echoBreadcrumbs($title){
                // Need to add logic to change this dynamically
                // Maybe use $title?
                echo("<span>You are on " . $title . "</span>");
            }

            // Logic controlling which menu to display based
            // on whether or not the user is logged in
            echoBreadcrumbs($title);
            echo("<ul>");
            if(isset($_SESSION['userid'])){
                echoNav();
            }else{
                echoLogInMenu();
            }
            echo("</ul>");
        ?>
    </nav>