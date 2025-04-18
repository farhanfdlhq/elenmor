@props(['portfolio'])

@php
    $categorySlug = str_replace(' ', '-', strtolower($portfolio->category->name ?? 'uncategorized'));
    // Gunakan portfolios_count jika Anda load dengan withCount('portfolios') di controller
    // Jika tidak, gunakan accessor lama (getPortfolioCountAttribute)
    $portfolioCountInCategory = $portfolio->category->portfolios_count ?? ($portfolio->category->portfolio_count ?? 0);
@endphp

<div class="element clearfix rectangle col2-2 home portfolio {{ $categorySlug }}">
    <div class="padding-wrapper">
        <a href="{{ $portfolio->popup_url ?? '#' }}" data-title="{{ $portfolio->title }}"
            class="{{ $portfolio->is_video ? 'video-popup' : 'popup' }}" data-fancybox-group="group1">

            <figure class="images"
                style="background-image: url('{{ $portfolio->thumbnail ?? asset('images/default-portfolio.jpg') }}');">
            </figure>

            {{-- Portfolio Caption --}}
            @if ($portfolio->is_video)
                <div class="image-caption"><i class="fa fa-video-camera"></i> Video</div>
            @elseif (!$portfolio->is_video && $portfolioCountInCategory > 1 && $portfolio->category)
                <div class="image-caption"><i class="fa fa-folder-open"></i> {{ $portfolioCountInCategory }} Images
                </div>
            @endif

            <div class="left-corner"></div>
            <div class="right-corner"></div>
            <div class="left-corner bottom"></div>
            <div class="right-corner bottom"></div>

            <div class="covering-image">
                <div class="info-box-content">
                    <div class="parent">
                        <div class="child">
                            <p class="small">{{ $portfolio->category->name ?? 'Uncategorized' }}</p>
                            <div class="clear"></div>
                            <h4><span class="underline">{{ $portfolio->title }}</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
