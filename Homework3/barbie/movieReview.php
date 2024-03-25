<?php 
/*
Author: Ventura Abram
Homework 3
This is the review for the Barbie movie originally created for Homework 2.
It replaces the data from the original HTML file that had specifically to do with
the Barbie movie and generalizes it so that this can be used as a template for 
any other movie.
*/
    //Here, you should just import movie.php and use its classes and methods.
    include('../movie.php');
    
    //Make an Info object
    $movieInfo = new Info("info.txt");
    $movieOverview = new Overview("overview.txt");
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../movie.css">
        <title>Movie Review!</title>
    </head>
    <body>
        <div id="mainCanvas">
            <header>
                <img src="images/logo.png" class="logo" />
                <form action="movie.php" method="post">
                <input class="searchBox" type="text" placeholder="  Search State approved cinema..." name="searchBox"/>
                </form>
                <div id="linkGrid">
                    <button class="gridButton">MOVIES</button>
                    <button class="gridButton">SHOP</button>
                    <button class="gridButton">NEWS</button>
                    <button class="gridButton">SHOWTIMES</button>
                </div>
            </header>
            <nav>
                <h6 id="recommendLink"><a>RECOMMENDED FOR ALL</a></h6>
                <h5 class="otherNavLink"><a>Play Morality Trivia</a></h5>
                <h5 class="otherNavLink"><a>Watch 2023 MoC Movie Awards</a></h5>
                <h5 class="otherNavLink"><a>The People's reaction to State Over Truth 2</a></h5>
            </nav>
            <div id="mainContentBox">
                <aside>
                    <h2 id="sbHeading"><b>MOST POPULAR</b></h2>
                    <div id="popularMoviesGrid">
                        <div class="movieRating"><img src="images/singleSickleAndHammer.png" /><h3>5/5</h3></div>
                        <p class="popularMovieTitles">Nomenklatura</p>
                        <div class="movieRating"><img src="images/singleSickleAndHammer.png" /><h3>5/5</h3></div>
                        <p class="popularMovieTitles">State Over Truth 2</p>
                        <div class="movieRating"><img src="images/singleSickleAndHammer.png" /><h3>5/5</h3></div>
                        <p class="popularMovieTitles">Kaptain KGB</p>
                        <div class="movieRating"><img src="images/singleSickleAndHammer.png" /><h3>5/5</h3></div>
                        <p class="popularMovieTitles">Alienation</p>
                        <div class="movieRating"><img src="images/singleSickleAndHammer.png" /><h3>5/5</h3></div>
                        <p class="popularMovieTitles">Coolag!</p><div class="movieRating"><img src="images/singleSickleAndHammer.png" /><h3>5/5</h3></div>
                        <p class="popularMovieTitles">Breadline: A Love Story</p>
                    </div>
                </aside>
                <article>
                    <iframe src="https://www.youtube.com/embed/pBk4NYhWNMM" title="Barbie | Main Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen id="video"></iframe>
                    <div id="posterAndScore">
                        <img id="posterSmall" src="images/smallMoviePoster.jpg">
                        <article id="score">
                            <h2 id="currentMovieTitle"><?php echo $movieInfo->getTitle() ?></h2>
                            <p><span><?php echo $movieOverview->getInfoSansLabel(5)?></span>
                            <?php echo $movieInfo->getYear()?>
                            <?php echo $movieOverview->getInfoSansLabel(1)?>
                            <?php echo $movieOverview->getInfoSansLabel(7)?></p>
                            <div class="ratingsBox">
                                    <img src="images/sickleAndHammer.png" id="mainStateScoreImg"/>
                                    <h1>5/5</h1>
                                    <img src="images/voxPopuli.jpg" id="audienceScoreImg" />
                                    <h1>5/5</h1>
                            </div>
                            <div class="ratingsBoxInfo">
                                <p>State's Score</p>
                                <p id="peoplesScore">The People's Score</p>
                            </div>
                            <div id="note">
                                <p><u>THE STATE AND THE PEOPLE SHARE A SINGLE WILL</u></p>
                            </div>
                        </article>
                    </div>
                    <div class="sectionHeader"><h3>WHAT TO KNOW</h3></div>
                    <div class="consensusHead"><img src="images/singleSickleAndHammer.png" /><h3>State Consensus</h3></div>
                    <p class="review"><?php echo $movieOverview->getInfoSansLabel(8)?></p>
                    <div class="consensusHead"><img src="images/voxPopuli.jpg" /><h3>The People Say</h3></div>
                    <p class="review"><?php echo $movieOverview->getInfoSansLabel(8)?></p>
                    <div id="overview">
                        <p></p>
                    </div>
                    <div class="sectionHeader"><h4>MOVIE INFO</h4></div>
                    <p class="review">
                        <?php $movieOverview->printInfo() ?>
                    </p>
                    <div class="sectionHeader"><h3>YOU'RE REQUIRED TO ALSO LIKE</h3></div>
                    <div id="recommendationsGrid">
                        <div class="recThumbnailAndReview">
                            <img src="images/communist-posters-we-grow-under-the-sun.jpg" class="recPoster"/>
                            <div class="recReview">
                                <img src="images/singleSickleAndHammer.png" /><h3>5/5</h3>
                                <img src="images/voxPopuli.jpg" class="recPeoplesScore"/><h3>5/5</h3>
                            </div>
                            <p>Nomenklatura</p>
                        </div>
                        <div class="recThumbnailAndReview">
                            <img src="images/stateOverTruthPoster.jpg" class="recPoster"/>
                            <div class="recReview">
                                <img src="images/singleSickleAndHammer.png" /><h3>5/5</h3>
                                <img src="images/voxPopuli.jpg" class="recPeoplesScore"/><h3>5/5</h3>
                            </div>
                            <p>State Over Truth 2</p>
                        </div>
                        <div class="recThumbnailAndReview">
                            <img src="images/kaptainKGBPoster.jpeg" class="recPoster"/>
                            <div class="recReview">
                                <img src="images/singleSickleAndHammer.png" /><h3>5/5</h3>
                                <img src="images/voxPopuli.jpg" class="recPeoplesScore"/><h3>5/5</h3>
                            </div>
                            <p>Kaptain KGB</p>
                        </div>
                        <div class="recThumbnailAndReview">
                            <img src="images/alienationPoster.jpg" class="recPoster"/>
                            <div class="recReview">
                                <img src="images/singleSickleAndHammer.png" /><h3>5/5</h3>
                                <img src="images/voxPopuli.jpg" class="recPeoplesScore"/><h3>5/5</h3>
                            </div>
                            <p>Alienation</p>
                        </div>
                        <div class="recThumbnailAndReview">
                            <img src="images/coolagPoster.jpg" class="recPoster"/>
                            <div class="recReview">
                                <img src="images/singleSickleAndHammer.png" /><h3>5/5</h3>
                                <img src="images/voxPopuli.jpg" class="recPeoplesScore"/><h3>5/5</h3>
                            </div>
                            <p>Coolag</p>
                        </div>
                    </div>
                </article>
            </div>
            <footer>
                <div id="footerLinkGrid">
                    <div class="flgCol">
                        <p>Help</p>
                        <p>About Ministry of Cinema</p>
                        <p>What's the State's Score?</p>
                        <p>Feedback</p>
                    </div>
                    <div class="flgCol">
                        <p>Submit to Critic</p>
                        <p>State Approval</p>
                        <p>Proselytize</p>
                        <p>MOC Careers</p>
                    </div>
                    <div class="flgCol">
                        <div id="newsletter">
                            <img src="images/singleSickleAndHammer.png" />
                            <h2>JOIN THE NEWSLETTER</h2>
                        </div>
                        <p>Stay educated on the latest cinematic triumphs</p>
                        <button class="subscribeButton">SUBSCRIBE</button>
                    </div>
                </div>
                <div id="footerRowLinks">
                    <p id="leftLink">State Terms and Polices</p>
                    <p id="centerLink">State Policies Against Privacy</p>
                    <p id="rightLink">Accessibility</p>
                </div>
                <p id="fakeCopyright">Ventura Abram only came up with the words</p>
            </footer>
        </div>
    </body>
</html>