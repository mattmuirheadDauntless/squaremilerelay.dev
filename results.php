<?php include 'includes/structure/start.php'; ?>

	<!-- heading -->
    <section class="main-heading" style="background-image: url('library/images/demo-news.jpg');">
        <div class="wrapper-thin">
            <div class="title">
                <h1>Results</h1>
                <h2>Global race results and times</h2>
            </div>
        </div>
    </section>

    <?php include 'includes/components/cta_banner.php'; ?>

    <!-- filters -->
    <section class="filters">
        <div class="filters-btn">
            <p>filter</p><i class="fa fa-chevron-down" aria-hidden="true"></i>
            <div class="view-all">
                <div class="btn btn-orange-hollow filter" data-filter="*">View All</div>
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
    <!-- /Filters -->

    <section class="results-table tabs-container">
        <div class="tab active" data-tab="1"><span class="text">Individuals</span> <i class="fa fa-user" aria-hidden="true"></i></div>
        <div class="tab" data-tab="2"><span class="text">Users</span> <i class="fa fa-users" aria-hidden="true"></i></div>

        <div class="table-wrapper tab-wrapper active" data-tab="1">
            <div class="isotope-no-items inactive">
                <h2>Sorry!</h2>
                <h3>There aren't any results for your filter search</h3>
                <div class="btn btn-black filter" data-filter="*">View all categories</div>
            </div>
            <table class="tablesorter">
                <thead>
                    <tr>
                        <th><span></span>Rank</th>
                        <th><span></span>Name</th>
                        <th><span></span>Number</th>
                        <th><span></span>Time</th>
                        <th><span></span>Team</th>
                        <th><span></span>Race Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="2017 dubai">
                        <td><strong>1</strong></td>
                        <td>
                            <img src="http://fakeimg.pl/100x100/"" alt="">
                            <strong>Melvin Little</strong>
                        </td>
                        <td class="text-center">#246</td>
                        <td><strong>05:43:01</strong></td>
                        <td>Bloomberg 1</td>
                        <td>Dubai</td>
                    </tr>
                    <tr class="2017 london">
                        <td><strong>2</strong></td>
                        <td>
                            <img src="http://fakeimg.pl/100x100/"" alt="">
                            <strong>Joe Bloggs</strong>
                        </td>
                        <td class="text-center">#125</td>
                        <td><strong>05:43:45</strong></td>
                        <td>Bloomberg 1</td>
                        <td>London</td>
                    </tr>
                    <tr class="2015 dubai">
                        <td><strong>3</strong></td>
                        <td>
                            <img src="http://fakeimg.pl/100x100/"" alt="">
                            <strong>Jane Doe</strong>
                        </td>
                        <td class="text-center">#666</td>
                        <td><strong>05:45:16</strong></td>
                        <td>Bloomberg 1</td>
                        <td>London</td>
                    </tr>
                    <tr class="2017 tokyo">
                        <td><strong>4</strong></td>
                        <td>
                            <img src="http://fakeimg.pl/100x100/"" alt="">
                            <strong>Jar Jar Binks</strong>
                        </td>
                        <td class="text-center">#200</td>
                        <td><strong>06:21:10</strong></td>
                        <td>Bloomberg 1</td>
                        <td>New York</td>
                    </tr>
                    <tr class="2011 sydney">
                        <td><strong>5</strong></td>
                        <td>
                            <img src="http://fakeimg.pl/100x100/"" alt="">
                            <strong>Kermit the Frog</strong>
                        </td>
                        <td class="text-center">#001</td>
                        <td><strong>07:43:01</strong></td>
                        <td>Bloomberg 1</td>
                        <td>Singapore</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-wrapper tab-wrapper" data-tab="2">
            <table class="tablesorter">
                <thead>
                    <tr>
                        <th><span></span>Rank</th>
                        <th><span></span>Team Name</th>
                        <th><span></span>Number</th>
                        <th><span></span>Time</th>
                        <th><span></span>Race Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1</strong></td>
                        <td>
                            <img src="http://fakeimg.pl/100x100/"" alt="">
                            <strong>Dauntless</strong>
                        </td>
                        <td class="text-center">#246</td>
                        <td><strong>05:43:01</strong></td>
                        <td>Dubai</td>
                    </tr>
                    <tr>
                        <td><strong>2</strong></td>
                        <td>
                            <img src="http://fakeimg.pl/100x100/"" alt="">
                            <strong>Bloomberg</strong>
                        </td>
                        <td class="text-center">#125</td>
                        <td><strong>05:43:45</strong></td>
                        <td>London</td>
                    </tr>
                    <tr>
                        <td><strong>3</strong></td>
                        <td>
                            <img src="http://fakeimg.pl/100x100/"" alt="">
                            <strong>Square Mile</strong>
                        </td>
                        <td class="text-center">#666</td>
                        <td><strong>05:45:16</strong></td>
                        <td>London</td>
                    </tr>
                    <tr>
                        <td><strong>4</strong></td>
                        <td>
                            <img src="http://fakeimg.pl/100x100/"" alt="">
                            <strong>Apple</strong>
                        </td>
                        <td class="text-center">#200</td>
                        <td><strong>06:21:10</strong></td>
                        <td>New York</td>
                    </tr>
                    <tr>
                        <td><strong>5</strong></td>
                        <td>
                            <img src="http://fakeimg.pl/100x100/"" alt="">
                            <strong>Samsung</strong>
                        </td>
                        <td class="text-center">#001</td>
                        <td><strong>07:43:01</strong></td>
                        <td>Singapore</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>


<?php include 'includes/structure/end.php'; ?>
