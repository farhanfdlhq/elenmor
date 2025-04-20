@props(['cta'])

{{-- Template asli punya blok .col-half untuk CTA --}}
<div class="element clearfix rectangle col-half home">
    <div class="padding-wrapper">
        <div class="grey-bg full-height">
            <div class="box-parent">
                <div class="child">
                    {{-- Menggunakan fa-2x dan kelas .icon-block --}}
                    @php
                        $ctaIconClass = $cta->icon ?? 'fa-question-circle'; // Default icon
                        // Coba fa-2x, Anda bisa ganti ke fa-lg jika terlalu besar
                        $ctaIconSizeClass = 'fa-2x';
                    @endphp
                    @if ($cta->icon)
                        <i class="fa {{ $ctaIconClass }} {{ $ctaIconSizeClass }} icon-block" aria-hidden="true"></i>
                    @endif

                    <h5 class="header">{{ $cta->title }}</h5>
                    @if ($cta->description)
                        <p>{!! $cta->description !!}</p>
                    @endif
                    @if ($cta->link_url && $cta->link_text)
                        @if (Str::startsWith($cta->link_url, '#'))
                            <p><a href="{{ $cta->link_url }}" title="{{ $cta->link_text }}"
                                    class="splink">{{ $cta->link_text }}</a></p>
                        @else
                            <p><a href="{{ $cta->link_url }}" title="{{ $cta->link_text }}" target="_blank"
                                    rel="noopener noreferrer">{{ $cta->link_text }}</a></p>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
