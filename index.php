<?php include 'includes/structure/start.php'; ?>

	<section class="hero-home">
        <div class="wrapper-thin">
            <div class="title">
                <h2>One team.<br>
                    Ten runners.<br>
                    One mile each.</h2>
                <h3>How fast can you run your city?</h3>
                <h1>The Ultimate Corporate Team Running Event</h1>
            </div>
            <div class="play-video vid-modal-link" data-toggle="modal" data-target="#media" data-src="http://r18---sn-aigllney.googlevideo.com/videoplayback?signature=CDD6EB7997EE6EA9EFACDF38ECC324B9129F4FCF.69687CF60D380CCE7898120C62950B448C2FEE24&fallback_host=redirector.googlevideo.com&quality=hd720&upn=fJkwkK_IgrA&dur=13.444&ip=83.222.234.72&ratebypass=yes&ipbits=0&mv=u&mm=31&source=youtube&pl=23&mn=sn-aigllney&id=o-AJV6gxO-M4fYIZ5NnnoA0tA_eEbfGIiij6W7XAMsBMhQ&ms=au&sparams=dur,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,nh,pl,ratebypass,source,upn,expire&nh=IgpwcjAxLmxocjI1KgkxMjcuMC4wLjE&lmt=1471048617131497&itag=22&mime=video%2Fmp4&key=yt6&expire=1486421056&mt=1486399434&signature=">
                <div class="play-btn">
                    <i class="fa fa-2x fa-play" aria-hidden="true"></i>
                </div>
                <span>Play Video</span>
            </div>
        </div>
        <div class="cinemagraph" style="background-image: url(library/images/demo-news.jpg)">
            <?php
            $id2 = "hWO07uBqwu0";
            $id = "vu97oYa7X";
            parse_str(file_get_contents("http://youtube.com/get_video_info?video_id=".$id),$info);
            $streams = $info['url_encoded_fmt_stream_map'];
            $streams = explode(',',$streams);
            parse_str(urldecode($streams[0]),$data);

            $url = $data['url'];
            $sig = $data['signature'];
            unset($data['type']);
            unset($data['url']);
            unset($data['sig']);
            $urlPlay = str_replace('%2C', ',' ,$url.'&'.http_build_query($data).'&signature='.$sig);
            ?>
            <video loop autoplay src="<?php echo $urlPlay; ?>"></video>
        </div>
    </section>

    <?php include 'includes/components/cta_banner.php'; ?>

    <section class="next-races">
        <div class="races">
            <div class="race">
                <a href="#" class="cover-link"></a>
                <div class="text">
                    <h4>Next Race:</h4>
                    <h3>08 Febuary 2017</h3>
                    <h2>Dubai</h2>
                    <h5>72 days</h5>
                </div>
                <img src="library/images/cities/dubai.png">
            </div>
             <div class="race">
                <a href="#" class="cover-link"></a>
                <div class="text">
                    <h3>08 Febuary 2017</h3>
                    <h2>Hong Kong</h2>
                    <h5>85 days</h5>
                </div>
                <img src="library/images/cities/hongKong.png">
            </div>
             <div class="race">
                <a href="#" class="cover-link"></a>
                <div class="text">
                    <h3>08 Febuary 2017</h3>
                    <h2>San Francisco</h2>
                    <h5>TBC</h5>
                </div>
                <img src="library/images/cities/sanFrancisco.png">
            </div>
        </div>
        <div class="view-more">
            <a href="#" class="cover-link"></a>
            <span>View More Races</span>
        </div>
    </section>

    <section class="about-accordion">
        <ul class="nav-items">
            <li class="nav-item active" data-accordion="1">
                <span>01</span>
                <h2>About the Event</h2>
            </li>
            <div class="main-accordion about active" data-accordion="1">
                <h3>The Ultimate Corporate Running Event</h3>

                <div class="text">
                    <h4>Where it all began</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>

                    <h4>10 race locations and counting...</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>

                    <h4>Why should you take part</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>

                    <a href="#" class="btn btn-long btn-orange">Next: How to Enter</a>
                </div>

                <div class="global-stats">
                    <h4>Global Stats</h4>

                    <div class="stat">
                        <strong>15,123</strong>
                        <span>Total Miles Run</span>
                    </div>
                    <div class="stat">
                        <strong>1,234</strong>
                        <span>Total Companies Taken Part</span>
                    </div>
                    <div class="stat">
                        <strong>£100,000</strong>
                        <span>Money Donated to Charity</span>
                    </div>
                </div>
            </div>

            <li class="nav-item" data-accordion="2">
                <span>02</span>
                <h2>How to Enter</h2>
            </li>
            <div class="main-accordion get-started" data-accordion="2">
                <h3>It's easy to get started ...</h3>

                <div class="text">
                    <h4><strong>1.</strong> Choose your city</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>

                    <h4><strong>2.</strong> Create your Team</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>

                    <h4><strong>3.</strong> Choose your sponsor</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</p>

                    <h4 class="push">Have fun!</h4>

                    <a href="#" class="btn btn-long btn-black">Choose My City</a>
                    <a href="#" class="btn btn-long btn-orange">Next: Global Gallery</a>
                </div>
            </div>

            <li class="nav-item" data-accordion="3">
                <span>03</span>
                <h2>Global Gallery</h2>
            </li>
            <div class="main-accordion" data-accordion="3">
                <div class="accordion-gallery">
                    <div class="img-item img-modal-link" data-toggle="modal" data-target="#media" data-src="https://unsplash.it/200/300/?random">
                        <img src="https://unsplash.it/200/300/?random" alt="">
                    </div>
                    <div class="img-item img-modal-link" data-toggle="modal" data-target="#media" data-src="https://unsplash.it/260/200/?random">
                        <img src="https://unsplash.it/260/200/?random" alt="">
                    </div>
                    <div class="img-item img-modal-link" data-toggle="modal" data-target="#media" data-src="https://unsplash.it/200/250/?random">
                        <img src="https://unsplash.it/200/250/?random" alt="">
                    </div>
                    <div class="img-item img-modal-link" data-toggle="modal" data-target="#media" data-src="https://unsplash.it/300/300/?random">
                        <img src="https://unsplash.it/300/300/?random" alt="">
                    </div>
                    <div class="img-item img-modal-link" data-toggle="modal" data-target="#media" data-src="https://unsplash.it/400/400/?random">
                        <img src="https://unsplash.it/400/400/?random" alt="">
                    </div>
                    <div class="img-item img-modal-link" data-toggle="modal" data-target="#media" data-src="https://unsplash.it/250/600/?random">
                        <img src="https://unsplash.it/250/600/?random" alt="">
                    </div>
                    <div class="img-item img-modal-link" data-toggle="modal" data-target="#media" data-src="
                    https://unsplash.it/450/250/?random">
                        <img src="https://unsplash.it/450/250/?random" alt="">
                    </div>
                    <div class="img-item img-modal-link" data-toggle="modal" data-target="#media" data-src="https://unsplash.it/200/300/?random">
                        <img src="https://unsplash.it/200/300/?random" alt="">
                    </div>
                    <div class="img-item img-modal-link" data-toggle="modal" data-target="#media" data-src="https://unsplash.it/230/330/?random">
                        <img src="https://unsplash.it/230/330/?random" alt="">
                    </div>
                </div>
            </div>

            <li class="nav-item" data-accordion="4">
                <span>04</span>
                <h2>10 Race Locations</h2>
            </li>
            <div class="main-accordion race-locations" data-accordion="4">
                <ul class="cities">
                    <li class="active" data-city="dubai">Dubai</li>
                    <li data-city="hong-kong">Hong Kong</li>
                    <li data-city="san-francisco">San Francisco</li>
                    <li data-city="sao-paolo">Sao Paolo</li>
                    <li data-city="shanghai">Shanghai</li>
                    <li data-city="singapore">Singapore</li>
                    <li data-city="sydney">Sydney</li>
                    <li data-city="tokyo">Tokyo</li>
                    <li data-city="london">London</li>
                    <li data-city="new-york">New York</li>
                </ul>

                <div class="city active" data-city="dubai">
                    <h4>Next Race</h4>
                    <h3>08 February 2017</h3>

                    <div class="timer" data-date="2017/03/27">dubai</div>

                    <p>Register now to ensure your company secures a place amongst up to 1,000 other runners im the UAE's ultimate corporate relay race at a discounted rate for a limited time only!</p>

                    <a href="#" class="btn btn-black">Race this city</a>

                    <img src="library/images/cities/dubai.png" alt="">
                </div>

                <div class="city" data-city="hong-kong">
                    <h4>Next Race</h4>
                    <h3>08 February 2017</h3>

                    <div class="timer" data-date="2017/02/10">hong-kong</div>

                    <p>Register now to ensure your company secures a place amongst up to 1,000 other runners im the UAE's ultimate corporate relay race at a discounted rate for a limited time only!</p>

                    <a href="#" class="btn btn-black">Race this city</a>

                    <img src="library/images/cities/hongKong.png" alt="">
                </div>

                <div class="city" data-city="san-francisco">
                    <h4>Next Race</h4>
                    <h3>08 February 2017</h3>

                    <div class="timer" data-date="2017/09/13">san-francisco</div>

                    <p>Register now to ensure your company secures a place amongst up to 1,000 other runners im the UAE's ultimate corporate relay race at a discounted rate for a limited time only!</p>

                    <a href="#" class="btn btn-black">Race this city</a>

                    <img src="library/images/cities/sanFrancisco.png" alt="">
                </div>

                <div class="city" data-city="sao-paolo">
                    <h4>Next Race</h4>
                    <h3>08 February 2017</h3>

                    <div class="timer" data-date="2017/03/13">sao-paolo</div>

                    <p>Register now to ensure your company secures a place amongst up to 1,000 other runners im the UAE's ultimate corporate relay race at a discounted rate for a limited time only!</p>

                    <a href="#" class="btn btn-black">Race this city</a>

                    <img src="library/images/cities/saoPaolo.png" alt="">
                </div>

                <div class="city" data-city="shanghai">
                    <h4>Next Race</h4>
                    <h3>08 February 2017</h3>

                    <div class="timer" data-date="2017/03/26">shanghai</div>

                    <p>Register now to ensure your company secures a place amongst up to 1,000 other runners im the UAE's ultimate corporate relay race at a discounted rate for a limited time only!</p>

                    <a href="#" class="btn btn-black">Race this city</a>

                    <img src="library/images/cities/shanghai.png" alt="">
                </div>

                <div class="city" data-city="singapore">
                    <h4>Next Race</h4>
                    <h3>08 February 2017</h3>

                    <div class="timer" data-date="2017/06/21">singapore</div>

                    <p>Register now to ensure your company secures a place amongst up to 1,000 other runners im the UAE's ultimate corporate relay race at a discounted rate for a limited time only!</p>

                    <a href="#" class="btn btn-black">Race this city</a>

                    <img src="library/images/cities/singapore.png" alt="">
                </div>

                <div class="city" data-city="sydney">
                    <h4>Next Race</h4>
                    <h3>08 February 2017</h3>

                    <div class="timer" data-date="2018/01/21">sydney</div>

                    <p>Register now to ensure your company secures a place amongst up to 1,000 other runners im the UAE's ultimate corporate relay race at a discounted rate for a limited time only!</p>

                    <a href="#" class="btn btn-black">Race this city</a>

                    <img src="library/images/cities/sydney.png" alt="">
                </div>

                <div class="city" data-city="tokyo">
                    <h4>Next Race</h4>
                    <h3>08 February 2017</h3>

                    <div class="timer" data-date="2017/08/17">tokyo</div>

                    <p>Register now to ensure your company secures a place amongst up to 1,000 other runners im the UAE's ultimate corporate relay race at a discounted rate for a limited time only!</p>

                    <a href="#" class="btn btn-black">Race this city</a>

                    <img src="library/images/cities/tokyo.png" alt="">
                </div>

                <div class="city" data-city="london">
                    <h4>Next Race</h4>
                    <h3>08 February 2017</h3>

                    <div class="timer" data-date="2017/06/19">london</div>

                    <p>Register now to ensure your company secures a place amongst up to 1,000 other runners im the UAE's ultimate corporate relay race at a discounted rate for a limited time only!</p>

                    <a href="#" class="btn btn-black">Race this city</a>

                    <img src="library/images/cities/london.png" alt="">
                </div>

                <div class="city" data-city="new-york">
                    <h4>Next Race</h4>
                    <h3>08 February 2017</h3>

                    <div class="timer" data-date="2017/04/09">new-york</div>

                    <p>Register now to ensure your company secures a place amongst up to 1,000 other runners im the UAE's ultimate corporate relay race at a discounted rate for a limited time only!</p>

                    <a href="#" class="btn btn-black">Race this city</a>

                    <img src="library/images/cities/newYork.png" alt="">
                </div>
            </div>

        </ul>
    </section>

    <section class="global-partners">
        <div class="wrapper-thin">
            <div class="row">
                <div class="col-md-12">
                    <h3>Global Partners</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="http://fakeimg.pl/250x100/" alt="Bloomberg">
                    <h4>Headline Sponsor</h4>
                </div>
                <div class="col-md-4">
                    <img src="http://fakeimg.pl/250x100/" alt="CrowdCube">
                    <h4>Fitness Partner</h4>
                </div>
                <div class="col-md-4">
                    <img src="http://fakeimg.pl/250x100/" alt="Techno Gym">
                    <h4>Headline Sponsor</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="large-blockquote">
        <div class="wrapper-thin">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>
                        Run for the respect. <br/>
                        Win for the team.
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="home-results" style="background-image: url(library/images/pre-footer.jpg);">
        <div class="wrapper-thin">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="http://fakeimg.pl/100x100/">
                    <h3>Fastest Team</h3>
                    <h4>BofA Awesome Runners</h4>
                    <h5>Dubai 2016</h5>
                </div>
                <div class="col-md-4 text-center">
                    <img src="http://fakeimg.pl/100x100/">
                    <h3>Fastest Individual</h3>
                    <h4>Harold Morris</h4>
                    <h5>Hong Kong 2016</h5>
                </div>
                <div class="col-md-4 text-center">
                    <img src="http://fakeimg.pl/100x100/">
                    <h3>Fastest Mixed Team</h3>
                    <h4>Merrill's Lynch Mob</h4>
                    <h5>London 2016</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="results.php" class="btn btn-black"> View More Results</a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/structure/end.php'; ?>

