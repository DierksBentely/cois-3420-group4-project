<?PHP
    $title = "Movie Database";
    include('header.php');
    // For testing the menu functionality
    $_SESSION['userid'] = true;

    // For accessing DB
    include('includes/library.php');
    $pdo = & dbconnect();
    $movies = $pdo->query("select * from movies")->fetchAll();
?>
<div class="container">
    <h1>Movies</h1>
    <div class="movie-grid">
        <?PHP
            function displayMovie($movie){
                echo("<div class='movie'>");
                    echo("<div class='movie-img'>");
                        echo("<img src='images/" . $movie['id'] . "' alt='" . $movie['title'] . " image' />");
                    echo("</div>");
                    echo("<div class='movie-btns'>");
                        echo("<a href='" . $movie['id'] . "/editvid.php'><i class='fas fa-pencil-alt'></i></a>");
                        echo("<a href='" . $movie['id'] . "/deletevid.php'><i class='fas fa-trash-alt'></i></a>");
                        echo("<a href='" . $movie['id'] . "/displaydetails.php'><i class='fas fa-info-circle'></i></a>");
                    echo("</div>");
                echo("</div>");
            }

            foreach($movies as $movie){
                displayMovie($movie);
            }
        ?>
    </div>
</div>
</body>
</html>