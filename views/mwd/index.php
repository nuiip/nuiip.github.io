<?php
use yii\bootstrap5\Html;

$this->title = 'My Wedding';

?>
<!-- About Wrapper Start -->
<div class="wd_scroll_wrap" id="down">
    <div class="wd_about_wrapper wd_toppadder90 wd_bottompadder70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wd_timer_wrapper">
                        <div class="wd_center_words">
                            <h4>Don't miss it!</h4>
                        </div>

                        <!-- START OF FLIP EXAMPLE PRESET -->
                        <div class="tick" data-did-init="handleTickInit">
                            <div data-repeat="true" data-layout="horizontal center fit" data-transform="preset(d, h, m, s) -> delay">
                                <div class="tick-group">
                                    <div data-key="value" data-repeat="true" data-transform="pad(00) -> split -> delay">
                                        <span data-view="flip"></span>
                                    </div>
                                    <span data-key="label" data-view="text" class="tick-label"></span>
                                </div>
                            </div>
                        </div>

                        <script>
                            function handleTickInit(tick) {
                                Tick.count.down('2025-05-20 09:00:00').onupdate = function (value) {
                                    tick.value = value;
                                };
                            }
                        </script>
                        <!-- END OF FLIP EXAMPLE PRESET -->
                        
                        <div class="wd_center_words">
                            <h4>until we get married!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Wrapper End -->
<!-- Story Wrapper Start -->
<div class="wd_scroll_wrap">
    <div class="wd_story_wrapper wd_toppadder90 wd_bottompadder90">
        <div class="wd_overlay"></div>
        <div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="wd_testimonial_slider">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="wd_testimo_box">
								<p>“ Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. ”</p>
								<h4>(Qs. Ar Rum ayat 21)</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        </div>
    </div>
</div>
<!-- About Wrapper Start -->
<div section-scroll='1' class="wd_scroll_wrap" id="down">
    <div class="wd_about_wrapper wd_toppadder90 wd_bottompadder70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wd_heading wow fadeInDown" data-wow-delay="0.3s">
                        <h4>are getting married!</h4>
                        <h1>Groom and Bride</h1>
                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/heading.png', ['alt' => 'Heading', 'class' => 'img-responsive']) ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="wd_about_infobox wd_toppadder20">
                        <div class="wd_about_infobox_img">
                            <span>
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/line.png', ['alt' => 'Line', 'class' => 'img-responsive']) ?>
                            </span>
                            <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/groom.png', ['alt' => 'Groom', 'class' => 'img-responsive']) ?>
                        </div>
                        <h2>Iip Priatna</h2>
                        <p>(S/o Mrs. Jeniffer & Mr. Clark Wills)</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-21 col-xs-12 col-lg-push-4 col-md-push-4 col-sm-push-0">
                    <div class="wd_about_infobox wd_toppadder20">
                        <div class="wd_about_infobox_img">
                            <span>
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/line.png', ['alt' => 'Line', 'class' => 'img-responsive']) ?>
                            </span>
                            <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/groom.png', ['alt' => 'Groom', 'class' => 'img-responsive']) ?>
                        </div>
                        <h2>Fitria Ayuni Dewi</h2>
                        <p>(D/o Mrs. Merry & Mr. Jhon Bellucci)</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-pull-4 col-md-pull-4 col-sm-pull-0">
                    <div class="wd_about_infobox">
                        <h1>Invitation</h1>
                        <div class="wd_about_infobox_date">
                            <p>We inviting you and your family on</p>
                            <h3>Saturday</h3>
                            <h2>20 May 2018</h2>
                            <p>At St. Thomas's Church, London, U.K.</p>
                        </div>
                        <div class="wd_btn wd_single_index_menu_rsvp">
                            <a href="4">rsvp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Wrapper End -->
