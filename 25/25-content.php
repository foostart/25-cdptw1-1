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
        <h3 class="h3">shopping Demo-1 </h3>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#">
                            <img class="pic-1" alt="a1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-1.jpg">
                            <img class="pic-2" alt="a2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-2.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">Sale</span>
                        <span class="product-discount-label">20%</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star disable"></li>
                    </ul>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Blouse</a></h3>
                        <div class="price">$16.00
                            <span>$20.00</span>
                        </div>
                        <a class="add-to-cart" href="">+ Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#">
                            <img class="pic-1" alt="b1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-3.jpg">
                            <img class="pic-2" alt="b2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-4.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">Sale</span>
                        <span class="product-discount-label">50%</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
                        <div class="price">$5.00
                            <span>$10.00</span>
                        </div>
                        <a class="add-to-cart" href="">+ Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#">
                            <img class="pic-1" alt="c1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-5.jpg">
                            <img class="pic-2" alt="c2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-6.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">Sale</span>
                        <span class="product-discount-label">50%</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
                        <div class="price">$5.00
                            <span>$10.00</span>
                        </div>
                        <a class="add-to-cart" href="">+ Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#">
                            <img class="pic-1" alt="d1" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-7.jpg">
                            <img class="pic-2" alt="d2" src="http://bestjquery.com/tutorial/product-grid/demo9/images/img-8.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">Sale</span>
                        <span class="product-discount-label">50%</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Plain Tshirt</a></h3>
                        <div class="price">$5.00
                            <span>$10.00</span>
                        </div>
                        <a class="add-to-cart" href="">+ Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>


    <div class="container">
        <h3 class="h3">shopping Demo-2 </h3>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid2">
                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1" alt="e1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-1.jpeg">
                            <img class="pic-2" alt="e2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-2.jpeg">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <a class="add-to-cart" href="">Add to cart</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        <span class="price">$599.99</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid2">
                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1" alt="f1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-3.jpeg">
                            <img class="pic-2" alt="f2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-4.jpeg">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <a class="add-to-cart" href="">Add to cart</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Yellow Top</a></h3>
                        <span class="price">$699.99</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid2">
                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1" alt="g1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-5.jpeg">
                            <img class="pic-2" alt="g2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-6.jpeg">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <a class="add-to-cart" href="">Add to cart</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        <span class="price">$599.99</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid2">
                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1" alt="h1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-7.jpeg">
                            <img class="pic-2" alt="h2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-8.jpeg">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <a class="add-to-cart" href="">Add to cart</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        <span class="price">$599.99</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="container">
        <h3 class="h3">shopping Demo-3 </h3>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="i1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-1.jpg">
                            <img class="pic-2" alt="i2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-2.jpg">
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
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="j1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-3.jpg">
                            <img class="pic-2" alt="j2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-4.jpg">
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
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="k1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-5.jpg">
                            <img class="pic-2" alt="k2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-6.jpg">
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
                <div class="product-grid3">
                    <div class="product-image3">
                        <a href="#">
                            <img class="pic-1" alt="l1" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-7.jpg">
                            <img class="pic-2" alt="l2" src="http://bestjquery.com/tutorial/product-grid/demo4/images/img-8.jpg">
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
        </div>
    </div>
    <hr>

    <div class="container">
        <h3 class="h3">shopping Demo-4 </h3>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" alt="m1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-1.jpg">
                            <img class="pic-2" alt="m2" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-2.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                        <span class="product-discount-label">-10%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Black Top</a></h3>
                        <div class="price">
                            $14.40
                            <span>$16.00</span>
                        </div>
                        <a class="add-to-cart" href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" alt="n1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-3.jpg">
                            <img class="pic-2" alt="n2" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-4.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-discount-label">-12%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Blue Shirt</a></h3>
                        <div class="price">
                            $17.60
                            <span>$20.00</span>
                        </div>
                        <a class="add-to-cart" href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" alt="o1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-5.jpg">
                            <img class="pic-2" alt="o2" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-6.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                        <span class="product-discount-label">-10%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Black Top</a></h3>
                        <div class="price">
                            $14.40
                            <span>$16.00</span>
                        </div>
                        <a class="add-to-cart" href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid4">
                    <div class="product-image4">
                        <a href="#">
                            <img class="pic-1" alt="p1" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-7.jpg">
                            <img class="pic-2" alt="p2" src="http://bestjquery.com/tutorial/product-grid/demo5/images/img-8.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                        <span class="product-discount-label">-10%</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Black Top</a></h3>
                        <div class="price">
                            $14.40
                            <span>$16.00</span>
                        </div>
                        <a class="add-to-cart" href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="container">
        <h3 class="h3">shopping Demo-5 </h3>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid5">
                    <div class="product-image5">
                        <a href="#">
                            <img class="pic-1" alt="q1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-1.jpg">
                            <img class="pic-2" alt="q2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-2.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Sweat Shirt</a></h3>
                        <div class="price">$11.00 - $15.00</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid5">
                    <div class="product-image5">
                        <a href="#">
                            <img class="pic-1" alt="r1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-3.jpg">
                            <img class="pic-2" alt="r2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-4.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Shirt</a></h3>
                        <div class="price">$10.00 - $12.00</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid5">
                    <div class="product-image5">
                        <a href="#">
                            <img class="pic-1" alt="s1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-5.jpg">
                            <img class="pic-2" alt="s2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-6.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Sweat Shirt</a></h3>
                        <div class="price">$11.00 - $15.00</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid5">
                    <div class="product-image5">
                        <a href="#">
                            <img class="pic-1" alt="t1" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-7.jpg">
                            <img class="pic-2" alt="t2" src="http://bestjquery.com/tutorial/product-grid/demo11/images/img-8.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                            <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <a href="#" class="select-options"><i class="fa fa-arrow-right"></i> Select Options</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Sweat Shirt</a></h3>
                        <div class="price">$11.00 - $15.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="container">
        <h3 class="h3">shopping Demo-6 </h3>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" alt="aa" src="http://bestjquery.com/tutorial/product-grid/demo10/images/img-1.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Shirt</a></h3>
                        <div class="price">$11.00
                            <span>$14.00</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" alt="bb" src="http://bestjquery.com/tutorial/product-grid/demo10/images/img-2.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's Red Top</a></h3>
                        <div class="price">$8.00
                            <span>$12.00</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" alt="cc" src="http://bestjquery.com/tutorial/product-grid/demo10/images/img-3.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Shirt</a></h3>
                        <div class="price">$11.00
                            <span>$14.00</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid6">
                    <div class="product-image6">
                        <a href="#">
                            <img class="pic-1" alt="dd" src="http://bestjquery.com/tutorial/product-grid/demo10/images/img-4.jpg">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Shirt</a></h3>
                        <div class="price">$11.00
                            <span>$14.00</span>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="container">
        <h3 class="h3">shopping Demo-7 </h3>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid7">
                    <div class="product-image7">
                        <a href="#">
                            <img class="pic-1" alt="u1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-1.jpg">
                            <img class="pic-2" alt="u2" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-2.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" class="fa fa-search"></a></li>
                            <li><a href="" class="fa fa-shopping-bag"></a></li>
                            <li><a href="" class="fa fa-shopping-cart"></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Blazer</a></h3>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                        <div class="price">$15.00
                            <span>$20.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid7">
                    <div class="product-image7">
                        <a href="#">
                            <img class="pic-1" alt="v1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-3.jpg">
                            <img class="pic-2" alt="v2" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-4.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" class="fa fa-search"></a></li>
                            <li><a href="" class="fa fa-shopping-bag"></a></li>
                            <li><a href="" class="fa fa-shopping-cart"></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Women's White Shirt</a></h3>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                        <div class="price">$15.00</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid7">
                    <div class="product-image7">
                        <a href="#">
                            <img class="pic-1" alt="w1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-5.jpg">
                            <img class="pic-2" alt="w2" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-6.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" class="fa fa-search"></a></li>
                            <li><a href="" class="fa fa-shopping-bag"></a></li>
                            <li><a href="" class="fa fa-shopping-cart"></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Blazer</a></h3>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                        <div class="price">$15.00
                            <span>$20.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid7">
                    <div class="product-image7">
                        <a href="#">
                            <img class="pic-1" alt="x1" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-7.jpg">
                            <img class="pic-2" alt="x2" src="http://bestjquery.com/tutorial/product-grid/demo8/images/img-8.jpg">
                        </a>
                        <ul class="social">
                            <li><a href="" class="fa fa-search"></a></li>
                            <li><a href="" class="fa fa-shopping-bag"></a></li>
                            <li><a href="" class="fa fa-shopping-cart"></a></li>
                        </ul>
                        <span class="product-new-label">New</span>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">Men's Blazer</a></h3>
                        <ul class="rating">
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                        <div class="price">$15.00
                            <span>$20.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="container">
        <h3 class="h3">shopping Demo-8 </h3>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="product-grid8">
                    <div class="product-image8">
                        <a href="#">
                            <img class="pic-1" alt="y1" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-1.jpg">
                            <img class="pic-2" alt="y2" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-2.jpg">
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
                        <span class="product-shipping">Free Shipping</span>
                        <h3 class="title"><a href="#">Women's Plain Top</a></h3>
                        <a class="all-deals" href="">See all deals <i class="fa fa-angle-right icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product-grid8">
                    <div class="product-image8">
                        <a href="#">
                            <img class="pic-1" alt="z1" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-3.jpg">
                            <img class="pic-2" alt="z2" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-4.jpg">
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
                        <span class="product-shipping">Free Shipping</span>
                        <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        <a class="all-deals" href="">See all deals <i class="fa fa-angle-right icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="product-grid8">
                    <div class="product-image8">
                        <a href="#">
                            <img class="pic-1" alt="ff1" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-5.jpg">
                            <img class="pic-2" alt="ff2" src="http://bestjquery.com/tutorial/product-grid/demo7/images/img-6.jpg">
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
                        <span class="product-shipping">Free Shipping</span>
                        <h3 class="title"><a href="#">Women's Plain Top</a></h3>
                        <a class="all-deals" href="">See all deals <i class="fa fa-angle-right icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="container">
        <h3 class="h3">shopping Demo-9 </h3>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid9">
                    <div class="product-image9">
                        <a href="#">
                            <img class="pic-1" alt="gg1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-1.jpg">
                            <img class="pic-2" alt="gg2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-2.jpg">
                        </a>
                        <a href="#" class="fa fa-search product-full-view"></a>
                    </div>
                    <div class="product-content">
                    <div class="stars">
                        <form>
                        <input class="star star-21" id="star-21" type="radio" name="star"/>
                        <label class="star star-21" for="star-21"></label>
                        <input class="star star-22" id="star-22" type="radio" name="star"/>
                        <label class="star star-22" for="star-22"></label>
                        <input class="star star-23" id="star-23" type="radio" name="star"/>
                        <label class="star star-23" for="star-23"></label>
                        <input class="star star-24" id="star-24" type="radio" name="star"/>
                        <label class="star star-24" for="star-24"></label>
                        <input class="star star-25" id="star-25" type="radio" name="star"/>
                        <label class="star star-25" for="star-25"></label>
                        </form>
                        <br>
                    </div>
                        <h3 class="title"><a href="#">Women's Top</a></h3>
                        <div class="price"> $12.60 - $40.53</div>
                        <a class="add-to-cart" href="">VIEW PRODUCTS</a>
                    </div>
                </div>
            </div> 
            <div class="col-md-3 col-sm-6">
                <div class="product-grid9">
                    <div class="product-image9">
                        <a href="#">
                            <img class="pic-1" alt="hh1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-3.jpg">
                            <img class="pic-2" alt="hh2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-4.jpg">
                        </a>
                        <a href="#" class="fa fa-search product-full-view"></a>
                    </div>
                    <div class="product-content">
                    <div class="stars">
                        <form>
                        <input class="star star-26" id="star-26" type="radio" name="star"/>
                        <label class="star star-26" for="star-26"></label>
                        <input class="star star-27" id="star-27" type="radio" name="star"/>
                        <label class="star star-27" for="star-27"></label>
                        <input class="star star-28" id="star-28" type="radio" name="star"/>
                        <label class="star star-28" for="star-28"></label>
                        <input class="star star-29" id="star-29" type="radio" name="star"/>
                        <label class="star star-29" for="star-29"></label>
                        <input class="star star-30" id="star-30" type="radio" name="star"/>
                        <label class="star star-30" for="star-30"></label>
                        </form>
                        <br>
                    </div>
                        <h3 class="title"><a href="#">Men's Shirt</a></h3>
                        <div class="price"> $10.20 </div>
                        <a class="add-to-cart" href="">VIEW PRODUCTS</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid9">
                    <div class="product-image9">
                        <a href="#">
                            <img class="pic-1" alt="ii1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-5.jpg">
                            <img class="pic-2" alt="ii2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-6.jpg">
                        </a>
                        <a href="#" class="fa fa-search product-full-view"></a>
                    </div>
                    <div class="product-content">
                    <div class="stars">
                        <form>
                        <input class="star star-31" id="star-31" type="radio" name="star"/>
                        <label class="star star-31" for="star-31"></label>
                        <input class="star star-32" id="star-32" type="radio" name="star"/>
                        <label class="star star-32" for="star-32"></label>
                        <input class="star star-33" id="star-33" type="radio" name="star"/>
                        <label class="star star-33" for="star-33"></label>
                        <input class="star star-34" id="star-34" type="radio" name="star"/>
                        <label class="star star-34" for="star-34"></label>
                        <input class="star star-35" id="star-35" type="radio" name="star"/>
                        <label class="star star-35" for="star-35"></label>
                        </form>
                        <br>
                    </div>
                        <h3 class="title"><a href="#">Women's Top</a></h3>
                        <div class="price"> $12.60 - $40.53</div>
                        <a class="add-to-cart" href="">VIEW PRODUCTS</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid9">
                    <div class="product-image9">
                        <a href="#">
                            <img class="pic-1" alt="jj1" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-7.jpg">
                            <img class="pic-2" alt="jj2" src="http://bestjquery.com/tutorial/product-grid/demo6/images/img-8.jpg">
                        </a>
                        <a href="#" class="fa fa-search product-full-view"></a>
                    </div>
                    <div class="product-content">
                    <div class="stars">
                        <form>
                        <input class="star star-36" id="star-36" type="radio" name="star"/>
                        <label class="star star-36" for="star-36"></label>
                        <input class="star star-37" id="star-37" type="radio" name="star"/>
                        <label class="star star-37" for="star-37"></label>
                        <input class="star star-38" id="star-38" type="radio" name="star"/>
                        <label class="star star-38" for="star-38"></label>
                        <input class="star star-39" id="star-39" type="radio" name="star"/>
                        <label class="star star-39" for="star-39"></label>
                        <input class="star star-40" id="star-40" type="radio" name="star"/>
                        <label class="star star-40" for="star-40"></label>
                        </form>
                        <br>
                    </div>
                        <h3 class="title"><a href="#">Women's Top</a></h3>
                        <div class="price"> $12.60 - $40.53</div>
                        <a class="add-to-cart" href="">VIEW PRODUCTS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>