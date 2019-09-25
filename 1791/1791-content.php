<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div id="main">
    <div class="title-box-disabled"></div>
    <!-- Breads -->
    <div class="stm_breadcrumbs_unit heading-font ">
        <div class="type-1791">
            <div class="container">
                <div class="row">
                    <div class="navxtBreads">
                        <!-- Breadcrumb NavXT 6.1.0 -->
                        <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Motors Classified." href="#" class="home"><span property="name">Motors Classified</span></a>
                            <meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name">Pricing</span>
                            <meta property="position" content="2"></span> </div>
                </div>
            </div>
            <div class="container">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="stm-pricing stm-pricing_3" id="stm-pricing-5ca812bd4a5c8">
                                    <div class="stm-pricing__content clearfix">
                                        <div class="stm-pricing__side-panel">

                                            <div class="stm-pricing__filters heading-font">
                                                <ul>
                                                    <li class="stm-pricing__filter stm-pricing__filter_active"><a data-period-filter="month" href="#">month</a></li>
                                                    <li class="stm-pricing__filter "><a data-period-filter="yearly" href="#">yearly</a></li>
                                                </ul>
                                            </div>
                                            <ul class="stm-pricing__features heading-font" style="word-wrap: break-word;">
                                                <li class="stm-pricing__feature motors-price-side">Renewal Fee</li>
                                                <li class="stm-pricing__feature">Active Listing Quota</li>
                                                <li class="stm-pricing__feature">Listing Period</li>
                                                <li class="stm-pricing__feature">Premium Listing Credit</li>
                                                <li class="stm-pricing__feature">Free Classified Credit</li>
                                                <li class="stm-pricing__feature">Premium Classified Credit</li>
                                                <li class="stm-pricing__feature">Article Quota</li>
                                                <li class="stm-pricing__feature">Premium Article Credit</li>
                                                <li class="stm-pricing__feature">Multiple Selection</li>
                                                <li class="stm-pricing__feature">Live Updates</li>
                                            </ul>
                                        </div>
                                        <div class="stm-pricing__tables">
                                            <div class="stm-pricing__tables-row clearfix">
                                                <div class="stm-pricing__tables-col">
                                                    <div class="stm-pricing__tables-col-inner">
                                                        <div class="stm_pricing_table_col_labels heading-font clearfix">
                                                            <div class="stm_pricing_table_single_label">Personal</div>
                                                        </div>

                                                        <div class="stm-pricing-table heading-font" style="word-wrap: break-word;">
                                                            <table class="table table-striped">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Otto</td>
                                                                        <td>@mdo</td>
                                                                    </tr>
                                                                    <div class="stm-pricing-table__title">Free</div>
                                                                    <ul class="stm-pricing-table__periods">
                                                                        <li class="stm-pricing-table__periods-item stm-pricing-table__periods-item_active" data-period="month">
                                                                            <div class="stm-pricing-table__price">
                                                                                <i class="fa fa-minus"></i>
                                                                            </div>
                                                                        </li>
                                                                        <li class="stm-pricing-table__periods-item" data-period="yearly">
                                                                            <div class="stm-pricing-table__price">
                                                                                <i class="fa fa-minus"></i>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="stm-pricing-table__features">
                                                                        <li class="stm-pricing-table__feature">
                                                                            <div class="stm-pricing-table__feature-label">Active Listing Quota</div>
                                                                            <div class="stm-pricing-table__feature-value">
                                                                                2 </div>
                                                                        </li>
                                                                        <li class="stm-pricing-table__feature">
                                                                            <div class="stm-pricing-table__feature-label">Listing Period</div>
                                                                            <div class="stm-pricing-table__feature-value">
                                                                                7 days </div>
                                                                        </li>
                                                                        <li class="stm-pricing-table__feature">
                                                                            <div class="stm-pricing-table__feature-label">Premium Listing Credit</div>
                                                                            <div class="stm-pricing-table__feature-value">
                                                                                <i class="fa fa-minus"></i>
                                                                            </div>
                                                                        </li>
                                                                        <li class="stm-pricing-table__feature">
                                                                            <div class="stm-pricing-table__feature-label">Free Classified Credit</div>
                                                                            <div class="stm-pricing-table__feature-value">
                                                                                <i class="fa fa-check"></i>
                                                                            </div>
                                                                        </li>
                                                                        <li class="stm-pricing-table__feature">
                                                                            <div class="stm-pricing-table__feature-label">Premium Classified Credit</div>
                                                                            <div class="stm-pricing-table__feature-value">
                                                                                0 </div>
                                                                        </li>
                                                                        <li class="stm-pricing-table__feature">
                                                                            <div class="stm-pricing-table__feature-label">Article Quota</div>
                                                                            <div class="stm-pricing-table__feature-value">
                                                                                <i class="fa fa-minus"></i>
                                                                            </div>
                                                                        </li>
                                                                        <li class="stm-pricing-table__feature">
                                                                            <div class="stm-pricing-table__feature-label">Premium Article Credit</div>
                                                                            <div class="stm-pricing-table__feature-value">
                                                                                <i class="fa fa-check"></i>
                                                                            </div>
                                                                        </li>
                                                                        <li class="stm-pricing-table__feature">
                                                                            <div class="stm-pricing-table__feature-label">Multiple Selection</div>
                                                                            <div class="stm-pricing-table__feature-value">
                                                                                3 </div>
                                                                        </li>
                                                                        <li class="stm-pricing-table__feature">
                                                                            <div class="stm-pricing-table__feature-label">Live Updates</div>
                                                                            <div class="stm-pricing-table__feature-value">
                                                                                No </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="stm-pricing-table__periods-link stm-pricing-table__periods-item_active" data-period="month">
                                                                        <div class="stm-pricing-table__action">
                                                                            <a href="#" class="button">Sign Up<i class="stm-icon stm-icon-arrow-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="stm-pricing-table__periods-link" data-period="yearly">
                                                                        <div class="stm-pricing-table__action">
                                                                            <a href="#" class="button">Sign Up<i class="stm-icon stm-icon-arrow-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stm-pricing__tables-col" style="word-wrap: break-word;">
                                                    <div class="stm-pricing__tables-col-inner">
                                                        <div class="stm_pricing_table_col_labels heading-font clearfix">
                                                            <div class="stm_pricing_table_single_label">Dealer</div>
                                                        </div>
                                                        <div class="stm-pricing-table heading-font">
                                                            <div class="stm-pricing-table__title">Business</div>
                                                            <ul class="stm-pricing-table__periods">
                                                                <li class="stm-pricing-table__periods-item stm-pricing-table__periods-item_active" data-period="month">
                                                                    <div class="stm-pricing-table__price">
                                                                        $9/month </div>
                                                                </li>
                                                                <li class="stm-pricing-table__periods-item" data-period="yearly">
                                                                    <div class="stm-pricing-table__price">
                                                                        $8/month </div>
                                                                </li>
                                                            </ul>
                                                            <ul class="stm-pricing-table__features">
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Active Listing Quota</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        60 </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Listing Period</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        Unlimited </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Premium Listing Credit</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        <i class="fa fa-check"></i>
                                                                    </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Free Classified Credit</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        <i class="fa fa-check"></i>
                                                                    </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Premium Classified Credit</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        100 </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Article Quota</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        <i class="fa fa-check"></i>
                                                                    </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Premium Article Credit</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        <i class="fa fa-check"></i>
                                                                    </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Multiple Selection</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        10 </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Live Updates</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        <i class="fa fa-check"></i>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="stm-pricing-table__periods-link stm-pricing-table__periods-item_active" data-period="month">
                                                                <div class="stm-pricing-table__action">
                                                                    <a href="#" class="button">Get Business<i class="stm-icon stm-icon-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="stm-pricing-table__periods-link" data-period="yearly">
                                                                <div class="stm-pricing-table__action">
                                                                    <a href="#" class="button">Get Business<i class="stm-icon stm-icon-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stm-pricing__tables-col" style="word-wrap: break-word;">
                                                    <div class="stm-pricing__tables-col-inner">
                                                        <div class="stm_pricing_table_col_labels heading-font clearfix">
                                                            <div class="stm_pricing_table_single_label">Popular</div>
                                                            <div class="stm_pricing_table_single_label">Dealer</div>
                                                        </div>
                                                        <div class="stm-pricing-table heading-font">
                                                            <div class="stm-pricing-table__title">Enterprise</div>
                                                            <ul class="stm-pricing-table__periods">
                                                                <li class="stm-pricing-table__periods-item stm-pricing-table__periods-item_active" data-period="month">
                                                                    <div class="stm-pricing-table__price">
                                                                        $15/month </div>
                                                                </li>
                                                                <li class="stm-pricing-table__periods-item" data-period="yearly">
                                                                    <div class="stm-pricing-table__price">
                                                                        $10/month </div>
                                                                </li>
                                                            </ul>
                                                            <ul class="stm-pricing-table__features">
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Active Listing Quota</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        300 </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Listing Period</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        Unlimited </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Premium Listing Credit</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        <i class="fa fa-check"></i>
                                                                    </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Free Classified Credit</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        <i class="fa fa-check"></i>
                                                                    </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Premium Classified Credit</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        400 </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Article Quota</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        <i class="fa fa-check"></i>
                                                                    </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Premium Article Credit</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        <i class="fa fa-check"></i>
                                                                    </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Multiple Selection</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        50 </div>
                                                                </li>
                                                                <li class="stm-pricing-table__feature">
                                                                    <div class="stm-pricing-table__feature-label">Live Updates</div>
                                                                    <div class="stm-pricing-table__feature-value">
                                                                        Yes </div>
                                                                </li>
                                                            </ul>
                                                            <div class="stm-pricing-table__periods-link stm-pricing-table__periods-item_active" data-period="month">
                                                                <div class="stm-pricing-table__action">
                                                                    <a href="#" class="button">Get Enterprise<i class="stm-icon stm-icon-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="stm-pricing-table__periods-link" data-period="yearly">
                                                                <div class="stm-pricing-table__action">
                                                                    <a href="#" class="button">Get Enterprise<i class="stm-icon stm-icon-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script></script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div>
    </div>
</div>






<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>s