<!-- Story Wrapper Start -->
<div section-scroll='2' class="wd_scroll_wrap">
    <div class="wd_story_wrapper wd_toppadder90 wd_bottompadder90">
        <div class="wd_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wd_heading wow fadeInDown" data-wow-delay="0.3s">
                        <h4>Jenny & Mark</h4>
                        <h1>Our true love story</h1>
                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/heading.png', ['alt' => 'Heading', 'class' => 'img-responsive']) ?>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wd_story_covers">
                        <div class="wd_story_line"></div>
                        <div class="wd_story_covers_box_left">
                            <div class="wd_story_dot"><span></span></div>
                            <div class="wd_story_covers_box_img">
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/story_1.jpg', ['alt' => 'Story']) ?>
                            </div>
                            <div class="wd_story_covers_box_datails">
                                <span>20 May 2010</span>
                                <h1>Our First Met</h1>
                                <span>That day changed Life</span>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor...</p>
                            </div>
                        </div>
                        <div class="wd_story_covers_box_right">
                            <div class="wd_story_dot"><span></span></div>
                            <div class="wd_story_covers_box_datails">
                                <span>20 May 2010</span>
                                <h1>Our First Dating</h1>
                                <span>Our Best Dinner Ever</span>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor...</p>
                            </div>
                            <div class="wd_story_covers_box_img">
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/story_2.jpg', ['alt' => 'Story']) ?>
                            </div>
                        </div>
                        <div class="wd_story_covers_box_left">
                            <div class="wd_story_dot"><span></span></div>
                            <div class="wd_story_covers_box_img">
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/story_3.jpg', ['alt' => 'Story']) ?>
                            </div>
                            <div class="wd_story_covers_box_datails">
                                <span>20 May 2010</span>
                                <h1>How he Proposed</h1>
                                <span>That was so wonderful</span>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor...</p>
                            </div>
                        </div>
                        <div class="wd_story_covers_box_right">
                            <div class="wd_story_dot"><span></span></div>
                            <div class="wd_story_covers_box_datails">
                                <span>20 May 2010</span>
                                <h1>Our First Kiss</h1>
                                <span>Feeling Awesome :)</span>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor...</p>
                            </div>
                            <div class="wd_story_covers_box_img">
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/story_4.jpg', ['alt' => 'Story']) ?>
                            </div>
                        </div>
                        <div class="wd_story_covers_box_left">
                            <div class="wd_story_dot"><span></span></div>
                            <div class="wd_story_covers_box_img">
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/story_5.jpg', ['alt' => 'Story']) ?>
                            </div>
                            <div class="wd_story_covers_box_datails">
                                <span>20 May 2010</span>
                                <h1>Now We Together</h1>
                                <span>We're waiting for the best</span>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Story Wrapper End -->
<!-- Event Wrapper Start -->
<div section-scroll='3' class="wd_scroll_wrap">
    <div class="wd_event_wrapper wd_toppadder90 wd_bottompadder50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wd_heading wow fadeInDown" data-wow-delay="0.3s">
                        <h4>Ceremony & party</h4>
                        <h1>THE WEDDING EVENT</h1>
                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/heading.png', ['alt' => 'Heading', 'class' => 'img-responsive']) ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="wd_event_infobox">
                        <h2>Main Ceremony</h2>
                        <h1>7:30 pm</h1>
                        <span>St. Thomas's Church, London, U.K.</span>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor vel velit auctor aliquet. Aenean sollicitudin, lorem quis <a href="#">Read More...</a></p>
                        <div class="clearfix"></div>
                        <a href="#">
                            <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/map.png', ['alt' => 'Map', 'class' => 'img-responsive']) ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-push-4 col-md-push-4 col-sm-push-0">
                    <div class="wd_event_infobox">
                        <h2>Wedding Party</h2>
                        <h1>7:30 pm</h1>
                        <span>St. Thomas's Church, London, U.K.</span>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor vel velit auctor aliquet. Aenean sollicitudin, lorem quis <a href="#">Read More...</a></p>
                        <div class="clearfix"></div>
                        <a href="#">
                            <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/map.png', ['alt' => 'Map', 'class' => 'img-responsive']) ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-pull-4 col-md-pull-4 col-sm-pull-0">
                    <div class="wd_event_infobox">
                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/event_img.gif', ['alt' => 'Event Image']) ?>
                        <div class="wd_btn wd_single_index_menu_rsvp">
                            <a href="4">rsvp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Event Wrapper End -->
