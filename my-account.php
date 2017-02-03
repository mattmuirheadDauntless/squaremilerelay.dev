<?php include 'includes/structure/start.php'; ?>

	<!-- heading -->
    <section class="main-heading" style="background-image: url('library/images/demo-news.jpg');">
        <div class="wrapper-thin">
            <div class="title">
                <h1>My Account</h1>
                <h2>Ready to race, Mo Farah?</h2>
            </div>
        </div>
    </section>

    <section class="my-account tabs-container">
        <div class="tab active" data-tab="1"><span class="text">My Profile &amp; Results</span> <i class="fa fa-user" aria-hidden="true"></i></div>
        <div class="tab" data-tab="2"><span class="text">My Teams</span> <i class="fa fa-users" aria-hidden="true"></i></div>
        <div class="tab" data-tab="3"><span class="text">Orders &amp; Billing</span> <i class="fa fa-credit-card" aria-hidden="true"></i></div>

        <div class="tab-wrapper my-profile active" data-tab="1">
            <h5>My Profile <span class="edit-element">- Edit Profile</span></h5>

            <div class="wrapper-wide">
                <div class="profile-img">
                    <img src="http://fakeimg.pl/300x300" alt="">
                </div>
                <div class="profile-info">
                    <h3>Mo Farah</h3>
                    <div class="btn btn-orange btn-small edit-btn">Edit</div>

                    <div class="progress-radial progress-85">
                        <div class="overlay">
                            <div class="text">
                                <span>75%</span>
                                Complete
                            </div>
                        </div>
                    </div>

                    <ul>
                        <li>
                            <strong>Email</strong>
                            <span>mo.farah@gmail.com</span>
                        </li>
                        <li>
                            <strong>Phone</strong>
                            <span>07481 123456</span>
                        </li>
                        <li>
                            <strong>Gender</strong>
                            <span class="no-info">Please select...</span>
                        </li>
                        <li>
                            <strong>Age</strong>
                            <span>38</span>
                        </li>
                        <li>
                            <strong>T-shirt size</strong>
                            <span>Men's Medium</span>
                        </li>
                        <li>
                            <strong>Why I Compete</strong>
                            <span>Hypnotherapy For Motivation Getting The Drive Back</span>
                        </li>
                        <li>
                            <strong>Address</strong>
                            <span>
                                19 Medhurst Village<br/>
                                Nikolaus Highway<br/>
                                Alphonsoberg<br/>
                                KT12 7BY<br/>
                                ENGLAND
                            </span>
                        </li>
                        <li class="right">
                            <strong>Company</strong>
                            <span>Investec Inc</span>
                        </li>
                        <li class="right">
                            <strong>Job Title</strong>
                            <span>Finance Director</span>
                        </li>
                        <li class="right">
                            <strong>Source</strong>
                            <span>Invited by Management</span>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="my-results">
                <h3>My Results <span><strong>Personal Best:</strong>05:43:01</span></h3>
                <div class="table-wrapper">
                    <table class="tablesorter">
                        <thead>
                            <tr>
                                <th><span></span>Event</th>
                                <th><span></span>My Time</th>
                                <th><span></span>Relay Position</th>
                                <th><span></span>Team Time</th>
                                <th><span></span>Team Ranking</th>
                                <th><span></span>Runner ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>London 2016</td>
                                <td><strong>05:43:01</strong></td>
                                <td>3 out of 10</td>
                                <td><strong>55:43:01</strong></td>
                                <td>12th</td>
                                <td>1542</td>
                            </tr>
                            <tr>
                                <td>London 2016</td>
                                <td><strong>05:43:01</strong></td>
                                <td>3 out of 10</td>
                                <td><strong>55:43:01</strong></td>
                                <td>11th</td>
                                <td>1542</td>
                            </tr>
                            <tr>
                                <td>London 2016</td>
                                <td><strong>05:43:01</strong></td>
                                <td>3 out of 10</td>
                                <td><strong>55:43:01</strong></td>
                                <td>15th</td>
                                <td>1542</td>
                            </tr>
                            <tr>
                                <td>London 2016</td>
                                <td><strong>05:43:01</strong></td>
                                <td>3 out of 10</td>
                                <td><strong>55:43:01</strong></td>
                                <td>8th</td>
                                <td>1542</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="edit-wrapper">
                <div class="section">
                    <div class="edit-col-small">
                        <div class="profile-img">
                            <label>Profile Picture</label>
                            <img src="http://fakeimg.pl/300x300" alt="">
                            <div class="btn btn-dark-grey btn-tiny">Upload New</div>
                        </div>
                    </div>
                    <div class="edit-col-large">
                        <h3>Mo Farah</h3>
                        <div class="btn btn-orange btn-small save-btn">Save</div>

                        <div class="notification required hide">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>

                            <p><strong>Important:</strong> Please make sure all required fields have been filled in and there are no validation errors.</p>

                            <span class="close">Got it!<i class="fa fa-times" aria-hidden="true"></i></span>
                        </div>

                        <div class="form">
                            <div class="input-wrapper edit-element required">
                                <input class="input" type="text" placeholder="First Name *">
                                <label>First Name</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">That's an invalid First Name.</div>
                            </div>

                            <div class="input-wrapper edit-element required">
                                <input class="input" type="text" placeholder="Last Name *">
                                <label>Last Name</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">That's an invalid Last Name.</div>
                            </div>

                            <div class="input-wrapper edit-element required">
                                <input class="input" type="email" placeholder="Email *">
                                <label>Email</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">That's an invalid email.</div>
                            </div>

                            <div class="input-wrapper edit-element">
                                <input class="input" type="tel" placeholder="Contact Phone" pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$">
                                <label>Contact Phone</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">That's an invalid phone number.</div>
                            </div>

                            <div class="input-wrapper edit-element">
                                <select class="input" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <label>Gender</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">That gender doesn't exist.</div>
                            </div>

                            <div class="input-wrapper edit-element required">
                                <input class="input" type="text" placeholder="Month & Year of Birth e.g. 12/1977 *" pattern="(0[1-9]|1[012])[- /.](19|20)\d\d">
                                <label>Month & Year of Birth</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">That's an invalid date.</div>
                            </div>

                            <div class="input-wrapper edit-element">
                                <select class="input" name="tshirt size">
                                    <option value="large">Large</option>
                                    <option value="medium">Medium</option>
                                    <option value="small">Small</option>
                                </select>
                                <label>T-Shirt Size</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">That size doesn't exist.</div>
                            </div>

                            <div class="input-wrapper edit-element full-width textarea">
                                <textarea class="input" placeholder="Why you're passionate about taking part in the Square Mile Relay"></textarea>
                                <label>Why you're passionate about taking part in the Square Mile Relay</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">Your reason's invalid.</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="section-grey">
                    <div class="edit-col-small"></div>
                    <div class="edit-col-large">
                        <div class="form">
                            <div class="input-wrapper edit-element">
                                <input class="input" type="text" placeholder="Address Line 1">
                                <label>Address Line 1</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">That address doesn't exist.</div>
                            </div>
                            <div class="input-wrapper edit-element">
                                <input class="input" type="text" placeholder="Address Line 2">
                                <label>Address Line 2</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">That address doesn't exist.</div>
                            </div>
                            <div class="input-wrapper edit-element">
                                <input class="input" type="text" placeholder="City">
                                <label>City</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">That city doesn't exist.</div>
                            </div>
                            <div class="input-wrapper edit-element">
                                <input class="input" type="text" placeholder="Postcode/ZIP Code" pattern="((\d{5}([\-]\d{4})?)|[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2})">
                                <label>Postcode/ZIP Code</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">That Postcode/ZIP doesn't exist.</div>
                            </div>
                            <div class="input-wrapper edit-element">
                                <select class="input" name="country">
                                    <option value="country">Country 1</option>
                                    <option value="country">Country 2</option>
                                    <option value="country">Country 3</option>
                                </select>
                                <label>Country</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">That country doesn't exist.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="edit-col-small"></div>
                    <div class="edit-col-large">
                        <div class="form">
                            <div class="input-wrapper edit-element">
                                <input class="input" type="text" placeholder="Company">
                                <label>Company</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">That company doesn't exist.</div>
                            </div>
                            <div class="input-wrapper edit-element">
                                <input class="input" type="text" placeholder="Job Title">
                                <label>Job Title</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">That address doesn't exist.</div>
                            </div>
                            <div class="input-wrapper edit-element">
                                <select class="input" name="hear about us">
                                    <option value="option">Option 1</option>
                                    <option value="option">Option 2</option>
                                    <option value="option">Option 3</option>
                                </select>
                                <label>How did you hear about us?</label>
                                <i class="fa validation-icon" aria-hidden="true"></i>
                                <div class="msg valid">Great!</div>
                                <div class="msg in-valid">That option doesn't exist.</div>
                            </div>

                            <div class="input-wrapper edit-element checkbox first required">
                                <input class="input" id="checkbox-1" type="checkbox">
                                <label for="checkbox-1"></label>
                                <p>I agree to the Square Mile Relay Terms and Conditions and Injury Waiver</p>
                            </div>

                            <div class="input-wrapper edit-element checkbox">
                                <input class="input" id="checkbox-2" type="checkbox">
                                <label for="checkbox-2"></label>
                                <p>I would like to receive information from Bloomberg</p>
                            </div>

                            <div class="input-wrapper edit-element checkbox">
                                <input class="input" id="checkbox-3" type="checkbox">
                                <label for="checkbox-3"></label>
                                <p>I'm happy to contacted by 3rd parties</p>
                            </div>

                            <div class="btn btn-orange btn-small save-btn bottom">Save</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-wrapper" data-tab="2">
            <h5>My Teams</h5>
        </div>

        <div class="tab-wrapper" data-tab="3">
            <h5>Orders &amp; Billing</h5>
        </div>
    </section>


<?php include 'includes/structure/end.php'; ?>
