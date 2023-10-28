

</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Homepage design with Bootstrap and Animate css</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">    

</head>
<body>

    <header>
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="nemplox.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="popular.php">Popular</a></li>
                        <li><a href="toprated.php">Top Rated</a></li>
                        <li><a href="upcoming.php">Up coming</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="banner" style="background-image: url(https://c4.wallpaperflare.com/wallpaper/610/7/687/dragon-ball-z-dragon-ball-krillin-piccolo-wallpaper-preview.jpg);"></div>
                    <div class="carousel-caption">
                        <h2 class="animated bounceInRight" style="animation-delay: 1s">TMdb <span>Anime</span></h2>
                        <h3 class="animated bounceInLeft" style="animation-delay: 2s">Most Rating Anime</h3>
                        <p class="animated bounceInRight" style="animation-delay: 3s"><a href="toprated.php">Top Rated</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="banner" style="background-image: url(https://c4.wallpaperflare.com/wallpaper/158/756/965/dragon-ball-dragon-ball-super-black-goku-wallpaper-preview.jpg);"></div>
                    <div class="carousel-caption">
                        <h2 class="animated slideInDown" style="animation-delay: 1s">TMdb <span>Anime</span></h2>
                        <h3 class="animated fadeInUp" style="animation-delay: 2s">Most Rating Anime</h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="popular.php">Popular</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="banner" style="background-image: url(https://c4.wallpaperflare.com/wallpaper/764/638/489/neon-genesis-evangelion-mech-eva-unit-01-vector-wallpaper-preview.jpg);"></div>
                    <div class="carousel-caption">
                        <h2 class="animated zoomIn" style="animation-delay: 1s">TMdb <span>Anime</span></h2>
                        <h3 class="animated fadeInLeft" style="animation-delay: 2s">Most Rating Anime</h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="upcoming.php">upcoming</a></p>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </header>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