<!-- Guest Wrapper Start -->
<div section-scroll='4' class="wd_scroll_wrap" id="wd_contect_wrapper">
    <div class="wd_guest_wrapper wd_toppadder90">
        <div class="wd_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wd_heading wow fadeInDown" data-wow-delay="0.3s">
                        <h4>Rsvp</h4>
                        <h1>Be our guest!</h1>
                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/heading.png', ['alt' => 'Heading', 'class' => 'img-responsive']) ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wd_guest_infobox">
                        <h2>You’re Invited <span>Jenny & Mark</span> Wedding</h2>
                        <h4>Please Rsvp Before 15 May 2017</h4>
                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor This is Photoshop's version  of Lorem Ipsum.</p>
                        <h2><span>Gift Registry</span></h2>
                        <p>What we want most for our wedding is to have our friends and family there to celebrate the occasion with us. If you would like to get us something, w’d love that too. you can find our registries here :</p>
                    </div>
                    <div class="wd_guest_slider">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/gue1.png', ['alt' => 'Slider', 'class' => 'img-responsive']) ?>
                            </div>
                            <div class="item">
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/gue2.png', ['alt' => 'Slider', 'class' => 'img-responsive']) ?>
                            </div>
                            <div class="item">
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/gue3.png', ['alt' => 'Slider', 'class' => 'img-responsive']) ?>
                            </div>
                            <div class="item">
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/gue1.png', ['alt' => 'Slider', 'class' => 'img-responsive']) ?>
                            </div>
                            <div class="item">
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/gue2.png', ['alt' => 'Slider', 'class' => 'img-responsive']) ?>
                            </div>
                            <div class="item">
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/gue3.png', ['alt' => 'Slider', 'class' => 'img-responsive']) ?>
                            </div>
                            <div class="item">
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/gue1.png', ['alt' => 'Slider', 'class' => 'img-responsive']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wd_guest_formbox">
                        <span>Are You Attending?</span>
                        <h4>Rsvp Here!</h4>
                        <div class="wd_guest_form">
                            <div class="row">
                                <form>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label>Full Name :</label>
                                        <input type="text" name="full_name" placeholder="Full Name" class="require">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label>Email :</label>
                                        <input type="text" name="email" placeholder="Email" class="require" data-valid="email" data-error="Email should be valid.">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label>Guests :</label>
                                        <select name="guest_no" class="require">
                                            <option value="0">00</option>
                                            <option value="1">01</option>
                                            <option value="2">02</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label>Event :</label>
                                        <select name="event_name" class="require">
                                            <option value="all">All Events</option>
                                            <option value="party">Party Events</option>
                                            <option value="marriage">Marriage Events</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="response"></div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="wd_btn">
                                            <button type="button" class="submitForm" form-type="inquiry">Send a Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Family Wrapper Start -->
<div section-scroll='5' class="wd_scroll_wrap">
    <div class="wd_family_wrapper wd_toppadder90 wd_bottompadder90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wd_heading wow fadeInDown" data-wow-delay="0.3s">
                        <h4>most imp. persons</h4>
                        <h1>Lovable Family</h1>
                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/heading.png', ['alt' => 'Heading', 'class' => 'img-responsive']) ?>
                    </div>
                </div>
                <div class="wd_family_tabbox">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#groom" aria-controls="groom" role="tab" data-toggle="tab">
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/tab1.jpg', ['alt' => 'Groom', 'class' => 'img-responsive']) ?>
                                <p>Mark</p>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#bride" aria-controls="bride" role="tab" data-toggle="tab">
                                <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/tab2.jpg', ['alt' => 'Bride', 'class' => 'img-responsive']) ?>
                                <p>Jenny</p>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="groom">
                            <div class="wd_family_slider">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wd_family_infobox">
                                                <div class="wd_family_infobox_img">
                                                    <span>
                                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/line2.png', ['alt' => 'Line', 'class' => 'img-responsive']) ?>
                                                    </span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/fm1.jpg', ['alt' => 'Family', 'class' => 'img-responsive']) ?>
                                                </div>
                                                <h2>Mr. Clark Wills</h2>
                                                <p>(Mark’s Father)</p>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wd_family_infobox">
                                                <div class="wd_family_infobox_img">
                                                    <span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/line2.png', ['alt' => 'Line', 'class' => 'img-responsive']) ?>
                                                    </span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/fm2.jpg', ['alt' => 'Family', 'class' => 'img-responsive']) ?>
                                                </div>
                                                <h2>Jeniffer Wills</h2>
                                                <p>(Mark’s Mother)</p>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wd_family_infobox">
                                                <div class="wd_family_infobox_img">
                                                    <span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/line2.png', ['alt' => 'Line', 'class' => 'img-responsive']) ?>
                                                    </span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/fm3.jpg', ['alt' => 'Family', 'class' => 'img-responsive']) ?>
                                                </div>
                                                <h2>Carolyn</h2>
                                                <p>(Mark’s Sister)</p>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wd_family_infobox">
                                                <div class="wd_family_infobox_img">
                                                    <span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/line2.png', ['alt' => 'Line', 'class' => 'img-responsive']) ?>
                                                    </span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/fm3.jpg', ['alt' => 'Family', 'class' => 'img-responsive']) ?>
                                                </div>
                                                <h2>Donald</h2>
                                                <p>(Mark’s Brother)</p>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wd_family_infobox">
                                                <div class="wd_family_infobox_img">
                                                    <span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/line2.png', ['alt' => 'Line', 'class' => 'img-responsive']) ?>
                                                    </span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/fm1.jpg', ['alt' => 'Family', 'class' => 'img-responsive']) ?>
                                                </div>
                                                <h2>Mr. Clark Wills</h2>
                                                <p>(Mark’s Father)</p>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="bride">
                            <div class="wd_family_slider">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wd_family_infobox">
                                                <div class="wd_family_infobox_img">
                                                    <span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/line2.png', ['alt' => 'Line', 'class' => 'img-responsive']) ?>
                                                    </span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/fm5.jpg', ['alt' => 'Family', 'class' => 'img-responsive']) ?>
                                                </div>
                                                <h2>Mr. Clark Wills</h2>
                                                <p>(Jenny’s Father)</p>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wd_family_infobox">
                                                <div class="wd_family_infobox_img">
                                                    <span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/line2.png', ['alt' => 'Line', 'class' => 'img-responsive']) ?>
                                                    </span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/fm6.jpg', ['alt' => 'Family', 'class' => 'img-responsive']) ?>
                                                </div>
                                                <h2>Jeniffer Wills</h2>
                                                <p>(Jenny’s Mother)</p>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wd_family_infobox">
                                                <div class="wd_family_infobox_img">
                                                    <span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/line2.png', ['alt' => 'Line', 'class' => 'img-responsive']) ?>
                                                    </span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/fm7.jpg', ['alt' => 'Family', 'class' => 'img-responsive']) ?>
                                                </div>
                                                <h2>Carolyn</h2>
                                                <p>(Jenny’s Sister)</p>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wd_family_infobox">
                                                <div class="wd_family_infobox_img">
                                                    <span>                                                        
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/line2.png', ['alt' => 'Line', 'class' => 'img-responsive']) ?>
                                                    </span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/fm8.jpg', ['alt' => 'Family']) ?>
                                                </div>
                                                <h2>Donald</h2>
                                                <p>(Jenny’s Brother)</p>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wd_family_infobox">
                                                <div class="wd_family_infobox_img">
                                                    <span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/line2.png', ['alt' => 'Line', 'class' => 'img-responsive']) ?>
                                                    </span>
                                                    <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/fm5.jpg', ['alt' => 'Family', 'class' => 'img-responsive']) ?>
                                                </div>
                                                <h2>Mr. Clark Wills</h2>
                                                <p>(Jenny’s Father)</p>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Family Wrapper End -->
