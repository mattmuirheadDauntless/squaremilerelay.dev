<?php include 'includes/structure/start.php'; ?>

	<!-- heading -->
    <section class="single-company-heading">
        <div class="wrapper-thin">
            <div class="title">
                <h1>Bank of America &dash; Merrill Lynch</h1>
                <img src="http://fakeimg.pl/250x100/" alt="logo image">
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

    <section class="single-company">
        <div class="teams-header">
            <h3>Teams</h3>
        </div>
        <div class="table-wrapper">
            <div class="isotope-no-items inactive">
                <h2>Sorry!</h2>
                <h3>There aren't any results for your filter search</h3>
                <div class="btn btn-black filter" data-filter="*">View all categories</div>
            </div>
            <table class="company-table">
                <thead>
                    <tr>
                        <th><span></span>City/Date</th>
                        <th><span></span>Team Name</th>
                        <th><span></span>Finishing Position</th>
                        <th><span></span>Team Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="heading-row 2017 london">
                        <td><strong>London 2016</strong><span class="italic">08 Feb 2016</span></td>
                        <td><strong>BofA Awesome Runners <i class="fa fa-chevron-right" aria-hidden="true"></i></strong></td>
                        <td>10</td>
                        <td><strong>55:12:34</strong></td>
                    </tr>
                    <tr class="child-row 2017 london">
                        <td class="table-expander" colspan="4">
                            <div>
                                <img src="http://fakeimg.pl/250x250/" alt="">
                                <ul>
                                    <li>1. Captain: Lula Miller <span>05:45</span></li>
                                    <li>2. Lula Miller <span>05:45</span></li>
                                    <li>3. Lula Miller <span>05:45</span></li>
                                    <li>4. Lula Miller <span>05:45</span></li>
                                    <li>5. Lula Miller <span>05:45</span></li>
                                </ul>
                                <ul>
                                    <li>6. Lula Miller <span>05:45</span></li>
                                    <li>7. Lula Miller <span>05:45</span></li>
                                    <li>8. Lula Miller <span>05:45</span></li>
                                    <li>9. Lula Miller <span>05:45</span></li>
                                    <li>10. Lula Miller <span>05:45</span></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="heading-row 2017 dubai">
                        <td><strong>Dubai 2016</strong><span class="italic">08 Feb 2016</span></td>
                        <td><strong>BofA Awesome Runners <i class="fa fa-chevron-right" aria-hidden="true"></i></strong></td>
                        <td>10</td>
                        <td><strong>55:12:34</strong></td>
                    </tr>
                    <tr class="child-row 2017 ">
                        <td class="table-expander" colspan="4">
                            <div>
                                <img src="http://fakeimg.pl/250x250/" alt="">
                                <ul>
                                    <li>1. Captain: Lula Miller <span>--:--</span></li>
                                    <li>2. Lula Miller <span>--:--</span></li>
                                    <li>3. Lula Miller <span>--:--</span></li>
                                    <li>4. Lula Miller <span>--:--</span></li>
                                    <li>5. Lula Miller <span>--:--</span></li>
                                </ul>
                                <ul>
                                    <li>6. Lula Miller <span>--:--</span></li>
                                    <li>7. Lula Miller <span>--:--</span></li>
                                    <li>8. Lula Miller <span>--:--</span></li>
                                    <li>9. Lula Miller <span>--:--</span></li>
                                    <li>10. Lula Miller <span>--:--</span></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

<?php include 'includes/structure/end.php'; ?>
