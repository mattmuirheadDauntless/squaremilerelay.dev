<?php include 'includes/structure/start.php'; ?>

	<!-- heading -->
    <section class="main-heading" style="background-image: url('library/images/demo-news.jpg');">
        <div class="wrapper-thin">
            <div class="title">
                <h1>Global Gallery</h1>
                <h2>Pictures from races all over the world</h2>
            </div>
        </div>
    </section>

    <?php include 'includes/components/cta_banner.php'; ?>

    <!-- content -->
    <section class="filters">
        <div class="filters-btn">
            <p>filter</p><i class="fa fa-chevron-down" aria-hidden="true"></i>
            <div class="view-all">
                <a href="#" class="btn btn-orange-hollow filter" data-filter="*">View All</a>
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
        </div>
        <div class="filter-dropdown">
            <ul class="filter-group small">
                <li class="filter" data-filter=".2017">2017</li>
                <li class="filter" data-filter=".2015">2015</li>
                <li class="filter" data-filter=".2014">2014</li>
                <li class="filter" data-filter=".2013">2013</li>
                <li class="filter" data-filter=".2012">2012</li>
                <li class="filter" data-filter=".2011">2011</li>
            </ul>
            <ul class="filter-group large">
                <li class="filter" data-filter=".dubai">Dubai</li>
                <li class="filter" data-filter=".hongkong">Hong Kong</li>
                <li class="filter" data-filter=".london">London</li>
                <li class="filter" data-filter=".newyork">New York</li>
                <li class="filter" data-filter=".singapore">Singapore</li>
                <li class="filter" data-filter=".sydney">Sydney</li>
                <li class="filter" data-filter=".sanfrancisco">San Francisco</li>
                <li class="filter" data-filter=".saopaulo">Sao Paulo</li>
                <li class="filter" data-filter=".shanghai">Shanghai</li>
                <li class="filter" data-filter=".tokyo">Tokyo</li>
            </ul>
        </div>
    </section>
    <section class="global-gallery">
        <div class="vid-gallery-heading"><h2>Videos</h2></div>
        <div class="img-gallery-heading"><h2>Images</h2></div>

        <!-- Modal -->
        <div class="modal fade" id="img-lightbox" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <img src="library/images/demo-news.jpg" alt="Gallery Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="vid-gallery">
            <div class="vid-item dubai" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Video">
            </div>
            <div class="vid-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Video">
            </div>
            <div class="vid-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Video">
            </div>
            <div class="vid-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Video">
            </div>
            <div class="vid-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Video">
            </div>
            <div class="vid-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Video">
            </div>
        </div>

        <div class="img-gallery">
            <div class="img-item dubai" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Gallery Image">
            </div>
            <div class="img-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="http://fakeimg.pl/250x100/" alt="Gallery Image">
            </div>
            <div class="img-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Gallery Image">
            </div>
            <div class="img-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="http://fakeimg.pl/350x400/" alt="Gallery Image">
            </div>
            <div class="img-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Gallery Image">
            </div>
            <div class="img-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Gallery Image">
            </div>
            <div class="img-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Gallery Image">
            </div>
            <div class="img-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Gallery Image">
            </div>
            <div class="img-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="http://fakeimg.pl/350x500/" alt="Gallery Image">
            </div>
            <div class="img-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Gallery Image">
            </div>
            <div class="img-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="http://fakeimg.pl/250x400/" alt="Gallery Image">
            </div>
            <div class="img-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Gallery Image">
            </div>
            <div class="img-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="http://fakeimg.pl/350x600/" alt="Gallery Image">
            </div>
            <div class="img-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Gallery Image">
            </div>
            <div class="img-item" data-toggle="modal" data-target="#img-lightbox">
                <img src="library/images/demo-news.jpg" alt="Gallery Image">
            </div>
        </div>
    </section>

<?php include 'includes/structure/end.php'; ?>