<!-- Gallery Wrapper Start -->
<div section-scroll='6' class="wd_scroll_wrap">
    <div class="wd_gallery_wrapper wd_toppadder90 wd_bottompadder90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wd_heading wow fadeInDown" data-wow-delay="0.3s">
                        <h4>Jenny & Mark</h4>
                        <h1>memorable photo gallery</h1>
                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/heading.png', ['alt' => 'Heading', 'class' => 'img-responsive']) ?>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wd_gallery_slider popup-gallery">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="wd_gallery_slide">
                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/image_1.jpg', ['alt' => 'Wedding']) ?>
                                        <div class="ast_glr_overlay">
                                            <p>Making A Love</p>
                                            <a href="images/content/image_1_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="wd_gallery_slide">
                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/image_small_1.jpg', ['alt' => 'Wedding']) ?>
                                        <div class="ast_glr_overlay">
                                            <p>Making A Love</p>
                                            <a href="images/content/image_small_1_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="wd_gallery_slide">
                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/image_small_2.jpg', ['alt' => 'Wedding']) ?>
                                        <div class="ast_glr_overlay">
                                            <p>Making A Love</p>
                                            <a href="images/content/image_small_2_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="wd_gallery_slide">
                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/image_2.jpg', ['alt' => 'Wedding']) ?>
                                        <div class="ast_glr_overlay">
                                            <p>Making A Love</p>
                                            <a href="images/content/image_2_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="wd_gallery_slide">
                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/image_small_3.jpg', ['alt' => 'Wedding']) ?>
                                        <div class="ast_glr_overlay">
                                            <p>Making A Love</p>
                                            <a href="images/content/image_small_3_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="wd_gallery_slide">
                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/image_small_4.jpg', ['alt' => 'Wedding']) ?>
                                        <div class="ast_glr_overlay">
                                            <p>Making A Love</p>
                                            <a href="images/content/image_small_4_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="wd_gallery_slide">
                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/image_3.jpg', ['alt' => 'Wedding']) ?>
                                        <div class="ast_glr_overlay">
                                            <p>Making A Love</p>
                                            <a href="images/content/image_3_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="wd_gallery_slide">
                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/image_small_5.jpg', ['alt' => 'Wedding']) ?>
                                        <div class="ast_glr_overlay">
                                            <p>Making A Love</p>
                                            <a href="images/content/image_small_5_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="wd_gallery_slide">
                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/image_small_6.jpg', ['alt' => 'Wedding']) ?>
                                        <div class="ast_glr_overlay">
                                            <p>Making A Love</p>
                                            <a href="images/content/image_small_6_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="wd_gallery_slide">
                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/image_1.jpg', ['alt' => 'Wedding']) ?>
                                        <div class="ast_glr_overlay">
                                            <p>Making A Love</p>
                                            <a href="images/content/image_1_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="wd_gallery_slide">
                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/image_small_1.jpg', ['alt' => 'Wedding']) ?>
                                        <div class="ast_glr_overlay">
                                            <p>Making A Love</p>
                                            <a href="images/content/image_small_1_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="wd_gallery_slide">
                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/image_small_2.jpg', ['alt' => 'Wedding']) ?>
                                        <div class="ast_glr_overlay">
                                            <p>Making A Love</p>
                                            <a href="images/content/image_small_2_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="wd_gallery_slide">
                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/image_2.jpg', ['alt' => 'Wedding']) ?>
                                        <div class="ast_glr_overlay">
                                            <p>Making A Love</p>
                                            <a href="images/content/image_2_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="wd_gallery_slide">
                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/image_small_3.jpg', ['alt' => 'Wedding']) ?>
                                        <div class="ast_glr_overlay">
                                            <p>Making A Love</p>
                                            <a href="images/content/image_small_3_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="wd_gallery_slide">
                                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/image_small_4.jpg', ['alt' => 'Wedding']) ?>
                                        <div class="ast_glr_overlay">
                                            <p>Making A Love</p>
                                            <a href="images/content/image_small_4_zoom.jpg" title=""><i class="fa fa-expand" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Wrapper End -->
