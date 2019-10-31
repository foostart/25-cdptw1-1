<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-25">
    <div class="container">
        <h3 class="h3">Shopping Demo-3 </h3>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="pdg">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="i1" src="./images/9a.jpg">
                            <img class="pic-2" alt="i2" src="./images/9b.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Blazer</a></h3>
                        <div class="stars">
                            <form>
                                <input class="star star-1" id="star-1" type="radio" name="star" />
                                <label class="star star-1" for="star-1"></label>
                                <input class="star star-2" id="star-2" type="radio" name="star" />
                                <label class="star star-2" for="star-2"></label>
                                <input class="star star-3" id="star-3" type="radio" name="star" />
                                <label class="star star-3" for="star-3"></label>
                                <input class="star star-4" id="star-4" type="radio" name="star" />
                                <label class="star star-4" for="star-4"></label>
                                <input class="star star-5" id="star-5" type="radio" name="star" />
                                <label class="star star-5" for="star-5"></label>
                            </form>
                        </div>
                        <br>
                        <div class="price">
                            $63.50
                            <span>$75.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pdg">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="j1" src="./images/10a.jpg">
                            <img class="pic-2" alt="j2" src="./images/10b.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        <div class="stars">
                            <form>
                                <input class="star star-6" id="star-6" type="radio" name="star" />
                                <label class="star star-6" for="star-6"></label>
                                <input class="star star-7" id="star-7" type="radio" name="star" />
                                <label class="star star-7" for="star-7"></label>
                                <input class="star star-8" id="star-8" type="radio" name="star" />
                                <label class="star star-8" for="star-8"></label>
                                <input class="star star-9" id="star-9" type="radio" name="star" />
                                <label class="star star-9" for="star-9"></label>
                                <input class="star star-10" id="star-10" type="radio" name="star" />
                                <label class="star star-10" for="star-10"></label>
                            </form>
                        </div>
                        <br>
                        <div class="price">
                            $43.50
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pdg">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="k1" src="./images/11a.jpg">
                            <img class="pic-2" alt="k2" src="./images/11b.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Blazer</a></h3>
                        <div class="stars">
                            <form>
                                <input class="star star-11" id="star-11" type="radio" name="star" />
                                <label class="star star-11" for="star-11"></label>
                                <input class="star star-12" id="star-12" type="radio" name="star" />
                                <label class="star star-12" for="star-12"></label>
                                <input class="star star-13" id="star-13" type="radio" name="star" />
                                <label class="star star-13" for="star-13"></label>
                                <input class="star star-14" id="star-14" type="radio" name="star" />
                                <label class="star star-14" for="star-14"></label>
                                <input class="star star-15" id="star-15" type="radio" name="star" />
                                <label class="star star-15" for="star-15"></label>
                            </form>
                        </div>
                        <br>
                        <div class="price">
                            $63.50
                            <span>$75.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pdg">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="l1" src="./images/12a.jpg">
                            <img class="pic-2" alt="l2" src="./images/12b.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Blazer</a></h3>
                        <div class="stars">
                            <form>
                                <input class="star star-16" id="star-16" type="radio" name="star" />
                                <label class="star star-16" for="star-16"></label>
                                <input class="star star-17" id="star-17" type="radio" name="star" />
                                <label class="star star-17" for="star-17"></label>
                                <input class="star star-18" id="star-18" type="radio" name="star" />
                                <label class="star star-18" for="star-18"></label>
                                <input class="star star-19" id="star-19" type="radio" name="star" />
                                <label class="star star-19" for="star-19"></label>
                                <input class="star star-20" id="star-20" type="radio" name="star" />
                                <label class="star star-20" for="star-20"></label>
                            </form>
                        </div>
                        <br>
                        <div class="price">
                            $63.50
                            <span>$75.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pdg">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="i1" src="./images/9a.jpg">
                            <img class="pic-2" alt="i2" src="./images/9b.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Blazer</a></h3>
                        <div class="stars">
                            <form>
                                <input class="star star-21" id="star-21" type="radio" name="star" />
                                <label class="star star-21" for="star-21"></label>
                                <input class="star star-22" id="star-22" type="radio" name="star" />
                                <label class="star star-22" for="star-22"></label>
                                <input class="star star-23" id="star-23" type="radio" name="star" />
                                <label class="star star-23" for="star-23"></label>
                                <input class="star star-24" id="star-24" type="radio" name="star" />
                                <label class="star star-24" for="star-24"></label>
                                <input class="star star-25" id="star-25" type="radio" name="star" />
                                <label class="star star-25" for="star-25"></label>
                            </form>
                        </div>
                        <br>
                        <div class="price">
                            $63.50
                            <span>$75.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h3 class="h3">Shopping Demo-8 </h3>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="product-grid8">
                    <div class="product-image8">
                        <a href="#">
                            <img class="pic-1" alt="y1" src="./images/29a.jpg">
                            <img class="pic-2" alt="y2" src="./images/29b.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" class="fa fa-search"></a></li>
                            <li><a href="" class="fa fa-shopping-bag"></a></li>
                            <li><a href="" class="fa fa-shopping-cart"></a></li>
                        </ul>
                        <span class="product-discount-label">-20%</span>
                    </div>
                    <div class="product-content">
                        <div class="price">£ 8.00
                            <span>£ 10.00</span>
                        </div>
                        <h3 class="title"><a href="#">Women's Plain Top</a></h3>
                        <a class="all-deals" href="">See all deals <i class="fa fa-angle-right icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product-grid8">
                    <div class="product-image8">
                        <a href="#">
                            <img class="pic-1" alt="z1" src="./images/30a.jpg">
                            <img class="pic-2" alt="z2" src="./images/30b.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" class="fa fa-search"></a></li>
                            <li><a href="" class="fa fa-shopping-bag"></a></li>
                            <li><a href="" class="fa fa-shopping-cart"></a></li>
                        </ul>
                        <span class="product-discount-label">-30%</span>
                    </div>
                    <div class="product-content">
                        <div class="price">£ 7.00
                            <span>£ 10.00</span>
                        </div>
                        <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        <a class="all-deals" href="">See all deals <i class="fa fa-angle-right icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product-grid8">
                    <div class="product-image8">
                        <a href="#">
                            <img class="pic-1" alt="ff1" src="./images/31a.jpg">
                            <img class="pic-2" alt="ff2" src="./images/31b.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" class="fa fa-search"></a></li>
                            <li><a href="" class="fa fa-shopping-bag"></a></li>
                            <li><a href="" class="fa fa-shopping-cart"></a></li>
                        </ul>
                        <span class="product-discount-label">-20%</span>
                    </div>
                    <div class="product-content">
                        <div class="price">£ 8.00
                            <span>£ 10.00</span>
                        </div>
                        <h3 class="title"><a href="#">Women's Plain Top</a></h3>
                        <a class="all-deals" href="">See all deals <i class="fa fa-angle-right icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product-grid8">
                    <div class="product-image8">
                        <a href="#">
                            <img class="pic-1" alt="y1" src="./images/29a.jpg">
                            <img class="pic-2" alt="y2" src="./images/29b.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" class="fa fa-search"></a></li>
                            <li><a href="" class="fa fa-shopping-bag"></a></li>
                            <li><a href="" class="fa fa-shopping-cart"></a></li>
                        </ul>
                        <span class="product-discount-label">-20%</span>
                    </div>
                    <div class="product-content">
                        <div class="price">£ 8.00
                            <span>£ 10.00</span>
                        </div>
                        <h3 class="title"><a href="#">Women's Plain Top</a></h3>
                        <a class="all-deals" href="">See all deals <i class="fa fa-angle-right icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>