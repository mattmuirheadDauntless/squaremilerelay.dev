<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
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
                <a href="index.php">
                    <?php include 'includes/components/logo.php'; ?>
                </a>
            </div>

            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul class="nav">
                <li><a href="partners.php">Partners</a></li>
                <li><a href="charities.php">Charities</a></li>
                <li><a href="companies.php">Companies</a></li>
                <li><a href="news.php">News</a></li>
                <li class="has-child">
                    <a href="#">Race Locations</a>
                    <ul class="locations">
                        <div class="locations-wrapper">
                            <li><a href="single-city.php">
                                <img src="library/images/cities/dubai.png">
                                <div class="location">
                                    Dubai
                                    <span class="time">15 Mar 2017</span>
                                </div>
                            </a></li>
                            <li><a href="single-city.php">
                                <img src="library/images/cities/hongKong.png">
                                <div class="location">
                                    Hong Kong
                                    <span class="time">15 Mar 2017</span>
                                </div>
                            </a></li>
                            <li><a href="single-city.php">
                                <img src="library/images/cities/sanFrancisco.png">
                                <div class="location">
                                    San Francisco
                                    <span class="time">15 Mar 2017</span>
                                </div>
                            </a></li>
                            <li><a href="single-city.php">
                                <img src="library/images/cities/sydney.png">
                                <div class="location">
                                    Sydney
                                    <span class="time">15 Mar 2017</span>
                                </div>
                            </a></li>
                            <li><a href="single-city.php">
                                <img src="library/images/cities/newYork.png">
                                <div class="location">
                                    New York
                                </div>
                            </a></li>
                            <li><a href="single-city.php">
                                <img src="library/images/cities/london.png">
                                <div class="location">
                                    London
                                </div>
                            </a></li>
                            <li><a href="single-city.php">
                                <img src="library/images/cities/singapore.png">
                                <div class="location">
                                    Singapore
                                </div>
                            </a></li>
                            <li><a href="single-city.php">
                                <img src="library/images/cities/shanghai.png">
                                <div class="location">
                                    Shanghai
                                </div>
                            </a></li>
                            <li><a href="single-city.php">
                                <img src="library/images/cities/saoPaolo.png">
                                <div class="location">
                                    Sao Paulo
                                </div>
                            </a></li>
                            <li><a href="single-city.php">
                                <img src="library/images/cities/tokyo.png">
                                <div class="location">
                                    Tokyo
                                </div>
                            </a></li>
                        </div>
                    </ul>
                </li>
                <li><a href="results.php">Results</a></li>
                <li><a href="global-gallery.php">Gallery</a></li>
            </ul>

            <div class="header-account">
                <a href="#" type="button" data-toggle="modal" data-target="#login">Login</a>
            </div>

            <div class="header-bg"></div>

             <div class="cta-banner">
                Choose a City. Create a team. Run to win.
                <a href="#" class="btn btn-black" type="button" data-toggle="modal" data-target="#enterRace">Enter Your Race</a>
            </div>

        </header>

        <!-- MODALS -->
        <div id="login" class="modal fade" role="dialog">
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
                            <a href="my-account.php" class="btn btn-orange btn-long">Login</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="contact" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Contact Us</h4>
                    </div>
                    <div class="modal-body">
                        <div class="input-wrapper">
                            <input class="input" type="text" placeholder="Your Name">
                            <label>Your Name</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">That name is invalid.</div>
                        </div>
                        <div class="input-wrapper">
                            <input class="input" type="email" placeholder="Email">
                            <label>Email</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">That email is invalid.</div>
                        </div>
                        <div class="input-wrapper">
                            <input class="input" type="email" placeholder="Phone">
                            <label>Phone</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">That phone number is invalid.</div>
                        </div>
                        <div class="input-wrapper">
                            <select class="input">
                                <option value="">Dubai</option>
                                <option value="">London</option>
                                <option value="">New York</option>
                            </select>
                            <label>City you are interested in</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                        </div>
                        <div class="input-wrapper">
                            <textarea class="input" placeholder="Message"></textarea>
                            <label>Message</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">That phone number is invalid.</div>
                        </div>
                        <div class="button-group">
                            <a href="#" class="btn btn-orange btn-long">Submit</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="media" class="modal fade media-modal" role="dialog">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="img hide">
                            <img src="" alt="">
                        </div>

                        <div class="video hide">
                            <video src="" controls></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="enterRace" class="modal fade enter" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="slide current" data-slide="1">
                        <div class="modal-header">
                            <h4 class="modal-title">Your Information</h4>
                        </div>
                         <div class="input-wrapper">
                            <select class="input">
                                <option value="">Dubai</option>
                                <option value="">London</option>
                                <option value="">New York</option>
                            </select>
                            <label>Race City</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">Your username is incorrect.</div>
                        </div>
                         <div class="input-wrapper">
                            <input class="input" type="text" placeholder="Full Name">
                            <label>Full Name</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">That is not a valid name.</div>
                        </div>
                         <div class="input-wrapper">
                            <input class="input" type="text" placeholder="Company Name">
                            <label>Company Name</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">That is not a valid company name.</div>
                        </div>
                         <div class="input-wrapper">
                            <input class="input" type="email" placeholder="Email">
                            <label>Email</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">Please enter a valid email address.</div>
                        </div>
                         <div class="input-wrapper">
                            <input class="input" type="text" placeholder="Mobile Phone">
                            <label>Mobile Phone</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">Please enter a valid phone number.</div>
                        </div>
                        <div class="next btn btn-invalid">Continue</div>
                    </div>

                    <div class="slide" data-slide="2">
                        <div class="modal-header">
                            <h4 class="modal-title">Team Packages</h4>
                        </div>
                        <div class="package">
                            <div class="description">
                                <h5>Teams</h5>
                                <p>Teams consist og 10 runners. Each runner will receive 1 meal, 2 drinks, 1 t-shirt and access to the after party</p>
                            </div>
                            <div class="quantity">
                                <input type="number" value="1">
                            </div>
                            <div class="price">
                                <p>£1,050.00</p>
                            </div>
                        </div>
                        <div class="package">
                            <div class="description">
                                <h5>Supporter Tickets</h5>
                                <p>Supporters receive 1 meal, 2 drinks, 1 t-shirt, access to runner village and the after party</p>
                            </div>
                            <div class="quantity">
                                <input type="number" value="1">
                            </div>
                            <div class="price">
                                <p>£500.00</p>
                            </div>
                        </div>
                        <div class="checkout">
                            <div class="coupons">
                                <input type="text" placeholder="Enter coupon code">
                            </div>
                            <div class="totals">
                                <ul>
                                    <li>VAT <span>£190.05</span></li>
                                    <li>Total<span>£1,590.05</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="terms">
                            <input type="checkbox">
                            <label for="">I accept the <a href="#">Terms &amp; Conditions</a></label>
                        </div>
                        <div class="next btn btn-invalid">Next</div>
                    </div>

                    <div class="slide" data-slide="3">
                        <div class="modal-header">
                            <h4 class="modal-title">Payment</h4>
                        </div>
                        <div class="input-wrapper">
                            <input class="input" type="text" placeholder="Card Number">
                            <label>Card Number</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">Please enter a valid card number.</div>
                        </div>
                        <div class="input-wrapper">
                            <input class="input" type="text" placeholder="Name on Card">
                            <label>Name on Card</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">Please enter a valid card name.</div>
                        </div>
                        <div class="input-wrapper half-width">
                            <input class="input" type="text" placeholder="Expires">
                            <label>Expires</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">Please enter a valid expiry date.</div>
                        </div>
                        <div class="input-wrapper half-width">
                            <input class="input" type="text" placeholder="Card Code">
                            <label>Card Code</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">Please enter a valid card code.</div>
                        </div>
                        <div class="next btn btn-invalid">Make Payment</div>
                        <div class="payment-total">
                            Payment Total <strong>£1,590.05</strong>
                        </div>
                    </div>

                    <div class="slide text-center" data-slide="4">
                        <div class="thank-you-text">
                            <div class="modal-header">
                                <h4 class="modal-title">Thank You!</h4>
                            </div>
                            <p>You have registered successfully. Visit your dashboard to start building you team.</p>
                        </div>
                        <div class="next btn btn-orange thank-you-btn">Dashboard</div>
                    </div>

                    <div class="slide" data-slide="5">
                        <div class="modal-header">
                            <h4 class="modal-title">Moment of your time?</h4>
                        </div>
                        <div class="input-wrapper">
                            <select class="input">
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                                <option value="">Option 3</option>
                            </select>
                            <label>How did you hear about us?</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">Please enter a valid option.</div>
                        </div>
                        <div class="input-wrapper">
                            <select class="input">
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                                <option value="">Option 3</option>
                            </select>
                            <label>How is your entry funded?</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">Please enter a valid option.</div>
                        </div>
                         <div class="input-wrapper">
                            <textarea class="input" type="text" placeholder="What is yout team's main reason for entering the race?"></textarea>
                            <label>What is yout team's main reason for entering the race?</label>
                            <i class="fa validation-icon" aria-hidden="true"></i>
                            <div class="msg valid">Great!</div>
                            <div class="msg in-valid">Please enter a valid reason.</div>
                        </div>
                        <a href="my-account.php" class="btn btn-light btn-long">Skip</a>
                        <a href="my-account.php" class="btn btn-orange btn-long">Submit</a>
                    </div>

                    <div class="modal-footer stages">
                        <ul class="stage-1">
                            <li class="current" data-slide="1">1</li>
                            <li data-slide="2">2</li>
                            <li data-slide="3">3</li>
                            <li data-slide="4">4</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- END MODALS -->

