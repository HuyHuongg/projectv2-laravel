@extends('layouts')
@section('content')
<div class="main">
    <div class="body-overlay"></div>
    <div class="product-section contact-body">
        @include('navbar')
        <div class="contact-us-content">
            <div class="slider-content">
                <div class="parallax-slide banner-slide" style='background:url("{{asset('images/img/shoes/s1.jpg') }}")'>
                </div>
                <div class="blog-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-8">
                                <article class="blog-minimal">
                                    <div class="post-details alt-font text-center text-lg-left">
                                        July 24, 2019<span class="post-date"></span> <span class="post-separator">|</span>
                                        <span class="post-author">
                                            By <a href="http://wexim.acrothemes.com/standard/author/admin/">Mark Anderson</a>
                                        </span>
                                        <span class="post-separator">|</span>
                                        <span class="post-categories single">
                                            <span class="cat-links"><a href="http://wexim.acrothemes.com/standard/category/fashion/" rel="category tag">Fashion</a>, <a href="http://wexim.acrothemes.com/standard/category/travel/" rel="category tag">Travel</a></span>
                                        </span>
                                        <span class="post-separator">|</span>
                                    </div>
                                    <div class="post-content text-center text-lg-left">
                                        <p>Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Integer eu ipsum sem. Ut bibendum lacus vestibulum maximus suscipit. Quisque vitae nibh iaculis.</p>
                                        <p>Maecenas sit amet purus eget ipsum elementum venenatis. Aenean maximus urna magna, quis rutrum mi semper non. Cras rhoncus elit non arcu hendrerit rhoncus. Pellentesque dignissim volutpat orci at interdum. In id ipsum volutpat.</p>
                                    </div>
                                    <h2 class="post-title-minimal text-center text-lg-left">
                                        <a href="#" rel="bookmark">Creative Design</a>
                                    </h2>
                                    <div class="post-content text-center text-lg-left">
                                        <p>Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Integer eu ipsum sem. Ut bibendum lacus vestibulum maximus suscipit. Quisque vitae nibh iaculis.</p>
                                        <p>Maecenas sit amet purus eget ipsum elementum venenatis. Aenean maximus urna magna, quis rutrum mi semper non. Cras rhoncus elit non arcu hendrerit rhoncus. Pellentesque dignissim volutpat orci at interdum. In id ipsum volutpat.</p>
                                    </div>
                                    <div class="points">
                                        <ul>
                                            <li>Nam ut rutrum ex venenatis sollicitudin.</li>
                                            <li>Aliquam erat volutpat nteger.</li>
                                            <li>Quisque vitae nibh iaculis neque.</li>
                                        </ul>
                                    </div>
                                    <video id="player2" class="player2" preload="none" controls="" style="max-width:100%;" poster="{{ asset('images/img\shoes\thumnail-video.jpg') }}" playsinline="">
                                        <source src="img\video\2.mp4" type="audio/mp3">
                                    </video>
                                    <div class="post-content text-center text-lg-left">
                                        <p class="mt-4">Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Integer eu ipsum sem. Ut bibendum lacus vestibulum maximus suscipit. Quisque vitae nibh iaculis.</p>
                                        <p>Maecenas sit amet purus eget ipsum elementum venenatis. Aenean maximus urna magna, quis rutrum mi semper non. Cras rhoncus elit non arcu hendrerit rhoncus. Pellentesque dignissim volutpat orci at interdum. In id ipsum volutpat.</p>
                                    </div>
                                    <div class="quotation">
                                        <p>You’ve gotta dance like there’s nobody watching, love like you’ll never be hurt, sing like there’s nobody listening, and live like it’s heaven on earth..</p>
                                        <span>William W. Purkey</span>
                                    </div>
                                    <div class="post-content text-center text-lg-left">
                                        <p class="mt-4 mb-4">Maecenas sit amet purus eget ipsum elementum venenatis. Aenean maximus urna magna, quis rutrum mi semper non. Cras rhoncus elit non arcu hendrerit rhoncus</p>
                                    </div>
                                    <div class="row cube-sec no-gutters">
                                        <div class="col-12 col-md-6 pr-2 pb-3">
                                            <img src="{{ asset('images/img\shoes\thumb3.jpg') }}" alt="thumb">
                                        </div>
                                        <div class="col-12 col-md-6 pl-2 pb-3">
                                            <img src="{{ asset('images/img\shoes\thumb2.jpg') }}" alt="thumb">
                                        </div>
                                        <div class="col-12">
                                            <img src="{{ asset('images/img\shoes\s2.jpg') }}" alt="thumb">
                                        </div>
                                    </div>
                                    <div class="post-content text-center text-lg-left">
                                        <p class="mt-4">Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Integer eu ipsum sem. Ut bibendum lacus vestibulum maximus suscipit. Quisque vitae nibh iaculis.</p>
                                        <p>Maecenas sit amet purus eget ipsum elementum venenatis. Aenean maximus urna magna, quis rutrum mi semper non. Cras rhoncus elit non arcu hendrerit rhoncus. Pellentesque dignissim volutpat orci at interdum. In id ipsum volutpat.</p>
                                    </div>
                                    <div class="footer-meta">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6">
                                                <div class="post-tags">
                                                    <span class="post_meta_item post_tags"><a href="http://wexim.acrothemes.com/standard/tag/image/" rel="tag">Image</a><a href="http://wexim.acrothemes.com/standard/tag/project/" rel="tag">Project</a><a href="http://wexim.acrothemes.com/standard/tag/studio/" rel="tag">Studio</a></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6 social-tags post-social">
                                                <span class="fb"><a href="javascript:void(0);"> <i class="fab fa-facebook-f"></i></a></span>
                                                <span class="twit"> <a href="javascript:void(0);"> <i class="fab fa-twitter"></i></a></span>
                                                <span class="in"><a href="javascript:void(0);"> <i class="fab fa-linkedin-in"></i></a></span>
                                                <span class="pin"><a href="javascript:void(0);"> <i class="fab fa-pinterest-p"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <div class="post-navigation">
                                    <div class="media">
                                        <a class="align-self-center">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <div class="media-body">
                                            <h6 class="mt-0 ">Pervious Post</h6>
                                            <p class="mb-0">Standard Post With A Self Hosted Audio</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-posted">
                                    <div class="media">
                                        <a href="javascript:void(0)"><img src="{{ asset('images/img\shoes\profile.png') }}" class="align-self-center mr-3" alt="..."></a>
                                        <div class="media-body">
                                            <h6>Written By </h6>
                                            <span>Mark Anderson</span>
                                            <p>Maecenas sit amet purus eget ipsum elementum venenatis. Aenean maximus urna magna, quis rutrum mi semper non.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-write pt-3">
                                    <h4 class="text-center">Write a Comment</h4>
                                    <span class="hr-line mt-4 mb-5 ml-0"></span>
                                    <form class="comment-form">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Email" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Website" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <textarea placeholder="Comment" class="form-control w-100" rows="8"></textarea>
                                                <button class="btn our-btn btn-gradient rounded-pill w-100">Post Your Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="blog-search">
                                    <div class="form-group has-search">
                                        <span class="fa fa-search form-control-feedback"></span>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                                <div class="blog-topic">
                                    <h5 class="mb-4 text-center text-lg-left">Category</h5>
                                    <ul>
                                        <li>
                                            <a href="">ART </a> <span class="dots"></span>
                                            <p>2</p>
                                        </li>
                                        <li>
                                            <a href="">FASHION </a> <span class="dots"></span>
                                            <p>5</p>
                                        </li>
                                        <li>
                                            <a href="">PHOTOGRAPHY </a> <span class="dots"></span>
                                            <p>12</p>
                                        </li>
                                        <li>
                                            <a href="">LIFESTYLE </a> <span class="dots"></span>
                                            <p>22</p>
                                        </li>
                                        <li>
                                            <a href="">MOTIVATION </a> <span class="dots"></span>
                                            <p>1</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-post">
                                    <h5 class="mb-4 text-center text-lg-left">Popular Post</h5>
                                    <div class="media">
                                        <a href="{{ asset('images/img\shoes\blog-thumb1.jpg') }}"> <img src="{{ asset('images/img\shoes\blog-thumb1.jpg') }}" class="mr-3" alt="..."></a>
                                        <div class="media-body">
                                            <h5 class="mt-1">Standard Post With A Image Galary</h5>
                                            <p><span class="date">July 24,2019</span> | <span class="author">By</span><a href="#"> Mark Anderson</a></p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a href="{{ asset('images/img\shoes\blog-thumb2.jpg') }}"><img src="{{ asset('images/img\shoes\blog-thumb2.jpg') }}" class="mr-3" alt="..."></a>
                                        <div class="media-body">
                                            <h5 class="mt-1">Standard Post With A Image Galary</h5>
                                            <p><span class="date">July 24,2019</span> | <span class="author">By</span><a href="#"> Mark Anderson</a></p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a href="{{ asset('images/img\shoes\blog-thumb3') }}.jpg"><img src="{{ asset('images/img\shoes\blog-thumb3.jpg') }}im" class="mr-3" alt="..."></a>
                                        <div class="media-body">
                                            <h5 class="mt-1">Standard Post With A Image Galary</h5>
                                            <p><span class="date">July 24,2019</span> | <span class="author">By</span><a href="#"> Mark Anderson</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-tags-sec">
                                    <h5 class="mb-4 text-center text-lg-left">Tags</h5>
                                    <ul class="list-unstyled blog-tags m-0">
                                        <li><a href="#.">Corporate</a></li>
                                        <li><a href="#.">Creative</a></li>
                                        <li><a href="#.">Finance</a></li>
                                        <li><a href="#.">Digital</a></li>
                                        <li><a href="#.">Single</a></li>
                                        <li><a href="#.">Designer</a></li>
                                        <li><a href="#.">Web Developer</a></li>
                                        <li><a href="#.">Developer</a></li>
                                        <li><a href="#.">Classic</a></li>
                                    </ul>
                                </div>
                                <div class="blog-archives">
                                    <h5 class="mb-4 text-center text-lg-left">Archives</h5>
                                    <ul>
                                        <li>
                                            <a href="">June </a> <span class="dots"></span>
                                            <p>2</p>
                                        </li>
                                        <li>
                                            <a href="">July </a> <span class="dots"></span>
                                            <p>4</p>
                                        </li>
                                        <li>
                                            <a href="">Augest </a> <span class="dots"></span>
                                            <p>2</p>
                                        </li>
                                        <li>
                                            <a href="">March </a> <span class="dots"></span>
                                            <p>7</p>
                                        </li>
                                        <li>
                                            <a href="">May </a> <span class="dots"></span>
                                            <p>9</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-section">
            <div class="side-nav-btn" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="social-icons">
                <li><a href="#." class="facebook_bg_hvr2"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li><a href="#." class="twitter_bg_hvr2"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                <li><a href="#." class="linkdin_bg_hvr2"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                <li><a href="#." class="instagram_bg_hvr2"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        @include('navsidebar')
    </div>
</div>
@endsection