<!-- Blog Wrapper Start -->
<div section-scroll='7' class="wd_scroll_wrap">
    <div class="wd_blog_wrapper wd_toppadder90 wd_bottompadder40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wd_heading wow fadeInDown" data-wow-delay="0.3s">
                        <h4>Wedding Journal</h4>
                        <h1>from our blog</h1>
                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/heading.png', ['alt' => 'Heading', 'class' => 'img-responsive']) ?>
                    </div>
                </div>
                <div class="wd_blog_box">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="wd_blog_img">
                            <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/blog1.jpg', ['alt' => 'Blog']) ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="wd_blog_info">
                            <h3>Planning Honeymoon Trip</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> 20 May 2017</a></li>
                                <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 240 View</a></li>
                                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 143 Likes</a></li>
                            </ul>
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit..</p>
                            <div class="wd_btn">
                                <a href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wd_blog_box">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-push-6 col-md-push-6 col-sm-push-6">
                        <div class="wd_blog_img">
                            <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/blog2.jpg', ['alt' => 'Blog']) ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-pull-6 col-md-pull-6 col-sm-pull-6">
                        <div class="wd_blog_info">
                            <h3>Surprises For Guests</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> 20 May 2017</a></li>
                                <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 240 View</a></li>
                                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 143 Likes</a></li>
                            </ul>
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit..</p>
                            <div class="wd_btn">
                                <a href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wd_blog_box">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="wd_blog_img">
                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/blog3.jpg', ['alt' => 'Blog']) ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="wd_blog_info">
                            <h3>Bachelor Party!</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> 20 May 2017</a></li>
                                <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 240 View</a></li>
                                <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 143 Likes</a></li>
                            </ul>
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit..</p>
                            <div class="wd_btn">
                                <a href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blo Wrapper End -->
<!-- Contact Wrapper Start -->
<div section-scroll='8' class="wd_scroll_wrap">
    <div class="wd_contact_wrapper wd_toppadder90 wd_bottompadder90">
        <div class="wd_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wd_heading wow fadeInDown" data-wow-delay="0.3s">
                        <h4>If Any Query</h4>
                        <h1>Contact Us</h1>
                        <?= Html::img('@web/templates/mwd/weddingeventhtml-1/images/content/heading.png', ['alt' => 'Heading', 'class' => 'img-responsive']) ?>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                    <div class="wd_contact_form">
                        <div class="row">
                            <form>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="full_name" placeholder="Full Name" class="require">
                                    <input type="text" name="email" placeholder="Email" class="require" data-valid="email" data-error="Email should be valid.">
                                    <input type="text" name="contact_no" placeholder="Phone" class="require">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <textarea rows="7" name="message" placeholder="Message" class="require"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="response"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="wd_btn">
                                        <button type="button" class="submitForm" form-type="contact">Send a Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Wrapper End -->
