@extends('layouts.app')

@section('title', 'Killeen – A Contemporary Portfolio for Photographers')

@section('content')
    <div id="content">
        <div class="container clearfix">
            <h1 id="logo"><a href="{{ route('home') }}">Elenmorcreative.com</a></h1>
            <div class="tagline">
                <p class="small"><span>Because every story is unique</span></p>
            </div>
            <div id="container" class="clearfix">
                <!-- Services Section -->
                <div class="element clearfix rectangle col1-1 services">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    <div class="icons big movie"></div>
                                    <h3 class="header">Commercials</h3>
                                    <div class="break"></div>
                                    <p class="small">Includes</p>
                                    <ul class="unordered-list">
                                        <li><i>Digital Content</i></li>
                                        <li><i>In-store Digitial Experience</i></li>
                                        <li><i>Marketing Analysis</i></li>
                                    </ul>
                                    <p class="price"><span>$</span>450<span class="recurrance">/day</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Section - London Studio -->
                <div class="element clearfix rectangle col1-1 contact">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    <h3 class="header">London Studio</h3>
                                    <div class="break"></div>
                                    <p class="small">Address</p>
                                    <p> 40 Compton Street<br />London ED1V 0BC </p>
                                    <p class="small">Phone</p>
                                    <p>+44 (845) 1235 800</p>
                                    <div class="break"></div>
                                    <div class="icons home"></div>
                                    <p><a href="http://maps.google.com" data-title="" target="_blank">Get Directions</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Section - New York Studio -->
                <div class="element clearfix rectangle col1-1 contact">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    <h3 class="header">New York Studio</h3>
                                    <div class="break"></div>
                                    <p class="small">Address</p>
                                    <p> 285 Lexington Ave <br />New York, 12603 NY </p>
                                    <p class="small">Phone</p>
                                    <p>+001 (845) 123 456</p>
                                    <div class="break"></div>
                                    <div class="icons building"></div>
                                    <p><a href="http://maps.google.com" data-title="" target="_blank">Get Directions</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Section - Fresh Salmon -->
                <div class="element clearfix rectangle col2-2 home portfolio commercial">
                    <div class="padding-wrapper">
                        <a href="images/photo03b.jpg" data-title="Fresh Salmon" class="popup" data-fancybox-group="group1">
                            <figure class="images background-image1"></figure>
                            <div class="left-corner"></div>
                            <div class="right-corner"></div>
                            <div class="left-corner bottom"></div>
                            <div class="right-corner bottom"></div>
                            <div class="covering-image">
                                <div class="info-box-content">
                                    <div class="parent">
                                        <div class="child">
                                            <p class="small">Commercial</p>
                                            <div class="clear"></div>
                                            <h4><span class="underline">Fresh Salmon</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Award Section -->
                <div class="element clearfix rectangle col-half home">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    <div class="icons winner"></div>
                                    <h5 class="header">14th Annual Lucie Award</h5>
                                    <p>Winner in <i>Moving Image</i><br />2015</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Section - It's Autumn -->
                <div class="element clearfix rectangle col1-1 home portfolio travel services">
                    <div class="padding-wrapper">
                        <a href="images/photo01b.jpg" data-title="It's Autumn" class="popup" data-fancybox-group="group1">
                            <figure class="images background-image3"></figure>
                            <div class="left-corner"></div>
                            <div class="right-corner"></div>
                            <div class="left-corner bottom"></div>
                            <div class="right-corner bottom"></div>
                            <div class="covering-image">
                                <div class="info-box-content">
                                    <div class="parent">
                                        <div class="child">
                                            <p class="small">Travel</p>
                                            <h4><span class="underline">It's Autumn</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Portfolio Section - Treeline -->
                <div class="element clearfix rectangle col1-1 home contact portfolio travel">
                    <div class="padding-wrapper">
                        <a href="images/fullscreen14.jpg" data-title="Treeline" class="popup" data-fancybox-group="group1">
                            <figure class="images background-image2"></figure>
                            <div class="left-corner"></div>
                            <div class="right-corner"></div>
                            <div class="left-corner bottom"></div>
                            <div class="right-corner bottom"></div>
                            <div class="covering-image">
                                <div class="info-box-content">
                                    <div class="parent">
                                        <div class="child">
                                            <p class="small">Travel</p>
                                            <div class="clear"></div>
                                            <h4><span class="underline">Treeline</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Portfolio Section - Fishing Nets -->
                <div class="element clearfix rectangle col1-1 home travel">
                    <div class="padding-wrapper">
                        <a href="gallery.html" title="">
                            <figure class="images background-image5"></figure>
                            <div class="image-caption"><i class="fa fa-folder-open"></i> 29 Images</div>
                            <div class="left-corner"></div>
                            <div class="right-corner"></div>
                            <div class="left-corner bottom"></div>
                            <div class="right-corner bottom"></div>
                            <div class="covering-image">
                                <div class="info-box-content">
                                    <div class="parent">
                                        <div class="child">
                                            <p class="small">Travel</p>
                                            <div class="clear"></div>
                                            <h4><span class="underline">Fishing Nets</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Social Media Section -->
                <div class="element clearfix rectangle col-half home">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    <div class="icons like"></div>
                                    <h5 class="header">7,000+ Followers on Facebook</h5>
                                    <p>Like me too?<br /><a href="#" title="">facebook.com/killeen</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About Section -->
                <div class="element clearfix rectangle col1-1 home about auto-mobile">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    <div class="tweet-icon"><i class="fa fa-twitter"></i></div>
                                    <div class="tweets-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Section - Spotted! -->
                <div class="element clearfix rectangle col2-2 home portfolio travel">
                    <div class="padding-wrapper">
                        <a href="images/photo08b.jpg" data-title="Spotted!" class="popup" data-fancybox-group="group1">
                            <figure class="images background-image4"></figure>
                            <div class="left-corner"></div>
                            <div class="right-corner"></div>
                            <div class="left-corner bottom"></div>
                            <div class="right-corner bottom"></div>
                            <div class="covering-image">
                                <div class="info-box-content">
                                    <div class="parent">
                                        <div class="child">
                                            <p class="small">Travel</p>
                                            <div class="clear"></div>
                                            <h4><span class="underline">Spotted!</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Portfolio Section - Giant Bear -->
                <div class="element clearfix rectangle col1-1 home portfolio retouched">
                    <div class="padding-wrapper">
                        <a href="images/photo05.jpg" data-title="Giant Bear" class="popup"
                            data-fancybox-group="group1">
                            <figure class="images background-image7"></figure>
                            <div class="left-corner"></div>
                            <div class="right-corner"></div>
                            <div class="left-corner bottom"></div>
                            <div class="right-corner bottom"></div>
                            <div class="covering-image">
                                <div class="info-box-content">
                                    <div class="parent">
                                        <div class="child">
                                            <p class="small">Retouched</p>
                                            <div class="clear"></div>
                                            <h4><span class="underline">Giant Bear Assuming Position</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Portfolio Section - Esparagus -->
                <div class="element clearfix rectangle col1-1 home portfolio commercial">
                    <div class="padding-wrapper">
                        <a href="images/photo10b.jpg" data-title="Esparagus" class="popup"
                            data-fancybox-group="group1">
                            <figure class="images background-image10"></figure>
                            <div class="left-corner"></div>
                            <div class="right-corner"></div>
                            <div class="left-corner bottom"></div>
                            <div class="right-corner bottom"></div>
                            <div class="covering-image">
                                <div class="info-box-content">
                                    <div class="parent">
                                        <div class="child">
                                            <p class="small">Commercial</p>
                                            <div class="clear"></div>
                                            <h4><span class="underline">Esparagus</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Portfolio Section - Small Family -->
                <div class="element clearfix rectangle col1-1 home portfolio travel">
                    <div class="padding-wrapper">
                        <a href="images/photo07b.jpg" data-title="Small Family" class="popup"
                            data-fancybox-group="group1">
                            <figure class="images background-image9"></figure>
                            <div class="left-corner"></div>
                            <div class="right-corner"></div>
                            <div class="left-corner bottom"></div>
                            <div class="right-corner bottom"></div>
                            <div class="covering-image">
                                <div class="info-box-content">
                                    <div class="parent">
                                        <div class="child">
                                            <p class="small">Travel</p>
                                            <div class="clear"></div>
                                            <h4><span class="underline">Small Family</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Request a Quote Section -->
                <div class="element clearfix rectangle col-half home">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    <div class="icons camera"></div>
                                    <h5 class="header">Request a Quote</h5>
                                    <p>Interested in my services?<br /><a href="#contact" title=""
                                            class="splink">Contact me!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shop Section - It's Autumn -->
                <div class="element clearfix rectangle col1-1 shop">
                    <div class="padding-wrapper">
                        <a href="shop-item.html" data-title="">
                            <figure class="images background-image3"></figure>
                            <div class="left-corner"></div>
                            <div class="right-corner"></div>
                            <div class="left-corner bottom"></div>
                            <div class="right-corner bottom"></div>
                            <div class="covering-image">
                                <div class="info-box-content">
                                    <div class="parent">
                                        <div class="child">
                                            <h4><span class="underline">It's Autumn</span></h4>
                                            <p>$120 - $190</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- About Section - Signature -->
                <div class="element clearfix rectangle col2-2 about">
                    <div class="padding-wrapper">
                        <figure class="images background-image13"></figure>
                    </div>
                </div>

                <!-- About Section - Social Media -->
                <div class="element clearfix rectangle col1-1 about teaser">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    <div class="signature"></div>
                                    <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache
                                        fanny pack nostrud.</p>
                                    <p>This is dummy copy. It is not meant to be read.</p>
                                    <p><a href="mailto:sayhello@killeen.com" title="">sayhello@killeen.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="stats">
                            <p class="alignleft"><i>Let's be Social</i></p>
                            <ul class="social-list clearfix alignright">
                                <li> <a href="#"><i class="fa fa-skype"></i></a> </li>
                                <li> <a href="#"><i class="fa fa-500px"></i></a> </li>
                                <li> <a href="#"><i class="fa fa-snapchat-ghost"></i></a> </li>
                                <li> <a href="#"><i class="fa fa-whatsapp"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Services Section - Photo Retouching -->
                <div class="element clearfix rectangle col1-1 services">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    <div class="icons big design"></div>
                                    <h3 class="header">Photo Retouching</h3>
                                    <div class="break"></div>
                                    <p class="small">Includes</p>
                                    <ul class="unordered-list">
                                        <li><i>Digital Content</i></li>
                                        <li><i>In-store Digitial Experience</i></li>
                                        <li><i>Marketing Analysis</i></li>
                                    </ul>
                                    <p class="price"><span>$</span>2.29<span class="recurrance">/image</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Section - Plenty of Fish -->
                <div class="element clearfix rectangle col2-2 home portfolio commercial">
                    <div class="padding-wrapper">
                        <a href="http://player.vimeo.com/video/108018156?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff"
                            data-title="Our Reel" class="video-popup">
                            <figure class="images background-image8"></figure>
                            <div class="image-caption"><i class="fa fa-video-camera"></i> Video</div>
                            <div class="left-corner"></div>
                            <div class="right-corner"></div>
                            <div class="left-corner bottom"></div>
                            <div class="right-corner bottom"></div>
                            <div class="covering-image">
                                <div class="info-box-content">
                                    <div class="parent">
                                        <div class="child">
                                            <p class="small">Commercial</p>
                                            <div class="clear"></div>
                                            <h4><span class="underline">Plenty of Fish</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Portfolio Section - Fisher Town -->
                <div class="element clearfix rectangle col1-1 home portfolio retouched">
                    <div class="padding-wrapper">
                        <a href="images/photo14b.jpg" data-title="What a View" class="popup"
                            data-fancybox-group="group1">
                            <figure class="images background-image14"></figure>
                            <div class="left-corner"></div>
                            <div class="right-corner"></div>
                            <div class="left-corner bottom"></div>
                            <div class="right-corner bottom"></div>
                            <div class="covering-image">
                                <div class="info-box-content">
                                    <div class="parent">
                                        <div class="child">
                                            <p class="small">Retouched</p>
                                            <div class="clear"></div>
                                            <h4><span class="underline">Fisher Town</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Services Section - Weddings -->
                <div class="element clearfix rectangle col1-1 services">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    <div class="icons big diamond"></div>
                                    <h3 class="header">Weddings</h3>
                                    <div class="break"></div>
                                    <p class="small">Includes</p>
                                    <ul class="unordered-list">
                                        <li><i>Digital Content</i></li>
                                        <li><i>In-store Digitial Experience</i></li>
                                        <li><i>Marketing Analysis</i></li>
                                    </ul>
                                    <p class="price"><span>$</span>600<span class="recurrance">/event</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Discount Section -->
                <div class="element clearfix rectangle col-half home">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    <div class="icons register"></div>
                                    <h5 class="header">30% Off on Travel Photos</h5>
                                    <p>For a limited time only, you can get up to <a href="#shop" class="splink"
                                            title="">30% off</a>!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Section - Best Food in Greenwich Village -->
                <div class="element clearfix rectangle col1-1 teaser blog">
                    <div class="padding-wrapper">
                        <a href="post.html" title="" target="_blank">
                            <img src="images/nature10.jpg" alt="" />
                            <div class="grey-bg">
                                <p class="small">March 8, 2016</p>
                                <h4 class="header">Best Food in Greenwich Village</h4>
                                <p>Read Post</p>
                                <div class="stats">
                                    <p class="lefted">20 minute read<span class="alignright"> <i
                                                class="fa fa-comments"></i>3</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Blog Section - Just One Piece of the Wrecked Ship -->
                <div class="element clearfix rectangle col1-1 teaser blog">
                    <div class="padding-wrapper">
                        <a href="post.html" title="" target="_blank">
                            <img src="images/nature09.jpg" alt="" />
                            <div class="grey-bg">
                                <p class="small">March 8, 2016</p>
                                <h4 class="header">Just One Piece of the Wrecked Ship</h4>
                                <p>Read Post</p>
                                <div class="stats">
                                    <p class="lefted">20 minute read<span class="alignright"> <i
                                                class="fa fa-comments"></i>3</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Blog Section - Tasty Apples -->
                <div class="element clearfix rectangle col1-1 teaser blog">
                    <div class="padding-wrapper">
                        <a href="post.html" title="" target="_blank">
                            <img src="images/nature07.jpg" alt="" />
                            <div class="grey-bg">
                                <p class="small">March 8, 2016</p>
                                <h4 class="header">Tasty Apples</h4>
                                <p>Read Post</p>
                                <div class="stats">
                                    <p class="lefted">20 minute read<span class="alignright"> <i
                                                class="fa fa-comments"></i>3</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Blog Section - Beautiful, Red & Somewhat Scary -->
                <div class="element clearfix rectangle col1-1 teaser blog">
                    <div class="padding-wrapper">
                        <a href="post.html" title="" target="_blank">
                            <img src="images/blog01.jpg" alt="" />
                            <div class="grey-bg">
                                <p class="small">March 8, 2016</p>
                                <h4 class="header">Beautiful, Red &amp; Somewhat Scary</h4>
                                <p>Read Post</p>
                                <div class="stats">
                                    <p class="lefted">20 minute read<span class="alignright"> <i
                                                class="fa fa-comments"></i>3</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Contact Form Section -->
                <div class="element clearfix rectangle col1-1 contact">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    <form class="form-part" method="post" action="contact.php" name="contactform"
                                        id="contactform" autocomplete="off">
                                        <input name="name" type="text" id="name" size="30"
                                            title="Name" />
                                        <input name="email" type="text" id="email" size="30"
                                            title="Email" />
                                        <textarea name="comments" cols="40" rows="3" id="comments" title="Your Message"></textarea>
                                        <div class="input-wrapper clearfix">
                                            <input type="submit" class="send-btn" value="Send" id="submit"
                                                name="Submit" />
                                            <span id="message"></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shop Section - Fresh Salmon -->
                <div class="element clearfix rectangle col2-2 shop">
                    <div class="padding-wrapper">
                        <a href="shop-item.html" data-title="">
                            <figure class="images background-image1"></figure>
                            <div class="image-caption">Sale!</div>
                            <div class="left-corner"></div>
                            <div class="right-corner"></div>
                            <div class="left-corner bottom"></div>
                            <div class="right-corner bottom"></div>
                            <div class="covering-image">
                                <div class="info-box-content">
                                    <div class="parent">
                                        <div class="child">
                                            <h4><span class="underline">Fresh Salmon</span></h4>
                                            <p><span class="line-through small">$100</span> $89.50</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Shop Section - Esparagus -->
                <div class="element clearfix rectangle col1-1 shop">
                    <div class="padding-wrapper">
                        <a href="shop-item.html" data-title="">
                            <figure class="images background-image10"></figure>
                            <div class="left-corner"></div>
                            <div class="right-corner"></div>
                            <div class="left-corner bottom"></div>
                            <div class="right-corner bottom"></div>
                            <div class="covering-image">
                                <div class="info-box-content">
                                    <div class="parent">
                                        <div class="child">
                                            <h4><span class="underline">Esparagus</span></h4>
                                            <p>$65 - $90</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end #container -->
        </div>
        <!-- end .container -->
    </div>
    <!-- end content -->
@endsection
