<?php
/* @var $this \yii\web\View */
$pathTheme = $this->assetManager->getBundle(\backend\themes\basis\assets\BasisAsset::className())->baseUrl;
$this->registerJsFile($pathTheme.'/js/pages/index.js',['depends' => '\backend\themes\basis\assets\BasisAsset']);

?>

<?= $this->render('/base/nav-bar-container'); ?>

<div class="content">
    <div class="page-header full-content">
        <div class="row">
            <div class="col-sm-6">
                <h1>Dashboard <small>Activity Summary</small></h1>
            </div><!--.col-->
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li><a href="#" class="active"><i class="ion-home"></i> Homepage</a></li>
                </ol>
            </div><!--.col-->
        </div><!--.row-->
    </div><!--.page-header-->

    <div class="display-animation">
        <div class="row image-row">
            <div class="col-md-8">
                <div class="row image-row">
                    <div class="col-sm-8">
                        <div class="card tile card-green card-weather bg-image sample-bg-image15 material-animate">
                            <div class="card-heading">
                                <div class="card-action">
                                    <a href="javascript:;" data-toggle="fake-reload"></a>
                                </div><!--.card-action-->
                            </div><!--.card-heading-->
                            <div class="card-body">
                                <div class="forecast-container">
                                    <span class="temparature">19 <i class="wi wi-celsius"></i></span>
                                    <span class="place">Barcelona, Spain</span>
                                    <span class="forecast">Clear until tomorrow morning.</span>
                                </div>
                            </div><!--.card-body-->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-xs-3 col-sm-2 animate-item">
                                        <ul>
                                            <li>MON</li>
                                            <li><i class="wi wi-day-sleet-storm"></i></li>
                                            <li>18 <i class="wi wi-celsius"></i></li>
                                        </ul>
                                    </div><!--.col-->
                                    <div class="col-xs-3 col-sm-2 animate-item">
                                        <ul>
                                            <li>TUE</li>
                                            <li><i class="wi wi-day-sunny-overcast"></i></li>
                                            <li>22 <i class="wi wi-celsius"></i></li>
                                        </ul>
                                    </div><!--.col-->
                                    <div class="col-xs-3 col-sm-2 animate-item">
                                        <ul>
                                            <li>WED</li>
                                            <li><i class="wi wi-rain"></i></li>
                                            <li>14 <i class="wi wi-celsius"></i></li>
                                        </ul>
                                    </div><!--.col-->
                                    <div class="col-xs-3 col-sm-2 animate-item">
                                        <ul>
                                            <li>THU</li>
                                            <li><i class="wi wi-day-rain"></i></li>
                                            <li>15 <i class="wi wi-celsius"></i></li>
                                        </ul>
                                    </div><!--.col-->
                                    <div class="col-sm-2 hidden-xs animate-item">
                                        <ul>
                                            <li>FRI</li>
                                            <li><i class="wi wi-showers"></i></li>
                                            <li>10 <i class="wi wi-celsius"></i></li>
                                        </ul>
                                    </div><!--.col-->
                                    <div class="col-sm-2 hidden-xs animate-item">
                                        <ul>
                                            <li>SAT</li>
                                            <li><i class="wi wi-storm-showers"></i></li>
                                            <li>5 <i class="wi wi-celsius"></i></li>
                                        </ul>
                                    </div><!--.col-->
                                </div><!--.row-->
                            </div><!--.card-footer-->
                        </div><!--.card-->

                    </div><!--.col-->
                    <div class="col-sm-4">

                        <div class="card tile card-dashboard-graph material-animate">
                            <div class="contextual">
                                <h5>Daily Sales</h5>
                                <p>Collaboratively administrate empowered markets</p>
                            </div><!--.contextual-->
                            <div class="chart without-time chart-sales"></div>
                            <div class="chart-legend chart-sales-legend"></div>
                        </div><!--.card-->

                        <div class="card tile card-dashboard-graph material-animate margin-top-4">
                            <div class="contextual">
                                <h5>Balance Statement</h5>
                                <p>Dynamically procrastinate B2C user markets</p>
                            </div><!--.contextual-->
                            <div class="chart without-time chart-balance"></div>
                        </div><!--.card-->

                    </div><!--.col-->
                </div><!--.row-->

                <div class="row image-row">

                    <div class="col-sm-4">
                        <ul class="bxslider width-percent-100" data-bx-slider-pager="false" data-bx-slider-controls="false" data-bx-slider-auto="true" data-bx-slider-mode="vertical">
                            <li>
                                <div class="card tile card-indigo card-social material-animate">
                                    <div class="card-body">
                                        <p>Collaboratively administrate empowered markets via networks.</p>
                                    </div><!--.card-body-->
                                    <div class="card-footer">
                                        <ul class="inline-list">
                                            <li><i class="fa fa-thumbs-o-up"></i> 393</li>
                                            <li><i class="fa fa-share"></i> 105</li>
                                        </ul>
                                    </div><!--.card-footer-->
                                    <div class="card-icon"><i class="fa fa-facebook"></i></div>
                                </div><!--.card-->
                            </li>

                            <li>
                                <div class="card tile card-light-blue card-social material-animate">
                                    <div class="card-body">
                                        <p>Dynamically procrastinate B2C users after installed base benefits.</p>
                                    </div><!--.card-body-->
                                    <div class="card-footer">
                                        <ul class="inline-list">
                                            <li><i class="fa fa-star-o"></i> 594</li>
                                            <li><i class="fa fa-retweet"></i> 256</li>
                                        </ul>
                                    </div><!--.card-footer-->
                                    <div class="card-icon"><i class="fa fa-twitter"></i></div>
                                </div><!--.card-->
                            </li>
                        </ul>
                    </div><!--.col-->

                    <div class="col-sm-4">
                        <div class="card card-music card-music-single card-music-centered tile card-black card-player-indigo bg-image bg-opaque8 sample-bg-image14 material-animate">
                            <audio src="http://teamfox.co/audionautix/5CentsBack.mp3" preload="none" class="audiojs-single"></audio>
                            <div class="card-heading">
                                <div class="song-container">
                                    <p class="artist">Jason Shaw</p>
                                    <p class="song">Audio Cards</p>
                                </div><!--.song-container-->
                            </div><!--.card-heading-->
                        </div><!--.card-->
                    </div><!--.col-->

                    <div class="col-sm-4">
                        <div class="card tile card-dashboard-graph material-animate">
                            <div class="contextual">
                                <h5>Social Followers</h5>
                                <p>Dramatically maintain clicks-and-mortar</p>
                            </div><!--.contextual-->
                            <div class="chart without-time chart-followers"></div>
                            <div class="chart-legend chart-followers-legend"></div>
                        </div><!--.card-->
                    </div><!--.col-->

                </div><!--.row-->

            </div><!--.col-->

            <div class="col-md-4">

                <div class="row image-row">
                    <div class="col-md-12">
                        <div class="card tile card-lime card-image material-animate">
                            <input id="pac-input" type="text" placeholder="Search Place">
                            <div id="gmaps-dashboard" class="example-map"></div>
                        </div><!--.card-->
                    </div><!--.col-->
                </div><!--.row-->

                <div class="row image-row">
                    <div class="col-md-12">
                        <div class="card tile card-white card-stocks material-animate">
                            <div class="card-heading">
                                <div class="card-action">
                                    <a href="javascript:;" data-toggle="fake-reload"></a>
                                </div><!--.card-action-->
                                <span class="name">Apple Inc</span>
                                <span class="price"><i class="ion-arrow-up-b"></i> 0.30%</span>
                                <div class="chart chart-stocks"></div>
                            </div><!--.card-heading-->
                            <div class="card-body">
                                <ul>
                                    <li class="animate-item btn-ripple">
                                        <span class="name">Apple Inc</span>
                                        <span class="price text-green"><i class="ion-arrow-up-b"></i> $119.56</span>
                                    </li>
                                    <li class="animate-item btn-ripple">
                                        <span class="name">Nokia Corporation</span>
                                        <span class="price text-red"><i class="ion-arrow-down-b"></i> $10.69</span>
                                    </li>
                                    <li class="animate-item btn-ripple">
                                        <span class="name">Canon Inc</span>
                                        <span class="price text-green"><i class="ion-arrow-up-b"></i> $31.48</span>
                                    </li>
                                    <li class="animate-item btn-ripple">
                                        <span class="name">Motorola Solutions</span>
                                        <span class="price text-red"><i class="ion-arrow-down-b"></i> $63.94</span>
                                    </li>
                                    <li class="animate-item btn-ripple">
                                        <span class="name">Sony Corp</span>
                                        <span class="price text-green"><i class="ion-arrow-up-b"></i> $25.94</span>
                                    </li>
                                </ul>
                            </div><!--.card-body-->
                        </div><!--.card-->
                    </div><!--.col-->
                </div><!--.row-->

            </div><!--.col-->

        </div><!--.row-->

    </div><!--.display-animation-->

    <div class="display-animation">
        <div class="full-content margin-top-40 margin-bottom-40 bg-white">
            <div class="row">

                <div class="col-md-4 material-animate padding-right-40">
                    <h4>Sales in 2014</h4>
                    <p class="text-grey">Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                </div><!--.col-->

                <div class="col-md-8 material-animate">
                    <div class="chart chart-sales-by-year without-time"></div>
                </div><!--.col-->


            </div><!--.row-->
        </div><!--.full-content-->
    </div><!--.display-animation-->

    <div class="display-animation">
        <div class="row image-row margin-bottom-40">
            <div class="col-md-4">
                <div class="card tile card-dashboard-info card-teal material-animate">
                    <div class="card-body">
                        <div class="card-icon"><i class="fa fa-usd"></i></div><!--.card-icon-->
                        <h4>Revenue</h4>
                        <p class="result">$10,786</p>
                        <small><i class="fa fa-caret-up"></i> Total balance is $23,591</small>
                    </div>
                </div><!--.card-->

                <div class="card tile card-dashboard-info card-light-blue material-animate">
                    <div class="card-body">
                        <div class="card-icon"><i class="fa fa-calculator"></i></div><!--.card-icon-->
                        <h4>Open Invoices</h4>
                        <p class="result">26</p>
                        <small>Waiting to send</small>
                    </div>
                </div><!--.card-->

                <div class="card tile card-dashboard-info card-blue-grey material-animate">
                    <div class="card-body">
                        <div class="card-icon"><i class="fa fa-thumbs-o-up"></i></div><!--.card-icon-->
                        <h4>New Subscribers</h4>
                        <p class="result">183</p>
                        <small><i class="fa fa-caret-up"></i> 9814 subscribers totally</small>
                    </div>
                </div><!--.card-->

            </div><!--.col-->

            <div class="col-md-4">
                <div class="card tile card-news-more material-animate">
                    <div class="card-heading bg-image bg-opaque5 sample-bg-image29">
                        <div class="heading-content">
                            <span class="badge">NEWS</span>
                            <span class="headline">Quickly maximize timely deliverables</span>
                            <button class="btn btn-floating btn-pink toggle-card-news-more"><i class="ion-android-create"></i></button>
                        </div>
                    </div><!--.card-heading-->
                    <div class="card-body">
                        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                        <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
                        <p>Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
                    </div><!--.card-body-->
                </div><!--.card-->
            </div><!--.col-->

            <div class="col-md-4">
                <div class="card tile card-friend material-animate">
                    <a href="user-profile.html"><img src="../../assets/globals/img/faces/1.jpg" class="user-photo" alt=""></a>
                    <div class="friend-content">
                        <p class="title">Nicholas Murray</p>
                        <p><a href="user-profile.html">180 friends</a></p>
                        <a class="btn btn-flat btn-primary btn-xs">Add as a Friend</a>
                    </div><!--.friend-content-->
                </div><!--.card-->

                <div class="card tile card-friend material-animate">
                    <a href="user-profile.html"><img src="../../assets/globals/img/faces/2.jpg" class="user-photo" alt=""></a>
                    <div class="friend-content">
                        <p class="title">Jason Herrera</p>
                        <p><a href="user-profile.html">423 friends</a></p>
                        <a class="btn btn-flat btn-primary btn-xs">Add as a Friend</a>
                    </div><!--.friend-content-->
                </div><!--.card-->

                <div class="card tile card-friend material-animate">
                    <a href="user-profile.html"><img src="../../assets/globals/img/faces/3.jpg" class="user-photo" alt=""></a>
                    <div class="friend-content">
                        <p class="title">Michael Bell</p>
                        <p><a href="user-profile.html">490 friends</a></p>
                        <a class="btn btn-flat btn-primary btn-xs">Add as a Friend</a>
                    </div><!--.friend-content-->
                </div><!--.card-->

                <div class="card tile card-friend material-animate">
                    <a href="user-profile.html"><img src="../../assets/globals/img/faces/5.jpg" class="user-photo" alt=""></a>
                    <div class="friend-content">
                        <p class="title">Henry Allen</p>
                        <p><a href="user-profile.html">859 friends</a></p>
                        <a class="btn btn-flat btn-primary btn-xs">Add as a Friend</a>
                    </div><!--.friend-content-->
                </div><!--.card-->
            </div><!--.col-->

        </div><!--.row-->
    </div><!--.display-animation-->

    <div class="display-animation">
        <div class="row image-row">
            <div class="col-sm-6 col-md-3">

                <div class="panel helper-dashboard-height">
                    <div class="panel-heading">
                        <div class="panel-title"><h4>VISITORS</h4></div>
                    </div><!--.panel-heading-->
                    <div class="panel-body vertical-padding">
                        <div class="gauge-chart">
                            <canvas id="gauge" class="gauge-canvas"></canvas>
                            <div id="preview-textfield"></div>
                            <div class="chart-desc">
                                Collaboratively administrate.
                            </div>
                        </div>
                    </div><!--.panel-body-->
                </div><!--.panel-->

            </div><!--.col-->

            <div class="col-sm-6 col-md-3">

                <div class="panel helper-dashboard-height">
                    <div class="panel-heading">
                        <div class="panel-title"><h4>OPEN TICKETS</h4></div>
                    </div><!--.panel-heading-->
                    <div class="panel-body">
                        <div class="knob-container margin-top-10">
                            <input class="knob" data-angleOffset="-125" data-fgColor="deep_purple" data-angleArc="250" data-readOnly="true" value="35">
                        </div><!--.knob-container-->
                        <div class="chart-desc">
                            Collaboratively administrate empowered markets.
                        </div>
                    </div><!--.panel-body-->
                </div><!--.panel-->

            </div><!--.col-->

            <div class="col-sm-12 col-md-6">

                <div class="panel helper-dashboard-height">
                    <div class="panel-heading">
                        <div class="panel-title"><h4>TIMELINE</h4></div>
                    </div><!--.panel-heading-->
                    <div class="panel-body horizontal-padding">

                        <div class="timeline single helper-timeline">
                            <div class="frame">
                                <div class="timeline-badge">
                                    <i class="fa fa-headphones"></i>
                                </div><!--.timeline-badge-->
                                <span class="timeline-date">17 August 1999</span>
                                <div class="timeline-content">
                                    The 1999 Kocaeli earthquake occurred with a moment magnitude of 7.4 that struck northwestern Turkey struck northwestern Turkey
                                </div><!--.timeline-content-->
                            </div><!--.frame-->
                            <div class="frame">
                                <div class="timeline-badge">
                                    <i class="fa fa-tree"></i>
                                </div><!--.timeline-badge-->
                                <span class="timeline-date">18 April 1906</span>
                                <div class="timeline-content">
                                    The San Francisco earthquake of 1906 struck San Francisco on Wednesday, April 18, 1906.
                                </div><!--.timeline-content-->
                            </div><!--.frame-->
                        </div><!--.timeline-->

                    </div><!--.panel-body-->
                </div><!--.panel-->

            </div><!--.col-->

        </div><!--.row-->
    </div><!--.display-animation-->

    <div class="footer-links margin-top-40">
        <div class="row no-gutters bg-blue">
            <div class="col-xs-6"></div><!--.col-->
            <div class="col-xs-6">
                <a href="cards-image.html">
                    <span class="state">Cards</span>
                    <span>Image Cards</span>
                    <span class="icon"><i class="ion-android-arrow-forward"></i></span>
                </a>
            </div><!--.col-->
        </div><!--.row-->
    </div><!--.footer-links-->

</div><!--.content-->

<div class="layer-container">

    <?= $this->render('/base/menu-layer'); ?>

    <?= $this->render('/base/search-layer'); ?>

    <?= $this->render('/base/user-layer'); ?>

</div><!--.layer-container-->