<?php include 'includes/structure/start.php'; ?>

	<!-- heading -->
    <section class="main-heading" style="background-image: url('library/images/demo-news.jpg');">
        <div class="wrapper-thin">
            <div class="title">
                <h1>News</h1>
                <h2>Keep up to date with Square Mile news and articles</h2>
            </div>
        </div>
    </section>

    <?php include 'includes/components/cta_banner.php'; ?>

    <!-- content -->
    <section class="news-filter">
        <div class="filter-btn">
            <p>filter</p><i class="fa fa-chevron-down" aria-hidden="true"></i>
            <div class="view-all">
                <a href="#" class="btn btn-orange-hollow filter" data-filter="*">View All</a>
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
        </div>
        <div class="filter-dropdown">
            <ul>
                <li class="filter" data-filter=".dubai">Dubai</li>
                <li class="filter" data-filter=".hongkong">Hong Kong</li>
                <li class="filter" data-filter=".london">London</li>
                <li class="filter" data-filter=".newyork">New York</li>
                <li class="filter" data-filter=".singapore">Singapore</li>
                <li class="filter" data-filter=".sydney">Sydney</li>
                <li class="filter" data-filter=".sanfrancisco">San Francisco</li>
                <li class="filter" data-filter=".saopaulo">San Paulo</li>
                <li class="filter" data-filter=".shanghai">Shanghai</li>
                <li class="filter" data-filter=".tokyo">Tokyo</li>
            </ul>
        </div>
    </section>
    <section class="news">
        <div class="grid-sizer"></div>
        <div class="news-item dubai">
            <img src="library/images/demo-news.jpg" alt="news item">
            <p class="date">29 November 2016 at 10:15 AM</p>
            <h3>Bloomberg Square Mile Relay returns to Sydney for its second year</h3>
            <ul>
                <li>Race Results</li>
                <li>Hong Kong</li>
            </ul>
            <p>Square Mile Sport, in conjunction with Bloomberg, has announced the Bloomberg Square Mile Relay will return to</p>

        </div>
        <div class="news-item hongkong">
            <img src="http://fakeimg.pl/250x100/" alt="news item">
            <p class="date">14 November 2016 at 10:15 AM</p>
            <h3>Dubai to host first relay of the 2017 Global Series</h3>
            <ul></ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus praesentium voluptatum accusantium officiis assumenda obcaecati eum, deserunt</p>
            <a href="#" class="btn btn-light btn-small">Read More</a>
        </div>
        <div class="news-item london">
            <img src="http://fakeimg.pl/150x100/" alt="news item">
            <p class="date">29 November 2016 at 10:15 AM</p>
            <h3>English Schools Foundation wins Hong Kong relay </h3>
            <ul>
                <li>Charity</li>
                <li>Hong Kong</li>
            </ul>
            <p>Square Mile Sport, in conjunction with Bloomberg, has announced the Bloomberg Square Mile Relay will return to Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores temporibus explicabo officia perspiciatis</p>
            <a href="#" class="btn btn-light btn-small">Read More</a>
        </div>
        <div class="news-item newyork">
            <img src="http://fakeimg.pl/150x80/" alt="news item">
            <p class="date">29 November 2016 at 10:15 AM</p>
            <h3>Bloomberg Square Mile Relay returns </h3>
            <ul>
                <li>Race Results</li>
                <li>Hong Kong</li>
            </ul>
            <p>Square Mile Sport, in conjunction with Bloomberg, has announced the Bloomberg Square Mile Relay will return to Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error a dolores quisquam, enim magni dolorem veniam
            </p>
            <a href="#" class="btn btn-light btn-small">Read More</a>
        </div>
        <div class="news-item singapore">
            <img src="http://fakeimg.pl/150x150/" alt="news item">
            <p class="date">29 November 2016 at 10:15 AM</p>
            <h3>Bloomberg Square Mile Relay returns to Sydney for its second year</h3>
            <ul>
                <li>Race Results</li>
                <li>Hong Kong</li>
            </ul>
            <p>Square Mile Sport, in conjunction with Bloomberg, has announced the Bloomberg Square Mile Relay will return to Lorem ipsum dolor sit amet </p>
            <a href="#" class="btn btn-light btn-small">Read More</a>
        </div>
        <div class="news-item sydney">
            <img src="library/images/demo-news.jpg" alt="news item">
            <p class="date">29 November 2016 at 10:15 AM</p>
            <h3>Bloomberg Square Mile Relay returns to Sydney for its second year</h3>

            <p>Square Mile Sport, in conjunction with Bloomberg, has announced the Bloomberg Square Mile Relay will return to</p>
            <a href="#" class="btn btn-light btn-small">Read More</a>
        </div>
        <div class="load-more">
            <a href="#" class="btn btn-load-more">Load More</a>
        </div>

    </section>

<?php include 'includes/structure/end.php'; ?>
