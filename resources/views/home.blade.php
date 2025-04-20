@extends('layouts.app')

@section('title', $about->seo_title ?? 'Elenmorcreative - Your Creative Partner')

@section('content')
    <div id="content">
        <div class="container clearfix">
            <h1 id="logo"><a href="{{ route('home') }}">Elenmorcreative.com</a></h1>
            <div class="tagline">
                <p class="small"><span>{{ $about->tagline ?? 'Because every story is unique' }}</span></p>
            </div>

            {{-- Container untuk Isotope Grid --}}
            <div id="container" class="clearfix">

                {{-- Services Section using Component --}}
                @isset($services)
                    @foreach ($services as $service)
                        <x-service-block :service="$service" />
                    @endforeach
                @endisset

                {{-- About Section (Tetap seperti sebelumnya, belum dibuat komponen) --}}
                @isset($about)
                    <div class="element clearfix rectangle col1-1 home about auto-mobile">
                        <div class="padding-wrapper">
                            <div class="grey-bg full-height">
                                <div class="box-parent">
                                    <div class="child">
                                        <h3 class="header">{{ $about->title ?? 'About Us' }}</h3>
                                        <div class="break"></div>
                                        {!! $about->description ?? '<p>Default description about the company.</p>' !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element clearfix rectangle col2-2 about">
                        <div class="padding-wrapper">
                            @if ($about->image)
                                <figure class="images"
                                    style="background-image: url('{{ asset('storage/' . $about->image) }}');"></figure>
                            @else
                                <figure class="images"
                                    style="background-image: url('{{ asset('images/default-about.jpg') }}');"></figure>
                            @endif
                        </div>
                    </div>
                    <div class="element clearfix rectangle col1-1 about teaser">
                        <div class="padding-wrapper">
                            <div class="grey-bg full-height">
                                <div class="box-parent">
                                    <div class="child">
                                        {!! $about->bio ?? '<p>Default bio text here.</p>' !!}
                                        @if ($about->email)
                                            <p><a href="mailto:{{ $about->email }}" title="Email Us">{{ $about->email }}</a></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="stats">
                                <p class="alignleft"><i>Let's be Social</i></p>
                                <ul class="social-list clearfix alignright">
                                    @if (is_array($about->social_media) && count($about->social_media) > 0)
                                        @foreach ($about->social_media as $platform => $url)
                                            @if (!empty($url) && !empty($platform))
                                                <li>
                                                    <a href="{{ $url }}" target="_blank"
                                                        title="{{ ucfirst($platform) }}" rel="noopener noreferrer">
                                                        <i class="fa fa-{{ strtolower($platform) }}"></i>
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    @else
                                        <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                @endisset

                {{-- Dynamic Locations Section using Component --}}
                @isset($locations)
                    @foreach ($locations as $location)
                        <x-location-block :location="$location" />
                    @endforeach
                @endisset

                {{-- Portfolio Section using Component --}}
                @isset($portfolios)
                    @foreach ($portfolios as $portfolio)
                        <x-portfolio-block :portfolio="$portfolio" />
                    @endforeach
                @endisset

                {{-- Contact Form Section (Belum dibuat komponen) --}}
                <div class="element clearfix rectangle col1-1 contact">
                    <div class="padding-wrapper">
                        <div class="grey-bg full-height">
                            <div class="box-parent">
                                <div class="child">
                                    @if (session('success'))
                                        <div class="alert-success"
                                            style="padding: 10px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; margin-bottom: 15px; border-radius: 4px;">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <form class="form-part" method="post" action="{{ route('contact.submit') }}"
                                        name="contactform" autocomplete="off">
                                        @csrf
                                        <input name="name" type="text" id="name" size="30" title="Name"
                                            placeholder="Your Name" value="{{ old('name') }}" required />
                                        @error('name')
                                            <span class="text-danger"
                                                style="color: red; font-size: 0.9em; display: block; margin-top: -10px; margin-bottom: 10px;">{{ $message }}</span>
                                        @enderror
                                        <input name="email" type="email" id="email" size="30" title="Email"
                                            placeholder="Your Email" value="{{ old('email') }}" required />
                                        @error('email')
                                            <span class="text-danger"
                                                style="color: red; font-size: 0.9em; display: block; margin-top: -10px; margin-bottom: 10px;">{{ $message }}</span>
                                        @enderror
                                        <textarea name="message" cols="40" rows="3" id="message" title="Your Message" placeholder="Your Message"
                                            required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="text-danger"
                                                style="color: red; font-size: 0.9em; display: block; margin-top: -10px; margin-bottom: 10px;">{{ $message }}</span>
                                        @enderror
                                        <div class="input-wrapper clearfix">
                                            <input type="submit" class="send-btn" value="Send" id="submit"
                                                name="Submit" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Dynamic Call-to-Actions (CTAs) Section using Component --}}
                @isset($ctas)
                    @foreach ($ctas as $cta)
                        <x-cta-block :cta="$cta" />
                    @endforeach
                @endisset

                {{-- Catatan: Blok statis lain dari index.html belum ditambahkan --}}

            </div> {{-- end #container --}}
        </div> {{-- end .container --}}
    </div> {{-- end #content --}}
@endsection
