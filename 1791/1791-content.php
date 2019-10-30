<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1791">
    <div class="container">
        <div class="check">
        </div>
        <div class="tab-content">
            <ul class="nav nav-tabs">
                <li class="nut"><a data-toggle="tab" href="#home">Month</a></li>
                <li class="nut"><a data-toggle="tab" href="#menu1">Yearly</a></li>
            </ul>
            <div id="home" class="tab-pane fade in active">
                <div class="row">
                    <div class="col-md-3">

                        <ul class="rene">
                            <li class="box moto">Renewal Fee</li>
                            <li class="box">Active Listing Quota</li>
                            <li class="box">Listing Period</li>
                            <li class="box">Premium Listing Credit</li>
                            <li class="box">Free Classified Credit</li>
                            <li class="box">Premium Classified Credit</li>
                            <li class="box">Article Quota</li>
                            <li class="box">Premium Article Credit</li>
                            <li class="box">Multiple Selection</li>
                            <li class="box">Live Updates</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <span class="person">Personal</span>
                        <div class="columns">
                            <ul class="price">
                                <li class="cls">FREE</li>
                                <li class="header"><i class="fa fa-minus"></i></li>
                                <li>2</li>
                                <li class="grey">7 days</li>
                                <li><i class="fa fa-minus"></i></li>
                                <li class="grey"><i class="fa fa-check"></i></li>
                                <li>0</li>
                                <li class="grey"><i class="fa fa-minus"></i></li>
                                <li><i class="fa fa-check"></i></li>
                                <li class="grey">3</li>
                                <li>NO</li>
                                <li class="sign"><a href="#" class="button">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <span class="person">Leader</span>
                        <div class="columns">
                            <ul class="price">
                                <li class="cls">BUSINESS</li>
                                <li class="header">$9/month</li>
                                <li>2</li>
                                <li class="grey">Unlimited</li>
                                <li><i class="fa fa-minus"></i></li>
                                <li class="grey"><i class="fa fa-check"></i></li>
                                <li>100</li>
                                <li class="grey"><i class="fa fa-check"></i></li>
                                <li><i class="fa fa-check"></i></li>
                                <li class="grey">10</li>
                                <li>NO</li>
                                <li class="sign"><a href="#" class="button">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <span class="person">Personal</span>
                        <span class="leader">Leader</span>
                        <div class="columns">
                            <ul class="price">
                                <li class="cls">ENTERPRISE</li>
                                <li class="header">$15/month</li>
                                <li>2</li>
                                <li class="grey">7 days</li>
                                <li><i class="fa fa-minus"></i></li>
                                <li class="grey"><i class="fa fa-check"></i></li>
                                <li>0</li>
                                <li class="grey"><i class="fa fa-check"></i></li>
                                <li><i class="fa fa-check"></i></li>
                                <li class="grey">3</li>
                                <li>NO</li>
                                <li class="sign"><a href="#" class="button">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu1" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="rene">
                            <li class="box moto">Active Listing Quota</li>
                            <li class="box">Renewal Fee</li>
                            <li class="box">Listing Period</li>
                            <li class="box">Premium Listing Credit</li>
                            <li class="box">Free Classified Credit</li>
                            <li class="box">Premium Classified Credit</li>
                            <li class="box">Article Quota</li>
                            <li class="box">Premium Article Credit</li>
                            <li class="box">Multiple Selection</li>
                            <li class="box">Live Updates</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <span class="person">Leader</span>
                        <div class="columns">
                            <ul class="price">
                                <li class="cls">BUSINESS</li>
                                <li class="header">$9/month</li>
                                <li>2</li>
                                <li class="grey">7 days</li>
                                <li><i class="fa fa-minus"></i></li>
                                <li class="grey"><i class="fa fa-check"></i></li>
                                <li>0</li>
                                <li class="grey"><i class="fa fa-check"></i></li>
                                <li><i class="fa fa-check"></i></li>
                                <li class="grey">3</li>
                                <li>NO</li>
                                <li class="sign"><a href="#" class="button">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <span class="person">Personal</span>
                        <span class="leader">Leader</span>
                        <div class="columns">
                            <ul class="price">
                                <li class="cls">ENTERPRISE</li>
                                <li class="header">$15/month</li>
                                <li>2</li>
                                <li class="grey">7 days</li>
                                <li><i class="fa fa-minus"></i></li>
                                <li class="grey"><i class="fa fa-check"></i></li>
                                <li>0</li>
                                <li class="grey"><i class="fa fa-check"></i></li>
                                <li><i class="fa fa-check"></i></li>
                                <li class="grey">3</li>
                                <li>NO</li>
                                <li class="sign"><a href="#" class="button">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <span class="person">Personal</span>
                        <div class="columns">
                            <ul class="price">
                                <li class="cls">FREE</li>
                                <li class="header"><i class="fa fa-minus"></i></li>
                                <li>2</li>
                                <li class="grey">7 days</li>
                                <li><i class="fa fa-minus"></i></li>
                                <li class="grey"><i class="fa fa-check"></i></li>
                                <li>0</li>
                                <li class="grey"><i class="fa fa-minus"></i></li>
                                <li><i class="fa fa-check"></i></li>
                                <li class="grey">3</li>
                                <li>NO</li>
                                <li class="sign"><a href="#" class="button">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>