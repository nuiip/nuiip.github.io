<?php

/** @var yii\web\View $this */

use yii\helpers\Url;
use yii\bootstrap5\Html;
$this->title = 'My Page';
?>


<!-- /CV Content Side -->
<div class="cv__content">
    
    <section id="hero-header" class="section_header">
        <div class="content">
            <div class="left_hero_header">
                <div class="circle">
                    <div class="bg_img" data-bg-img="<?=Url::to('@web/templates/nuiip/img/avatar/fp-2.png');?>"></div>
                    <?= Html::img('@web/templates/nuiip/img/thumb/square.jpg') ?>
                    <div class="circle_holder_blue"><span></span></div>
                    <div class="circle_holder_orange"><span></span></div>
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="right_hero_header">
                <div class="my_self">
                    <h4>Hello! I'm a</h4>
                    <h2>
                        <!-- It is animation title. You can change animation variation by changing extra class to one of next classes: zoom, rotate-1, letters type, letters rotate-2, loading-bar, slide, clip, letters rotate-3, letters scale, push. cd-headline class can not be removed.  -->
                        <span class="cd-headline clip">
                            <span class="cd-words-wrapper">
                                <b class="is-visible">Developer</b>
                                <b>Freelancer</b>
                                <b>Beauty Vloger</b>
                            </span>
                        </span>
                    </h2>
                </div>
            </div>
        </div>
    </section>


    <!-- CV: Biography Section -->
    <section id="cv_biography">
        <div class="section_title">
            <h3>Biography</h3>
        </div>
        <p>I'm a Freelancer Front-end Developer with over 12 years of experience. I'm from San Francisco. I code and create web elements for amazing people around the world. I like work with new people. New people are new experiences.</p>
        <div class="fn_cs_info_items">
            <ul>
                <li><p>Name: <span>Iip Priatna</span></p></li>
                <li><p>Birthday: <span>March 22, 1994</span></p></li>
                <li><p>Languages: <span>Indonesian, English</span></p></li>
                <li><p>Age: <span>29 Years</span></p></li>
                <li><p>Nationality: <span>Indonesia</span></p></li>
                <li><p>Adress: <span>Majalengka, West Java</span></p></li>
                <li><p>Telegram: <span>Available</span></p></li>
                <li><p>Phone: <span><a href="tel:+6283826777777">(+62) 838 2677 7777</a></span></p></li>
                <li><p>Skype: <span>Iip. P</span></p></li>
                <li><p>Email: <span><a href="mailto:ipriatna94@gmail.com">ipriatna94@gmail.com</a></span></p></li>
            </ul>
        </div>
    </section>
    <!-- /CV: Biography Section -->


    <!-- CV: Education Section -->
    <section id="cv_education">
        <div class="section_title">
            <h3>Education</h3>
        </div>
        <div class="fn_cs_boxed_list">
            <ul>
                <li>
                    <div class="item">
                        <div class="item_top">
                            <h5>Frenify University</h5>
                            <span>( 2014 — 2017 )</span>
                        </div>
                        <h3>Computer Science</h3>
                        <p>Adipisicing Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="item_top">
                            <h5>Edu University</h5>
                            <span>( 2011 — 2014 )</span>
                        </div>
                        <h3>Master Degree</h3>
                        <p>Adipisicing Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="item_top">
                            <h5>Clolumbia College</h5>
                            <span>( 2007 — 2011 )</span>
                        </div>
                        <h3>Bachelor Degree</h3>
                        <p>Adipisicing Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- /CV: Education Section -->


    <!-- CV: Experience Section -->
    <section id="cv_experience">
        <div class="section_title">
            <h3>Experience</h3>
        </div>
        <div class="fn_cs_boxed_list">
            <ul>
                <li>
                    <div class="item">
                        <div class="item_top">
                            <h5>Frenify  LLC</h5>
                            <span>( 2018 — Today )</span>
                        </div>
                        <h3>Sr. Front-end Engineer</h3>
                        <p>Adipisicing Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="item_top">
                            <h5>Google  LLC</h5>
                            <span>( 2016 — 2018 )</span>
                        </div>
                        <h3>Front-end Developer</h3>
                        <p>Adipisicing Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="item_top">
                            <h5>Twitter  LLC</h5>
                            <span>( 2016 — 2011 )</span>
                        </div>
                        <h3>Graphic Designer</h3>
                        <p>Adipisicing Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- /CV: Experience Section -->


    <!-- CV: Skills Section -->
    <section id="cv_skills">
        <div class="section_title">
            <h3>Professionality</h3>
        </div>
        <div class="fn_cs_progress_bar">
            <div class="progress_item" data-value="90">
                <div class="item_in">
                    <h3 class="progress_title">Adobe Photoshop</h3>
                    <span class="progress_percent"></span>
                    <div class="progress_bg"></div>
                </div>
            </div>

            <div class="progress_item" data-value="95">
                <div class="item_in">
                    <h3 class="progress_title">HTML5 &amp; CSS3</h3>
                    <span class="progress_percent"></span>
                    <div class="progress_bg"></div>
                </div>
            </div>

            <div class="progress_item" data-value="80">
                <div class="item_in">
                    <h3 class="progress_title">WordPress</h3>
                    <span class="progress_percent"></span>
                    <div class="progress_bg"></div>
                </div>
            </div>

            <div class="progress_item" data-value="85">
                <div class="item_in">
                    <h3 class="progress_title">Adobe Illustrator</h3>
                    <span class="progress_percent"></span>
                    <div class="progress_bg"></div>
                </div>
            </div>

        </div>
    </section>
    <!-- /CV: Skills Section -->


    <!-- CV: Services Section -->
    <section id="cv_services">
        <div class="section_title">
            <h3>Services</h3>
        </div>
        <p>I help ambitious businesses like yours generate more profits by building awareness, driving web traffic, connecting with customers and growing overall sales.</p>
        <div class="fn_cs_service_list">
            <ul>
                <li>
                    <div class="item">
                        <div class="item_left">
                            <h3>Websites &amp; platforms</h3>
                            <p>I build brands through cultural insights &amp; strategic vision. Custom crafted business solutions.</p>
                        </div>
                        <div class="item_right">
                            <p>Starts from</p>
                            <h3>$500</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="item_left">
                            <h3>Mobile applications</h3>
                            <p>Custom marketing solutions. Get your business on the next level. We provide worldwide marketing.</p>
                        </div>
                        <div class="item_right">
                            <p>Starts from</p>
                            <h3>$450</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="item_left">
                            <h3>Strategy &amp; branding</h3>
                            <p>Design direction for business. Get your business on the next level. We help to create great experiences.</p>
                        </div>
                        <div class="item_right">
                            <p>Starts from</p>
                            <h3>$500</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="item_left">
                            <h3>Design conspect</h3>
                            <p>Design direction for business. Get your business on the next level. We help to create great experiences.</p>
                        </div>
                        <div class="item_right">
                            <p>Starts from</p>
                            <h3>$450</h3>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- /CV: Services Section -->
    
    
    <!-- CV: Portfolio Section-->
    <section id="cv_portfolio">
        <div class="section_title">
            <h3>Portfolio</h3>
        </div>
        
        <!-- Portfolio Shortcode -->
        <div class="fn_cs_portfolio">
        
            <!-- Portfolio Filter -->
            <div class="portfolio_filter">
                <ul>
                    <li><a href="#" class="current" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".youtube">Youtube</a></li>
                    <li><a href="#" data-filter=".vimeo">Vimeo</a></li>
                    <li><a href="#" data-filter=".soundcloud">Soundcloud</a></li>
                    <li><a href="#" data-filter=".popup">Popup</a></li>
                </ul>
            </div>
            <!-- /Portfolio Filter -->
            
            
            <!-- Portfolio List -->
            <div class="portfolio_list">
                <ul class="gallery_zoom grid">
                    <li class="youtube grid-item">
                        <div class="inner">
                            <div class="entry">
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas">
                                    <?= Html::img('@web/templates/nuiip/img/thumb/42-56jpg') ?>
                                    <div class="main" data-bg-img="<?=Url::to('@web/templates/nuiip/img/portfolio/1.jpg');?>"></div>
                                    <div class="mobile_title">
                                        <h3>Mockup Shape</h3>
                                        <span>Youtube</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="vimeo grid-item">
                        <div class="inner">
                            <div class="entry">
                                <a class="popup-vimeo" href="https://vimeo.com/337293658">
                                    <?= Html::img('@web/templates/nuiip/img/thumb/42-34.jpg') ?>
                                    <div class="main" data-bg-img="<?=Url::to('@web/templates/nuiip/img/portfolio/2.jpg');?>"></div>
                                    <div class="mobile_title">
                                        <h3>Ave Bottle</h3>
                                        <span>Vimeo</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="soundcloud grid-item">
                        <div class="inner">
                            <div class="entry">
                                <a class="soundcloude_link mfp-iframe audio" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/471954807&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true">
                                    <?= Html::img('@web/templates/nuiip/img/thumb/42-56.jpg') ?>
                                    <div class="main" data-bg-img="<?=Url::to('@web/templates/nuiip/img/portfolio/3.jpg');?>"></div>
                                    <div class="mobile_title">
                                        <h3>Magic Art</h3>
                                        <span>Soundcloud</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="popup grid-item">
                        <div class="inner">
                            <div class="entry">
                                <a class="zoom" href="<?=Url::to('@web/templates/nuiip/img/portfolio/5.jpg');?>">
                                    <?= Html::img('@web/templates/nuiip/img/thumb/42-56.jpg') ?>
                                    <div class="main" data-bg-img="<?=Url::to('@web/templates/nuiip/img/portfolio/5.jpg');?>"></div>
                                    <div class="mobile_title">
                                        <h3>Blue Lemon</h3>
                                        <span>Popup</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="popup grid-item">
                        <div class="inner">
                            <div class="entry">
                                <a class="zoom" href="<?=Url::to('@web/templates/nuiip/img/portfolio/4.jpg');?>">
                                    <?= Html::img('@web/templates/nuiip/img/thumb/42-34.jpg') ?>
                                    <div class="main" data-bg-img="<?=Url::to('@web/templates/nuiip/img/portfolio/4.jpg');?>"></div>
                                    <div class="mobile_title">
                                        <h3>Art Stone</h3>
                                        <span>Popup</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="popup grid-item">
                        <div class="inner">
                            <div class="entry">
                                <a class="zoom" href="<?=Url::to('@web/templates/nuiip/img/portfolio/6.jpg');?>">
                                    <?= Html::img('@web/templates/nuiip/img/thumb/42-34.jpg') ?>
                                    <div class="main" data-bg-img="<?=Url::to('@web/templates/nuiip/img/portfolio/6.jpg');?>"></div>
                                    <div class="mobile_title">
                                        <h3>Global Evolution</h3>
                                        <span>Popup</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /Portfolio List -->
            
        </div>
        <!-- /Portfolio Shortcode -->
        
    </section>
    <!-- /CV: Portfolio Section-->

    <!-- CV: Testimonials -->
    <section id="cv_testimonials">
        <div class="section_title">
            <h3>References</h3>
        </div>
        <p>A testimonial is effectively a review or recommendation from a client, letting other people know how your products or services benefitted them. We respect each client and help everyone with all our might.</p>

        <div class="fn_cs_testimonials">
            <ul>
                <li>
                    <div class="item">
                        <div class="item_left">
                            <p>One of the best. It works quite well for software development also. The design and ease of installation and customizing is exceptional. Many plaudits to the developers!</p>
                        </div>
                        <div class="item_right">
                            <div class="t_ava">
                                <div class="ava_in" data-bg-img="<?=Url::to('@web/templates/nuiip/img/testimonials/1.jpg');?>"></div>
                            </div>
                            <div class="t_name">
                                <p>OldPhot</p>
                            </div>
                            <div class="t_rating" data-stars="5">
                                <div class="rating_in">
                                    <div class="rating_active">
                                        <?= Html::img('@web/templates/nuiip/svg/five-stars.svg', ['class' => 'fn__svg']) ?>
                                    </div>
                                    <div class="rating_regular">
                                    <?= Html::img('@web/templates/nuiip/svg/five-stars.svg', ['class' => 'fn__svg']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="item_left">
                            <p>Very good design and code quality. The costumer support is excellent. They respond within minutes and solve problems on the fly. I sincerely recommend!</p>
                        </div>
                        <div class="item_right">
                            <div class="t_ava">
                                <div class="ava_in" data-bg-img="<?=Url::to('@web/templates/nuiip/img/testimonials/2.jpg');?>"></div>
                            </div>
                            <div class="t_name">
                                <p>Wuoh</p>
                            </div>
                            <div class="t_rating" data-stars="5">
                                <div class="rating_in">
                                    <div class="rating_active">
                                        <?= Html::img('@web/templates/nuiip/svg/five-stars.svg', ['class' => 'fn__svg']) ?>
                                    </div>
                                    <div class="rating_regular">
                                        <?= Html::img('@web/templates/nuiip/svg/five-stars.svg', ['class' => 'fn__svg']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="item_left">
                            <p>I Like the whole Theme, the design, customizability, features, etc. The support has been absolutely fantastic and friendly, helping me to solve any issue I was having.</p>
                        </div>
                        <div class="item_right">
                            <div class="t_ava">
                                <div class="ava_in" data-bg-img="<?=Url::to('@web/templates/nuiip/img/testimonials/3.jpg');?>"></div>
                            </div>
                            <div class="t_name">
                                <p>Bartolo</p>
                            </div>
                            <div class="t_rating" data-stars="5">
                                <div class="rating_in">
                                    <div class="rating_active">
                                        <?= Html::img('@web/templates/nuiip/svg/five-stars.svg', ['class' => 'fn__svg']) ?>
                                    </div>
                                    <div class="rating_regular">
                                        <?= Html::img('@web/templates/nuiip/svg/five-stars.svg', ['class' => 'fn__svg']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item">
                        <div class="item_left">
                            <p>The best theme in the world ;) Really love it. Support is amazing, and they always help me with my problems. To be honest - I have earlier other theme, but this is so good, that why I choose it</p>
                        </div>
                        <div class="item_right">
                            <div class="t_ava">
                                <div class="ava_in" data-bg-img="<?=Url::to('@web/templates/nuiip/img/testimonials/4.jpg');?>"></div>
                            </div>
                            <div class="t_name">
                                <p>Przemeknorek</p>
                            </div>
                            <div class="t_rating" data-stars="5">
                                <div class="rating_in">
                                    <div class="rating_active">
                                        <?= Html::img('@web/templates/nuiip/svg/five-stars.svg', ['class' => 'fn__svg']) ?>
                                    </div>
                                    <div class="rating_regular">
                                        <?= Html::img('@web/templates/nuiip/svg/five-stars.svg', ['class' => 'fn__svg']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


    </section>
    <!-- /CV: Testimonials -->
    
    
    <!-- CV: Clients Section -->
    <section id="clients" class="section_clients">
        <div class="section_title">
            <h3>Clients</h3>
        </div>
        <div class="clients_wrapper">
            <ul>
                <li>
                    <a href="#">
                        
                    <?= Html::img('@web/templates/nuiip/img/clients/1.png') ?>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <?= Html::img('@web/templates/nuiip/img/clients/2.png') ?>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <?= Html::img('@web/templates/nuiip/img/clients/3.png') ?>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <?= Html::img('@web/templates/nuiip/img/clients/4.png') ?>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <?= Html::img('@web/templates/nuiip/img/clients/5.png') ?>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <?= Html::img('@web/templates/nuiip/img/clients/6.png') ?>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <?= Html::img('@web/templates/nuiip/img/clients/7.png') ?>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <?= Html::img('@web/templates/nuiip/img/clients/8.png') ?>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- /CV: Clients Section -->
    
    
    <!-- CV: News Section -->
    <section id="tips" class="section_tips">
        <div class="section_title">
            <h3>Latest Articles</h3>
        </div>

        <div class="tips_content">
            <ul class="modal_items" data-from="blog" data-count="5">
                <li>
                    <div class="item modal_item" data-index="1">
                        <div class="item_left">
                            <p>November 18, 2021</p>
                            <h5><a href="#">Emotional Slider Animation in After Effects</a></h5>
                            <a href="#" class="read_more">Read More</a>
                            <div class="fn__hidden">
                                <p class="fn__cat">November 18, 2021</p>
                                <h3 class="fn__title">Emotional Slider Animation in After Effects</h3>
                                <div class="img_holder">
                                    <?= Html::img('@web/templates/nuiip/img/thumb/square.jpg') ?>
                                    <div class="abs_img" data-bg-img="<?=Url::to('@web/templates/nuiip/img/blog/1.jpg');?>"></div>
                                </div>
                                <p class="fn__desc">Sed ornare tellus a odio bibendum, at tristique sapien malesuada. Proin sagittis maximus accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque gravida quam sit amet elit varius tempor. Pellentesque purus eros, blandit eu mollis vel, commodo eget orci.</p>
                                <p class="fn__desc">Quisque dui metus, eleifend at enim ac, imperdiet sagittis dolor. Vestibulum ipsum quam, feugiat non velit sit amet, pulvinar varius nisl. Mauris tristique, ipsum sit amet lacinia congue, mauris magna tempus nibh, in mollis eros enim a tortor. Morbi enim arcu, tristique vitae mi nec, hendrerit pharetra metus. Phasellus id feugiat purus. In vel elit eu lacus ultrices feugiat. Etiam at aliquet mi. Nunc sit amet libero sit amet lectus pellentesque sagittis. Curabitur blandit ante quis erat dapibus viverra.</p>
                                <p class="fn__desc">Sed porttitor augue erat, vitae convallis odio viverra id. In nec finibus elit. Nullam ac sodales nunc, vel sagittis elit. Ut condimentum ex ipsum, eu ornare odio aliquam eu. Ut iaculis eros quam, eu bibendum tellus convallis quis. Donec sapien risus, consequat ut magna nec, interdum porta nisl. Vivamus pulvinar hendrerit finibus.</p>
                            </div>
                        </div>
                        <div class="item_right">
                            <div class="abs_img" data-bg-img="<?=Url::to('@web/templates/nuiip/img/blog/1.jpg');?>"></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item modal_item" data-index="2">
                        <div class="item_left">
                            <p>September 15, 2021</p>
                            <h5><a href="#">Principle Tutorial &amp; Onboarding Flow Animation</a></h5>
                            <a href="#" class="read_more">Read More</a>
                            <div class="fn__hidden">
                                <p class="fn__cat">September 15, 2021</p>
                                <h3 class="fn__title">Principle Tutorial &amp; Onboarding Flow Animation</h3>
                                <div class="img_holder">
                                    <?= Html::img('@web/templates/nuiip/img/thumb/square.jpg') ?>
                                    <div class="abs_img" data-bg-img="<?=Url::to('@web/templates/nuiip/img/blog/2.jpg');?>"></div>
                                </div>
                                <p class="fn__desc">Sed ornare tellus a odio bibendum, at tristique sapien malesuada. Proin sagittis maximus accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque gravida quam sit amet elit varius tempor. Pellentesque purus eros, blandit eu mollis vel, commodo eget orci.</p>
                                <p class="fn__desc">Quisque dui metus, eleifend at enim ac, imperdiet sagittis dolor. Vestibulum ipsum quam, feugiat non velit sit amet, pulvinar varius nisl. Mauris tristique, ipsum sit amet lacinia congue, mauris magna tempus nibh, in mollis eros enim a tortor. Morbi enim arcu, tristique vitae mi nec, hendrerit pharetra metus. Phasellus id feugiat purus. In vel elit eu lacus ultrices feugiat. Etiam at aliquet mi. Nunc sit amet libero sit amet lectus pellentesque sagittis. Curabitur blandit ante quis erat dapibus viverra.</p>
                                <p class="fn__desc">Sed porttitor augue erat, vitae convallis odio viverra id. In nec finibus elit. Nullam ac sodales nunc, vel sagittis elit. Ut condimentum ex ipsum, eu ornare odio aliquam eu. Ut iaculis eros quam, eu bibendum tellus convallis quis. Donec sapien risus, consequat ut magna nec, interdum porta nisl. Vivamus pulvinar hendrerit finibus.</p>
                            </div>
                        </div>
                        <div class="item_right">
                            <div class="abs_img" data-bg-img="<?=Url::to('@web/templates/nuiip/img/blog/2.jpg');?>"></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item modal_item" data-index="3">
                        <div class="item_left">
                            <p>September 03, 2021</p>
                            <h5><a href="#">Ordering Ballooon Bouquets UI Design and Animation</a></h5>
                            <a href="#" class="read_more">Read More</a>
                            <div class="fn__hidden">
                                <p class="fn__cat">September 03, 2021</p>
                                <h3 class="fn__title">Ordering Ballooon Bouquets UI Design and Animation</h3>
                                <div class="img_holder">
                                    <?= Html::img('@web/templates/nuiip/img/thumb/square.jpg') ?>
                                    <div class="abs_img" data-bg-img="<?=Url::to('@web/templates/nuiip/img/blog/3.jpg');?>"></div>
                                </div>
                                <p class="fn__desc">Sed ornare tellus a odio bibendum, at tristique sapien malesuada. Proin sagittis maximus accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque gravida quam sit amet elit varius tempor. Pellentesque purus eros, blandit eu mollis vel, commodo eget orci.</p>
                                <p class="fn__desc">Quisque dui metus, eleifend at enim ac, imperdiet sagittis dolor. Vestibulum ipsum quam, feugiat non velit sit amet, pulvinar varius nisl. Mauris tristique, ipsum sit amet lacinia congue, mauris magna tempus nibh, in mollis eros enim a tortor. Morbi enim arcu, tristique vitae mi nec, hendrerit pharetra metus. Phasellus id feugiat purus. In vel elit eu lacus ultrices feugiat. Etiam at aliquet mi. Nunc sit amet libero sit amet lectus pellentesque sagittis. Curabitur blandit ante quis erat dapibus viverra.</p>
                                <p class="fn__desc">Sed porttitor augue erat, vitae convallis odio viverra id. In nec finibus elit. Nullam ac sodales nunc, vel sagittis elit. Ut condimentum ex ipsum, eu ornare odio aliquam eu. Ut iaculis eros quam, eu bibendum tellus convallis quis. Donec sapien risus, consequat ut magna nec, interdum porta nisl. Vivamus pulvinar hendrerit finibus.</p>
                            </div>
                        </div>
                        <div class="item_right">
                            <div class="abs_img" data-bg-img="<?=Url::to('@web/templates/nuiip/img/blog/3.jpg');?>"></div>
                        </div>
                    </div>
                </li>
                <li class="be_animated">
                    <div class="item modal_item" data-index="4">
                        <div class="item_left">
                            <p>August 20, 2021</p>
                            <h5><a href="#">How to Prepare Your Design Portfolio</a></h5>
                            <a href="#" class="read_more">Read More</a>
                            <div class="fn__hidden">
                                <p class="fn__cat">August 20, 2021</p>
                                <h3 class="fn__title">How to Prepare Your Design Portfolio</h3>
                                <div class="img_holder">
                                    <?= Html::img('@web/templates/nuiip/img/thumb/square.jpg') ?>
                                    <div class="abs_img" data-bg-img="<?=Url::to('@web/templates/nuiip/img/blog/4.jpg');?>"></div>
                                </div>
                                <p class="fn__desc">Sed ornare tellus a odio bibendum, at tristique sapien malesuada. Proin sagittis maximus accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque gravida quam sit amet elit varius tempor. Pellentesque purus eros, blandit eu mollis vel, commodo eget orci.</p>
                                <p class="fn__desc">Quisque dui metus, eleifend at enim ac, imperdiet sagittis dolor. Vestibulum ipsum quam, feugiat non velit sit amet, pulvinar varius nisl. Mauris tristique, ipsum sit amet lacinia congue, mauris magna tempus nibh, in mollis eros enim a tortor. Morbi enim arcu, tristique vitae mi nec, hendrerit pharetra metus. Phasellus id feugiat purus. In vel elit eu lacus ultrices feugiat. Etiam at aliquet mi. Nunc sit amet libero sit amet lectus pellentesque sagittis. Curabitur blandit ante quis erat dapibus viverra.</p>
                                <p class="fn__desc">Sed porttitor augue erat, vitae convallis odio viverra id. In nec finibus elit. Nullam ac sodales nunc, vel sagittis elit. Ut condimentum ex ipsum, eu ornare odio aliquam eu. Ut iaculis eros quam, eu bibendum tellus convallis quis. Donec sapien risus, consequat ut magna nec, interdum porta nisl. Vivamus pulvinar hendrerit finibus.</p>
                            </div>
                        </div>
                        <div class="item_right">
                            <div class="abs_img" data-bg-img="<?=Url::to('@web/templates/nuiip/img/blog/4.jpg');?>"></div>
                        </div>
                    </div>
                </li>
                <li class="be_animated">
                    <div class="item modal_item" data-index="5">
                        <div class="item_left">
                            <p>July 11, 2021</p>
                            <h5><a href="#">Lottie Animation &amp; After Effects Tutorial</a></h5>
                            <a href="#" class="read_more">Read More</a>
                            <div class="fn__hidden">
                                <p class="fn__cat">July 11, 2021</p>
                                <h3 class="fn__title">Lottie Animation &amp; After Effects Tutorial</h3>
                                <div class="img_holder">
                                    <?= Html::img('@web/templates/nuiip/img/thumb/square.jpg') ?>
                                    <div class="abs_img" data-bg-img="<?=Url::to('@web/templates/nuiip/img/blog/5.jpg');?>"></div>
                                </div>
                                <p class="fn__desc">Sed ornare tellus a odio bibendum, at tristique sapien malesuada. Proin sagittis maximus accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque gravida quam sit amet elit varius tempor. Pellentesque purus eros, blandit eu mollis vel, commodo eget orci.</p>
                                <p class="fn__desc">Quisque dui metus, eleifend at enim ac, imperdiet sagittis dolor. Vestibulum ipsum quam, feugiat non velit sit amet, pulvinar varius nisl. Mauris tristique, ipsum sit amet lacinia congue, mauris magna tempus nibh, in mollis eros enim a tortor. Morbi enim arcu, tristique vitae mi nec, hendrerit pharetra metus. Phasellus id feugiat purus. In vel elit eu lacus ultrices feugiat. Etiam at aliquet mi. Nunc sit amet libero sit amet lectus pellentesque sagittis. Curabitur blandit ante quis erat dapibus viverra.</p>
                                <p class="fn__desc">Sed porttitor augue erat, vitae convallis odio viverra id. In nec finibus elit. Nullam ac sodales nunc, vel sagittis elit. Ut condimentum ex ipsum, eu ornare odio aliquam eu. Ut iaculis eros quam, eu bibendum tellus convallis quis. Donec sapien risus, consequat ut magna nec, interdum porta nisl. Vivamus pulvinar hendrerit finibus.</p>
                            </div>
                        </div>
                        <div class="item_right">
                            <div class="abs_img" data-bg-img="<?=Url::to('@web/templates/nuiip/img/blog/5.jpg');?>"></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="load_more">
            <a href="#" data-done="Done" data-no="No more articles found">
                <span class="text">Load More Articles</span>
                <span class="fn__pulse">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
        </div>
    </section>
    <!-- CV: News Section -->
    
    
    <section id="contact" class="section_contact">
        <div class="section_title">
            <h3>Contact Me</h3>
        </div>
        <form class="contact_form" action="/" method="post" autocomplete="off" data-email="frenifyteam@gmail.com">

            <!--
                Don't remove below code in avoid to work contact form properly.
                You can chance dat-success value with your one. It will be used when user will try to contact via contact form and will get success message.
            -->
            <div class="success" data-success="Your message has been received, we will contact you soon."></div>
            <div class="empty_notice"><span>Please Fill Required Fields!</span></div>
            <!-- -->

            <div class="items_wrap">
                <div class="items">
                    <div class="item half">
                        <div class="input_wrapper">
                            <input id="name" type="text" placeholder="Name *" />
                        </div>
                    </div>
                    <div class="item half">
                        <div class="input_wrapper">
                            <input id="email" type="email" placeholder="Email *" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="input_wrapper">
                            <input id="phone" type="text" placeholder="Phone" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="input_wrapper">
                            <textarea id="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="item">
                        <a id="send_message" href="#">Send Message</a>
                    </div>
                </div>
            </div>
        </form>
    </section>


</div>
<!-- /CV Content Side -->
