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
                @php
                    $services = App\Models\Service::all();
                @endphp
                @foreach ($services as $service)
                    <div class="element clearfix rectangle col1-1 services">
                        <div class="padding-wrapper">
                            <div class="grey-bg full-height">
                                <div class="box-parent">
                                    <div class="child">
                                        <div class="icons big {{ $service->icon ?? 'default' }}"></div>
                                        <h3 class="header">{{ $service->title }}</h3>
                                        <div class="break"></div>
                                        <p class="small">Includes</p>
                                        <ul class="unordered-list">
                                            @if ($service->includes)
                                                @foreach ($service->includes as $feature)
                                                    <li><i>{{ $feature }}</i></li>
                                                @endforeach
                                            @else
                                                <li><i>Digital Content</i></li>
                                                <li><i>In-store Digital Experience</i></li>
                                                <li><i>Marketing Analysis</i></li>
                                            @endif
                                        </ul>
                                        <p class="price"><span>$</span>{{ $service->price }}<span
                                                class="recurrance">{{ $service->price_unit }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- About Section -->
                @php
                    $about = App\Models\About::first();
                @endphp
                <div class="element clearfix rectangle col1-1 home about auto-mobile">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    <h3 class="header">{{ $about->title ?? 'About Us' }}</h3>
                                    {!! $about->description ?? '<p>Default description about the company.</p>' !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About Section - Signature -->
                <div class="element clearfix rectangle col2-2 about">
                    <div class="padding-wrapper">
                        @if ($about && $about->image)
                            <figure class="images"
                                style="background-image: url('{{ asset('storage/' . $about->image) }}');"></figure>
                        @else
                            <figure class="images" style="background-image: url('{{ asset('images/signature.png') }}');">
                            </figure>
                        @endif
                    </div>
                </div>

                <!-- About Section - Social Media -->
                <div class="element clearfix rectangle col1-1 about teaser">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    <div class="icons big camera"></div>
                                    {!! $about->bio ??
                                        '<p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud.</p><p>This is dummy copy. It is not meant to be read.</p>' !!}
                                    <p><a href="mailto:{{ $about->email ?? 'sayhello@killeen.com' }}"
                                            title="">{{ $about->email ?? 'sayhello@killeen.com' }}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="stats">
                            <p class="alignleft"><i>Let's be Social</i></p>
                            <ul class="social-list clearfix alignright">
                                @if ($about && $about->social_media)
                                    @foreach ($about->social_media as $platform => $url)
                                        <li>
                                            <a href="{{ $url }}">
                                                <i class="fa fa-{{ strtolower($platform) }}"></i>
                                            </a>
                                        </li>
                                    @endforeach
                                @else
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                @endif
                            </ul>
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

                <!-- Portfolio Section -->
                @php
                    $portfolios = App\Models\Portfolio::with('category')->get();
                @endphp
                @foreach ($portfolios as $portfolio)
                    <div
                        class="element clearfix rectangle col2-2 home portfolio {{ str_replace(' ', '-', strtolower($portfolio->category->name)) }}">
                        <div class="padding-wrapper">
                            <a href="{{ $portfolio->popup_url }}" data-title="{{ $portfolio->title }}"
                                class="{{ $portfolio->is_video ? 'video-popup' : 'popup' }}" data-fancybox-group="group1">
                                <figure class="images" style="background-image: url('{{ $portfolio->thumbnail }}');">
                                </figure>
                                @if ($portfolio->is_video)
                                    <div class="image-caption"><i class="fa fa-video-camera"></i> Video</div>
                                @elseif ($portfolio->category->portfolio_count > 1)
                                    <div class="image-caption"><i class="fa fa-folder-open"></i>
                                        {{ $portfolio->category->portfolio_count }} Items</div>
                                @endif
                                <div class="left-corner"></div>
                                <div class="right-corner"></div>
                                <div class="left-corner bottom"></div>
                                <div class="right-corner bottom"></div>
                                <div class="covering-image">
                                    <div class="info-box-content">
                                        <div class="parent">
                                            <div class="child">
                                                <p class="small">{{ $portfolio->category->name }}</p>
                                                <div class="clear"></div>
                                                <h4><span class="underline">{{ $portfolio->title }}</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

                <!-- Contact Form Section -->
                <div class="element clearfix rectangle col1-1 contact">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    @if (session('success'))
                                        <div class="alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <form class="form-part" method="post" action="{{ route('contact.submit') }}"
                                        name="contactform" autocomplete="off">
                                        @csrf
                                        <input name="name" type="text" id="name" size="30"
                                            title="Name" placeholder="Your Name" value="{{ old('name') }}"
                                            required />
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input name="email" type="email" id="email" size="30"
                                            title="Email" placeholder="Your Email" value="{{ old('email') }}"
                                            required />
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <textarea name="message" cols="40" rows="3" id="message" title=" Your Message"
                                            placeholder="Your Message" required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                </div>
                <!-- end #container -->
            </div>
            <!-- end .container -->
        </div>
        <!-- end content -->
    @endsection

    @push('scripts')
        <script>
            jQuery(document).ready(function($) {
                $('#contactform').on('submit', function(e) {
                    e.preventDefault();
                    var form = $(this);
                    $.ajax({
                        url: form.attr('action'),
                        type: 'POST',
                        data: form.serialize(), // Mengirim semua data termasuk _token
                        success: function(response) {
                            $('#message').html('Message sent successfully!').fadeIn(200);
                        },
                        error: function(xhr) {
                            $('#message').html('Error: ' + xhr.responseText).fadeIn(200);
                        }
                    });
                });
            });
        </script>
    @endpush
