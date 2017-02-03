<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <title>Square Mile Relay</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,900" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link  rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/7d72b6aac4.js"></script>
        <!-- Main CSS -->
        <link rel="stylesheet" href="library/css/style.css">
    </head>
    <body>
        <header class="header">

            <div class="logo">
                <a href="/index.php">
                    <?php include 'includes/components/logo.php'; ?>
                </a>
            </div>

            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul class="nav">
                <li><a href="/partners.php">Partners</a></li>
                <li><a href="/charities.php">Charities</a></li>
                <li><a href="/companies.php">Companies</a></li>
                <li><a href="/news.php">News</a></li>
                <li class="has-child">
                    <a href="#">Race Locations</a>
                    <ul class="locations">
                        <div class="locations-wrapper">
                            <li><a href="/single-city.php">
                                <img src="../library/images/cities/dubai.png">
                                <div class="location">
                                    Dubai
                                    <span class="time">15 Mar 2017</span>
                                </div>
                            </a></li>
                            <li><a href="/single-city.php">
                                <img src="../library/images/cities/hongKong.png">
                                <div class="location">
                                    Hong Kong
                                    <span class="time">15 Mar 2017</span>
                                </div>
                            </a></li>
                            <li><a href="/single-city.php">
                                <img src="../library/images/cities/sanFrancisco.png">
                                <div class="location">
                                    San Francisco
                                    <span class="time">15 Mar 2017</span>
                                </div>
                            </a></li>
                            <li><a href="/single-city.php">
                                <img src="../library/images/cities/sydney.png">
                                <div class="location">
                                    Sydney
                                    <span class="time">15 Mar 2017</span>
                                </div>
                            </a></li>
                            <li><a href="/single-city.php">
                                <img src="../library/images/cities/newYork.png">
                                <div class="location">
                                    New York
                                </div>
                            </a></li>
                            <li><a href="/single-city.php">
                                <img src="../library/images/cities/london.png">
                                <div class="location">
                                    London
                                </div>
                            </a></li>
                            <li><a href="/single-city.php">
                                <img src="../library/images/cities/singapore.png">
                                <div class="location">
                                    Singapore
                                </div>
                            </a></li>
                            <li><a href="/single-city.php">
                                <img src="../library/images/cities/shanghai.png">
                                <div class="location">
                                    Shanghai
                                </div>
                            </a></li>
                            <li><a href="/single-city.php">
                                <img src="../library/images/cities/saoPaulo.png">
                                <div class="location">
                                    Sao Paulo
                                </div>
                            </a></li>
                            <li><a href="/single-city.php">
                                <img src="../library/images/cities/tokyo.png">
                                <div class="location">
                                    Tokyo
                                </div>
                            </a></li>
                        </div>
                    </ul>
                </li>
                <li><a href="/results.php">Results</a></li>
                <li><a href="/global-gallery.php">Gallery</a></li>
            </ul>

            <div class="header-account">
                <a href="#" type="button" data-toggle="modal" data-target="#myModal">Login</a>
            </div>

            <div class="header-bg"></div>

             <div class="cta-banner">
                Choose a City. Create a team. Run to win.
                <a href="#" class="btn btn-black">Enter Your Race</a>
            </div>

        </header>

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <div class="input-wrapper">
                            <input class="input" type="text" placeholder="Username">
                            <label>Username</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">Your username is incorrect.</div>
                        </div>
                        <div class="input-wrapper">
                            <input class="input" type="password" placeholder="Password">
                            <label>Password</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">Your password is incorrect.</div>
                        </div>
                        <div class="button-group">
                            <a href="/my-account.php" class="btn btn-orange btn-long">Login</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

