@extends('frontend.master.default')

@section('title','Home Page')

@section('content')


    <!--PRELOADER-->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!--*Header*-->
    @include('frontend.inc.front-menu')
    <!--* End Header*-->

    <!-- Slider -->
    @include('frontend.inc.front-slider')
    <!-- End Slider -->

    <!--* Blog*-->
    <section id="mt_blog" class="light-bg">
        <div class="container">

            <div class="blog_post_sec blog_post_inner">
                <div id="app" class="row">

                    <!-- start blog vue 1 -->

                        <blog></blog>

                    <!-- end blog vue 1 -->

                    <div class="col-xs-12 mar-bottom-30">
                        <!--* ads*-->
                        <div class="ads-banner-img text-center">
                            <img src="{{asset('frontend/file/images/ads.jpg')}}" alt="ads">
                        </div>
                        <!--* End ads*-->
                    </div>

                    <div class="col-md-8 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend/file/images/blog-listing/blog_13.jpg')}}" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-pink"><a href="#" class="white">Fashion</a></li>
                                        <li class="cat-green"><a href="#" class="white">Health</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">I Moved Across the Country and Never Looked Back</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper blog-wrapper-list">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend/file/images/blog-listing/blog_101.jpg')}}" alt="image" class="img-responsive center-block post_img" />
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-green mar-0"><a href="#" class="white">Health</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="post-content">
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="">I Thought My Glasses Made Me Unattractive</a>
                                </h2>

                                <div class="item-meta">
                                    <span>by</span>
                                    <a class="author-name" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper front-wrapper bg-orange">
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                                        <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">I Should Have Said to Your Weight Loss</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend/file/images/blog-listing/blog_18.jpg')}}" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                                        <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">Is the Natural Hair Movement Coming to an End? </a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend/file/images/blog-listing/blog_07.jpg')}}" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                                        <li class="cat-green"><a href="#" class="white">Health</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title white">
                                    <a href="blog-details.html" class="white">Look at life with the eyes of a child</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper blog-wrapper-list">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend/file/images/blog-listing/blog_103.jpg')}}" alt="image" class="img-responsive center-block post_img" />
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-blue mar-0"><a href="#" class="white">Technology</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="post-content">
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="">Slice of Tokyo: How Japan Became a Pizza Hotspot</a>
                                </h2>

                                <div class="item-meta">
                                    <span>by</span>
                                    <a class="author-name" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend/file/images/blog-listing/blog_08.jpg')}}" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-blue"><a href="#" class="white">Sports</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">How to Find Hidden Cameras in Your Airbnb, and Anywhere Else</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend/file/images/blog-listing/blog_13.jpg')}}" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-pink"><a href="#" class="white">Fashion</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title white">
                                    <a href="blog-details.html" class="white">Is the Natural Hair Movement Coming to an End?</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend/file/images/blog-listing/blog_15.jpg')}}" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">Beauty is Gene Deep but give me those little imperfections Going</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="blog-button text-center">
                            <button class="btn-blog">Load More <i class="fa fa-angle-double-right"></i></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--* End Blog*-->

    <div class="mt_instagram">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_01.jpg')}}" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_02.jpg')}}" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_03.jpg')}}" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_04.jpg')}}" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_05.jpg')}}" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_06.jpg')}}" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_07.jpg')}}" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_08.jpg')}}" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_09.jpg')}}" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_10.jpg')}}" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_11.jpg')}}" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_12.jpg')}}" alt="Image"></a></div>
            </div>
            <div class="sectio-title">
                <h3 class="mar-0"><a href="#">Follow @ Instagram</a></h3>
            </div>
        </div>
    </div>

    <!--*Footer*-->
    <footer id="mt_footer" class="mt_footer_style1">
        <div class="container">
            <div class="mt_footer_col">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="mt_footer_about">
                            <h2><a href="#">Suchana</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="mt_footer_list">
                            <h3>Quick Links</h3>
                            <ul class="footer-quick-links-4">
                                <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="mt_footer_newsletter">
                            <h3>Newsletter</h3>
                            <div class="mailpoet_form">
                                <form target="_self" method="post" action="" novalidate="">
                                    <label>Email Address:</label>
                                    <input type="email" class="mailpoet_text" name="mail" title="Email" placeholder="Please specify a valid email address.">

                                    <div class="blog-button">
                                        <button class="btn-blog">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="mt_footer_gallery">
                            <h3>Amazing Gallery</h3>
                            <div class="row">
                                <div class="col-sm-4 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_01.jpg')}}" alt="Image"></a></div>
                                <div class="col-sm-4 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_02.jpg')}}" alt="Image"></a></div>
                                <div class="col-sm-4 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_03.jpg')}}" alt="Image"></a></div>
                                <div class="col-sm-4 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_04.jpg')}}" alt="Image"></a></div>
                                <div class="col-sm-4 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_05.jpg')}}" alt="Image"></a></div>
                                <div class="col-sm-4 col-xs-6"><a href="#"><img src="{{asset('frontend/file/images/insta/insta_06.jpg')}}" alt="Image"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt_footer_copy">
                <div class="copy_txt pull-left">
                    <p class="mar-0"><a href="">Cherki Hamza</a></p>
                </div>
                <div class="follow_us pull-right">
                    <ul class="social_icons">
                        <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
    <!--* End Footer*-->

    <!-- back to top -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="" data-placement="left">
        <span class="fa fa-arrow-up"></span>
    </a>

    <!-- search popup -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

@endsection

