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
        <div class="row">
            <div class="navxtBreads">
                <span class="zev" property="itemListElement" typeof="ListItem">Motors Classified</span>
                <meta property="position" content="1"><span class="zev">
                    < Pricing</span> <meta property="position" content="2">
                </span>
            </div>

            <div class="col-md-3">
                <div class="stm-pricing__side-panel">
                    <br>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Month</button>
                        <button type="button" class="btn btn-primarys">Yearly</button>
                    </div>
                    <br>
                    <br>
                    <ul class="stm-pricing__features heading-font">
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
            </div>

            <div class="col-md-3">
                <div class="stm-pricing__tables-col-inner">
                    <div class="stm_pricing_table_col_labels heading-font clearfix">
                        <button type="button" class="stm_pricing_table_single_label">Personal</button>
                    </div>

                    <div class="stm-pricing-table heading-font">
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
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stm-pricing__tables-col-inner">
                    <div class="stm_pricing_table_col_labels heading-font clearfix">
                        <button type="button" class="stm_pricing_table_single_label">Dealer</button>
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
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stm-pricing__tables-col-inner">
                    <div class="stm_pricing_table_col_labels heading-font clearfix">
                        <button type="button" class="stm_pricing_table_single_label">Popular</button>
                        <button type="button" class="stm_pricing_table_single_label">Dealer</button>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>